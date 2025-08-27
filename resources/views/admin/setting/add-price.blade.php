   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add </a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Bots</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.change-return') }}" method="POST">
                                     @csrf
                                        <div class="row"> 
                                       
                                           

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Return for Optinex Kilobyte</label>                                            
                                               <input type="number" placeholder="Return for Optinex Kilobyte" name="kb_ret" value="{{$kb_ret}}" class="form-control" required id="kb_ret">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Return for Optinex Megabyte</label>                                             
                                                <input type="number" placeholder="Return for Optinex Megabyte" value="{{$mb_ret}}" name="mb_ret" class="form-control" required id="mb_ret">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Return for Optinex Gigabyte</label>                                             
                                                <input type="number" placeholder="Return for Optinex Gigabyte" value="{{$gb_ret}}" name="gb_ret" class="form-control" required id="gb_ret">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Return for Optinex Terabyte</label>                                             
                                                <input type="number" placeholder="Return for Optinex Terabyte" value="{{$tb_ret}}" name="tb_ret" class="form-control" required id="tb_ret">
                                            </div>

              
                                           
                                        </div>
     
                                      
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
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
     