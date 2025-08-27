<div class="content-body">
    <div class="container-fluid">
        @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">My Withdraw Details</h4>
                </div>
                <div class="card-body">
                    <div>
                        <p class="text-warning">These are the default withdraw details, kindly ensure your details are correct</p>

                        <form method="POST" action="{{ route('user.wallet_change') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">USDT (TRC-20)</label>
                                <input type="text" class="form-control" value="{{Auth::user()->usdtTrc20}}" placeholder="Enter Wallet Address" name="usdtTrc20">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">USDT (BEP20-20)</label>
                                <input type="text" class="form-control"  value="{{Auth::user()->usdtBep20}}"  placeholder="Enter Wallet Address" name="usdtBep20">
                            </div>


                         
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
