
        <!-- ==================== Footer Start Here ==================== -->
        <footer class="footer-area">
            <div class="py-120">
                <div class="container position-relative">
                    <div class="footer-shape d-none d-lg-block">
                        <img src="{{asset('')}}asset/svg/twostar.svg" alt="star">
                        <img src="{{asset('')}}asset/svg/chart.svg" alt="chart">
                    </div>
                    <div class="row justify-content-center gy-5">
                        <div class="col-xl-4 col-lg-6">
                            <div class="footer-item footer-logo-con pe-xl-5">
                                <div class="footer-item__logo">
                                    <a href="{{route('Index')}}"> <img src="{{asset('')}}asset/images/logo/logo.png" alt="logo" style="width: 150px;"></a>
                                </div>
                                <p class="footer-item__desc">
                                    Trade Mastery, we believe is the great traders aren't born they’re built through the
                                    right
                                    tools, education, and support. Our mission is simple.
                                </p>
                                <ul class="social-list">
                                    <li class="social-list__item"><a href="https://www.facebook.com"
                                            class="social-list__link flex-center"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-list__item"><a href="https://www.twitter.com"
                                            class="social-list__link flex-center"> <i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-list__item"><a href="https://www.linkedin.com"
                                            class="social-list__link flex-center"> <i
                                                class="fab fa-linkedin-in"></i></a></li>
                                    <li class="social-list__item"><a href="https://www.pinterest.com"
                                            class="social-list__link flex-center"> <i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="footer-widget__content ">
                                <div class="footer-item">
                                    <h5 class="footer-item__title">Company</h5>
                                    <ul class="footer-menu">
                                        <li class="footer-menu__item"> <a href="{{route('about-us')}}" class="footer-menu__link">
                                                About Us
                                            </a> </li>
                                        <li class="footer-menu__item"> <a href="{{route('services')}}"
                                                class="footer-menu__link">
                                                Our Services
                                            </a> </li>
                                        <!-- <li class="footer-menu__item"> <a href="pricing.html" class="footer-menu__link">
                                                Pricing Plan
                                            </a> </li> -->
                                        <!-- <li class="footer-menu__item"> <a href="blog.html" class="footer-menu__link">
                                                Our Blogs
                                            </a> </li> -->
                                    </ul>
                                </div>
                                <div class="footer-item">
                                    <h5 class="footer-item__title">Quick Link</h5>
                                    <ul class="footer-menu">
                                        <li class="footer-menu__item"> <a href="{{route('markets')}}" class="footer-menu__link">
                                                Market Analysis
                                            </a> </li>
                                        <li class="footer-menu__item"> <a href="{{route('education')}}"
                                                class="footer-menu__link">
                                                Education
                                            </a> </li>
                                        <li class="footer-menu__item"> <a href="{{route('support')}}" class="footer-menu__link">
                                                Support
                                            </a> </li>
                                        <li class="footer-menu__item"> <a href="{{route('contact-us')}}" class="footer-menu__link">
                                                Contact Us
                                            </a> </li>
                                    </ul>
                                </div>
                                <div class="footer-item">
                                    <h5 class="footer-item__title">Contact Us</h5>
                                    <ul class="footer-contact-menu">
                                        <li class="footer-contact-menu__item">
                                            <div class="footer-contact-menu__item-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="footer-contact-menu__item-content">
                                                <p>New Street 243 West Victoria Vip Road 3527 Canada</p>
                                            </div>
                                        </li>
                                        <li class="footer-contact-menu__item">
                                            <a href="https://photoclerks.com/cdn-cgi/l/email-protection#a7cec9c1c889dfd3d5c6c3dee7c0cac6cecb89c4c8ca" class="d-flex">
                                                <div class="footer-contact-menu__item-icon">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </div>
                                                <div class="footer-contact-menu__item-content">
                                                    <p><span class="__cf_email__" data-cfemail="e38a8d858ccd9b979182879aa3848e828a8fcd808c8e">[email&#160;protected]</span></p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-contact-menu__item">
                                            <a href="tel:+8243944562" class="d-flex">
                                                <div class="footer-contact-menu__item-icon">
                                                    <i class="fa-solid fa-phone-volume"></i>
                                                </div>
                                                <div class="footer-contact-menu__item-content">
                                                    <p>(+1) 824 394 4562</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top End-->

            <!-- bottom Footer -->
            <div class="bottom-footer py-4">
                <div class="container">
                    <div class="row gy-3">
                        <div class="col-md-5 order-1 order-md-0">
                            <div class="bottom-footer-text text-white order-1 order-md-0 text-center text-md-start">
                                <a href="{{route('Index')}}">{{ siteName() }}</a>
                                &copy; 2025. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-md-7">
                            <nav class="d-flex justify-content-md-end gap-4 row-gap-2 justify-content-center flex-wrap">
                                <a href="#" class="fs-16 text-white">Privacy Policy</a>
                                <a href="#" class="fs-16 text-white">Terms & Conditions</a>
                                <a href="{{route('contact-us')}}" class="fs-16 text-white">Contact Us</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ==================== Footer End Here ==================== -->
    </div>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <!-- Jquery js -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('')}}asset/js/jquery-3.7.1.min.js"></script>
    <!-- gsap Js -->
    <script src="{{asset('')}}asset/js/gsap.min.js"></script>
    <script src="{{asset('')}}asset/js/ScrollTrigger.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{asset('')}}asset/js/boostrap.bundle.min.js"></script>
    <!-- Scroll Reveal Js -->
    <script src="{{asset('')}}asset/js/scrollreveal.min.js"></script>
    <!-- Swiper Bundle Js -->
    <script src="{{asset('')}}asset/js/swiper-bundle.min.js"></script>
    <!-- Fancy Box js -->
    <script src="{{asset('')}}asset/js/fancybox.umd.js"></script>
    <!-- Odometer js -->
    <script src="{{asset('')}}asset/js/odometer.min.js"></script>
    <script src="{{asset('')}}asset/js/intlTelInput.min.js"></script>

    <!-- main js -->
    <script src="{{asset('')}}asset/js/main.js"></script>
</body>

</html>