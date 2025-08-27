
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Karciz : Ticketing Admin Dashboard Bootstrap 5 Template">
	<meta property="og:title" content="Karciz : Ticketing Admin Dashboard Bootstrap 5 Template">
	<meta property="og:description" content="Karciz : Ticketing Admin Dashboard Bootstrap 5 Template">
	<meta property="og:image" content="https://Karciz.dexignzone.com/xhtml/social-image.png">
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
                                    <h4 class="text-center mb-4">Reset Password-</h4>
                                    <form action="{{ route('submitResetPassword') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Enter New Password-</strong></label>
                                            <input type="password" class="form-control" name="password" value="" placeholder="Enter New Password">

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Confirm New Password-</strong></label>
                                            <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Confirm New Password">

                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
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
	<script src="{{asset('')}}user/vendor/bootstrap-select/dist/{{asset('')}}user/js/bootstrap-select.min.js"></script>
    <script src="{{asset('')}}user/js/custom.min.js"></script>
    <script src="{{asset('')}}user/js/deznav-init.js"></script>
	<script src="{{asset('')}}user/js/demo.js"></script>

</body>

</html>