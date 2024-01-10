@extends('frontend.master')
@section('maincontent')
<!-- slider-area-start -->
<section class="slider-area tpslider__home-3 tpslider-delay grey-bg slider-three">
    <div class="swiper-container slider-active">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="tpslider grey-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7">
                                <div class="tpslider__content slider-three-content text-center">
                                    <span class="tpslider__sub-title mb-15">Special Offer</span>
                                    <h2 class="tpslider__title mb-25">Vegetable <br> Good For Health</h2>
                                    <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good
                                        and taste even better</p>
                                    <div class="tpslider__btn">
                                        <a class="tp-btn" href="shop-3.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                <div class="tpslider__thumb p-relative">
                                    <img class="tpslider__thumb-img tpslider__three"
                                        src="{{ asset('frontend') }}/assets/img/slider/slider-bg-6.png"
                                        alt="slider-bg">
                                    <div class="tpslider__shape d-none d-lg-block">
                                        <img class="tpslider__shape-three three-shap-one"
                                            src="{{ asset('frontend') }}/assets/img/slider/slider-shape-5.png"
                                            alt="shape">
                                        <img class=" three-shap-two"
                                            src="{{ asset('frontend') }}/assets/img/slider/slider-shape-6.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="tpslider grey-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7">
                                <div class="tpslider__content text-center slider-three-content-two">
                                    <span class="tpslider__sub-title mb-15">Top Deals</span>
                                    <h2 class="tpslider__title mb-25">Hot Deals <br> Recovery For Health</h2>
                                    <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good
                                        and taste even better</p>
                                    <div class="tpslider__btn">
                                        <a class="tp-btn" href="shop-3.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                <div class="tpslider__thumb p-relative pt-50">
                                    <img class="tpslider__thumb-img tpslider__three"
                                        src="{{ asset('frontend') }}/assets/img/slider/slider-bg-7.png"
                                        alt="slider-bg">
                                    <div class="tpslider__shape d-none d-lg-block">
                                        <img class="three-shap-three"
                                            src="{{ asset('frontend') }}/assets/img/slider/slider-shape-5.png"
                                            alt="shape">
                                        <img class="three-shap-four"
                                            src="{{ asset('frontend') }}/assets/img/slider/slider-shape-6.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tpslider__arrow d-none  d-xxl-block">
            <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
            <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
        </div>
    </div>
</section>
<!-- slider-area-end -->

<!-- feature-area-start -->
<section class="feature-area whight-feature grey-bg feature-top">
    <div class="container">
        <div class="feature-bg-round white-bg pt-50 pb-15">
            <div class="tpfeature-border">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-1">
                    <div class="col">
                        <div class="mainfeature__item text-center mb-45">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-6.svg"
                                    alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Fast Delivery</h4>
                                <p>Across West & East India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-45">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-7.svg"
                                    alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">safe payment</h4>
                                <p>100% Secure Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-45">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-8.svg"
                                    alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Online Discount</h4>
                                <p>Add Multi-buy Discount </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-45">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-9.svg"
                                    alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Help Center</h4>
                                <p>Dedicated 24/7 Support </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-45">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-10.svg"
                                    alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Curated items</h4>
                                <p>From Handpicked Sellers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-area-end -->

