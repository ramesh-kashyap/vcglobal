@include('layouts.mainsite.header')

<main>
    <!--==========================  Contact Section Start  ==========================-->
    <div class="login-section bg--black-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-10">
                    <div class="login-content-box">
                        <div class="login-img-box order-lg-1">
                            <div class="text-center">
                                <span>Sign Up Your Account</span>
                                <h3>Welcome To VcGLOBAL</h3>
                                <a href="{{route('Index')}}" class="btn btn--base">
                                    Back To Home
                                    <i class="flaticon-arrow-upper-right"></i>
                                </a>
                            </div>
                        </div>
                        <form action="{{ route('registers') }}" method="post">
                            @csrf
                            <div class="row row-gap-4">
                                <div class="col-12">
                                    <input type="text" name="sponsor" id="sponsor" class="form-control" value="{{ request('ref') }}" placeholder="Enter your Referral id">
                                    <span id="sponsorNameInfo" class="information"></span>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name*">
                                </div>

                                <div class="col-xl-12">    
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number*"value="{{ old('phone') }}" maxlength="10" required>
                                    <input type="hidden" id="country_code" name="country_code">
                                </div>
                              
                                <div class="col-12">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email*">
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password*" required>
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password*"
                                        required>
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
                                        <a href="{{route('login')}}" class="forgot-text">Login</a>
                                    </div>
                                </div>
                                <div class="col-12">

                                    <div class="submit-button">
                                        <button type="submit" class="btn btn--base-two w-100">
                                            Sign Up
                                            <i class="flaticon-arrow-upper-right"></i>
                                        </button>
                                    </div>
                                </div>
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
<script>
  const input = document.querySelector("#phone");
  const iti = window.intlTelInput(input, {
    initialCountry: "in",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });

  input.addEventListener("input", function () {
    const countryCode = iti.getSelectedCountryData().dialCode;
    document.querySelector("#country_code").value = "+" + countryCode;
  });

  // Also set on init (in case value pre-filled)
  document.addEventListener("DOMContentLoaded", function () {
    const countryCode = iti.getSelectedCountryData().dialCode;
    document.querySelector("#country_code").value = "+" + countryCode;
  });
</script>

<script>
    $(document).ready(function() {
        // Event listener for the "Send OTP" button click
        $('#sendOTPButton').on('click', function(event) {
            event.preventDefault(); // Prevent the default button action

            // Serialize form data
            var formData = $('form').serialize();

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route("registers") }}',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Handle success response
                    console.log(response.success);

                    // Hide the "Send OTP" button and show the "Sign Me Up" button
                    $('#sendOTPButton').hide();
                    $('#signMeUpButton').show();
                    $('#otpInput').show();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    // You can display an error message or perform other actions here
                }
            });
        });
    });

    $(document).ready(function() {
        // Function to fetch sponsor name via AJAX
        function getSponsorName(username) {
            $.ajax({
                url: "{{ route('getUserName') }}", // Correct the route name
                method: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'user_id': username
                },
                success: function(response) {
                    // Check if response contains name
                    console.log("hi");
                    if (response !== '1') { // Assuming '1' is the error code returned when no match found
                        // If success, show sponsor name
                        $('#sponsorNameInfo').removeClass('text-warning').addClass('text-success').text(response);
                    } else {
                        // If error, show "No match found" warning
                        $('#sponsorNameInfo').removeClass('text-success').addClass('text-warning').text('No match found');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Event listener for input event on sponsor input field
        $('#sponsor').on('input', function() {
            var username = $(this).val();
            // Call getSponsorName function with the username
            console.log(username);
            getSponsorName(username);
        });

        var username = $('#sponsor').val();
        getSponsorName(username);
    });
</script>

