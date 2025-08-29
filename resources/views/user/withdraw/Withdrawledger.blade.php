<div class="content-body">
    <div class="container-fluid">
     
  
  
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Withdraw Status</h4>
                        <div class="header-right">
                            <div class="input-group search-area ms-auto d-inline-flex">
                                <input type="text" class="form-control" placeholder="Search here">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                                </div>
                            </div>
                  </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                  <thead>
                           <tr>
                              <th style="width:80px;"><strong>Date</strong></th>
                              <th><strong>Id</strong></th>
                              <th><strong>Team Reveune Share</strong></th>
                              <th><strong>Referral Reveune Share Income</strong></th>
                              <th><strong>Revenue Share</strong></th>
                              
                                     <th><strong>Reward Income</strong></th>

            
                              <th><strong>Salary Income</strong></th>

<!-- 
                              <th><strong>Service Charge</strong></th>
                              <th><strong>TDS Charge</strong></th>
                              <th>Payable Amount</th> -->

                           </tr>
                        </thead>
                        @if (!empty($deposit_list) && count($deposit_list) > 0)
                        <tbody>
                           <?php if (is_array($deposit_list) || is_object($deposit_list)) { ?>
                              <?php $cnt = 0; ?>
                              @foreach($deposit_list as $value) <tr>

                                 <td data-label="Last Reply">{{ $value->created_at }}</td>
                                 <td>{{ $value->id }}</td>
                                 <td>{{ $value->team_reveune}}</td>
                                 <td> {{ $value->referral_income }}</td>
                                 <td>{{ $value->revenue_share }}</td>
                                    <td>{{ $value->reward_income }}</td>
                                    <td>{{ $value->salary_income}}</td>
<!-- 
                                 <td>{{ $value->deduction }}</td>
                                 <td>{{ $value->service_charge }}</td>
                                 <td>{{ $value->tds }}</td>
                                 <td>{{ $value->withdraw_amt}}</td> -->

                              </tr>
                              @endforeach

                           <?php } ?>

                        </tbody>
                            @else
                             <tbody>
                           <tr>
                              <td colspan="100%">
                                 <div class="empty-message ">

                                    <p class="empty-message-text text-center">No deposit history found</p>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        @endif

                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div></div></div>