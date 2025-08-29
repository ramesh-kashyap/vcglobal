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
    <section class="team-section bg--black py-120">
        <div class="container position-relative">
            <div class="services-two-shape d-none d-lg-block">
                <img src="{{asset('')}}asset/svg/bank.svg" alt="balance">
                <img src="{{asset('')}}asset/svg/balance-5.svg" alt="balance">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">Our Team</h6>
                        <h2 class="top-reveal">Meet Our Advisers</h2>
                        <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through the
                            right tools, education, and support. Our mission is simple: to empower.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 row-gap-4 justify-content-center">
                <div class="col-12">
                    <div class="team-slide swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{asset('')}}asset/images/team/team1.jpg" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Jonson Smith</a></h4>
                                        <p>Design Artist</p>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{asset('')}}asset/images/team/team2.jpg" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Emily Johnson</a></h4>
                                        <p>UX Designer</p>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{asset('')}}asset/images/team/team3.jpg" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Michael Brown</a></h4>
                                        <p>Frontend Developer</p>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{asset('')}}asset/images/team/team4.jpg" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Sarah Williams</a></h4>
                                        <p>Graphic Designer</p>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="btn btn--base-two bottom-reveal">
                            See More <i class="fas fa-arrow-up" ></i>
                        </a>
                    </div>
                </div>{{route('about-us')}}
            </div>
        </div>
    </section>
    <!--==========================  Team Section End  ==========================-->
    <!--==========================  Testimonial Section Start  ==========================-->
    <section class="testimonial-section bg--black-two py-120">
        <div class="container position-relative">
            <div class="testimonial-shape d-none d-lg-block">
                <img src="{{asset('')}}asset/svg/twostar.svg" alt="star">
                <img src="{{asset('')}}asset/svg/maneyPlant.svg" alt="money Plant">
            </div>
            <div class="row row-gap-2">
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <h6 class="right-reveal">Testimonial</h6>
                        <h2 class="mb-2 right-reveal">Our Clients Says</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <p class="right-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through the right tools,
                            education, and support. Our mission is simple: to empower every client with the
                            resources they
                            need to grow, succeed, and master.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-12 position-relative bottom-reveal">
                    <div class="testimonial-slide swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{asset('')}}asset/svg/star-5.svg" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{asset('')}}asset/svg/quite.svg" alt="quite">
                                        <p class="client-text">
                                            Trade Mastery, we believes great traders aren't born they’re built
                                            through the rights there tools, education, and supports. Our mission
                                            is simple to empower every client.
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{asset('')}}asset/images/client/client1.png" alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Robert Jenkins</h4>
                                                <p>Urban Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{asset('')}}asset/svg/star-5.svg" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{asset('')}}asset/svg/quite.svg" alt="quite">
                                        <p class="client-text">
                                            Trade Mastery, we believes great traders aren't born they’re built
                                            through the rights there tools, education, and supports. Our mission
                                            is simple to empower every client.
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{asset('')}}asset/images/client/client2.png" alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Johanna Dach</h4>
                                                <p>Urban Artist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{asset('')}}asset/svg/star-5.svg" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{asset('')}}asset/svg/quite.svg" alt="quite">
                                        <p class="client-text">
                                            Trade Mastery, we believes great traders aren't born they’re built
                                            through the rights there tools, education, and supports. Our mission
                                            is simple to empower every client.
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{asset('')}}asset/images/client/client3.png" alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Harvey Witting</h4>
                                                <p>Urban Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{asset('')}}asset/svg/star-5.svg" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{asset('')}}asset/svg/quite.svg" alt="quite">
                                        <p class="client-text">
                                            Trade Mastery, we believes great traders aren't born they’re built
                                            through the rights there tools, education, and supports. Our mission
                                            is simple to empower every client.
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{asset('')}}asset/images/client/client1.png" alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Robert Jenkins</h4>
                                                <p>Urban Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{asset('')}}asset/svg/star-5.svg" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{asset('')}}asset/svg/quite.svg" alt="quite">
                                        <p class="client-text">
                                            Trade Mastery, we believes great traders aren't born they’re built
                                            through the rights there tools, education, and supports. Our mission
                                            is simple to empower every client.
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{asset('')}}asset/images/client/client2.png" alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Johanna Dach</h4>
                                                <p>Urban Artist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="slider-btn">
                        <div class="btn-slider-prev testi-prev">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="btn-slider-next testi-next">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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