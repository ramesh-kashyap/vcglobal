<div class="content-body">
    <div class="container-fluid">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bank  Details</h4>
                </div>
                <div class="card-body">
                    <div>
                        
                      <form action="{{ route('user.bank-update') }}" method="POST">
                    @csrf
                            <div class="mb-3">
                                <label class="form-label">Account Holder</label>
  <input type="text" class="form-control form--control md-style"
                                    name="account_holder" placeholder="enter your Account Holder" value="{{ $bank_value?->account_holder }}"  @if($bank_value?->account_holder) readonly @endif
                                    required>                            </div>
                            <div class="mb-3">
                                <label class="form-label">Account Number</label>
                              <input type="number" class="form-control form--control md-style md-style" value="{{ $bank_value?->account_no }}"

                                    placeholder="enter your Account Number" name="account_number" required @if($bank_value?->account_no) readonly @endif>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bank Name</label>
                                        <input type="text" class="form-control form--control md-style md-style" value="{{ $bank_value?->bank_name }}"

                                    placeholder="enter your Bank name" name="bank_name" placeholder="Check time"
                                    required @if($bank_value?->bank_name) readonly @endif >

                            </div>
                                <div class="mb-3">
                                <label class="form-label">Branch Name</label>
                             <input type="text" class="form-control form--control md-style" value="{{ $bank_value?->branch_name }}"

                                    name="branch_name" placeholder="enter your Branch Name" required @if($bank_value?->branch_name) readonly @endif>

                            </div>
                                <div class="mb-3">
                                <label class="form-label">IFSC Code</label>
      <input type="text" class="form-control form--control md-style" value="{{ $bank_value?->ifsc_code}}"

                                    name="ifsc_code" placeholder="enter your IFSC code " step="any" required @if($bank_value?->ifsc_code) readonly @endif>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" >Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
