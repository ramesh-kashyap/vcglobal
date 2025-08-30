@include('layouts.mainsite.header')

<main>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title"> Support</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item"><a href="{{route('Index')}}" class="breadcrumb__link"> <i
                                        class="las la-home"></i> Home</a> </li>
                            <li class="breadcrumb__item"><i class="fa-solid fa-minus"></i></li>
                            <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> Support </span>
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
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">Support Anytime</h6>
                        <h2 class="top-reveal">Anytime Our Team Support Provide</h2>
                        <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through the right tools, education, and support. Our mission is simple: to
                            empower every client with the resources.</p>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4 mt-60 justify-content-center">
                <div class="col-lg-4 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3><a href="#">24/7 Help Center</a></h3>
                        <p>“Our 24/7 Help Center is always here for traders. Whether you need quick market insights, platform guidance, or assistance with your account.</p>
                        <a href="#" class="learn-more">Learn More <i
                                class="flaticon-arrow-upper-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3><a href="#">Expansive Academy</a></h3>
                        <p>Expansive Academy is designed to empower traders with the knowledge and skills they need to succeed. From beginner tutorials to advanced strategies.</p>
                        <a href="#" class="learn-more">Learn More <i
                                class="flaticon-arrow-upper-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottom-reveal">
                    <div class="services-box">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3><a href="#">Chat With Team</a></h3>
                        <p>Have questions while trading? Simply chat with our team anytime. Our experts are available to provide instant answers, clear guidance, and real-time support.</p>
                        <a href="#" class="learn-more">Learn More <i
                                class="flaticon-arrow-upper-right"></i></a>
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