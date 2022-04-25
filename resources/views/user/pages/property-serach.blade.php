<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LAVANTA | PRPERTY SEARCH</title>
    @include('user.partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!--top banner start-->
    <section class="container-fluid top-hero" style="background-image: url(frontend-assets/assets/image/property-search/banner.png); 
	background-size: cover;
    height: 600px !important;
	background-position: center;
	background-attachment: fixed;" id="particles-js">
        <div class="container">
            <div class="row main-hero-p">
                <div class="col-xl-12 col-lg-12">
                    <div class="hero-info-p">
                        <h1>Property search</h1>
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
                <div class="row">
                    <div class="col-xl-12">
                        <div class="property-title">
                            <h1> Our Property </h1>
                        </div>
                    </div>
                </div>
                <div class="Property">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/1.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/2.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/3.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/4.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/5.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/6.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/7.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/8.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/9.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/10.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/11.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 ">
                            <div class="Property-box">
                                <a href="#"><img src="{{asset('frontend-assets/assets/image/property-search/12.png')}}" alt=""></a>
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