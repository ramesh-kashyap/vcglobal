public function processWithdrawals()
{
    date_default_timezone_set("Asia/Kolkata");

    $allUsers = User::where('active_status', 'Active')->orderBy('id', 'ASC')->get();
    $today = date("Y-m-d");
    $now = date("Y-m-d H:i:s");
    $previousDate = date('Y-m-d', strtotime($today . ' - 7 days'));

    if ($allUsers) {
        $counter = 1;

        foreach ($allUsers as $user) {
            $userID = $user->id;
            $username = $user->username;
            $activationDate = $user->adate;

            $existingPayoutToday = Payout::where('user_id', $userID)->where('ttime', $today)->count();
            $hasAnyPayout = Payout::where('user_id', $userID)->exists();

            $isEligible = (!$hasAnyPayout && $activationDate < $previousDate) || $hasAnyPayout;

            if ($isEligible && $existingPayoutToday == 0) {
                echo "count: $counter<br>";
                echo "$username<br>";

                // Step 1: Insert basic payout record
                $payout = Payout::create([
                    'user_id'     => $userID,
                    'user_id_fk'  => $username,
                    'ttime'       => $today,
                    'created_at'  => $now,
                    'updated_at'  => $now,
                    'payout_date' => $now,
                ]);

                $payoutId = $payout->id;

                // Define income types and column names
                $remarksList = ['Referral Income', 'Farming Income', 'Reccuring Income'];
                $columnNames = ['referral_income', 'farming_income', 'reccuring_income'];

                // Calculate total income and previous total payout
                $totalIncome = Income::where('user_id', $userID)->sum('comm');
                $totalPayout = Payout::where('user_id', $userID)->sum('total');

                $payableTotal = floatval($totalIncome) - floatval($totalPayout);
                $deduction = $payableTotal * 0.05; // 5% deduction
                $serviceCharge = $payableTotal * 0.05; // 5% service charge
                $withdrawAmount = $payableTotal - ($deduction + $serviceCharge);


                $updateData = [];

                for ($i = 0; $i < 3; $i++) {
                    $remark = $remarksList[$i];
                    $column = $columnNames[$i];

                    $incomeSum = Income::where('user_id', $userID)->where('remarks', $remark)->sum('comm');
                    $previousPayoutSum = Payout::where('user_id', $userID)->sum($column);
                    $amountToPay = floatval($incomeSum) - floatval($previousPayoutSum);

                    $updateData[$column] = $amountToPay;
                }

                // Only process if there's a minimum threshold
                if ($payableTotal >= 1000) {
                    $updateData += [
                        'deduction'     => $deduction,
                        'service_charge'=> $serviceCharge,
                        'withdraw_amt'  => $withdrawAmount,
                        'total'         => $payableTotal,
                    ];

                    // Update the inserted payout row
                    Payout::where('id', $payoutId)->update($updateData);

                    // Optionally reset user balance or trigger other logic
                    // User::where('id', $userID)->update(['balance' => 0]);

                } else {
                    // Delete empty payout record if nothing is payable
                    Payout::where('id', $payoutId)->delete();
                }

                $counter++;
            }
        }
    }
}

