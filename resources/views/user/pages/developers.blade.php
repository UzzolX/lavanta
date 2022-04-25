<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LAVANTA | Developers</title>
    @include('user.partials.head')

</head>

<body>

    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!--top banner start-->
    <section class="container-fluid top-hero" style="background-image: url(frontend-assets/assets/image/developers-pack/development.jpg); 
	background-size: cover;
    height: 600px !important;
	background-position: center;
	background-attachment: fixed;" id="particles-js">
        <div class="container">
            <div class="row main-hero-p">
                <div class="col-xl-12 col-lg-12">
                    <div class="hero-info-de">
                        <h1>Developers</h1>
                        <p>THE FIRST AND ONLY SHARIAH COMPLIANT EQUITY CROWDFUNDING PLATFORM FOR PROPERTY DEVELOPMENT IN THE UK.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--top banner end-->

    <!----------------------------------------main area start---------------------------------------->
    <main>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="Developers">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6">
                            <div class="Developers-titles">
                                <h2>
                                    Our Value Proposition
                                </h2>
                            </div>
                            <div class="Developers-left">
                                <h4>FEATURES</h4>
                                <li>Lend against all types of property projects including land with planning permission, part completed developments and any type of residential or commercial developments.</li>
                                <li>A team of underwriters who specialize in Development projects that will assess the feasibility of the projects.</li>
                                <br>
                                <br>
                                <h4>BENEFITS</h4>
                                <li>Fast decisions and no major application procedure.</li>
                                <li>Unique opportunity to borrow on a profit share basis with lower costs no interest charges and no late penalty clauses so therefore minimising and mitigating the risks.</li>
                                <br>
                                <span>100% coverage of England, Scotland and Wales</span>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="Developers-right">
                                <img src="{{asset('frontend-assets/assets/image/developers-pack/value.html.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100" style="background-color: #f7f7f7f7;">
            <div class="container">
                <div class="Developers">
                    <div class="row d-flex align-items-center">

                        <div class="col-xl-6">
                            <div class="Developers-right">
                                <img src="{{asset('frontend-assets/assets/image/funding/FUNDING.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="Developers-titles">
                                <h2>
                                    OUR FUNDING STREAMS
                                </h2>
                            </div>
                            <div class="Developers-left">
                                <p>You We are launching a marketing campaign inviting investors to invest a minimum of £10,000 in your projects.</p>
                                <p>Major TV and social media campaign targeting the muslim community offering investors a chance to invest directly into property development.</p>
                                <p>We have set up a major call centre to handle all the inbound enquirers. </p>
                                <p>We have a network of sales agents throughout UK to sign up new investors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="Developers">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6">
                            <div class="Developers-titles">
                                <h2>
                                    OUR CRITERIA
                                </h2>
                            </div>
                            <div class="Developers-left">
                                <p>At LAVANTA We start with a blank canvas and work to find a solution that fits your project We accept any type of credit history as we are more interested in the viability of the property project.</p>
                                <p>We expect projects to have a minimum of 40% ROI in order for us to offer a good return to our investors.</p>
                                <p>Minimum fees. We only charge you 5% management fees from the funds we raise to help manage risk and monitor your project. We also charge a 10 % profit share on completion. The only initial fees will be for valuation, feasibility
                                    and legal fees.</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="Developers-right">
                                <img src="{{asset('frontend-assets/assets/image/criteria/CRITERIA.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-100" style="background-color: #f7f7f7f7;">
            <div class="container">
                <div class="Developers">
                    <div class="row d-flex align-items-center">

                        <div class="col-xl-6">
                            <div class="Developers-right">
                                <img src="{{asset('frontend-assets/assets/image/studies/STUDIES.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="Developers-titles">
                                <h2>
                                    CASE STUDIES
                                </h2>
                            </div>
                            <div class="Developers-left">
                                <h4>MANAGING CAPITAL</h4>
                                <li>A client has requested us to raise £500,000 for a development to be completed. They have already spent £1.5 Million so therefore we have taken a 25% shareholding in the SPV on behalf of the investors. On completion the
                                    GDV will be a minimum of £2.8 Million, so profit share will be 40% to be shared equally between Investor and Borrower. Therefore the investment of £500,000 will give the investors a return of £100,000 which is 20% profit.
                                    The developer will make an overall profit of £700,000 and be able to complete the project after initial investment of £1.5 Million which is a 47% return.</li>
                                <br>
                                <br>
                                <li>A client has bought land with planning for £100,000. They have requested us to raise £130,000 to complete the project. On behalf of the investors we have taken 65 % shareholding in the SPV. The GDV at completion will be
                                    a minimum of £350,000, so profit share will be 52%. Therefore return to investors on investment of £130,000 will be £40,000 which is 31% profit. Developer will make an overall profit of £80,000 after initial investment
                                    of £100,000 which is a 80% return.</li>
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