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
                                    data-bs-target="#nav-best" type="button" role="tab" aria-controls="nav-best"
                                    aria-selected="false">Best Rate</button>
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

                            @php
                                $products = App\Models\Product::where('status', 1)
                                    ->take(5)
                                    ->orderBy('id', 'ASC')
                                    ->get();
                            @endphp

                            @if ($products->count() > 0)
                                @foreach ($products as $product)
                                @endforeach
                            @else
                            @endif

                            {{-- @dd($products); --}}

                            {{-- New arrival products  --}}
                            @php
                                $arrival_product = App\Models\Product::where('status', 1)
                                    ->orderBy('id', 'DESC')
                                    ->get();
                            @endphp
                            @if ($arrival_product->count() > 0)

                                <div class="tab-pane fade show active" id="nav-arrivals" role="tabpanel"
                                    aria-labelledby="nav-arrivals-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div
                                            class="swiper-container tpproduct-active-2 tpslider-bottom p-relative tpproduct-priority">
                                            <div class="swiper-wrapper">
                                                @foreach ($arrival_product as $product)
                                                    {{-- @dd($products); --}}
                                                    <div class="swiper-slide">
                                                        <div class="tpproduct p-relative">
                                                            <div class="tpproduct__thumb p-relative text-center">
                                                                <a href="#"><img
                                                                        src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                                        alt=""></a>
                                                                <a class="tpproduct__thumb-img"
                                                                    href="shop-details.html"><img
                                                                        src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                                        alt=""></a>
                                                                <div class="tpproduct__info bage">
                                                                    <span
                                                                        class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount ?? '' }}</span>
                                                                    <span
                                                                        class="tpproduct__info-hot bage__hot">HOT</span>
                                                                </div>
                                                                <div class="tpproduct__shopping">
                                                                    <a class="tpproduct__shopping-wishlist add_whishlist"
                                                                        href="#" value="{{ $product->id }}">
                                                                        <i class="icon-heart icons"></i>
                                                                        {{-- <i class="fas fa-heart icons"></i> --}}
                                                                    </a>
                                                                    <a class="tpproduct__shopping-wishlist"
                                                                        href="#">
                                                                        <i class="icon-layers"></i>
                                                                    </a>
                                                                    <a class="tpproduct__shopping-cart" href="#">
                                                                        <i class="icon-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tpproduct__content">
                                                                <span class="tpproduct__content-weight">
                                                                    <a
                                                                        href="shop-details.html">{{ $product->category->categoryName }}</a>
                                                                </span>
                                                                <h4 class="tpproduct__title">
                                                                    <a
                                                                        href="shop-details-top-.html">{{ $product->product_name }}</a>
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

                                                                    <span>{{ $product->varient[0]->discount_amount ?? '' }}</span>
                                                                    <del>{{ $product->varient[0]->regular_price ?? '' }}</del>
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
                                                @endforeach
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
                            @else
                                <div class="tab-pane fade" id="nav-arrivals" role="tabpanel"
                                    aria-labelledby="nav-arrivals-tab" tabindex="0">
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
                                            <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left"><a
                                                    href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right">
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- featured products  --}}
                            @php
                                $featured_product = App\Models\Product::where('status', 1)
                                    ->where('product_feature', 'feature')
                                    ->take(5)
                                    ->orderBy('id', 'ASC')
                                    ->get();
                            @endphp
                            @if ($featured_product->count() > 0)

                                <div class="tab-pane fade" id="nav-features" role="tabpanel"
                                    aria-labelledby="nav-features-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div
                                            class="swiper-container tpproduct-active-2 tpslider-bottom p-relative tpproduct-priority">
                                            <div class="swiper-wrapper">
                                                @foreach ($featured_product as $product)
                                                    {{-- @dd($products); --}}
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
                                                                        class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}</span>
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
                                                                    <a
                                                                        href="shop-details.html">{{ $product->category->categoryName }}</a>
                                                                </span>
                                                                <h4 class="tpproduct__title">
                                                                    <a
                                                                        href="shop-details-top-.html">{{ $product->product_name }}</a>
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

                                                                    <span>{{ $product->varient[0]->discount_amount }}</span>
                                                                    <del>{{ $product->varient[0]->regular_price }}</del>
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
                                                @endforeach
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
                            @else
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
                                            <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left"><a
                                                    href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right">
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Best Selling  --}}
                            @php
                                $best_selling = App\Models\Product::where('status', 1)
                                    ->where('product_feature', 'top sell')
                                    ->take(5)
                                    ->orderBy('id', 'ASC')
                                    ->get();
                            @endphp
                            @if ($best_selling->count() > 0)
                                <div class="tab-pane fade" id="nav-best" role="tabpanel"
                                    aria-labelledby="nav-best-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div
                                            class="swiper-container tpproduct-active-2 tpslider-bottom p-relative tpproduct-priority">
                                            <div class="swiper-wrapper">
                                                @foreach ($best_selling as $product)
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
                                                                        class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}</span>
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
                                                                    <a
                                                                        href="shop-details.html">{{ $product->category->categoryName }}</a>
                                                                </span>
                                                                <h4 class="tpproduct__title">
                                                                    <a
                                                                        href="shop-details-top-.html">{{ $product->product_name }}</a>
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

                                                                    <span>{{ $product->varient[0]->discount_amount }}</span>
                                                                    <del>{{ $product->varient[0]->regular_price }}</del>
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
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tpproduct-btn">
                                            <div class="tpprduct-arrow tpproduct-btn__prv tpproduct-arrow-left"><a
                                                    href="#"><i class="icon-chevron-left"></i></a></div>
                                            <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right">
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
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
                                                                    href="#"><i class="icon-layers"></i></a>
                                                                <a class="tpproduct__shopping-cart" href="#"><i
                                                                        class="icon-eye"></i></a>
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
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
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
                                            <div class="tpprduct-arrow tpproduct-btn__nxt tpproduct-arrow-right">
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const add_whishlist = document.querySelectorAll('.add_whishlist');
    // console.log(add_whishlist);
    add_whishlist.forEach(element => {
        // console.log(element)


        element.addEventListener('click', function(e) {


            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let product_id = this.getAttribute('value');
            // alert(product_id);

            $.ajax({
                url: '/wishlist/add',
                type: 'POST',
                data: {
                    'product_id': product_id,
                },
                success: function(response) {
                    if (response.status == 200) {
                        toastr.success(response.message);
                    } else {
                        // toastr.warning(response);
                    }
                }
            });
        })
    });
</script>
<!-- product-area-end -->
