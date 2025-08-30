@include('layouts.mainsite.header')
<main>
    <!--==========================  Contact Section Start  ==========================-->
    <div class="login-section bg--black-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content-box forgot-password">
                        <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="formBl">
                                <div class="logo invisLink mb-4 text-center">
                                    <a href="{{ asset('') }}"></a>
                                    <img src="{{ asset('') }}asset/images/logo/logo.png" alt="" class="img-fluid" style="max-height: 60px;">
                                </div>

                                <span class="title h4 d-block mb-2 fw-bold text-center" style="color: hsl(164.41deg 76.62% 45.29%);">Register Successfully</span>
                                <span class="sub-title d-block mb-4 text-muted small">
                                    In case you have 2-FA security enabled, please, use Google Authenticator
                                    code instead of password.
                                </span>

                                <div class="inputList">
                                    <div class="error-summary alert alert-danger py-2 px-3 d-none text-start">
                                        <p class="mb-1 fw-bold">Please fix the following errors:</p>
                                        <ul class="mb-0 ps-3"></ul>
                                    </div>

                                    <div class="inputLine field-loginform-username required text-start">
                                        @if(session()->has('messages'))
                                        <?php $user_details = session()->get('messages') ?>

                                        <div class="alert  text-center">
                                            <h5 class="fw-bold mb-3">🎉 Congratulations! Your Account has been successfully Created.</h5>
                                            <p class="mb-2">Dear
                                                <span class="fw-bold " style="font-weight: bold;color: #ffa500;">{{$user_details->name }}</span>,
                                            </p>
                                            <p class="mb-2">
                                                You have been successfully registered. <br>
                                                Your user id is
                                                <span class="fw-bold" style="font-weight: bold;color: #ffa500;">{{$user_details->username}}</span>
                                            </p>
                                            <p class="mb-2">
                                                Password: <span class="fw-bold " style="font-weight: bold;color: #ffa500;">{{$user_details->PSR}}</span>
                                            </p>
                                            <p class="mb-2">
                                                Transaction Password: <span class="fw-bold " style="font-weight: bold;color: #ffa500;">{{$user_details->TPSR}}</span>
                                            </p>
                                            <p class="small text-muted">Please check your mail for more details.</p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group field-check2">
                                <input type="hidden" id="check2" class="form-control" name="LoginForm[check]" value="">
                            </div>

                            <a class="btn  w-100 my-3" style="background-color: hsl(164.41deg 76.62% 45.29%);" href="{{route('login')}}">Login</a>
                        </form>

                        <div class="links d-flex justify-content-between mt-3">
                            <a href="{{ route('forgot-password') }}" class="link text-decoration-none">Forgot your password?</a>
                            <a href="{{ route('register') }}" class="link text-decoration-none">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================  Contact Section End  ==========================-->
</main>
@include('partials.notify')


@include('layouts.mainsite.footer')