<!-- product-area-start -->
<section class="weekly-product-area grey-bg whight-product">
    <div class="container">
        <div class="sections__wrapper white-bg pr-50 pl-50">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="tpsection mb-15">
                        <h4 class="tpsection__title text-start brand-product-title">Weekly Food Offers</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tpproduct__all-item">
                        <a href="#">View All <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tpnavtab__area pb-40">
                        <div class="tpproduct__arrow p-relative">
                            <div class="swiper-container tpproduct-active-2 tpslider-bottom p-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tpproduct p-relative tpprogress__hover">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                        alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span
                                                        class="tpproduct__info-discount bage__discount">-50%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist"
                                                        href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i
                                                            class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="shop-details-top-.html">Mangosteen Organic From
                                                        VietNamese</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                </div>
                                                <div class="tpproduct__price mb-5">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                                <div class="tpproduct__progress">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar w-25" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>Sold: <b>16/60</b></span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div
                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: August 4.2021</li>
                                                        <li>LIFE: 60 days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tpproduct p-relative tpprogress__hover">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                        alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span
                                                        class="tpproduct__info-discount bage__discount">-40%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist"
                                                        href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i
                                                            class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <a href="shop-details.html">Fresh Meat</a>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="shop-details.html">Soda Sparkling Water Maker
                                                        (Rose Gold)</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                </div>
                                                <div class="tpproduct__price mb-5">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                                <div class="tpproduct__progress">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar w-25" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>Sold: <b>20/80</b></span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div
                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: August 4.2021</li>
                                                        <li>LIFE: 60 days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tpproduct p-relative tpprogress__hover">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products13-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products35-min.jpg"
                                                        alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span
                                                        class="tpproduct__info-discount bage__discount">-10%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist"
                                                        href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i
                                                            class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="shop-details.html">HOT - Lettuce Fresh Produce
                                                        Fruit Vegetables</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                </div>
                                                <div class="tpproduct__price mb-5">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                                <div class="tpproduct__progress">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar w-75" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>Sold: <b>40/70</b></span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div
                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: August 4.2021</li>
                                                        <li>LIFE: 60 days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tpproduct p-relative tpprogress__hover">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products27-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products14-min.jpg"
                                                        alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span
                                                        class="tpproduct__info-discount bage__discount">-90%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist"
                                                        href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i
                                                            class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <a href="shop-details-3.html">Fresh Fruits</a>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="shop-details-grid.html">Pure Irish Organic Beef
                                                        Quarter Pounder Burgers</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                </div>
                                                <div class="tpproduct__price mb-5">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                                <div class="tpproduct__progress">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar w-25" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>Sold: <b>16/60</b></span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div
                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: August 4.2021</li>
                                                        <li>LIFE: 60 days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tpproduct p-relative tpprogress__hover">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="{{ asset('frontend') }}/assets/img/product/products32-min.jpg"
                                                        alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span
                                                        class="tpproduct__info-discount bage__discount">-50%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist"
                                                        href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
                                                    <a class="tpproduct__shopping-cart" href="#"><i
                                                            class="icon-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpproduct__content">
                                                <span class="tpproduct__content-weight">
                                                    <a href="shop-details-3.html">Vagetables</a>
                                                </span>
                                                <h4 class="tpproduct__title">
                                                    <a href="shop-details-3.html">Ginger Fresh, Whole, Organic
                                                        - 250gram</a>
                                                </h4>
                                                <div class="tpproduct__rating mb-5">
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                    <a href="#"><i class="icon-star_outline1"></i></a>
                                                </div>
                                                <div class="tpproduct__price mb-5">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                                <div class="tpproduct__progress">
                                                    <div class="progress mb-5">
                                                        <div class="progress-bar w-25" role="progressbar"
                                                            aria-label="Basic example" aria-valuenow="75"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>Sold: <b>16/60</b></span>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div
                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                    <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                                </div>
                                                <div class="tpproduct__descrip">
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: August 4.2021</li>
                                                        <li>LIFE: 60 days</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-area-end -->

<!-- banner-area-start -->
<section class="banner-area grey-bg">
    <div class="container">
        <div class="sections__wrapper white-bg pt-20 pl-50 pr-50 pb-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tpbanner__item mb-30">
                        <a href="shop-2.html">
                            <div class="tpbanner__text tpbanner__bg"
                                data-background="{{ asset('frontend') }}/assets/img/banner/banner-4.jpg">
                                <span class="tpbanner__sub-title mb-20">Top offers</span>
                                <h4 class="tpbanner__title mb-20">seafood <br> Fresh & Tasty</h4>
                                <p>Natural, Rich in Nutrition</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tpbanner__item mb-30">
                        <a href="shop-2.html">
                            <div class="tpbanner__text tpbanner__bg"
                                data-background="{{ asset('frontend') }}/assets/img/banner/banner-5.jpg">
                                <span class="tpbanner__sub-title mb-20">Weekend Deals</span>
                                <h4 class="tpbanner__title mb-20">vegetable <br> Best For Family</h4>
                                <p>Top Quality Products</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tpbanner__item mb-30">
                        <a href="shop-2.html">
                            <div class="tpbanner__text tpbanner__bg"
                                data-background="{{ asset('frontend') }}/assets/img/banner/banner-6.jpg">
                                <span class="tpbanner__sub-title mb-20">Top seller</span>
                                <h4 class="tpbanner__title mb-20">fresh Meat <br> Fresh & Tasty</h4>
                                <p>Limited Time: Online Only!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->

