<footer class="footer pt-50 pb-50">
    <div class="container">
        <div class="footer-bottom-info">
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="footer-logo">
                        <!-- <img src="assets/image/logo/logo1.png" alt=""> -->

                        <img src="{{asset('frontend-assets/assets/image/logo/logo1.png')}}" alt=" ">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="footer-list">
                        <h2>Help</h2>
                        <a href="">
                            <li>FAQs</li>
                        </a>
                        <a href="">
                            <li>Terms & Conditions</li>
                        </a>
                        <a href="">
                            <li>Privacy Policy</li>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="footer-list">
                        <h2>Quick Links</h2>
                        <a href="">
                            <li>About</li>
                        </a>
                        <a href="">
                            <li>Blog</li>
                        </a>
                        <a href="">
                            <li>Contact</li>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
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
<footer class="pt-30 pb-30" style="background-color: #4f2160; border-top: 5px solid #f4db94">
    <div class="container">
        <div class="bottom-footer">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="bottom-footer-left">
                        <p>© 2022 Lavanta All rights Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
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

<!--Bootstrap JS-->
<script src="src="{{asset('frontend-assets/assets/js/bootstrap.min.js')}}"></script>
<!--Jquery JS-->
<script src="{{asset('frontend-assets/assets/js/jquery.min.js')}}"></script>

<script>
    $(window).on('scroll', function() {
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
<!--Custom Animation JS-->
<script src="{{asset('frontend-assets/assets/js/customanimation.js')}}"></script>
<!--particles JS-->
<script src="{{asset('frontend-assets/assets/js/particles.js')}}"></script>
<!--App particals JS-->
<script src="{{asset('frontend-assets/assets/js/app.js')}}"></script>
<!--nextparticles JS-->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/23500/nextparticle-documentation.js"></script>
<script src="https://nextparticle.nextco.de/nextparticle.min.js"></script>
<!--main JS-->
<script src="{{asset('frontend-assets/assets/js/main.js')}}"></script>
