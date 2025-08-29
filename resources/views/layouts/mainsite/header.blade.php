<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		content="VcGLOBAL – A modern and professional template for Forex and stock trading businesses.">
	<meta name="keywords" content="Forex, Stock Broker, Trading Investments">
	<!-- Title -->
	<title>{{siteName()}}</title>
<!-- Font Awesome 6 Free -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-pVZt4fZrZjUFl2qfOsh3x5w0sCqD/s5+V7v9PoaHgO+f9NkT+bcg+ZJ+Z5t0C/0G4K3zPbWn6Fbc1w1f7pDwRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('')}}asset/images/logo/favicon.ico">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('')}}asset/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('')}}asset/css/all.min.css">
	<!-- Flat Icon -->
	<!-- <link rel="stylesheet" href="{{asset('')}}asset/fonts/flaticon_xtrade.css"> -->
	<!-- Fancy Box -->
	<link rel="stylesheet" href="{{asset('')}}asset/css/fancybox.css">
	<!-- Swiper Slider -->
	<link rel="stylesheet" href="{{asset('')}}asset/css/swiper-bundle.min.css">
	<!-- Odometer -->
	<link rel="stylesheet" href="{{asset('')}}asset/css/odometer.css">
	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('')}}asset/css/main.css">
</head>

<body>
	<!--==========================   Preloader Start  ==========================-->
	<div id="preloader">
		<div id="text">
			<p class="active">X</p>
			<p>V</p>
			<p>c</p>
			<p>G</p>
			<p>L</p>
			<p>O</p>
			<p>B</p>
			<p>A</p>
			<p>L</p>
		</div>
	</div>
	<!--==========================  Preloader End  ==========================-->
	<div class="wrapper">
		<!--==========================   Header Start  ==========================-->
		<header>
			<nav class="navbar navbar-expand-lg navbar-main">
				<div class="container">
					<a class="navbar-brand" href="{{route('Index')}}">
						<img src="{{asset('')}}asset/images/logo/logo.png" alt="logo" class="logo-img"style="width: 150px;">
					</a>
					<div class="right-nav">
						<a href="{{route('login')}}" class="btn btn-outline--base d-none d-sm-block">
							Log In <i class="fas fa-arrow-up" ></i>
						</a>
						<a href="{{route('contact-us')}}" class="btn btn--base-two d-none d-sm-block">
							Contact Us <i class="fas fa-arrow-up-right-from-square"></i>
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
							aria-label="Toggle navigation">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
							</svg>
						</button>
					</div>
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
						aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasNavbarLabel">
								<img src="{{asset('')}}asset/images/logo/logo.png" alt="logo" class="logo-img" >
							</h5>
							<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
								aria-label="Close"></button>
						</div>
						<div class="d-flex d-lg-none gap-4 pt-3 justify-content-center">
							<a href="{{route('login')}}" class="btn btn-outline--base d-sm-none">
								Log In <i class="flaticon-arrow-upper-right"></i>
							</a>
							<a href="{{route('contact-us')}}" class="btn btn--base-two d-sm-none">
								Contact Us <i class="flaticon-arrow-upper-right"></i>
							</a>
						</div>
						<div class="offcanvas-body align-items-center">
							<ul class="navbar-nav justify-content-center flex-grow-1">
								<li class="nav-item ">
									<a class="nav-link active" href="{{route('Index')}}">Home </a>
								
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="{{route('about-us')}}">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route('markets')}}">Market</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route('services')}}">Services</a>
								</li>
							

								<li class="nav-item">
									<a class="nav-link" href="{{route('education')}}">Education</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route('support')}}">Support</a>
								</li>
							
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!--==========================  Header End  ==========================-->