<!-- product-area-start -->
<div class="weekly-product-area whight-product grey-bg">
    <div class="container">
        <div class="sections__wrapper white-bg pl-50 pr-50 pb-10">
            <div class="row">
                <div class="col-md-6">
                    <div class="tpnavtab__area tpnavtab__newitem">
                        <nav>
                            <div class="nav tp-nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-arrivals-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-arrivals" type="button" role="tab"
                                    aria-controls="nav-arrivals" aria-selected="true">New Arrivals</button>
                                <button class="nav-link" id="nav-features-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-features" type="button" role="tab"
                                    aria-controls="nav-features" aria-selected="false">Features</button>
                                <button class="nav-link" id="nav-best-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-best" type="button" role="tab"
                                    aria-controls="nav-best" aria-selected="false">Best Rate</button>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tpproduct__all-item">
                        <a href="shop-3.html">See All <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tpnavtab__area pb-40">
                        <div class="tab-content" id="nav-tabContent-tp">
                            <div class="tab-pane fade show active" id="nav-arrivals" role="tabpanel"
                                aria-labelledby="nav-arrivals-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-2 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen Organic
                                                                From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products13-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products35-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-10%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">HOT - Lettuce Fresh
                                                                Produce Fruit Vegetables</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products27-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products14-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-90%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Pure Irish Organic
                                                                Beef Quarter Pounder Burgers</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products32-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products12-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products28-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left"><a
                                                href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right"><a
                                                href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-features" role="tabpanel"
                                aria-labelledby="nav-features-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-2 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen Organic
                                                                From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products32-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products26-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left"><a
                                                href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right">
                                            <a href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-best" role="tabpanel"
                                aria-labelledby="nav-best-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-2 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products21-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products1-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products22-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products11-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products4-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products23-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-10%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">HOT - Lettuce Fresh
                                                                Produce Fruit Vegetables</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products27-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products14-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-90%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Pure Irish
                                                                Organic Beef Quarter Pounder Burgers</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products16-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products11-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products17-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products37-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left"><a
                                                href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right">
                                            <a href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-area-end -->

<!-- product-area-start -->
<section class="weekly-product-area whight-product grey-bg">
    <div class="container">
        <div class="sections__wrapper white-bg pl-50 pr-50">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="tpsection mb-10">
                        <h4 class="tpsection__title brand-product-title">Top Trending Products</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="tpnavtab__area tp-navtab-style-2">
                        <nav>
                            <div class="nav nav-tabs" role="tablist">
                                <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-all" type="button" role="tab"
                                    aria-controls="nav-all" aria-selected="true">All</button>
                                <button class="nav-link" id="nav-meat-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-meat" type="button" role="tab"
                                    aria-controls="nav-meat" aria-selected="false">Sea Food</button>
                                <button class="nav-link" id="nav-vegetables-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vegetables" type="button" role="tab"
                                    aria-controls="nav-vegetables" aria-selected="false">Vegetables</button>
                                <button class="nav-link" id="nav-snacks-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-snacks" type="button" role="tab"
                                    aria-controls="nav-snacks" aria-selected="false">Beans & Peas</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tpnavtab__area pb-40">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-3 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products13-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products35-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-10%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">HOT - Lettuce Fresh
                                                                Produce Fruit Vegetables</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products27-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products14-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-90%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Pure Irish
                                                                Organic Beef Quarter Pounder Burgers</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products32-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products12-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products28-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left-2">
                                            <a href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div
                                            class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right-2">
                                            <a href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-meat" role="tabpanel"
                                aria-labelledby="nav-meat-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-3 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products32-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products29-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products10-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details.html">Fresh Meat</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products26-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products9-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left-2">
                                            <a href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div
                                            class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right-2">
                                            <a href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-vegetables" role="tabpanel"
                                aria-labelledby="nav-vegetables-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-3 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products21-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products1-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products22-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products11-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products4-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products23-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-10%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">HOT - Lettuce Fresh
                                                                Produce Fruit Vegetables</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products27-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products14-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-90%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Pure Irish
                                                                Organic Beef Quarter Pounder Burgers</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products16-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products11-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products17-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products37-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left-2">
                                            <a href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div
                                            class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right-2">
                                            <a href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-snacks" role="tabpanel"
                                aria-labelledby="nav-snacks-tab" tabindex="0">
                                <div class="tpproduct__arrow p-relative">
                                    <div
                                        class="swiper-container tpproduct-active-3 tpslider-bottom p-relative tpproduct-priority">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products21-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products1-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>,
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products13-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products35-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-10%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details.html">HOT - Lettuce Fresh
                                                                Produce Fruit Vegetables</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products27-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products14-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-90%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Pure Irish
                                                                Organic Beef Quarter Pounder Burgers</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products32-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-50%</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Vagetables</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products12-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products28-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tpproduct p-relative">
                                                    <div class="tpproduct__thumb p-relative text-center">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products17-min.jpg"
                                                                alt=""></a>
                                                        <a class="tpproduct__thumb-img"
                                                            href="shop-details-grid.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products37-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
                                                            <span
                                                                class="tpproduct__info-hot bage__hot">HOT</span>
                                                        </div>
                                                        <div class="tpproduct__shopping">
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="wishlist.html"><i
                                                                    class="icon-heart icons"></i></a>
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="#"><i
                                                                    class="icon-layers"></i></a>
                                                            <a class="tpproduct__shopping-cart"
                                                                href="#"><i class="icon-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__content">
                                                        <span class="tpproduct__content-weight">
                                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
                                                        <div class="tpproduct__rating mb-5">
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                            <a href="#"><i
                                                                    class="icon-star_outline1"></i></a>
                                                        </div>
                                                        <div class="tpproduct__price">
                                                            <span>$56.00</span>
                                                            <del>$19.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                            <a class="tp-btn-2" href="cart.html">Add to
                                                                cart</a>
                                                        </div>
                                                        <div class="tpproduct__descrip">
                                                            <ul>
                                                                <li>Type: Organic</li>
                                                                <li>MFG: August 4.2021</li>
                                                                <li>LIFE: 60 days</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tpproduct-btn">
                                        <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left-2">
                                            <a href="#"><i class="icon-chevron-left"></i></a></div>
                                        <div
                                            class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right-2">
                                            <a href="#"><i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-area-end -->

