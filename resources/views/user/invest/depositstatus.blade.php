<div class="content-body">
    <div class="container-fluid">
     
  
  
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Deposit Status</h4>
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
                                        <th>No.	</th>
                                        <th>Amount</th>
                                        <th>Payment Mode</th>
                                        <th>Status</th>
                                        <th>Time</th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invests as $key => $invest)
                                        
                                    
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $invest->amount }}</td>
                                        <td>{{ $invest->payment_mode}}</td>
                                        <td>{{ $invest->status}}</td>
                                        <td>{{ $invest->created_at}}</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div></div></div>