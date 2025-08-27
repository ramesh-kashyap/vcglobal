
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="{{siteName()}}">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Unlock the cosmos of crypto possibilities with {{siteName()}} – Your Gateway to Limitless Trading Horizons. Seamlessly navigate the galaxies of digital assets, where innovation meets opportunity. Join {{siteName()}}AI, where trades transcend boundaries">
	<meta property="og:title" content="{{siteName()}} - The Next Gen Tradinglate">
	<meta property="og:description" content="Unlock the cosmos of crypto possibilities with {{siteName()}} – Your Gateway to Limitless Trading Horizons. Seamlessly navigate the galaxies of digital assets, where innovation meets opportunity. Join {{siteName()}}AI, where trades transcend boundaries">
	<meta property="og:image" content="{{asset('')}}user/images/logo.svg">
	<title>{{ siteName() }}</title>
    <!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('')}}main/assets/images/fav-icon/Art.png">
	<link href="{{asset('')}}user/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{asset('')}}user/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
            
           
            
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="{{ route('Index') }}">
											<img src="{{asset('')}}user/images/logo.svg" alt="" style="width:100%">
										</a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{ route('register.otp') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email ID">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="Name"  value="">
                                        </div>
                                        <div class="form-group"> 
                                            <label class="mb-1"><strong>Referal ID</strong></label>
                                            <input type="text" class="form-control" name="sponsor" id="sponsor" placeholder="Referal ID"  value="{{ request('ref') }}">
                                            <span id="sponsorNameInfo" class="information"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password"  placeholder="Password" value="">
                                        </div>
                                        <div class="form-group" id="otpInput" style="display: none;">
                                            <label class="mb-1"><strong>OTP</strong></label>
                                            <input type="number" class="form-control" name="otp" value="">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div id="sendOTPButton" class="text-center">
                                            <button type="button" class="btn btn-primary btn-block">Send OTP</button>
                                        </div>
                                        <div id="signMeUpButton" class="text-center" style="display: none;">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me Up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('')}}user/vendor/global/global.min.js"></script>
	<script src="{{asset('')}}user/vendor/bootstrap-select/dist/}user/js/bootstrap-select.min.js"></script>
    <script src="{{asset('')}}user/js/custom.min.js"></script>
    <script src="{{asset('')}}user/js/deznav-init.js"></script>
	<script src="{{asset('')}}user/js/demo.js"></script>


</body>
@include('partials.notify')

</html>
<!-- Include jQuery library -->
<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
