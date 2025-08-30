@include('layouts.mainsite.header')
<main>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title"> Market</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item"><a href="{{route('Index')}}" class="breadcrumb__link"> <i
                                        class="las la-home"></i> Home</a> </li>
                            <li class="breadcrumb__item"><i class="fa-solid fa-minus"></i></li>
                            <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> Market </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  Market Section Start  ==========================-->
    <section class="market-section bg--black-two py-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="tradingview-ticker-tape"></div>
                </div>
                <div class="col-xl-8 mt-60">
                    <div class="row row-gap-4">
                        <div class="col-12">
                            <div class="market-card">
                                <div class="market-img">
                                    <img src="{{asset('')}}asset/images/blog/blog2.jpg" alt="blog">
                                </div>
                                <div class="market-text">
                                    <span class="fs-14 fw-medium">2 hours ago</span>
                                    <h4 class="pt-2 mb-3"><a href="{{route('markets')}}">
                                            Technical Indicators: The Trader's Secret Weapons
                                        </a></h4>
                                    <p>The Dollar index extended gains to above , its strongest level since
                                        November and
                                        tracking hawkish extended period.</p>
                                    <a href="#" class="btn btn--base-two">
                                        View Details <i class="fas fa-arrow-up" ></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="market-card">
                                <div class="market-img">
                                    <img src="{{asset('')}}asset/images/blog/blog5.jpg" alt="blog">
                                </div>
                                <div class="market-text">
                                    <span class="fs-14 fw-medium">5 hours ago</span>
                                    <h4 class="pt-2 mb-3"><a href="{{route('markets')}}">
                                            Candlestick Patterns: Decoding Market Sentiment
                                        </a></h4>
                                    <p>The Dollar index extended gains to above , its strongest level since
                                        November and
                                        tracking hawkish extended period.</p>
                                    <a href="{{route('markets')}}" class="btn btn--base-two">
                                        View Details <i class="fas fa-arrow-up" ></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="market-card">
                                <div class="market-img">
                                    <img src="{{asset('')}}asset/images/blog/blog3.jpg" alt="blog">
                                </div>
                                <div class="market-text">
                                    <span class="fs-14 fw-medium">1 day ago</span>
                                    <h4 class="pt-2 mb-3"><a href="{{route('markets')}}">
                                            Support & Resistance: The Market's Turning Points
                                        </a></h4>
                                    <p>The Dollar index extended gains to above , its strongest level since
                                        November and
                                        tracking hawkish extended period.</p>
                                    <a href="{{route('markets')}}" class="btn btn--base-two">
                                        View Details <i class="fas fa-arrow-up" ></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="market-card">
                                <div class="market-img">
                                    <img src="{{asset('')}}asset/images/blog/blog4.jpg" alt="blog">
                                </div>
                                <div class="market-text">
                                    <span class="fs-14 fw-medium">3 days ago</span>
                                    <h4 class="pt-2 mb-3"><a href="{{route('markets')}}">
                                            Volume Analysis: The Power Behind Price Movements
                                        </a></h4>
                                    <p>The Dollar index extended gains to above , its strongest level since
                                        November and
                                        tracking hawkish extended period.</p>
                                    <a href="{{route('markets')}}" class="btn btn--base-two">
                                        View Details <i class="fas fa-arrow-up" ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mt-60">
                    <div class="d-grid gap-4">
                        <div id="marketview-widget-placeholder"></div>
                        <div class="sidebar-item">
                            <h4>Market News</h4>
                            <hr>
                            <div class="recent-post">
                                <div class="recent-post__item">
                                    <figure class="img image-effect">
                                        <img src="{{asset('')}}asset/images/blog/r1.jpg" alt="blog img">
                                    </figure>
                                    <div class="text">
                                        <div class="date"> 23 April, 2025</div>
                                        <h6><a href="{{route('markets')}}">
                                                Technical Indicators: The Trader's Secret Weapons
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-post__item">
                                    <figure class="img image-effect">
                                        <img src="{{asset('')}}asset/images/blog/r2.jpg" alt="blog img">
                                    </figure>
                                    <div class="text">
                                        <div class="date"> 17 October, 2025</div>
                                        <h6><a href="{{route('markets')}}">
                                                Volume Analysis: The Power Behind Price Movements
                                            </a></h6>
                                    </div>
                                </div>
                                <div class="recent-post__item">
                                    <figure class="img image-effect">
                                        <img src="{{asset('')}}asset/images/blog/r3.jpg" alt="blog img">
                                    </figure>
                                    <div class="text">
                                        <div class="date"> 22 January, 2025</div>
                                        <h6><a href="{{route('markets')}}">
                                                Support & Resistance: The Market's Turning Points
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-post__item">
                                    <figure class="img image-effect">
                                        <img src="{{asset('')}}asset/images/blog/r4.jpg" alt="blog img">
                                    </figure>
                                    <div class="text">
                                        <div class="date"> 23 April, 2025</div>
                                        <h6><a href="{{route('markets')}}">
                                                Candlestick Patterns: Decoding Market Sentiment</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Market Section End  ==========================-->
    <!--==========================  Call-to-action Section Start  ==========================-->
    <section class="call-to-action-section bg--black-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-action-box">
                        <div class="call-shape">
                            <img src="{{asset('')}}asset/svg/twostar.svg" alt="star">
                        </div>
                        <div class="row row-gap-5">
                            <div class="col-lg-6 align-self-center order-1 order-lg-0">
                                <div class="call-text text-center text-lg-start">
                                    <span class="text--base pb-3 right-reveal">Start Your Forex Journey
                                        Today</span>
                                    <h2 class="mb-4 right-reveal">Learn, Trade, And Grow With Trusted Tools And
                                        Signals.</h2>
                                    <a href="{{route('register')}}" class="btn btn--base-two right-reveal">
                                        Register Now <i class="fas fa-arrow-up" ></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="call-img text-lg-end text-center scaleUp">
                                    <img src="{{asset('')}}asset/images/call/call-img.png" alt="call"
                                        class="img-fluid m-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Call-to-action Section End  ==========================-->
</main>



@include('layouts.mainsite.footer')