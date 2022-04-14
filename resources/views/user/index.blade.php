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
    height: 100% !important;
	background-position: center;
	background-attachment: fixed;" id="particles-js">
        <div class="container">
            <div class="row main-hero">
                <div class="col-xl-6 col-lg-6">
                    <div class="hero-info">
                        <h1>THE FIRST AND ONLY SHARIAH COMPLIANT PROPERTY DEVELOPMENT IN THE UK
                        </h1>
                        <p>Being Sharia-compliant, LAVANTA will be more attractive to investors and developers in the Muslim community.
                        </p>
                        <button>GET STARTED</button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 ">
                    <div class="hero-info">
                        <!-- <img src="assets/image/banner/Hero-right2.png" alt=""> -->
                        <img src="{{asset('frontend-assets/assets/image/banner/Hero-right2.png')}}" alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--top banner end-->

    <!----------------------------------------main area start---------------------------------------->
    <main>
        <section class="pt-200 pb-200">
            <div class="container-1550">
                <div class="about">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-left">
                                <!-- <img src="assets/image/about/about.png" alt=""> -->
                                <img src="{{asset('frontend-assets/assets/image/about/about.png')}}" alt=" ">
                                <div class="about-left-info">
                                    <h2>FOR PROPERTY DEVELOPMENT IN THE UK.</h2>
                                    <p>Lavanta Is The first and Only Shariah compliant equity crowdfunding platform</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-right">
                                <h1>About <span>Us</span> </h1>
                                <p>We have launched the first Shariah Compliant Crowdfunding platform for Property development. In addition we also have regulatory oversight provided by a FCA regulated firm. We do not require this oversight as the offering
                                    we are providing is not covered by the FCA but for the peace of mind for our investors we have installed this extra safeguard .
                                </p>
                                <p>We have built an experienced team with backgrounds in Property Development, Lending, Islamic Finance and Law, Marketing and Fund Raising. We offer a unique hybrid investment platform for property developmet projects based
                                    on Shariah Law which forbids the charging and paying of interest. Instead, all our investment projects are based on profit share which potentially will give a much higher return of investment.
                                </p>
                                <a href="#"><button>Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="number-about">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="number-main-about">
                                        <span>100%</span>
                                        <p>SATISFITATION <br> CLIENTS</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="number-main-about">
                                        <span>250</span>
                                        <p>POTENTIAL <br> JOB</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="number-main-about">
                                        <span>3875</span>
                                        <p>PROJECTS <br> COMPLETED</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="" style="background-image: url(frontend-assets/assets/image/service/banner.jpg); background-size: cover;
        height: 900px !important;
        background-position: center;
        background-attachment: fixed;
        position: relative;">

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
                                    <!-- <img src="assets/image/service/service1.svg" alt=""> -->
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt=" ">
                                    <h2>Invesment & Funds</h2>
                                    <p>All investments are transparent and investor will receive confirmed shareholding in the project on receipt of funds.</p>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <!-- <img src="assets/image/service/service1.svg" alt=""> -->
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt=" ">
                                    <h2>Opportunity & Returns</h2>
                                    <p>Unique opportunity to invest on a profit share basis in UK property development projects. Potentially 4 times more return then traditional crowdfunding platforms with no interest being charged or paid.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <!-- <img src="assets/image/service/service1.svg" alt=""> -->
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt=" ">
                                    <h2>Planning & Developments</h2>
                                    <p>We offer investments in all types of property projects including land with planning permission, part completed developments and any type of residential or commercial, developments.</p>
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="service-single-box">
                                    <!-- <img src="assets/image/service/service1.svg" alt=""> -->
                                    <img src="{{asset('frontend-assets/assets/image/service/service1.svg')}}" alt=" ">
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
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-inv-title">
                            <h2>Investors</h2>
                        </div>
                        <div class="home-inv">
                            <h3>Don't just be an investor! Be a part owner!</h3>
                            <p>Your funds directly invested into the property development with a shareholding in your name</p>
                            <p>So your funds are safe and secure in bricks and mortar even during unforeseen disasters or pandemics. </p>
                            <p>Become partners with the developer rather than earning a small percentage on your investment.</p>
                            <p>Equal profit share between investor and developer on every project.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-inv-title">
                            <h2>Developers</h2>
                        </div>
                        <div class="home-inv">
                            <h3>Borrow against all types of property projects</h3>
                            <p>We are property experts and know your needs and requirements.</p>
                            <p>We work directly and in partnership with you to ensure the project is a success.</p>
                            <p>We fund up to 100% depending on the project.</p>
                            <p>No hidden fees or penalty charge.</p>
                            <p>In principle decisions given within 24 hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!----------------------------------------main area end---------------------------------------->
    <!--footer area start-->
    @include('user.partials.footer')
    <!--footer area end-->




</body>

</html>