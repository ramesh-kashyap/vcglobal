@include('layouts.mainsite.header')

<div class="clearfix" style="clear: both;"></div>
<div class="breatcome-area d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome-content text-center">
                    <div class="breatcome-title">
                        <h1>Markets</h1>
                    </div>
                    <div class="breatcome-text">
                        <a href="{{ route('Index') }}"><span>Home</span> Markets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix" style="clear: both;"></div>

<section id="values" class="values">

    <div class="blog-section style-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="dreamit-section-title text-center upper1 pb-30">
                    <h1 class="section-title"> <span>Crypto Market Today</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 style="color:#24ae8f;" class="mt-3 font-weight-bold">Hot List</h3>
              <script src="https://price-static.crypto.com/latest/public/static/widget/index.js"></script>
              <div id="crypto-widget-CoinList" data-transparent="true"  data-theme="dark" data-design="classic" data-coin-ids="136,1,166,382,20,2180"></div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 class="mt-3 font-weight-bold">New Coins</h3>
                    <script src="https://price-static.crypto.com/latest/public/static/widget/index.js"></script>
                    <div id="crypto-widget-CoinList" data-transparent="true" data-theme="dark" data-design="classic" data-coin-ids="29,382,1986,440,3452,538"></div>      
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h3 style="color:#24ae8f;" class="mt-3 font-weight-bold">Top Gainers</h3>
              <script src="https://price-static.crypto.com/latest/public/static/widget/index.js"></script>
              <div id="crypto-widget-CoinList" data-transparent="true" data-theme="dark" data-design="classic" data-coin-ids="136,1,166,382,20,2180"></div>
                </div>
            </div>
        </div>
    </div>

  </section><!-- End Values Section -->


















  @include('layouts.mainsite.footer')
