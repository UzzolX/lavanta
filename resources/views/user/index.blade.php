<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LAVANTA | HOME</title>
    @include('user.partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!--top banner start-->
    <section class="container-fluid top-hero" style="background-image: url(frontend-assets/assets/image/banner/hero1.jpg); 
	background-size: cover;
	background-position: center;
	background-attachment: fixed;" id="particles-js">
        <div class="container">
            <div class="row main-hero">
                <div class="col-xl-6 col-lg-6">
                    <div class="hero-info">
                        <h1>Unique Opportunity to join the first and only Shariah compliant property development
                            platform in the UK
                        </h1>
                        <p>Bringing investors and developers together to work on a profit share basis with no interest
                            being charged or paid.
                        </p>
                        <button>GET STARTED</button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ">
                    <div class="hero-info">
                        <img src="{{asset('frontend-assets/assets/image/banner/Hero-right2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--top banner end-->

    <!----------------------------------------main area start---------------------------------------->
    <main>

        <section class="service-area " style="background-image: url(frontend-assets/assets/image/service/banner.jpg); ">

            <div class="container service">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="service-title">
                            <h1>Our Value Proposition</h1>
                            <p>Invest directly into a property development project in a fully Shariah compliant way.</p>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="row mb-30">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt="">
                                    <h2>Don't just be an investor! Be a part owner!</h2>
                                    <p>Your funds directly invested into the property development with a shareholding in
                                        your name </p>
                                    <p>So your funds are safe and secure in bricks and mortar even during unforeseen
                                        disasters or pandemics. </p>
                                    <p>Become partners with the developer rather than earning a small percentage on your
                                        investment. </p>
                                    <p>Equal profit share between investor and developer on every project. </p>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt="">
                                    <h2>Borrow against all types of property projects</h2>
                                    <p>We are property experts and know your needs and requirements.</p>
                                    <p>We work directly and in partnership with you to ensure the project is a success.
                                    </p>
                                    <p>We fund up to 100% depending on the project.</p>
                                    <p>No hidden fees or penalty charge.</p>
                                    <p>In principle decisions given within 24 hours </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <img src="assets/image/service/service1.svg" alt="">
                                    <h2>Planning & Developments</h2>
                                    <p>We offer investments in all types of property projects including land with planning permission, part completed developments and any type of residential or commercial, developments.</p>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <img src="assets/image/service/service1.svg" alt="">
                                    <h2>Feasibility & Monitoring</h2>
                                    <p>Our team of surveyors who specialise in Development projects will first assess the feasibility of the project and then will monitor until completion. Funds to be released to the developer in stages to ensure a quick
                                        completion.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')




</body>

</html>
