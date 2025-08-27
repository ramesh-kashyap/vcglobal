@include('layouts.mainsite.header')


<!-- ===============//breatcome area start here \\================= -->
<div class="clearfix" style="clear: both;"></div>
<div class="breatcome-area style-two d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome-content text-center">
                    <div class="breatcome-title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="breatcome-text">
                        <a href=""><span>Home</span> Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix" style="clear: both;"></div>
<!-- ===============//breatcome section end here \\================= -->

<!--==================================================-->
<!-- Start cryptobit contact info Area -->
<!--==================================================-->
<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-single-box wow fadeInLeft" data-wow-delay=".3s">
                    <div class="contact-info-thumb">
                        <img src="https://html.dreamitsolution.net/cryptobit/cryptobit/assets/images/resource/contact-1.png" alt="">
                    </div>
                    <div class="contact-info-title">
                        <h2>Address Ifno</h2>
                        <p>110 High Holborn,
                            London
                            WC1V 6JS</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-single-box wow fadeInLeft" data-wow-delay=".4s">
                    <div class="contact-info-thumb">
                        <img src="https://html.dreamitsolution.net/cryptobit/cryptobit/assets/images/resource/contact-2.png" alt="">
                    </div>
                    <div class="contact-info-title">
                        <h2>Phone Calls</h2>
                        <p> +1 5589 55488 55</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-single-box wow fadeInLeft" data-wow-delay=".5s">
                    <div class="contact-info-thumb">
                        <img src="https://html.dreamitsolution.net/cryptobit/cryptobit/assets/images/resource/contact-3.png" alt="">
                    </div>
                    <div class="contact-info-title">
                        <h2>E-Mail Address</h2>
                        <p> support@OptinexAI.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End cryptobit contact info Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Cryptobit contact Area -->
<!--==================================================-->
<div class="contact-form-area style-two pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="dreamit-section-title text-center upper1 pb-70">
                <h4>Contact Info</h4>
                <h1 class="section-title">Write Us Something</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-form-thumb wow fadeInRight" data-wow-delay=".4s">
                    <img src="{{asset('')}}main/assets/images/resource/cartoon-bg.png" alt="">
                    <div class="form-inner-thumb bounce-animate3">
                        <img src="{{asset('')}}main/assets/images/resource/cartoon.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row">
                    <div class="contact-form-box wow fadeInLeft" data-wow-delay=".4s">
                         <div class="contact-form-title">
                            <h3>Get In Touch</h3>
                         </div> 
                        <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                            <div class="row">
                                <div class="col-lg-6  col-md-6 col-sm-12">
                                    <div class="from-box">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6  col-md-6 col-sm-12">
                                    <div class="from-box">
                                        <input type="text" name="phone" placeholder="Enter E-Mail">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="from-box">
                                        <input type="text" name="mail" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from-box">
                                        <textarea name="massage" id="massage" placeholder="Massage"></textarea>
                                    </div>                                  
                                </div>
                            </div>
                            <div class="from-box">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Cryptobit contact Area -->
<!--==================================================-->








@include('layouts.mainsite.footer')