<!-- banner-area-start -->
<section class="tpbanner-area grey-bg">
    <div class="container">
        <div class="sections__wrapper white-bg pl-50 pr-50 pt-30">
            <div class="row">
                <div class="col-12">
                    <div class="tpbannertwo text-center pt-40 pb-45 tpbannertwo__bg"
                        data-background="{{ asset('frontend') }}/assets/img/banner/tpbanner-1.jpg">
                        <span class="tpbannertwo__sub-title mb-5">The Salad</span>
                        <h5 class="tpbannertwo__title mb-30">Fresh & Natural <br> Healthy Food Special Offer
                        </h5>
                        <p>Do not miss the current offers of us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->

<!-- brand-product-area-start -->
<section class="brand-product grey-bg pb-60">
    <div class="container">
        <div class="sections__wrapper white-bg pl-50 pr-50 pb-40 brand-product">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="tpsection mb-15">
                        <h4 class="tpsection__title text-start brand-product-title">Featured Brand Products
                        </h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tpproduct__all-item">
                        <a href="#">View All <i class="icon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gx-3">
                <div class="col-lg-3">
                    <div class="tpbrandproduct__main text-center">
                        <div class="tpbrandproduct__main-thumb mb-20">
                            <img src="{{ asset('frontend') }}/assets/img/brand/brand-thumb-1.png"
                                alt="">
                        </div>
                        <div class="tpbrandproduct__main-contetn">
                            <h4 class="tpbrandproduct__title">Super Market</h4>
                            <p>Nam liber tempor cum soluta nobis eleifend congue doming quod mazim placerat
                                facer possim assum typi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-3">
                        <div class="col-xl-4 col-lg-6">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{ asset('frontend') }}/assets/img/product/products15-min.jpg"
                                        alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a
                                            href="shop-details.html">Lettuce Fresh Produce
                                            Vegetables</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{ asset('frontend') }}/assets/img/product/products30-min.jpg"
                                        alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a
                                            href="shop-details.html">Cheap and delicious fresh
                                            chicken</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{ asset('frontend') }}/assets/img/product/products2-min.jpg"
                                        alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a
                                            href="shop-details.html">Fresh Milk Chocolate Quaker Popped Rice
                                            Crisps</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{ asset('frontend') }}/assets/img/product/products33-min.jpg"
                                        alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a
                                            href="shop-details.html">1kg purple onion/ onion/ dried onion Kinh
                                            men </a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{ asset('frontend') }}/assets/img/product/products38-min.jpg"
                                        alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a
                                            href="shop-details.html">1st Quality Fresh Meat From USA
                                            500g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="tpbrandproduct__item d-flex mb-20">
                                <div class="tpbrandproduct__img p-relative">
                                    <img src="{{ asset('frontend') }}/assets/img/product/products7-min.jpg"
                                        alt="">
                                    <div class="tpproduct__info bage tpbrandproduct__bage">
                                        <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    </div>
                                </div>
                                <div class="tpbrandproduct__contact">
                                    <span class="tpbrandproduct__product-title"><a
                                            href="shop-details.html">Fresh Organic Grape Tomatoes
                                            100g</a></span>
                                    <div class="tpproduct__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <div class="tpproduct__price">
                                        <span>$56.00</span>
                                        <del>$19.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand-product-area-end -->

