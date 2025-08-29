  <!--**********************************
            Content body start
        ***********************************-->
  <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
          <div class="row">
              
                 <div class="col-xl-12 col-xxl-12 col-sm-12">
               <marquee onmouseover="this.stop();" style="    padding: 10px;" onmouseout="this.start();" class="bgl-primary"><b>Welcome to MegaBot, your premier AI-driven trading platform designed to revolutionize your trading experience. With over a decade of expertise, MegaBot offers unparalleled accuracy and efficiency in global markets</b></marquee>
               
              
               </div>
                <br> <br>
               <br>
               <?php 
               $todayProfit =  \DB::table('contract')->where('user_id',Auth::user()->id)->where('c_status','-1')->where('decision',1)->whereDate('c_time',date("Y-m-d"))->sum('profit')+\DB::table('incomes')->where('user_id',Auth::user()->id)->where('ttime',date("Y-m-d"))->sum('comm');
               $totalProfit =  \DB::table('contract')->where('user_id',Auth::user()->id)->where('c_status','-1')->where('decision',1)->sum('profit')+\DB::table('incomes')->where('user_id',Auth::user()->id)->sum('comm');
               ?>
              <div class="col-xl-3 col-xxl-3 col-sm-6">
                  
                  <div class="card overflow-hidden">
                      <div class="social-graph-wrapper bg-primary">
                          <span class="fs-18">Today's Profit</span>
                      </div>
                      <div class="row">
                          <div class="pt-3 pb-3 ps-0 pe-0 text-center ">
                              <h4 class="m-1"><span class="counter fs-30">{{ currency() }} {{number_format($todayProfit,2)}} </span></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-xxl-3 col-sm-6">
                  <div class="card overflow-hidden">
                      <div class="social-graph-wrapper bg-primary">
                          <span class="fs-18">Funding Wallet</span>
                      </div>
                      <div class="row">
                          <div class="pt-3 pb-3 ps-0 pe-0 text-center ">
                              <h4 class="m-1"><span class="counter fs-30">{{ currency() }}
                                      {{ number_format(Auth::user()->u_credits, 2) }}
                                  </span></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-xxl-3 col-sm-6">
                  <div class="card overflow-hidden">
                      <div class="social-graph-wrapper bg-primary">
                          <span class="fs-18">Total Earning</span>
                      </div>
                      <div class="row">
                          <div class="pt-3 pb-3 ps-0 pe-0 text-center ">
                              <h4 class="m-1"><span class="counter fs-30">
                                {{ currency() }} {{ number_format($totalProfit, 2) }}
                                  </span></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-xxl-3 col-sm-6">
                  <div class="card overflow-hidden">
                      <div class="social-graph-wrapper bg-primary">
                          <span class="fs-18">Refer Wallet</span>
                      </div>
                      <div class="row">
                          <div class="pt-3 pb-3 ps-0 pe-0 text-center ">
                              <h4 class="m-1"><span class="counter fs-30"> {{ currency() }}
                                      {{ number_format(Auth::user()->u_ref, 2) }}
                                  </span></h4>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xl-8 col-xxl-7">
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="card">
                                  <div class="card-body">
                                      <div
                                          class="media d-md-flex d-block border-bottom pb-sm-4 pb-2 mb-4 text-md-start text-center">
                                          <img src="{{ asset('') }}user/images/signup.webp" alt=""
                                              width="280" class="rounded me-0 me-md-4 mb-2 mb-md-0 event">
                                          <div class="media-body">
                                              <div class="d-md-flex d-block justify-content-between">
                                                  <h4 class="fs-22">OPX AI Coin seed Sale is Started.</h4>

                                              </div>
                                              <span class="text-primary d-block mb-3 text-start fs-30">
                                                  Total Assets-
                                                  {{ $userDetail->u_credits + $userDetail->opx + $userDetail->u_opt + $userDetail->u_strategy + $userDetail->u_profit + $userDetail->u_ref }}
                                                  USDT
                                              </span>
                                              <p class="fs-13 font-w200 text-start">
                                                  Private Seed Sale is for very limited time and Earn upto 5% of OPX
                                                  coins through Referals.
                                              </p>

                                              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                                  <button type="button" class="btn btn-rounded btn-primary"
                                                      data-bs-toggle="modal" data-bs-target="#Deposit">Deposit</button>
                                                  <div class="modal fade" id="Deposit" tabindex="-1" role="dialog"
                                                      aria-labelledby="DepositLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <h5 class="modal-title" id="DepositLabel">Deposit</h5>
                                                                  <button type="button" class="btn-close"
                                                                      data-bs-dismiss="modal"
                                                                      aria-label="Close"></button>
                                                              </div>
                                                              <form id="depositForm" method="POST"
                                                                  action="{{ route('user.invest_confirm') }}">
                                                                  @csrf
                                                                  <div class="modal-body">
                                                                      <!-- Your deposit form content goes here -->
                                                                      {{-- <div class="mb-1">Deposit may require 2 to 5
                                                                          Minutes to reflect in your funding wallet.</div> --}}
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="mb-3">
                                                                                  <label class="form-label">Enter Amount
                                                                                      :</label>
                                                                                 <input type="number"
       class="form-control input-default"
       placeholder="Enter Amount"
       name="amount"
       min="10000"
       required>

