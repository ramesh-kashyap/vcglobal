      @include('layouts.mainsite.header')
      <main>
          <!--==========================  Banner Section Start  ==========================-->
          <section class="banner-two-section bg--black">
              <div class="container position-relative">
                  <div class="shape-icon d-none d-lg-block">
                      <img src="{{asset('')}}asset/svg/favorites.svg" alt="star">
                      <img src="{{asset('')}}asset/svg/twostar.svg" alt="star">
                      <img src="{{asset('')}}asset/svg/star-4.svg" alt="star">
                      <img src="{{asset('')}}asset/svg/sparkle.svg" alt="star">
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-xl-8 col-lg-10">
                          <div class="banner-content text-center">
                              <span class="sub-title top-reveal">Powerful Trading Proven Results</span>
                              <h1 class="top-reveal">Trade Smarter Faster Gateway to the <strong>Global
                                      Markets</strong> </h1>
                              <p class="top-reveal">The world of intelligent trading with a platform built for
                                  performance, precision opportunity. Whether you're trading Forex, stocks.</p>
                              <div class="d-flex flex-wrap justify-content-center gap-4">
                                  <a href="{{route('login')}}" class="btn btn--base-two right-reveal">
                                      Start Trading <i class="fas fa-arrow-up"></i>
                                  </a>
                                  <a href="{{route('register')}}" class="btn btn-outline--base left-reveal">
                                      Try Demo Account <i class="fas fa-arrow-up"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--==========================  Banner Section End  ==========================-->
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
                              <div class="info-box left-reveal">
                                  <div class="fs-40 text--base fw-bold">
                                      <span class="odometer" data-odometer-final="36">10</span>k+
                                  </div>
                                  <p>Satisfied Customers</p>
                              </div>
                          </div>
                          <a href="{{route('about-us')}}" class="btn btn--base-two right-reveal">
                              Explore More <i class="fas fa-arrow-up"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </section>
          <!--==========================  About Section End  ==========================-->
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
                              <h2 class="top-reveal">Comprehen  sive Services <br class="d-none d-xl-block"> for
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
          <!--==========================  Process Section Start  ==========================-->
          <section class="process-section bg--black-two py-120">
              <div class="container position-relative">
                  <div class="services-two-shape d-none d-lg-block">
                      <img src="{{asset('')}}asset/svg/calculator.svg" alt="balance">
                      <img src="{{asset('')}}asset/svg/twostar.svg" alt="balance">
                  </div>
                  <div class="row justify-content-center">
                      <div class="col-lg-6">
                          <div class="section-content text-center">
                              <h6 class="top-reveal">The Process</h6>
                              <h2 class="top-reveal">How It Works</h2>
                              <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re
                                  built through the right tools,
                                  education, and support. Our mission is simple: to empower.</p>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-60 justify-content-center row-gap-4">
                      <div class="col-xl-4 col-md-6 bottom-reveal">
                          <div class="process-item">
                              <div class="d-flex gap-3 flex-wrap">
                                  <div class="number">01</div>
                                  <h4 class="process-title">
                                      Enter Details for Sing Up
                                  </h4>
                                  <p>Trade Mastery is more than a trading plat it's a gateway to the mastering the
                                      financial
                                      markets Built for traders.</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-md-6 bottom-reveal">
                          <div class="process-item">
                              <div class="d-flex gap-3 flex-wrap">
                                  <div class="number">02</div>
                                  <h4 class="process-title">
                                      Find Best
                                      Deals and Invest
                                  </h4>
                                  <p>Trade Mastery is more than a trading plat it's a gateway to the mastering the
                                      financial
                                      markets Built for traders.</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-4 col-md-6 bottom-reveal">
                          <div class="process-item">
                              <div class="d-flex gap-3 flex-wrap">
                                  <div class="number">03</div>
                                  <h4 class="process-title">
                                      Start Trading
                                      Get Profit Back
                                  </h4>
                                  <p>Trade Mastery is more than a trading plat it's a gateway to the mastering the
                                      financial
                                      markets Built for traders.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
    
          <!--==========================  Team Section End  ==========================-->
          <!--==========================  Blog Section Start  ==========================-->
          <!-- <section class="blog-section bg--black-two py-120">
              <div class="container position-relative">
                  <div class="blog-shape d-none d-lg-block">
                      <img src="{{asset('')}}asset/svg/balance-6.svg" alt="balance">
                      <img src="{{asset('')}}asset/svg/maneyPlant.svg" alt="balance">
                  </div>
                  <div class="row row-gap-4">
                      <div class="col-lg-6 align-self-center">
                          <div class="section-content">
                              <h6 class="right-reveal">Blogs</h6>
                              <h2 class="mb-0 right-reveal">News & Analysis</h2>
                          </div>
                      </div>
                      <div class="col-lg-6 align-self-center">
                          <div class="float-lg-end left-reveal">
                              <a href="blog.html" class="btn btn--base-two ">
                                  See More <i class="fas fa-arrow-up"></i>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-60 row-gap-4">
                      <div class="col-lg-6 right-reveal">
                          <div class="blog-item">
                              <img src="{{asset('')}}asset/images/blog/blog1.jpg" alt="blog" class="img-fluid w-100">
                              <ul class="blog-list">
                                  <li>Ai Trends</li>
                                  <li>12 October, 2025</li>
                              </ul>
                              <h4>
                                  <a href="blog-details.html">
                                      The Difference Between Fixed and Variable Spreads Explained
                                  </a>
                              </h4>
                              <a href="blog-details.html" class="btn btn--base-two">
                                  Read More <i class="fas fa-arrow-up"></i>
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-6 left-reveal">
                          <div class="blog-item">
                              <img src="{{asset('')}}asset/images/blog/blog2.jpg" alt="blog" class="img-fluid w-100">
                              <ul class="blog-list">
                                  <li>Ai Trends</li>
                                  <li>08 October, 2025</li>
                              </ul>
                              <h4>
                                  <a href="blog-details.html">
                                      Why Risk Management Is the Most Important Trading Skill
                                  </a>
                              </h4>
                              <a href="blog-details.html" class="btn btn--base-two">
                                  Read More <i class="fas fa-arrow-up"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </section> -->
          <!--==========================  Blog Section End  ==========================-->
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
                                              Register Now <i class="fas fa-arrow-up"></i>
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