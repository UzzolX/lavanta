    <!--footer area start-->
    <footer class="footer pt-50 pb-50">
        <div class="container">
            <div class="footer-bottom-info">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-3 mb-sm-30">
                        <div class="footer-logo">
                            <img src="{{asset('frontend-assets/assets/image/logo/logo1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 mb-sm-30">
                        <div class="footer-list">
                            <h2>Help</h2>
                            <a href="faq.html">
                                <li>FAQs</li>
                            </a>
                            <a href="terms-and-conditions.html">
                                <li>Terms & Conditions</li>
                            </a>
                            <a href="privacy-policy.html">
                                <li>Privacy Policy</li>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 mb-sm-30">
                        <div class="footer-list">
                            <h2>Quick Links</h2>
                            <a href="about.html">
                                <li>About</li>
                            </a>
                            <a href="why-choose-us.html">
                                <li>Why Us</li>
                            </a>
                            <a href="contact.html">
                                <li>Contact</li>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 mb-sm-30">
                        <div class="footer-list">
                            <h2>Social</h2>
                            <a href="">
                                <li>Facebook</li>
                            </a>
                            <a href="">
                                <li>Twitter</li>
                            </a>
                            <a href="">
                                <li>Instagram</li>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="pt-30 pb-30" style="background-color: #4f2160;">
        <div class="container">
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="bottom-footer-left">
                            <p>© 2022 Lavanta All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="bottom-footer-right">
                            <a href="terms-and-conditions.html">
                                Terms and Conditions</a>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="" style="border-top: 3px solid #f4db94; background-color: #4f2160;">
        <div class="container pt-30 pb-30">
            <div class="row">
                <div class="col-xl-12 ultra-footer">
                    <p>Lavanta is a trading name of Lavanta Holdings Limited which is registered in England & Wales at
                        37th floor, One Canada Square London E14 5AA. (Company No. 13824231)</p>
                </div>
                <div class="col-xl-12 ultra-footer">
                    <p>Property prices can fall as well as rise and you may not get back all of the money you invest.
                        Rates of return quote are on our website are estimates only and are not guaranteed. Investments
                        are not protected under the financial services
                        compensation scheme</p>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!--Bootstrap JS-->
    <script src="{{asset('frontend-assets/assets/js/bootstrap.min.js')}}"></script>
    <!--Jquery JS-->
    <script src="{{asset('frontend-assets/assets/js/jquery.min.js')}}"></script>
    <script>
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 100) {
                $('.nav-menu').addClass("sticky");
            } else {
                $('.nav-menu').removeClass('sticky');
            }
        })

    </script>
    <!--Popper JS-->
    <script src="{{asset('frontend-assets/assets/js/popper.main.js')}}"></script>
    <!--aos JS-->
    <script src="{{asset('frontend-assets/assets/js/aos.js')}}"></script>
    <!--particles JS-->
    <script src="{{asset('frontend-assets/assets/js/particles.js')}}"></script>
    <!--App particals JS-->
    <script src="{{asset('frontend-assets/assets/js/app.js')}}"></script>
    <!--main JS-->
    <script src="{{asset('frontend-assets/assets/js/main.js')}}"></script>
