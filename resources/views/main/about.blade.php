@include('layouts.mainsite.header')

<main>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb__wrapper">
                        <h2 class="breadcrumb__title"> About Us</h2>
                        <ul class="breadcrumb__list">
                            <li class="breadcrumb__item"><a href="{{route('Index')}}" class="breadcrumb__link"> <i
                                        class="las la-home"></i> Home</a> </li>
                            <li class="breadcrumb__item"><i class="fa-solid fa-minus"></i></li>
                            <li class="breadcrumb__item"> <span class="breadcrumb__item-text"> About Us </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->
    <!--==========================  About Section Start  ==========================-->
    <section class="about-section bg--black-two py-120">
        <div class="container position-relative">
            <div class="about-shape d-none d-lg-block">
                <img src="{{asset('')}}asset/svg/twostar.svg" alt="star">
                <img src="{{asset('')}}asset/svg/star-1.svg" alt="star">
            </div>
            <div class="row row-gap-5">
                <div class="col-xl-6 align-self-center">
                    <div class="about-img pe-xl-4 scaleUp">
                        <img src="{{asset('')}}asset/images/about/about1.png" alt="about image" class="img-fluid ">
                    </div>
                </div>
                <div class="col-xl-6 align-self-center">
                    <div class="section-content">
                        <h6 class="right-reveal">About Us</h6>
                        <h2 class="right-reveal">Building Better Traders One Trade at a Time</h2>
                        <p class="right-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through the right tools, education, and support. Our mission is simple: to
                            empower every client with the resources they need to grow, succeed, and master the
                            financial markets.
                            We combine cutting-edge trading technology.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-4 my-4 my-lg-5">
                        <div class="info-box right-reveal">
                            <div class="fs-40 text--base fw-bold">
                                <span class="odometer" data-odometer-final="10">5</span>+
                                Years
                            </div>
                            <p>Consulting Experience</p>
                        </div>
                        <div class="info-box right-reveal">
                            <div class="fs-40 text--base fw-bold">
                                <span class="odometer" data-odometer-final="36">10</span>k+
                            </div>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                    <a href="{{route('about-us')}}" class="btn btn--base-two right-reveal">
                        Explore More <i class="fas fa-arrow-up" ></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  About Section End  ==========================-->
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
    <!--==========================  Team Section Start  ==========================-->
 
    <!--==========================  Team Section End  ==========================-->
    <!--==========================  Testimonial Section Start  ==========================-->

    <!--==========================  Call-to-action Section End  ==========================-->
</main>
@include('layouts.mainsite.footer')