<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LAVANTA | Contact Us</title>
    @include('user.partials.head')

</head>

<body>
    @include('user.partials.nav')
    <!----------------------------------------top area start---------------------------------------->

    <!----------------------------------------top area end---------------------------------------->



    <!----------------------------------------main area start---------------------------------------->
    <main>
        <!--top banner start-->
        <section class="container-fluid top-hero" style="background-image: url(frontend-assets/assets/image/contact/banner.png); 
        background-size: cover;
        height: 600px !important;
        background-position: center;
        background-attachment: fixed;" id="particles-js">
            <div class="container">
                <div class="row main-hero-p">
                    <div class="col-xl-12 col-lg-12">
                        <div class="hero-info-de">
                            <h1>CONTACT US</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100">
            <div class="container pt-50 pb-50">
                <div class="contact-title">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-left">
                                <h1>Contact <span>Lavanta</span> </h1>
                                <div class="icon">
                                    <a href=""><i class="ti-facebook"></i></a>
                                    <a href=""><i class="ti-instagram"></i></a>
                                    <a href=""><i class="ti-twitter-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="contact-r-main">
                                <div class="contact-right">
                                    <div class="icon-r">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="icon-info">
                                        <span>Email</span> <br>
                                        <span>sales@lavanta.co.uk</span>
                                    </div>
                                </div>
                                <div class="contact-right">
                                    <div class="icon-r">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="icon-info">
                                        <span>PHONE</span> <br>
                                        <span>0207 459 4325 </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-100 pb-100">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="drop-line">
                            <h1>Drop Us A Line</h1>
                            <p>Ask away! We will get back to you within 24hours</p>
                        </div>
                    </div>
                </div>
                <div class="input-info">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <input type="text" name="" id="" placeholder="Full Name">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <input type="email" name="" id="" placeholder="Email">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <input type="text" name="" id="" placeholder="Subject">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <textarea name="" id="" placeholder="Your Message hare"></textarea>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <button type="submit">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!--top banner end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    <!--footer area start-->
    @include('user.partials.footer')


</body>

</html>
