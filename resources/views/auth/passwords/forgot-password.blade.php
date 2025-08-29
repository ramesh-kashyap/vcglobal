@include('layouts.mainsite.header')
<main>
    <!--==========================  Contact Section Start  ==========================-->
    <div class="login-section bg--black-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content-box forgot-password">
                        <form action="{{ route('forgot_submit') }}" method="post" class="d-grid gap-4">
                            @csrf
                            <div class="text-left">
                                <a href="{{route('Index')}}" class="back-home-btn">
                                    <i class="fa-solid fa-arrow-left-long"></i>
                                    Back to Home
                                </a>
                            </div>

                            
                            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail*" required>


                            <p>To recover your account please provide your email or username to find your
                                account.</p>
                            <div class="submit-button">
                                <button type="submit" class="btn btn--base-two">
                                    Send OTP
                                    <i class="flaticon-arrow-upper-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================  Contact Section End  ==========================-->
</main>
@include('partials.notify')


@include('layouts.mainsite.footer')
