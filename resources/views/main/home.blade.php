
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="megabot">
    <meta name="keywords" content="megabot">
    <meta name="author" content="megabot">
    <link rel="icon" href="{{asset('')}}main/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('')}}main/images/favicon.png" type="image/x-icon" />
    <title>Megabot</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('')}}main/css/vendors/bootstrap.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}main/css/vendors/remixicon.css">

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}main/css/vendors/iconsax.css" />

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}main/css/vendors/aos.css">

    <!-- swiper slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}main/css/vendors/swiper-bundle.min.css" />

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}main/css/style.css">



</head>

<body>

    <!-- header start -->
    <header>
        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#primaryMenu">
            <span class="navbar-toggler-icon">
                <i class="iconsax" data-icon="text-align-justify"></i>
            </span>
        </button>
        <a href="{{asset('')}}">
            <img src="{{asset('')}}main/images/logo.svg" class="img-fluid" alt="logo">
        </a>
        <nav class="header-nav-middle">
            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                    <div class="offcanvas-header navbar-shadow">
                        <h5 class="mb-0">Back</h5>
                        <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{asset('')}}">Home</a>
                            </li>

                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Login</a>
                            </li>

                          
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <a data-cursor="pointer" href="{{route('login')}}" class="btn btn-theme d-sm-inline-block d-none"><span>Login
                Now</span></a>
    </header>
    <!-- header end -->


    <!-- home section start -->
    <section class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="home-content">
                        <div class="bg-effect">
                            <img src="{{asset('')}}main/images/home/home-bg.gif" class="img-fluid bg-gif" alt="">
                            <img src="{{asset('')}}main/svg/home/1.png" class="img-fluid effect1 rotate-effect" alt="">
                            <img src="{{asset('')}}main/svg/home/2.svg" class="img-fluid effect2 rotate-effect" alt="">
                        </div>
                        <div>
                            <h1>USE MEGABOT TO <div class="title-effect">
                                    <img src="{{asset('')}}main/images/title-effect.png" alt=""><span>SIMPLIFY</span>
                                </div> YOUR LIFE</h1>
                            <p>
                                These structured plans are designed to provide flexibility and scalability, allowing users to select the tier that best aligns with their investment goals and risk tolerance.



                            </p>
                            <a data-cursor="pointer" class="start-link" href="https://t.me/mega_botofficial"><i class="iconsax"
                                    data-icon="play-circle"></i>Join telegram Community</a>
                        </div>
                    </div>
                    <div class="home-laptop px-md-0 px-3">
                        <div class="laptop-sec position-relative">
                            <div class="hand-sec">
                                <img src="{{asset('')}}main/images/home/hand.png" class="img-fluid left-hand" alt="hand">
                                <img src="{{asset('')}}main/images/home/hand.png" class="img-fluid right-hand" alt="hand">
                                <img src="{{asset('')}}main/images/home/finger.png" class="img-fluid left-finger" alt="hand">
                                <img src="{{asset('')}}main/images/home/finger.png" class="img-fluid right-finger" alt="hand">
                            </div>
                            <img src="{{asset('')}}main/images/home/laptop.png" class="img-fluid laptop-img" alt="laptop">
                        </div>
                        <div class="home-info">
                            <ul class="info-list">
                                <li>Automated Trading </li>
                                <li>Risk Management</li>
                                <li>Portfolio Management</li>
                            </ul>
                            <ul class="star-rating">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                            <h4>A technique to write
                                all of your material 10 times more quickly.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->



    <!-- service section start -->
    <div class="service-section section-b-space">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-4 service-row">
                        <div class="col-sm-6">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="{{asset('')}}main/svg/service/copy.svg" class="img-fluid outline-icon" alt="">
                                    <img src="{{asset('')}}main/svg/service/copy-bold.svg" class="img-fluid bold-icon" alt="">
                                </div>
                                <div class="service-content">
                                    <h3><img src="{{asset('')}}main/svg/service-title.svg" alt="effect" class="img-fluid">Automated Trading Bots</h3>
                                    <p>AI-Powered Algorithms: MegaBot utilizes intelligent algorithms to execute trades automatically, ensuring efficiency and precision in the rapidly changing crypto market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="{{asset('')}}main/svg/service/graph.svg" class="img-fluid outline-icon" alt="">
                                    <img src="{{asset('')}}main/svg/service/graph-bold.svg" class="img-fluid bold-icon" alt="">
                                </div>
                                <div class="service-content">
                                    <h3><img src="{{asset('')}}main/svg/service-title.svg" alt="effect"
                                            class="img-fluid">Risk Management</h3>
                                    <p>Protective Measures: The platform incorporates risk management features to safeguard your investments, including stop-loss and take-profit mechanisms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="{{asset('')}}main/svg/service/search.svg" class="img-fluid outline-icon" alt="">
                                    <img src="{{asset('')}}main/svg/service/search-bold.svg" class="img-fluid bold-icon" alt="">
                                </div>
                                <div class="service-content">
                                    <h3><img src="{{asset('')}}main/svg/service-title.svg" alt="effect" class="img-fluid"> Transparent Trade Statistics</h3>
                                    <p>Comprehensive Reporting: MegaBot provides detailed trade histories and performance metrics, allowing users to monitor and evaluate their trading activities with clarity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="service-box">
                                <div class="service-icon">
                                    <img src="{{asset('')}}main/svg/service/text.svg" class="img-fluid outline-icon" alt="">
                                    <img src="{{asset('')}}main/svg/service/text-bold.svg" class="img-fluid bold-icon" alt="">
                                </div>
                                <div class="service-content">
                                    <h3><img src="{{asset('')}}main/svg/service-title.svg" alt="effect"
                                            class="img-fluid"> Security Features</h3>
                                    <p>Safety Protocols: MegaBot prioritizes user security by implementing measures such as liquidity locking and contract renouncement, reducing the risk of malicious activities. 

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-info">
                        <div>
                            <div class="title">
                                <h2>MegaBot is an advanced AI-driven trading platform</h2>
                                <h3>In the digital world, our AI Writer supports a variety of artists</h3>
                            </div>
                            <p>MegaBot is an advanced AI-driven trading platform designed to enhance your trading experience with a suite of sophisticated features. Here's an overview of its key functionalities.These features collectively make MegaBot a comprehensive solution for traders seeking to leverage AI technology for optimized trading performance.


                            </p>
                            <a data-cursor="pointer" class="btn-arrow" href="">
                                <div class="icon-arrow"><i class="iconsax" data-icon="arrow-up"></i></div>View all
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section end -->


    <!-- about section start -->
    <section class="about-section section-b-space section-mb-space">
        <div class="bg-effect" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
        <div class="container">
            <div class="row g-md-5 g-4">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="about-content">
                        <div>
                            <div class="title">
                                <span class="number-pattern">01.</span>
                                <h2 class="text-white">Key Features of MegaBot's Trading Platform</h2>
                            </div>
                            <p> MegaBot fosters a collaborative community where traders can share insights and strategies for mutual benefit.</p>
                            <ul>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Automated Trading: MegaBot’s platform offers seamless execution of trading strategies, freeing users from manual intervention.</li>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Customizable Alerts: Users can configure alerts for key market events, ensuring timely action on trading opportunities.
                                </li>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Profit Distribution: Daily profits are split in a 70-30 ratio, with 70% allocated to users and 30% distributed to uplines as rewards.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('')}}main/svg/character/1.svg" class="img-fluid" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- about section start -->
    <section class="about-section right-version section-b-space section-mb-space">
        <div class="bg-effect" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"></div>
        <div class="container">
            <div class="row g-md-5 g-4">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('')}}main/svg/character/2.svg" class="img-fluid" alt="about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div>
                            <div class="title">
                                <span class="number-pattern">02.</span>
                                <h2>Introduction to MegaBot</h2>
                            </div>
                            <p>Legacy and Expertise: With over a decade of experience in the industry, MegaBot has consistently been at the forefront of delivering advanced trading solutions. The journey has been defined by innovation and a dedication to excellence.
                            </p>
                            <ul>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Automation in Trading: MegaBot specializes in creating and refining trading bots that execute trades based on predefined rules and strategies. These bots are indispensable for traders who value efficiency, speed, and precision.</li>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Focus on Security: Continuous monitoring, testing, and refinement ensure the bots are secure and effective in navigating complex financial markets.
                                </li>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Enabling faster and more accurate analysis of market trends and investment opportunities.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- about section start -->
    <section class="about-section section-b-space">
        <div class="bg-effect" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
        <div class="container">
            <div class="row g-md-5 g-4">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="about-content">
                        <div>
                            <div class="title">
                                <span class="number-pattern">03.</span>
                                <h2 class="text-white">About MegaBot
                                </h2>
                            </div>
                            <p>MegaBot’s trading platform employs sophisticated algorithms and AI models to generate trading signals for its users. By minimizing human biases and emotional decision-making, MegaBot ensures consistently profitable trading outcomes for its users.

                            </p>
                            <ul>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">MegaBot offers four tiers of membership, each with tailored benefits:
                                </li>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Profit Sharing: MegaBot allocates 70% of trading profits to the user, while 30% is distributed among uplines across 50 levels.
                                </li>
                                <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Collaborative Ecosystem: A platform that promotes shared success and mutual growth.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('')}}main/svg/character/3.svg" class="img-fluid" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- feature section start -->
   
    <!-- feature section end -->

    <!-- pricing section start -->
    <section class="pricing-section section-b-space">
        <div class="container">
            <div class="title-horizontal">
                <h2>Unleash limitless potential & versatile features for every need</h2>
                <p>From robust tools that inspire creativity to innovative ideas that simplify your everyday tasks, our
                    tool knows no bounds. Utilise the potential and elevate your user experience to new heights with our
                    cutting-edge technology, adapted just for you.</p>
            </div>
            <div class="row pricing-row g-xl-5 g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box">
                        <img src="{{asset('')}}main/svg/hanging.svg" class="img-fluid handing-cls" alt="effect">
                        <div class="pricing-top">
                            <img src="{{asset('')}}main/svg/pricing/pricing-top.svg" class="img-fluid pricing-bg" alt="">
                            <img src="{{asset('')}}main/svg/pricing/weekly.svg" class="img-fluid" alt="">
                            <h3>Kilobyte</h3>
                        </div>
                        <div class="pricing-mid">
                            <div class="clip-path-content">
                                <div>
                                    <h2>$50-$499</h2>
                                    <h4>Package</h4>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-content">
                            <div class="clip-path-content">
                                <ul>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Daily returns: 1% to 3% </h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Activation fee: 5% (one-time for 90 days)</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Trades with 90% accuracy.</h4>
                                    </li>
                                   
                                </ul>
                                <a class="pricing-link" href="{{route('login')}}" data-cursor="pointer">Choose plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box">
                        <img src="{{asset('')}}main/svg/hanging-green.svg" class="img-fluid handing-cls" alt="effect">
                        <div class="pricing-top">
                            <img src="{{asset('')}}main/svg/pricing/pricing-center.svg" class="img-fluid pricing-bg" alt="">
                            <img src="{{asset('')}}main/svg/pricing/monthly.svg" class="img-fluid" alt="">
                            <h3>Megabyte</h3>
                        </div>
                        <div class="pricing-mid">
                            <div class="clip-path-content">
                                <div>
                                    <h2>$500-$1999</h2>
                                    <h4>Package</h4>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-content">
                            <div class="clip-path-content">
                                <ul>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Daily Return: 1.5% to 4%</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Activation Fee: 6% (one-time for 90 days)</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Trades with 90% accuracy.</h4>
                                    </li>
                                   
                                   
                                </ul>
                                <a class="pricing-link" href="{{route('login')}}" data-cursor="pointer">Choose plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box">
                        <img src="{{asset('')}}main/svg/hanging.svg" class="img-fluid handing-cls" alt="effect">
                        <div class="pricing-top">
                            <img src="{{asset('')}}main/svg/pricing/pricing-top.svg" class="img-fluid pricing-bg" alt="">
                            <img src="{{asset('')}}main/svg/pricing/yearly.svg" class="img-fluid" alt="">
                            <h3>Gigabyte</h3>
                        </div>
                        <div class="pricing-mid">
                            <div class="clip-path-content">
                                <div>
                                    <h2>$2,000-$4,999</h2>
                                    <h4>Package</h4>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-content">
                            <div class="clip-path-content">
                                <ul>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Daily Return: 2% to 5%</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Activation Fee: 7% (one-time for 90 days)</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Trades with 90% accuracy.</h4>
                                    </li>
                                   
                                </ul>
                                <a class="pricing-link" href="#" data-cursor="pointer">Choose plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box">
                        <img src="{{asset('')}}main/svg/hanging.svg" class="img-fluid handing-cls" alt="effect">
                        <div class="pricing-top">
                            <img src="{{asset('')}}main/svg/pricing/pricing-top.svg" class="img-fluid pricing-bg" alt="">
                            <img src="{{asset('')}}main/svg/pricing/yearly.svg" class="img-fluid" alt="">
                            <h3>Terabyte</h3>
                        </div>
                        <div class="pricing-mid">
                            <div class="clip-path-content">
                                <div>
                                    <h2>$5,000-$10,000</h2>
                                    <h4>Package</h4>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-content">
                            <div class="clip-path-content">
                                <ul>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Daily Return: 3% to 6%</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Activation Fee: 8% (one-time for 90 days)</h4>
                                    </li>
                                    <li>
                                        <img src="{{asset('')}}main/svg/arrow.svg" class="img-fluid" alt="arrow">
                                        <h4>Trades with 90% accuracy.</h4>
                                    </li>
                                    
                                </ul>
                                <a class="pricing-link" href="{{route('login')}}" data-cursor="pointer">Choose plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing section end -->

    
    <!-- faq section start -->
    <section class="faq-section">
        <div class="container">
            <div class="title-basic">
                <h2 class="text-white">Have inquiries? In our FAQ, you'll find all the solutions you need.</h2>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button data-cursor="pointer" class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Is the content unique?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <p>Given that it is generated in real-time from the data and context given, MegaBot's
                                content is indeed distinctive. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button data-cursor="pointer" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            How can I boost traffic with Megabot?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            Leverage AI-driven analytics to identify and target your audience with personalised content
                            and recommendations.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button data-cursor="pointer" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            How long will it take to write an article with AI?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            with advanced AI models, it's possible to generate an article within minutes or even
                            seconds.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button data-cursor="pointer" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            Is there a limit to the amount of stuff that I can create?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                            No, there is no inherent limit to the amount of stuff you can create. The possibilities are
                            virtually limitless.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button data-cursor="pointer" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            What languages do you support?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            No, there is no inherent limit to the amount of stuff you can create. The possibilities are
                            virtually limitless.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button data-cursor="pointer" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseSix">
                            Is there a limit to the amount of stuff I can create?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            No, there is no inherent limit to the amount of stuff you can create. The possibilities are
                            virtually limitless.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->


    <!-- contact us start -->
    <section class="info-section section-b-space">
        <div class="container">
            <div class="info-box" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="hand-effect d-md-block d-none">
                    <img src="{{asset('')}}main/svg/hand.svg" class="img-fluid left-hand" alt="hand">
                    <img src="{{asset('')}}main/svg/hand.svg" class="img-fluid right-hand" alt="hand">
                </div>
                <h2>Ready to <span>move <img src="{{asset('')}}main/svg/title-effect.svg" class="img-fluid"
                            alt="title-effect"></span>
                    ahead?</h2>
                <p>With the help of our ground-breaking AI tool, unlock the potential of cutting-edge AI technology and
                    increase your productivity to new heights. Embrace the
                    future today and let our AI tool redefine what's possible for you.</p>
                <ul>
                    <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Free images for lifetime</li>
                    <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Get details on any topic</li>
                    <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">Quick advisor to help you</li>
                    <li><img src="{{asset('')}}main/svg/tick.svg" class="img-fluid" alt="tick">15+ category to explore</li>
                </ul>
                <a data-cursor="pointer" class="btn-arrow" href="">
                    <div class="icon-arrow"><i class="iconsax" data-icon="arrow-up"></i></div>Contact us now
                </a>
            </div>
        </div>
    </section>
    <!-- contact us end -->

    <!-- footer section start-->
    <footer>
        <div class="container">
            <div class="footer-row">
                <div class="footer-main">
                    <a href="#" class="footer-logo"><img src="{{asset('')}}main/images/logo.svg" class="img-fluid" alt=""></a>
                    <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter your mail">
                            <a href="" data-cursor="pointer" class="btn-basic">Subscribe</a>
                        </div>
                    </form>
                    <ul class="social-links">
                        <li><a data-cursor="pointer" href="https://www.facebook.com/"><img
                                    src="{{asset('')}}main/svg/social/fb.svg" class="img-fluid" alt="facebook"></a></li>
                        <li><a data-cursor="pointer" href="https://in.linkedin.com/"><img
                                    src="{{asset('')}}main/svg/social/linkedin.svg" class="img-fluid" alt="linkedin"></a></li>
                        <li><a data-cursor="pointer" href="https://www.instagram.com/"><img
                                    src="{{asset('')}}main/svg/social/insta.svg" class="img-fluid" alt="insta"></a></li>
                        <li><a data-cursor="pointer" href="https://twitter.com/login"><img
                                    src="{{asset('')}}main/svg/social/twitter.svg" class="img-fluid" alt="twitter"></a></li>
                    </ul>
                </div>
                <div class="link-section">
                    <div class="footer-title">
                        <img src="{{asset('')}}main/svg/star.svg" class="img-fluid" alt="star">
                        Quick Link
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a data-cursor="pointer" href="{{asset('')}}">Home</a></li>
                            <li><a data-cursor="pointer" href="#">Service</a></li>
                            <li><a data-cursor="pointer" href="#">Pricing</a></li>
                            <li><a data-cursor="pointer" href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="link-section">
                    <div class="footer-title">
                        <img src="{{asset('')}}main/svg/star.svg" class="img-fluid" alt="star">
                        Our service
                    </div>
                    <div class="footer-content">
                        <ul>
                            <li><a data-cursor="pointer" href="#">Generate</a></li>
                            <li><a data-cursor="pointer" href="#">Find Image</a></li>
                            <li><a data-cursor="pointer" href="#">Email writer</a></li>
                            <li><a data-cursor="pointer" href="#">Social media</a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
            <div class="footer-copyright">
                <h4>@2025 All the Copyright Reserved.</h4>
                <ul class="footer-links">
                    <li><a href="#">Privacy Policy </a></li>
                    <li><a href="#">Terms & Condition </a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- footer section end-->


    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
        <button class="tap-to-top-button"><i class="iconsax" data-icon="chevron-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->


    <!--custom cursor start  -->
    <div id="cursor"></div>
    <div id="cursor-border"></div>
    <!--custom cursor start  -->


    <!-- Bootstrap js-->
    <script src="{{asset('')}}main/js/bootstrap.bundle.min.js"></script>

    <!-- slider js-->
    <script src="{{asset('')}}main/js/swiper-bundle.min.js"></script>
    <script src="{{asset('')}}main/js/custom-slider.js"></script>

    <!-- custom cursor -->
    <script src="{{asset('')}}main/js/custom-cursor.js"></script>

    <!-- aos animation -->
    <script src="{{asset('')}}main/js/aos.js"></script>
    <script src="{{asset('')}}main/js/custom-aos.js"></script>

    <!-- iconsax js -->
    <script src="{{asset('')}}main/js/iconsax.js"></script>

    <!-- laptop animation js -->
    <script src="{{asset('')}}main/js/home-animation.js"></script>

    <!-- header sticky js -->
    <script src="{{asset('')}}main/js/header_sticky.js"></script>

    <!-- pricing js -->
    <script src="{{asset('')}}main/js/pricing-table.js"></script>

    <!-- Theme js-->
    <script src="{{asset('')}}main/js/script.js"></script>

</body>

</html>