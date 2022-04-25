<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LAVANTA | ABOUT</title>
    @include('user.partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->


    <!----------------------------------------main area start---------------------------------------->
    <main>
        <!--top banner start-->
        <section class="container-fluid top-hero" style="background-image: url(frontend-assets/assets/image/banner/hero1.jpg); 
	background-size: cover;
    height: 600px !important;
	background-position: center;
	background-attachment: fixed;" id="particles-js">
            <div class="container">
                <div class="row main-hero-p">
                    <div class="col-xl-12 col-lg-12">
                        <div class="hero-info-p">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--top banner end-->
        <section class="pt-100 pb-100">
            <div class="container-1550">
                <div class="about">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-left">
                                <img src="{{asset('frontend-assets/assets/image/about/about.png')}}" alt="">
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
                                {{-- <a href="#"><button>Learn More</button></a> --}}
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
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')


</body>

</html>