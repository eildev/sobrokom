<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Orfarm - Multipurpose eCommerce HTML5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icon-dukamarket.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area-start -->
    <header>
        <!-- topbar-start -->
        @include('frontend.body.topbar')
        <!-- topbar-end -->
        <!-- topbar-start -->
        <div class="header__main-area secondary-header d-none d-xl-block">
            <div class="container">
                <div class="header__for-megamenu p-relative">

                    <!-- search-menu-start -->
                    @include('frontend.body.searchmenu')
                    <!-- search-menu-end -->
                    <!-- main-menu-start -->
                    @include('frontend.body.navbar')
                    <!-- main-menu-end -->

                </div>
            </div>
        </div>
        <!-- topbar-end -->

        <!-- header-search -->
                    @include('frontend.body.headerSearch')
        <!-- header-search-end -->

        <!-- header-cart-start -->
                    @include('frontend.body.headerCart')
        <!-- header-cart-end -->

        <!-- mobile-menu-area -->
                    @include('frontend.body.mobileMenu')
        <!-- mobile-menu-area-end -->

        <!-- sidebar-menu-area -->
                    @include('frontend.body.sidebar')
        <!-- sidebar-menu-area-end -->
    </header>
    <!-- header-area-end -->

    <main>

        @yield('maincontent')

    </main>

    <!-- footer-area-start -->
    <footer>
        <div class="tpfooter__area theme-bg-2 pt-55 footer-border">
            <div class="tpfooter__top pb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tpfooter__widget footer-col-1 mb-50">
                                <h4 class="tpfooter__widget-title">Let Us Help You</h4>
                                <p>If you have any question, please <br> contact us at:
                                    <a href="mailto:support@example.com">support@example.com</a>
                                </p>
                                <div class="tpfooter__widget-social mt-45">
                                    <span class="tpfooter__widget-social-title mb-5">Social Media:</span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="tpfooter__widget footer-col-2 mb-50">
                                <h4 class="tpfooter__widget-title">Looking for Orfarm?</h4>
                                <p>68 St. Vicent Place, Glasgow, Greater <br> Newyork NH2012, UK.</p>
                                <div class="tpfooter__widget-time-info mt-35">
                                    <span>Monday – Friday: <b>8:10 AM – 6:10 PM</b></span>
                                    <span>Saturday: <b>10:10 AM – 06:10 PM</b></span>
                                    <span>Sunday: <b>Close</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-5">
                            <div class="tpfooter__widget footer-col-3 mb-50">
                                <h4 class="tpfooter__widget-title">HOT CATEGORIES</h4>
                                <div class="tpfooter__widget-links">
                                    <ul>
                                        <li><a href="#">Fruits & Vegetables</a></li>
                                        <li><a href="#">Dairy Products</a></li>
                                        <li><a href="#">Package Foods</a></li>
                                        <li><a href="#">Beverage</a></li>
                                        <li><a href="#">Health & Wellness</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                            <div class="tpfooter__widget footer-col-4 mb-50">
                                <h4 class="tpfooter__widget-title">Our newsletter</h4>
                                <div class="tpfooter__widget-newsletter">
                                    <p>Subscribe to the Orfarm mailing list to receive updates <br> on new arrivals &
                                        other information.</p>
                                    <form action="index.html">
                                        <span><i><img src="{{ asset('frontend') }}/assets/img/shape/message-1.svg"
                                                    alt=""></i></span>
                                        <input type="email" placeholder="Your email address...">
                                        <button
                                            class="tpfooter__widget-newsletter-submit tp-news-btn">Subscribe</button>
                                    </form>
                                    <div class="tpfooter__widget-newsletter-check mt-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I accept terms & conditions & privacy policy.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tpfooter___bottom pt-40 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <div class="tpfooter__copyright">
                                <span class="tpfooter__copyright-text">Copyright © <a href="#">ORFARM</a> all
                                    rights reserved. Powered by <a href="#">ThemePure</a>.</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <div class="tpfooter__copyright-thumb text-end">
                                <img src="{{ asset('frontend') }}/assets/img/shape/footer-payment.png "
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/waypoints.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/nice-select.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/counterup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/meanmenu.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>

</html>
