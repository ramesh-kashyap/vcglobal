<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
        
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Deposit </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Deposit QR Codes</a></li>
                    </ol>
                </div>
                <!-- row -->
        
        
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update QR Codes</h4>
                            </div>
                            <div class="card-body">
                                <p>Careful! This QR Codes Are For Receiving Money</p>
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>Mode</th>
                                                <th>QR Code URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        
                                            @foreach ($withdraw_list as $key=>$value)
                                                <tr class="m-2">
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $value->d_sym }}</td>
                                                    <form method="POST" action="{{ route('admin.update-qr', ['id'=> $value->d_id]) }}">
                                                        @csrf
                                                        <td><input type="text" name="d_ref" value="{{ $value->d_ref }}" class="form-control"></td>
                                                        <td>
                                                            <button type="submit" class="btn btn-outline-theme btn-primary">Update</button>
                                                        </td>
                                                    </form>
                                                    
                                                     
                                                        
                                                </tr>
                                            @endforeach
        
                                          
                                        </tbody>
        
                                    </table>
                                    
                                      <br>
        
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
        