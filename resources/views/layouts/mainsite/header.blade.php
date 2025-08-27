
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ siteName() }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('')}}main/assets/images/fav-icon/Art.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- theme default CSS -->	
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/owl.theme.default.min.css" type="text/css" media="all" />	
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/animate.css" type="text/css" media="all" />	
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/animated-text.css" type="text/css" media="all" />	
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/all.min.css" type="text/css" media="all" />	
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/flaticon.css" type="text/css" media="all" />	
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/theme-default.css" type="text/css" media="all" />	
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="{{asset('')}}main/style.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/venobox/venobox.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('')}}main/assets/css/responsive.css" type="text/css" media="all" />
</head>
<body>

<!--==================================================-->
<!-- Start cryptobit Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="cryptobit_nav_manu">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<div class="logo">
					<a class="logo_img" href="{{ route('Index') }}" title="{{siteName()}}">
						<img src="{{asset('')}}user/images/logo.svg" alt="" style="width: 200px" />
					</a>
					<a class="main_sticky" href="{{ route('Index') }}" title="{{siteName()}}">
						<img src="{{asset('')}}user/images/logo.svg" alt="astute" style="width: 200px" />
					</a>
				</div>
			</div>
			<div class="col-lg-8">
				<nav class="cryptobit_menu">
					<ul class="nav_scroll">
                        <li><a href="{{ route('Index') }}">Home</a>
                        </li>
                        <li><a href="{{ route('markets') }}">Markets</a></li>
                        <li><a href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li><a href="{{ route('privacy') }}">Privacy</a>
                        </li>
                        <li><a href="{{ route('contact-us') }}">Contact</a>
                        </li>
                        <li><a href="{{ route('Index') }}">Brochure</a></li>
                    </ul>
					<div class="header-button">
						<a href="{{ route('login') }}"><i class="far fa-user"></i>Sign In</a>
					</div>
				</nav>						
			</div>
		</div>
	</div>
</div>
<!-- Cryptobit Mobile Menu Area -->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<nav class="cripto_menu">
			<ul class="nav_scroll">
				<li><a href="{{ route('Index') }}">Home</a>
				</li>
				<li><a href="{{ route('markets') }}">Markets</a></li>
				<li><a href="{{ route('about-us') }}">About Us</a>
				</li>
				<li><a href="{{ route('privacy') }}">Privacy</a>
				</li>
				<li><a href="{{ route('contact-us') }}">Contact</a>
				</li>
				<li><a href="{{ route('Index') }}">Brochure</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Register</a></li>
			</ul>
		</nav>
	</div>
</div>
<!--==================================================-->
<!-- End cryptobit main menu Area -->
<!--==================================================-->