<div class="content-body">
    <div class="container-fluid">
     
  
  
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ticket Status</h4>
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
                                        <th>Ticket</th>
                                        <th>Reply</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                          <th>Action</th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $key => $ticket)
                                        
                                    
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $ticket->ticket_no }}</td>
                                        <td>{{ $ticket->reply_by}}</td>
                                      <td style="color:<?=@$color?>;font-weight:700">
                                                    {{ ($ticket->status)?"Closed":"Open" }}
                                                </td>
                                        <td>{{ $ticket->created_at}}</td>
                                         <td><a
                                                        href="{{ route('user.ViewMessage') }}?ticket_no={{ $ticket->ticket_no }}"><button
                                                            style="color:#000;border:1px solid #000;padding:8px;border-radius:15px">View
                                                            all message</button></a></td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div></div></div>