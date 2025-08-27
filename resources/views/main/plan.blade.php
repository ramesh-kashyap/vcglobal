@include('layouts.mainsite.header')

<!-- PAGE-BANNER -->
<style>
    .banner-section {
        background: url(assets/uploads/logo/banner.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

<!-- banner section -->
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-stroke">Plan </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('')}}">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Plan </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- banner section -->
<style>
	h2 {
    font-size: 38px;
    font-weight: 600;
}
</style>
<!-- plan start -->
   <!-- plan start -->
   <section class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="header-text text-center">
                <h5>INVEST OFFER</h5>
                <h2>Investment <span class="text-stroke">Plans</span>
                </h2>
                <p class="mx-auto">
                    Help agencies to define their new business objectives and then create professional software.
                </p>
            </div>
        </div>

        <div class="row justify-content-center g-4 g-lg-5">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-box">
                    <h4>BEGINNER PLAN</h4>
                    <h2 class="text-primary">$30 - $400</h2>
                    <h6>1.5% Every Day</h6>

                    <ul>
                      <li>Profit till 200 %</li>
                      <li>Capital will Include : <span class="bg-success">Yes</span></li>
                      <li>Daily Return 1.5 %
                      </li>

                    </ul>
                    <a class="btn-custom w-100 investNow" style="color: #000" href="{{route('login')}}" >Invest
                        now</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="pricing-box">
                  <h4>BRONZE PLAN</h4>
                  <h2 class="text-primary">$401 - $1000</h2>
                  <h6>2.5% Every Day</h6>

                  <ul>
                      <li>Profit till 200 %</li>
                      <li>Capital will Include : <span class="bg-success">Yes</span></li>
                      <li>Daily Return 2.5%
                      </li>


                  </ul>
                  <a class="btn-custom w-100 investNow" style="color: #000" href="{{route('login')}}" >Invest
                    now</a>

              </div>
          </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-box">
                    <h4>SILVER PLAN</h4>
                    <h2 class="text-primary">$1001 - $4000</h2>
                    <h6>4% Every Day</h6>

                    <ul>
                      <li>Profit till 200 %</li>
                      <li>Capital will Include : <span class="bg-success">Yes</span></li>
                      <li>Daily Return 4%
                      </li>


                    </ul>
                    <a class="btn-custom w-100 investNow" style="color: #000" href="{{route('login')}}" >Invest
                        now</a>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-box">
                    <h4>PLATINUM PLAN</h4>
                    <h2 class="text-primary">$4001 - $10,000</h2>
                    <h6>5% Every Day</h6>

                    <ul>
                      <li>Profit till 200 %</li>
                      <li>Capital will Include : <span class="bg-success">Yes</span></li>
                      <li>Daily Return 5%
                      </li>



                    </ul>
                    <a class="btn-custom w-100 investNow" style="color: #000" href="{{route('login')}}" >Invest
                        now</a>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!-- plan end -->

<!-- Modal -->
<div class="modal fade addFundModal" id="investNowModal" tabindex="-1" data-bs-backdrop="static" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="investModalLabel">Invest Now</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h4 class="title plan-name"></h4>
                    <p class="price-range"></p>
                    <p class="profit-details"></p>
                    <p class="profit-validity"></p>
                </div>
                <form class="login-form" id="invest-form"
                    action="https://screamin-lizard-hyip.bugfinder.net/user/purchase-plan" method="post">
                    <input type="hidden" name="_token" value="ATxgVLuBHHKSGinKEB1lao1RP0qPfb0oE9hmK1qp">
                    <div class="row g-3 align-items-end">
                        <div class="input-box col-12">
                            <select class="form-select" name="balance_type" aria-label="Default select example">
                                <option value="checkout">Checkout</option>
                            </select>
                        </div>
                        <div class="input-box col-12">
                            <div class="input-group">
                                <input type="text" class="invest-amount form-control" name="amount" id="amount" value=""
                                    onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" autocomplete="off"
                                    placeholder="Enter amount">
                                <button class="btn-custom input-group-text show-currency" type="button"
                                    id="button-addon2"></button>
                            </div>
                        </div>
                        <input type="hidden" name="plan_id" class="plan-id">

                        <div class="input-box modal-footer col-12">
                            <button class="btn-custom w-100">Invest Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- why choose us start -->
<section class="feature-section">
    <div class="container">
        <div class="row">
            <div class="header-text text-center">
                <h5>CHOOSE INVESTMENT</h5>
                <h3>Why Choose <span class="text-stroke">Investment Plan</span>
                </h3>
                <p class="mx-auto">
                    Help agencies to define their new business objectives and then create professional software.
                </p>
            </div>
        </div>
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6 col-md-6">
                <div class="feature-box">
                    <div class="icon-box">
                        <img src="assets/uploads/content/63ac1031952101672220721.png" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Expert Management</h4>
                        <p>
                            Replacing a maintains the amount of lines. When replacing a selection. help agencies to
                            define their new business objectives and then create. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="feature-box">
                    <div class="icon-box">
                        <img src="assets/uploads/content/63ac103b79dad1672220731.png" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Registered Company</h4>
                        <p>
                            Replacing a maintains the amount of lines. When replacing a selection. help agencies to
                            define their new business objectives and then create. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="feature-box">
                    <div class="icon-box">
                        <img src="assets/uploads/content/63ac1043c78011672220739.png" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Secure Investment</h4>
                        <p>
                            Replacing a maintains the amount of lines. When replacing a selection. help agencies to
                            define their new business objectives and then create. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="feature-box">
                    <div class="icon-box">
                        <img src="assets/uploads/content/63ac104f998a11672220751.png" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Verified Security</h4>
                        <p>
                            Replacing a maintains the amount of lines. When replacing a selection. help agencies to
                            define their new business objectives and then create. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="feature-box">
                    <div class="icon-box">
                        <img src="assets/uploads/content/63ac10576a5051672220759.png" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Instant Withdrawal</h4>
                        <p>
                            Replacing a maintains the amount of lines. When replacing a selection. help agencies to
                            define their new business objectives and then create. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="feature-box">
                    <div class="icon-box">
                        <img src="assets/uploads/content/63ac1060947cf1672220768.png" alt="why-choose-us image" />
                    </div>
                    <div class="text-box">
                        <h4>Registered Company</h4>
                        <p>
                            Replacing a maintains the amount of lines. When replacing a selection. help agencies to
                            define their new business objectives and then create. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose us end -->
<!-- latest transactions -->
<section class="latest-transaction">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-text text-center">
                    <h5>NOT HIDDEN CHARGE</h5>
                    <h2>Last Deposits &amp; <span class="text-stroke">Withdrawals</span>
                    </h2>
                    <p class="mx-auto">
                        Help agencies to define their new business objectives and then create professional software.
                    </p>
                    <div class="nav mt-5" id="nav-tab" role="tablist">
                        <button class="btn-custom active" id="last-deposit-tab" data-bs-toggle="tab"
                            data-bs-target="#last-deposit" type="button" role="tab" aria-controls="last-deposit"
                            aria-selected="true">Last Deposit</button>
                        <button class="btn-custom" id="last-withdraw-tab" data-bs-toggle="tab"
                            data-bs-target="#last-withdraw" type="button" role="tab" aria-controls="last-withdraw"
                            aria-selected="false">Last Withdrawal</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="last-deposit" role="tabpanel"
                        aria-labelledby="last-deposit-tab" tabindex="0">
                        <div class="transaction-wrapper">
                            <!-- table -->
                            <div class="table-parent table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Gateway</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Name">
                                                <span class="currency">
                                                    <img src="assets/admin/images/default.png" alt="Image Missing" />
                                                    Alex Hales
                                                </span>
                                            </td>
                                            <td data-label="Amount">$ 100</td>
                                            <td data-label="Gateway">Binance</td>
                                            <td data-label="Date">13 Jan, 2024 10:38 AM</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">
                                                <span class="currency">
                                                    <img src="assets/admin/images/default.png" alt="Image Missing" />
                                                    Alex Hales
                                                </span>
                                            </td>
                                            <td data-label="Amount">$ 100</td>
                                            <td data-label="Gateway">Binance</td>
                                            <td data-label="Date">13 Jan, 2024 03:40 AM</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">
                                                <span class="currency">
                                                    <img src="assets/admin/images/default.png" alt="Image Missing" />
                                                    Alex Hales
                                                </span>
                                            </td>
                                            <td data-label="Amount">$ 100</td>
                                            <td data-label="Gateway">Binance</td>
                                            <td data-label="Date">12 Jan, 2024 11:27 PM</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">
                                                <span class="currency">
                                                    <img src="assets/admin/images/default.png" alt="Image Missing" />
                                                    Alex Hales
                                                </span>
                                            </td>
                                            <td data-label="Amount">$ 100</td>
                                            <td data-label="Gateway">Binance</td>
                                            <td data-label="Date">12 Jan, 2024 06:18 PM</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Name">
                                                <span class="currency">
                                                    <img src="assets/admin/images/default.png" alt="Image Missing" />
                                                    Alex Hales
                                                </span>
                                            </td>
                                            <td data-label="Amount">$ 100</td>
                                            <td data-label="Gateway">Binance</td>
                                            <td data-label="Date">12 Jan, 2024 10:27 AM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="last-withdraw" role="tabpanel" aria-labelledby="last-withdraw-tab"
                        tabindex="0">

                        <div class="transaction-wrapper">
                            <!-- table -->
                            <div class="table-parent table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Gateway</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq section -->
<section class="faq-section">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-4">
                <div class="header-text">
                    <h3>ANY <span class="text-stroke">QUESTIONS</span>
                    </h3>
                    <p class="mt-4 mb-5">
                        We've Got Answers </p>
                    <div class="mail-to">
                        Help agencies to define their new business objectives and then create professional software.
                    </div>
                </div>
            </div>
            <div class="col-lg-8 ps-lg-5">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header " id="heading0">

                            <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">

                                What About Loan Programs?<span class="index">1</span>
                            </button>
                        </h4>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus adipisci ullam
                                quos voluptate officiis ab exercitationem? Molestiae deserunt incidunt, inventore
                                cumque explicabo rerum accusantium dolor natus quas eveniet ad molestias! </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header " id="heading1">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">

                                What passages of Lorem can i contact you?<span class="index">2</span>
                            </button>
                        </h4>
                        <div id="collapse2" class="accordion-collapse collapse " aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus adipisci ullam
                                quos voluptate officiis ab exercitationem? Molestiae deserunt incidunt, inventore
                                cumque explicabo rerum accusantium dolor natus quas eveniet ad molestias! </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header " id="heading2">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">

                                What passages of lorem can i contact you?<span class="index">3</span>
                            </button>
                        </h4>
                        <div id="collapse3" class="accordion-collapse collapse " aria-labelledby="heading3"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus adipisci ullam
                                quos voluptate officiis ab exercitationem? Molestiae deserunt incidunt, inventore
                                cumque explicabo rerum accusantium dolor natus quas eveniet ad molestias! </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header " id="heading3">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">

                                Temporibus adipisci ullam quos voluptate officiis ab<span class="index">4</span>
                            </button>
                        </h4>
                        <div id="collapse4" class="accordion-collapse collapse " aria-labelledby="heading4"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus adipisci ullam
                                quos voluptate officiis ab exercitationem? Molestiae deserunt incidunt, inventore
                                cumque explicabo rerum accusantium dolor natus quas eveniet ad molestias! </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.mainsite.footer')