<!-- testimonial-area-start -->
<section class="testimonial-area pt-60 pb-60">
    <div class="container">
        <div class="testimonial__shape p-relative">
            <img src="{{ asset('frontend') }}/assets/img/shape/tree-leaf-4.svg" alt=""
                class="testimonial__shape-one">
            <img src="{{ asset('frontend') }}/assets/img/shape/tree-leaf-5.svg" alt=""
                class="testimonial__shape-two">
            <img src="{{ asset('frontend') }}/assets/img/shape/tree-leaf-6.png" alt=""
                class="testimonial__shape-three">
        </div>
        <div class="swiper-container tptestimonial-active p-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row justify-content-center p-relative">
                        <div class="col-md-8">
                            <div class="tptestimonial__item text-center ">
                                <div class="tptestimonial__avata mb-25">
                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/test-avata-1.png"
                                        alt="">
                                </div>
                                <div class="tptestimonial__content">
                                    <p>" Also like the fact that I can pick my staples in the brown <br>
                                        paper packs and glass containers at the zero waste section, with an <br>
                                        idea to reduce plastic and also more convenient. "
                                    </p>
                                    <div class="tptestimonial__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <h4 class="tptestimonial__title">Algistino Lionel</h4>
                                    <span class="tptestimonial__avata-position">Web Designer at
                                        Blueskytechco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row justify-content-center p-relative">
                        <div class="col-md-8">
                            <div class="tptestimonial__item text-center ">
                                <div class="tptestimonial__avata mb-25">
                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/test-avata-2.png"
                                        alt="">
                                </div>
                                <div class="tptestimonial__content">
                                    <p>" Also like the fact that I can pick my staples in the brown <br>
                                        paper packs and glass containers at the zero waste section, with an <br>
                                        idea to reduce plastic and also more convenient. "
                                    </p>
                                    <div class="tptestimonial__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <h4 class="tptestimonial__title">Jackson Roben</h4>
                                    <span class="tptestimonial__avata-position">Web Designer at
                                        Blueskytechco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row justify-content-center p-relative">
                        <div class="col-md-8">
                            <div class="tptestimonial__item text-center ">
                                <div class="tptestimonial__avata mb-25">
                                    <img src="{{ asset('frontend') }}/assets/img/testimonial/test-avata-3.png"
                                        alt="">
                                </div>
                                <div class="tptestimonial__content">
                                    <p>" Also like the fact that I can pick my staples in the brown <br>
                                        paper packs and glass containers at the zero waste section, with an <br>
                                        idea to reduce plastic and also more convenient. "
                                    </p>
                                    <div class="tptestimonial__rating mb-5">
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                    </div>
                                    <h4 class="tptestimonial__title">Lionel</h4>
                                    <span class="tptestimonial__avata-position">Web Designer at
                                        Blueskytechco</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tptestimonial-arrow d-none d-md-block">
                <button class="testi-arrow tptestimonial-arrow-left"><i
                        class="icon-chevron-left"></i></button>
                <button class="testi-arrow tptestimonial-arrow-right"><i
                        class="icon-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- cart-area-start -->
