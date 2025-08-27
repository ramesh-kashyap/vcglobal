<div class="content-body">
    <div class="container-fluid">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Change Password</h4>
                </div>
                <div class="card-body">
                    <div>
                        
                        <form method="post" action="{{ route('user.edit-password') }}" >                           
                             @csrf
                            <div class="mb-3">
                                <label class="form-label">Old Password-</label>
                                <input type="text" class="form-control" placeholder="Enter Old Password" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password-</label>
                                <input type="text" class="form-control" placeholder="Enter New Password" name="email">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password-</label>
                                <input type="text" class="form-control" placeholder="Enter Confirm Password" name="phone">

                            </div>
                            <button type="submit" class="btn btn-primary mt-3" >Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
