<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LAVANTA | INVESTORS</title>
    @include('user.partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!--top banner start-->
    <section class="container-fluid top-hero" style="background-image: url(frontend-assets/assets/image/investors/banner.png); 
	background-size: cover;
    height: 600px !important;
	background-position: center;
	background-attachment: fixed;" id="particles-js">
        <div class="container">
            <div class="row main-hero-p">
                <div class="col-xl-12 col-lg-12">
                    <div class="hero-info-de">
                        <h1>investor</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--top banner end-->

    <!----------------------------------------main area start---------------------------------------->
    <main>
        <section class=" pt-200 pb-200">

            <div class="container">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="service-title pb-50">
                            <h1 style="color:#4f2160;">Our Value Proposition</h1>
                            <p>Invest directly into a property development project in a fully Shariah compliant way.</p>
                        </div>
                    </div>
                    <div class="service-box-investor">
                        <div class="row mb-30">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <h3>FEATURES</h3>
                                <div class="service-single-box-investor">
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt="">
                                    <h2>Invesment & Funds</h2>
                                    <p>All investments are transparent and investor will receive confirmed shareholding in the project on receipt of funds.</p>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <h3>BENEFITS</h3>
                                <div class="service-single-box-investor">
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt="">
                                    <h2>Opportunity & Returns</h2>
                                    <p>Unique opportunity to invest on a profit share basis in UK property development projects. Potentially 4 times more return then traditional crowdfunding platforms with no interest being charged or paid.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box-investor">
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt="">
                                    <h2>Planning & Developments</h2>
                                    <p>We offer investments in all types of property projects including land with planning permission, part completed developments and any type of residential or commercial, developments.</p>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box-investor">
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt="">
                                    <h2>Feasibility & Monitoring</h2>
                                    <p>Our team of surveyors who specialise in Development projects will first assess the feasibility of the project and then will monitor until completion. Funds to be released to the developer in stages to ensure a quick
                                        completion.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')



</body>

</html>