<section class="cart-area pt-30">
    <div class="container">
        <div class="swiper-container product-details-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tpcartitem">
                        <div class="tpcartitem__thumb mb-15">
                            <a href="#"><img
                                    src="{{ asset('frontend') }}/assets/img/cart/cart-1.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpcartitem__content">
                            <h3 class="tpcartitem__title mb-15"><a href="shop-3.html">Fresh Vegetables</a>
                            </h3>
                            <ul>
                                <li><a href="shop-details-4.html">Exotic Fruits & Veggies</a></li>
                                <li><a href="shop-details-3.html">Fresh Fruits</a></li>
                                <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                <li><a href="shop-details-4.html">Herbs & Seasonings</a></li>
                            </ul>
                            <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                        class="icon-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpcartitem">
                        <div class="tpcartitem__thumb mb-15">
                            <a href="#"><img
                                    src="{{ asset('frontend') }}/assets/img/cart/cart-2.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpcartitem__content">
                            <h3 class="tpcartitem__title mb-15"><a href="shop-details-3.html">Fresh
                                    Fruits</a></h3>
                            <ul>
                                <li><a href="shop-details-3.html">Exotic Fruits & Veggies</a></li>
                                <li><a href="shop-details-3.html">Fresh Fruits</a></li>
                                <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                <li><a href="shop-details-3.html">Herbs & Seasonings</a></li>
                            </ul>
                            <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                        class="icon-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpcartitem">
                        <div class="tpcartitem__thumb mb-15">
                            <a href="#"><img
                                    src="{{ asset('frontend') }}/assets/img/cart/cart-3.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpcartitem__content">
                            <h3 class="tpcartitem__title mb-15"><a href="shop-3.html">Fruit Drink</a></h3>
                            <ul>
                                <li><a href="shop-details-3.html">Exotic Fruits & Veggies</a></li>
                                <li><a href="shop-details-3.html">Fresh Fruits</a></li>
                                <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                <li><a href="shop-details-3.html">Herbs & Seasonings</a></li>
                            </ul>
                            <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                        class="icon-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpcartitem">
                        <div class="tpcartitem__thumb mb-15">
                            <a href="#"><img
                                    src="{{ asset('frontend') }}/assets/img/cart/cart-4.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpcartitem__content">
                            <h3 class="tpcartitem__title mb-15"><a href="shop-3.html">Biscuits Snack</a>
                            </h3>
                            <ul>
                                <li><a href="shop-details-3.html">Exotic Fruits & Veggies</a></li>
                                <li><a href="shop-details-3.html">Fresh Fruits</a></li>
                                <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                <li><a href="shop-details-3.html">Herbs & Seasonings</a></li>
                            </ul>
                            <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                        class="icon-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpcartitem">
                        <div class="tpcartitem__thumb mb-15">
                            <a href="#"><img
                                    src="{{ asset('frontend') }}/assets/img/cart/cart-5.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpcartitem__content">
                            <h3 class="tpcartitem__title mb-15"><a href="shop-3.html">Meat & Eggs</a></h3>
                            <ul>
                                <li><a href="shop-details-3.html">Exotic Fruits & Veggies</a></li>
                                <li><a href="shop-details-3.html">Fresh Fruits</a></li>
                                <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                <li><a href="shop-details-3.html">Herbs & Seasonings</a></li>
                            </ul>
                            <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                        class="icon-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpcartitem">
                        <div class="tpcartitem__thumb mb-15">
                            <a href="#"><img
                                    src="{{ asset('frontend') }}/assets/img/cart/cart-6.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpcartitem__content">
                            <h3 class="tpcartitem__title mb-15"><a href="shop-3.html">Fresh Milk</a></h3>
                            <ul>
                                <li><a href="shop-details-4.html">Exotic Fruits & Veggies</a></li>
                                <li><a href="shop-details-3.html">Fresh Fruits</a></li>
                                <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                <li><a href="shop-details-4.html">Herbs & Seasonings</a></li>
                            </ul>
                            <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                        class="icon-chevron-right"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart-area-end -->

<!-- blog-area-start -->
<section class="blog-area pb-20 pt-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <div class="tpsection mb-15">
                    <h4 class="tpsection__title text-start brand-product-title">Our Latest News</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tpproduct__all-item">
                    <a href="blog.html">View All <i class="icon-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="swiper-container tpblog-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-1.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Avocado Grilled Salmon,
                                    Rich In Nutrients For The Body</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-2.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                                    Fresh Beef For Women's Health</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-3.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits &
                                    Seafoods Good For Pregnancy</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-4.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Shopping</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Summer Breakfast For The
                                    Healthy Morning With Tomatoes</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-5.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="#">Foods</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Popular Reasons You Must
                                    Drinks Juice Everyday</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-6.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Perfect Quality Reasonable
                                    Price For Your Family</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-7.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Dairy Farm</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits
                                    Seafoods Good For Pregnancy</a></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img
                                    src="{{ asset('frontend') }}/assets/img/blog/blog-bg-8.jpg"
                                    alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="#">organis</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                                    Fresh Beef For Women’s Health</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->
@endsection