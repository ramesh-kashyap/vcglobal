<div class="content-body">
    <div class="container-fluid">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bank Details</h4>
                </div>
                <div class="card-body">
                    <div>
                        <form action="{{ route('user.bank-update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Account Holder</label>
                                <input type="text" class="form-control form--control md-style"
                                    name="account_holder"
                                    placeholder="Enter your Account Holder"
                                    value="{{ $bank_value?->account_holder }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Account Number</label>
                                <input type="number" class="form-control form--control md-style"
                                    name="account_number"
                                    placeholder="Enter your Account Number"
                                    value="{{ $bank_value?->account_no }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Bank Name</label>
                                <input type="text" class="form-control form--control md-style"
                                    name="bank_name"
                                    placeholder="Enter your Bank Name"
                                    value="{{ $bank_value?->bank_name }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Branch Name</label>
                                <input type="text" class="form-control form--control md-style"
                                    name="branch_name"
                                    placeholder="Enter your Branch Name"
                                    value="{{ $bank_value?->branch_name }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">IFSC Code</label>
                                <input type="text" class="form-control form--control md-style"
                                    name="ifsc_code"
                                    placeholder="Enter your IFSC Code"
                                    value="{{ $bank_value?->ifsc_code }}"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
