@include('layouts.mainsite.header')

<main>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title"> Our Services</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item"><a href="{{route('Index')}}" class="breadcrumb__link"> <i
                                        class="las la-home"></i> Home</a> </li>
                            <li class="breadcrumb__item"><i class="fa-solid fa-minus"></i></li>
                            <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> Our Services
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->
    <!--==========================  Services Section Start  ==========================-->
    <section class="services-section bg--black py-120">
        <div class="container position-relative">
            <div class="services-two-shape d-none d-lg-block">
                <img src="{{asset('')}}asset/svg/balance-1.svg" alt="balance">
                <img src="{{asset('')}}asset/svg/balance-2.svg" alt="balance">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">Services</h6>
                        <h2 class="top-reveal">Comprehen sive Services <br class="d-none d-xl-block"> for
                            Every Trader</h2>
                        <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through the right tools, education, and support. Our mission is simple: to
                            empower every client with the resources they need.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4 mt-60">
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h3><a href="{{route('services')}}">Equity Trading</a></h3>
                        <p>Equity trading involves buying and selling shares of publicly listed companies on the stock market to generate profits from price fluctuations.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3><a href="{{route('services')}}">Market Analysis</a></h3>
                        <p>Market analysis is the process of evaluating and understanding the dynamics of a financial market, including the factors that influence asset prices.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h3><a href="{{route('services')}}">Forex Trading</a></h3>
                        <p>Forex traders analyze a variety of factors that can affect currency prices, including interest rates, geopolitical events, economic reports, and market sentiment.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h3><a href="{{route('services')}}">Stock Market</a></h3>
                        <p>Stock markets are made up of various exchanges, such as the New York Stock Exchange (NYSE), NASDAQ, or London Stock Exchange (LSE), where buyers and sellers transact.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3><a href="{{route('services')}}">Technical Analysis</a></h3>
                        <p>Technical analysis is a method of evaluating securities by analyzing statistics generated by market activity, such as past prices, volume, and other market data.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-search-dollar"></i>
                        </div>
                        <h3><a href="{{route('services')}}">Portfolio Management</a></h3>
                        <p>Portfolio management is the process of selecting, monitoring, and adjusting a collection of investments to meet specific financial goals while managing risk.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="{{route('services')}}" class="btn btn--base-two">
                            See More <i class="fas fa-arrow-up"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Services Section End  ==========================-->
    <!--==========================   Text-slide Start  ==========================-->
    <div class="text-slide-section py-3 bg--base">
        <div class="text-slide swiper">
            <div class="swiper-wrapper slide-transition">
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        STOCK TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{asset('')}}asset/svg/star-2.svg" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        CRYPTO TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{asset('')}}asset/svg/star-2.svg" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        FOREX TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{asset('')}}asset/svg/star-2.svg" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        CRYPTO TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{asset('')}}asset/svg/star-2.svg" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        FOREX TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{asset('')}}asset/svg/star-2.svg" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        CRYPTO TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{asset('')}}asset/svg/star-2.svg" alt="star">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================  Text-slide End  ==========================-->
    <!--==========================  Faq Section Start  ==========================-->
    <section class="faq-section bg--black py-120">
        <div class="container position-relative">
            <div class="faq-shape d-none d-lg-block">
                <img src="{{asset('')}}asset/svg/bank.svg" alt="bank">
                <img src="{{asset('')}}asset/svg/balance-5.svg" alt="balance">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">Faq</h6>
                        <h2 class="top-reveal">Frequently Asked Questions</h2>
                        <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re built
                            through the right tools, education, and support. Our mission is simple: to empower.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 row-gap-5">
                <div class="col-lg-6 align-self-center">
                    <img src="{{asset('')}}asset/images/faq/faq.png" alt="faq" class="img-fluid scaleUp">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="accordion custom--accordion" id="faqExample">
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="false"
                                    aria-controls="faqOne">
                                    What is the minimum deposit to start trading?
                                </button>
                            </h2>
                            <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                    Do you offer a demo account for practice trading?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false"
                                    aria-controls="faqThree">
                                    What platforms can I use to trade with your broker?
                                </button>
                            </h2>
                            <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false"
                                    aria-controls="faqFour">
                                    Are my funds secure with your company?
                                </button>
                            </h2>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false"
                                    aria-controls="faqFive">
                                    What trading instruments do you offer?
                                </button>
                            </h2>
                            <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Faq Section End  ==========================-->
    <!--==========================  Testimonial Section Start  ==========================-->

    <!--==========================  Testimonial Section End  ==========================-->
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
                                        Register Now <i class="flaticon-arrow-upper-right"></i>
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