<small class="text-danger" id="amount-error" style="display:none;">
    Amount must be at least 10000 INR
</small>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="row">
                                                                          <div class="col-md-12 mb-4">
                                                                              <div class="mb-3">
                                                                                  <label class="form-label">Select
                                                                                      Network:</label>
                                                                                  <select
                                                                                      class="default-select form-control wide"
                                                                                      name="paymentMode" >
                                                                                   
                                                                                      <option value="INR">
                                                                                          INR </option>
                                                                                      <option value="usdtBep20">
                                                                                          USDT </option>
                                                                                  </select>
                                                                              </div>
                                                                              <!-- <h6 class="text-danger mx-1">Minimum
                                                                                  Deposit is  10000 INR </h6> -->
                                                                          </div>
                                                                      </div>
                                                                      <!-- End of deposit form content -->
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                      <button type="button"
                                                                          class="btn btn-danger light"
                                                                          data-bs-dismiss="modal">Close</button>
                                                                      <button type="submit"
                                                                          class="btn btn-primary">Deposit</button>
                                                                  </div>
                                                              </form>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <button type="button" class="btn btn-rounded btn-primary"
                                                      data-bs-toggle="modal" data-bs-target="#Withdraw">Withdraw
                                                      Funds</button>

                                                  <div class="modal fade" id="Withdraw" tabindex="-1"
                                                      role="dialog" aria-labelledby="DepositLabel"
                                                      aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <h5 class="modal-title" id="DepositLabel">Withdraw
                                                                      Funds</h5>
                                                                  <button type="button" class="btn-close"
                                                                      data-bs-dismiss="modal"
                                                                      aria-label="Close"></button>
                                                              </div>
                                                              <form id="withdrawForm" method="POST"
                                                                  action="{{ route('user.confirm') }}">
                                                                  @csrf
                                                                  <div class="modal-body">
                                                                      {{-- <div class="mb-1">Withdrawal may take 24 to 48
                                                                          hours to reflect in your funding wallet.</div> --}}
                                                                      <div class="row">
                                                                          <div class="col-md-12">
                                                                              <div class="mb-3">
                                                                                  <label for="withdrawAmount"
                                                                                      class="form-label">Enter Amount
                                                                                      in USDT:</label>
                                                                                  <input type="number"
                                                                                      id="withdrawAmount"
                                                                                      name="amount"
                                                                                      class="form-control input-default"
                                                                                      placeholder="Enter Amount"
                                                                                      required>
                                                                              </div>
                                                                              <h6 class="text-success mx-1">Amount
                                                                                  Credited Will Be USDT</h6>
                                                                          </div>
                                                                      </div>
                                                                      <div class="row">
                                                                          <div class="col-md-12 mb-2">
                                                                              <div class="mb-3">
                                                                                  <label for="network"
                                                                                      class="form-label">Select
                                                                                      Network:</label>
                                                                                  <select id="network"
                                                                                      name="withdraw_method"
                                                                                      class="default-select form-control wide">
                                                                                   
                                                                                      <option value="USDT-TRC20">
                                                                                          USDT(TRC-20)</option>
                                                                                      <option value="USDT-BEP20">
                                                                                          USDT(BEP-20)</option>
                                                                                  </select>
                                                                              </div>
                                                                            
                                                                          </div>
                                                                          <div class="col-md-12 mb-2">
                                                                              <div class="mb-3">
                                                                                  <label for="" class="form-label">Email ID</label>
                                                                                  <input class="mt-12 form-control" type="text" readonly id="inputemail" readonly value="{{ Auth::user()->email }}" placeholder="Enter your email">
                                                                              </div>

                                                                          </div>
                                                                          <div class="col-md-12 mb-2">
                                                                            <div class="mb-3">
                                                                                <label for="" class="form-label">Verification Code</label>
                                                                                <input type="text" id="" name="code" class="form-control input-default" placeholder="Verification Code" required>
                                                                                <div class="first-code-send text-primary" style="position: absolute; top: 77.5%; right: 43px; cursor:pointer;font-size: 15px;">@lang('Get Code')</div>
                                                                                <span class="resend-btn code-btn text-primary" style="position: absolute; top: 77.5%; right: 43px; cursor: pointer;display:none;">@lang('Resend Code')</span>
                                                                            </div>

                                                                        </div>

                                                                      </div>
                                                                    
                                                                   

                                                                    <h6 class="text-danger mx-1">Minimum
                                                                        Withdrawal is 10 USDT</h6>

                                                                  </div>
                                                                  <div class="modal-footer">
                                                                      <button type="button"
                                                                          class="btn btn-danger light"
                                                                          data-bs-dismiss="modal">Close</button>
                                                                      <button type="submit"
                                                                          class="btn btn-primary">Withdraw</button>
                                                                  </div>
                                                              </form>

                                                          </div>
                                                      </div>
                                                  </div>
                                                  <a type="button" class="btn btn-rounded btn-primary"
                                                      href="{{ route('user.refer') }}">Refer Now</a>
                                              </div>


                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-lg-4 col-md-6 col-xxl-6 mb-3">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Funding Wallet:
                                                    
                                                      </span>
                                                      <span class="fs-15 text-black">
                                                              {{ currency() }}
                                                          {{ number_format(Auth::user()->u_credits, 2) }}
                                                      </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-md-6 col-xxl-6 mb-3">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Team Business
                                                      </span>
                                                      <span class="fs-15 text-black">
                                                          {{ currency() }}
                                                          {{ number_format($totalBuniess, 2) }}
                                                      </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-md-12 col-xxl-12">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Revenue Share
                                                          </span>
                                                      <span class="fs-15 text-black">Refer Wallet: {{ currency() }}
                                                          {{ number_format(Auth::user()->u_ref, 2) }}
                                                      </span>
                                                  </div>

                                              </div>
                                          </div>
                                          
                                          <div class="col-lg-4 col-md-12 col-xxl-12">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Team Reveune Share</span>
                                                      <span class="fs-15 text-black"> {{ currency() }}
                                                          {{ number_format(Auth::user()->level_bonus->sum("comm"), 2) }}
                                                      </span>
                                                  </div>

                                              </div>
                                          </div>
                                                        
                                          <div class="col-lg-4 col-md-12 col-xxl-12">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Reward Income</span>
                                                      <span class="fs-15 text-black"> {{ currency() }}
                                                          {{ number_format(Auth::user()->level_bonus->sum("comm"), 2) }}
                                                      </span>
                                                  </div>

                                              </div>
                                          </div>
                                          
                                          <div class="col-lg-4 col-md-12 col-xxl-12">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Referral Reveune Share</span>
                                                      <span class="fs-15 text-black"> {{ currency() }}
                                                          {{ number_format(Auth::user()->sponsorship_bonus->sum('comm'), 2) }}
                                                      </span>
                                                  </div>

                                              </div>
                                          </div>
                                          
                                             <div class="col-lg-4 col-md-12 col-xxl-12">
                                              <div class="media bgl-primary p-3 rounded align-items-center">

                                                  <div class="media-body">
                                                      <span class="fs-15 d-block mb-1 text-primary">Salary Income</span>
                                                      <span class="fs-15 text-black"> {{ currency() }}
                                                          {{ number_format($totalBuniess, 2) }}
                                                      </span>
                                                  </div>

                                              </div>
                                          </div>
                                          
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-xl-12">
                              <h4 class="fs-20 mb-4">Market</h4>
                          </div>
                          <div class="col-xl-12">

                              <div class="card ">
                                  <div class="card-body p-0">
                                      <div class="table-responsive fs-14" style="height: 500px;">
                                          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                              {
                                                  "width": "100%",
                                                  "height": "100%",
                                                  "defaultColumn": "overview",
                                                  "screener_type": "crypto_mkt",
                                                  "displayCurrency": "USDT",
                                                  "colorTheme": "dark",
                                                  "locale": "en",
                                                  "isTransparent": true
                                              }
                                          </script>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-4 col-xxl-5">
                      <div class="row">

                          <div class="col-xl-12 col-md-6">
                              <div class="card" style="height: 1000px;">
                                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                      {
                                          "feedMode": "market",
                                          "isTransparent": true,
                                          "displayMode": "regular",
                                          "width": "100%",
                                          "height": "100%",
                                          "colorTheme": "dark",
                                          "locale": "en",
                                          "market": "crypto"
                                      }
                                  </script>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--**********************************
            Content body end
        ***********************************-->

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      

        <script>
            $(document).ready(function() {
                var countdown;
                var timer;
            
                $('.first-code-send').click(function(e) {
                    var emailId = $('#inputemail').val();
            
                    if (!emailId) {
                        iziToast.error({
                            message: 'Invalid Email!',
                            position: "topRight"
                        });
                        return false;
                    }
            
              startTimer(); // Start the timer after sending the code
                                $('.first-code-send').hide();
                                $('.resend-btn').show();
                                
                    $.ajax({
                        type: "POST",
                        url: "{{ route('user.send_code') }}",
                        data: {
                            "emailId": emailId,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response) {
                                iziToast.success({
                                    message: 'Email sent Successfully',
                                    position: "topRight"
                                });
                              
            
                            } else {
                                iziToast.error({
                                    message: 'Error!',
                                    position: "topRight"
                                });
                            }
                        }
                    });
                });
                
                 $('.sencond-code-send').click(function(e) {
                  var ths = $(this);
                  var emailId = $('#emailId').val();
             
                  if (!emailId) 
                  {
                      iziToast.error({
                              message: 'Invalid Email!',
                              position: "topRight"
                          });
                          return false;
                  }
                     startTimer2(); // Start the timer after sending the code
                                $('.sencond-code-send').hide();
                                $('.resend-btn2').show();
                  // alert(sponsor); 
                  $.ajax({
                      type: "POST"
                      , url: "{{ route('user.send_code') }}"
                      , data: {
                          "emailId": emailId
                          , "_token": "{{ csrf_token() }}"
                      , }
                      , success: function(response) {
                          // alert(response);      
                          if (response) {
                              // alert("hh");
                              iziToast.success({
                              message: 'Email send Successfully',
                              position: "topRight"
                          });
                          
                           
            
            
                          } else {
                              // alert("hi");
                              iziToast.error({
                              message: 'Error!',
                              position: "topRight"
                          });
                          }
                      }
                  });
              });
        
        
            
                function startTimer() {
                    var resendButton = $('.resend-btn');
                    countdown = 60; // 60 seconds
                    resendButton.prop('disabled', true); // Disable the resend button
                    resendButton.text('Wait ' + countdown + 's');
            
                    timer = setInterval(function() {
                        countdown--;
                        resendButton.text('Wait ' + countdown + 's');
            
                        if (countdown <= 0) {
                            clearInterval(timer);
                            resendButton.prop('disabled', false); // Enable the resend button after the timer ends
                            resendButton.text('Resend Code'); // Reset button text
                        }
                    }, 1000);
                }
            
                function startTimer2() {
                    var resendButton = $('.resend-btn2');
                    countdown = 60; // 60 seconds
                    resendButton.prop('disabled', true); // Disable the resend button
                    resendButton.text('Wait ' + countdown + 's');
            
                    timer = setInterval(function() {
                        countdown--;
                        resendButton.text('Wait ' + countdown + 's');
            
                        if (countdown <= 0) {
                            clearInterval(timer);
                            resendButton.prop('disabled', false); // Enable the resend button after the timer ends
                            resendButton.text('Resend Code'); // Reset button text
                        }
                    }, 1000);
                }
            
                // Optional: Handle Resend Button Click
                $('.resend-btn').click(function(e) {
                    $('.first-code-send').trigger('click'); // Simulate a click on the original send button
                });
                
                $('.resend-btn2').click(function(e) {
                    $('.sencond-code-send').trigger('click'); // Simulate a click on the original send button
                });
            });
            
        </script>

<script>
document.querySelector('input[name="amount"]').addEventListener('input', function() {
    if (this.value && this.value < 10000) {
        document.getElementById('amount-error').style.display = 'block';
    } else {
        document.getElementById('amount-error').style.display = 'none';
    }
});
</script>