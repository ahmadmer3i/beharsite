<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Al-Behar Group</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome Pro css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/scroll.css') }}"


</head>

<body>

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loading">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area header-area-2 header-area-4">
        <div class="header-top pl-30 pr-30 white-bg">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-7">
                    <div class="header-left-side text-center text-sm-left">
                        <ul>
                            <li><a href="#"><i class="fal fa-envelope"></i> info@al-behar.com</a></li>
                            <li><a href="#"><i class="fal fa-phone"></i> +962 6 5811799</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="header-right-social text-center text-sm-right">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-behance"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> --}}
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="navigation">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="index.html"><img
                            src="{{ asset('frontend/assets/images/logos/logo.png') }}" alt=""></a> <!-- logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button> <!-- navbar toggler -->

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul> <!-- sub menu --> --}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#letter">Letter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                                {{-- <ul class="sub-menu">

                                    <li><a href="services-details.html">Services Details</a></li>
                                </ul> <!-- sub menu --> --}}
                            <li class="nav-item"><a class="nav-link" href="#group">The Group</a></li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="case-study.html">case study</a></li>
                                    <li><a href="case-details.html">Case Details</a></li>
                                    <li><a href="coming-soon.html">coming soon</a></li>
                                    <li><a href="error.html">error</a></li>
                                    <li><a href="faq.html">faq</a></li>
                                    <li><a href="pricing.html">pricing</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="shop-details.html">shop Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="privacy.html">Privacy</a></li>
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="team-details.html">team details</a></li>
                                </ul> <!-- sub menu --> --}}
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> <!-- sub menu -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li> --}}
                        </ul>
                    </div> <!-- navbar collapse -->
                    {{-- <div class="bar-area d-none d-xl-block">
                        <ul>
                            <li><a href="#"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fal fa-search"></i></a></li>
                            <li><a href="#"><i class="fal fa-bars"></i></a></li>
                        </ul>
                    </div>
                    <div class="navbar-btn mr-100">
                        <a class="main-btn" href="#">Free Consulting <i class="fal fa-long-arrow-right"></i></a>
                    </div> --}}
                </nav>
            </div> <!-- navigation -->
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== BANNER PART START ======-->

    @yield('main')

    <!--====== BRAND 2 PART ENDS ======-->

    <!--====== footer PART START ======-->

    <footer class="footer-area footer-area-2 footer-area-1 bg_cover"
        style="background-image: url({{ asset('frontend/assets/images/footer-bg.jpg') }});">
        <div class="footer-overlay">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-4 col-md-7">
                        <div class="widget-item-1 mt-30">
                            <img src="{{ asset('frontend/assets/images/logos/logo.png') }}" alt="">
                            <p>Since its establishment in 1996, Al Behar Group has played an influential role in the raw
                                materials supply chain industry and has become a well-known Sales & Marketing Hub for
                                different
                                types of Materials, with Al-Behar headquarter office in Amman Jordan, and branches\
                                offices in
                                Egypt, Morocco, Yemen, Nigeria, Europe (Barcelona ) and UAE.</p>
                        </div> <!-- widget item 1 -->
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5">
                        <div class="widget-item-2 mt-30">
                            <h4 class="title">Sections</h4>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="#home"><i class="fal fa-angle-right"></i> Home</a></li>
                                    <li><a href="#letter"><i class="fal fa-angle-right"></i> Letter</a></li>
                                    <li><a href="#about"><i class="fal fa-angle-right"></i> About</a></li>
                                    <li><a href="#group"><i class="fal fa-angle-right"></i> The Group</a></li>
                                    <li><a href="#contact"><i class="fal fa-angle-right"></i> Contact Us</a></li>

                                    {{-- <li><a href="#"><i class="fal fa-angle-right"></i> Terms</a></li> --}}
                                </ul>
                                {{-- <ul>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Details</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Contact</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Business</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Affiliate</a></li>
                                </ul> --}}
                            </div>
                        </div> <!-- widget item 2 -->
                    </div>
                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="widget-item-2 widget-item-3 mt-30">
                            <h4 class="title">Working Hours</h4>
                            <ul>
                                <li>Monday - Friday: 7:00 - 17:00</li>
                                <li>Saturday: 7:00 - 12:00</li>
                                <li>Sunday and holidays: 8:00 - 10:00</li>
                            </ul>
                            <p><span>For more then 30 years,</span> IT Service has been a reliable partner in the field
                                of logistics and cargo forwarding.</p> --}}
                    {{-- <a href="#"><i class="fal fa-angle-right"></i>Discover More</a> --}}
                    {{-- </div> <!-- widget item 3 --> --}}
                    {{-- </div> --}}
                    <div class="col-lg-3 offset-lg-1 col-md-5">
                        <div class="widget-item-2 mt-30">
                            <h4 class="title">The Group</h4>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Al-Behar Edible Oils</a></li>
                                    <li><a href="https://www.albeharconsulting.com" target="_blank"><i
                                                class="fal fa-angle-right"></i> Al-Behar Consulting</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Al-Behar Chemicals</a></li>
                                    <li><a href="http://albehar-engineering.com" target="_blank""><i class="


                                            fal fa-angle-right"></i>
                                            Al-Behar Engineering</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Al-Behar Tazweed</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Al-Behar Paper & Board</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Al-Behar Packaging</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Raw 2 Pack</a></li>
                                    {{-- <li><a href="#"><i class="fal fa-angle-right"></i> Terms</a></li> --}}
                                </ul>
                                {{-- <ul>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Details</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Contact</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Business</a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i> Affiliate</a></li>
                                </ul> --}}
                            </div>
                        </div> <!-- widget item 2 -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright">
                            <p>Copyright By@ <span>Al-Behar Group</span> - 2021</p>
                        </div> <!-- footer copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </footer>

    <!--====== footer PART ENDS ======-->

    <!--====== BACK TO TOP ======-->
    <div class="back-to-top back-to-top-2">
        <a href="">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
    <!--====== BACK TO TOP ======-->



    <!--====== jquery js ======-->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== Circle Progress js ======-->
    <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>

    <!--====== Syotimer js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.syotimer.min.js') }}"></script>

    <!--====== Nice Select js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
