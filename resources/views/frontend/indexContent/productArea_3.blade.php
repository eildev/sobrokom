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
                                    data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                                    aria-selected="true">All</button>
                                @php
                                    $cats = App\Models\Category::all();
                                @endphp
                                @foreach ($cats as $cat)
                                    <button class="nav-link" id="nav-meat-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ $cat->slug }}" type="button" role="tab"
                                        aria-controls="nav-meat" aria-selected="false">{{ $cat->categoryName }}</button>
                                @endforeach
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tpnavtab__area pb-40">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- All Product here without Condition -->
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
                                                            <a href="shop-details-top-.html">Mangosteen
                                                                Organic From VietNamese</a>
                                                        </h4>
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
                                                            <a href="shop-details.html">Soda Sparkling Water
                                                                Maker (Rose Gold)</a>
                                                        </h4>
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
                                                            <a href="shop-details.html">HOT - Lettuce Fresh
                                                                Produce Fruit Vegetables</a>
                                                        </h4>
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
                                                            <a href="shop-details-grid.html">Pure Irish
                                                                Organic Beef Quarter Pounder Burgers</a>
                                                        </h4>
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
                                                            <a href="shop-details-3.html">Ginger Fresh, Whole,
                                                                Organic - 250gram</a>
                                                        </h4>
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
                                                        <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                                src="{{ asset('frontend') }}/assets/img/product/products28-min.jpg"
                                                                alt=""></a>
                                                        <div class="tpproduct__info bage">
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-40%</span>
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
                                                            <a href="shop-details-grid.html">Laffy Taffy Laff
                                                                Bites Gone Bananas - 4 Packs</a>
                                                        </h4>
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
                                            <a href="#"><i class="icon-chevron-left"></i></a>
                                        </div>
                                        <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right-2">
                                            <a href="#"><i class="icon-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach ($cats as $cat)
                                <!-- Category Wise Product here -->
                                <div class="tab-pane fade" id="{{ $cat->slug }}" role="tabpanel"
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
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist"
                                                                    href="wishlist.html"><i
                                                                        class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist"
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            </div>
                                                            <div class="tpproduct__shopping">
                                                                <a class="tpproduct__shopping-wishlist"
                                                                    href="wishlist.html"><i
                                                                        class="icon-heart icons"></i></a>
                                                                <a class="tpproduct__shopping-wishlist"
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right-2">
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-area-end -->
