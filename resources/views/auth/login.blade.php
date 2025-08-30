@include('layouts.mainsite.header')

<main>
    <!--==========================  Contact Section Start  ==========================-->
    <div class="login-section bg--black-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-10">
                    <div class="login-content-box">
                        <div class="login-img-box">
                            <div class="text-center">
                                <span>Sign in Your Account</span>
                                <h3>Welcome To VcGLOBAL</h3>
                                <a href="{{route('Index')}}" class="btn btn--base">
                                    Back To Home
                                   <i class="fas fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row row-gap-4">
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your email*">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password*">
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-wrap row-gap-4 justify-content-between">
                                        <div class="form--check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember Me
                                            </label>
                                        </div>
                                        <a href="{{route('forgot-password')}}" class="forgot-text">Forgot
                                            Password?</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="submit-button">
                                        <button type="submit" class="btn btn--base-two w-100">
                                            Sign In
                                            <!-- <i class="fas fa-arrow-up" ></i> -->
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="or-form py-4">
                                <span>Or Continue With:</span>
                            </div>
                            <!-- <div class="other-sing pb-4">
                                <button>
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.5 12.233c0-.863-.07-1.493-.226-2.147h-10.06v3.897h5.906c-.12.968-.762 2.427-2.19 3.407l-.02.13 3.18 2.415.22.021c2.024-1.831 3.19-4.526 3.19-7.723Z"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M12.214 22.5c2.893 0 5.321-.933 7.095-2.543l-3.38-2.567c-.905.618-2.12 1.05-3.715 1.05a6.438 6.438 0 0 1-6.095-4.363l-.126.01-3.307 2.508-.043.118c1.761 3.43 5.38 5.787 9.571 5.787Z"
                                            fill="#34A853"></path>
                                        <path
                                            d="M6.12 14.077A6.348 6.348 0 0 1 5.765 12c0-.723.13-1.423.345-2.077l-.006-.139-3.349-2.548-.11.05A10.339 10.339 0 0 0 1.503 12c0 1.692.417 3.29 1.143 4.713l3.476-2.636Z"
                                            fill="#FBBC05"></path>
                                        <path
                                            d="M12.214 5.56c2.012 0 3.369.852 4.143 1.563L19.38 4.23c-1.857-1.692-4.274-2.73-7.167-2.73-4.19 0-7.81 2.357-9.571 5.787l3.464 2.636a6.465 6.465 0 0 1 6.107-4.363Z"
                                            fill="#EB4335"></path>
                                    </svg>
                                    <span>Google</span>
                                </button>
                                <button>
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.468 6.822c-.093.055-2.3 1.231-2.3 3.838.103 2.973 2.786 4.015 2.832 4.015-.046.056-.405 1.42-1.468 2.85C18.688 18.759 17.75 20 16.328 20c-1.353 0-1.838-.821-3.4-.821-1.676 0-2.15.821-3.434.821-1.423 0-2.429-1.309-3.319-2.53-1.156-1.597-2.139-4.104-2.174-6.51-.023-1.276.232-2.53.88-3.595.912-1.487 2.543-2.496 4.324-2.53 1.364-.043 2.579.9 3.411.9.798 0 2.29-.9 3.978-.9.728.001 2.671.212 3.874 1.987Zm-7.967-2.24c-.243-1.166.427-2.33 1.052-3.074C14.35.61 15.61 0 16.698 0a4.237 4.237 0 0 1-1.156 3.14c-.706.898-1.92 1.574-3.041 1.441Z"
                                            fill="#fff"></path>
                                    </svg>
                                    <span>Apple</span>
                                </button>
                            </div> -->
                            <p class="text-center">Already have an account?
                                <a href="{{route('register')}}" class="text--base">Register</a>
                            </p>
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

