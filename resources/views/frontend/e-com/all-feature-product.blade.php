@extends('frontend.master')
@section('maincontent')


    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area grey-bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                            <span class="tp-breadcrumb__active"><a href="{{ route('home') }}">Home</a></span>
                            <span class="dvdr">/</span>
                            <span>Features</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- shop-area-start -->
    <section class="shop-area-start grey-bg pb-200">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12">
                    <div class="tpshop__leftbar">
                        <div class="tpshop__widget mb-30 pb-25">
                            <h4 class="tpshop__widget-title">Product Features</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                <label class="form-check-label" for="flexCheckDefault9">
                                    New Arrivals (8)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Feature (12)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Trending (09)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                <label class="form-check-label" for="flexCheckDefault4">
                                    Best Rate (05)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                <label class="form-check-label" for="flexCheckDefault5">
                                    Weekend Deals (09)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                <label class="form-check-label" for="flexCheckDefault6">
                                    Top Seller (05)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                <label class="form-check-label" for="flexCheckDefault7">
                                    Top Offers (04)
                                </label>
                            </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                            <h4 class="tpshop__widget-title">Product Categories</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked
                                    id="flexCheckDefault9">
                                <label class="form-check-label" for="flexCheckDefault9">
                                    Biscuits & Snacks (08)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Fresh Fruits (12)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked
                                    id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Exotic Fruits (09)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked
                                    id="flexCheckDefault4">
                                <label class="form-check-label" for="flexCheckDefault4">
                                    Breads & Bakery (05)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                <label class="form-check-label" for="flexCheckDefault5">
                                    Breakfast & Dairy (09)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                <label class="form-check-label" for="flexCheckDefault6">
                                    Honey (05)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                <label class="form-check-label" for="flexCheckDefault7">
                                    Milk & Flavoured (04)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                <label class="form-check-label" for="flexCheckDefault8">
                                    Meats & Seafood (08)
                                </label>
                            </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                            <h4 class="tpshop__widget-title mb-20">FILTER BY PRICE</h4>
                            <div class="productsidebar">
                                <div class="productsidebar__head">
                                </div>
                                <div class="productsidebar__range">

                                    <label for="customRange2" class="form-label">Price range</label>
                                    <input type="range" class="form-range" min="0" max="5"
                                        id="customRange2">

                                    {{-- <div id="slider-range"></div>
                                    <div class="price-filter mt-10">
                                        <input type="text" id="amount">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="productsidebar__btn mt-15 mb-15">
                                <a href="#">FILTER</a>
                            </div>
                        </div>
                        {{-- <div class="tpshop__widget mb-30 pb-25">
                            <h4 class="tpshop__widget-title mb-20">Filter by Color</h4>
                            <div class="tpshop__widget-color-box">
                                <div class="form-check">
                                    <input class="form-check-input black-input" type="checkbox" value=""
                                        id="flexCheckDefault12">
                                    <label class="form-check-label" for="flexCheckDefault12">
                                        Black
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input blue-input" type="checkbox" value="" checked
                                        id="flexCheckChecked13">
                                    <label class="form-check-label" for="flexCheckChecked13">
                                        Blue
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input brown-input" type="checkbox" value="" checked
                                        id="flexCheckChecked18">
                                    <label class="form-check-label" for="flexCheckChecked18">
                                        Brown
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input grey-input" type="checkbox" value=""
                                        id="flexCheckChecked14">
                                    <label class="form-check-label" for="flexCheckChecked14">
                                        Gray
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input green-input" type="checkbox" value=""
                                        id="flexCheckChecked15">
                                    <label class="form-check-label" for="flexCheckChecked15">
                                        Green
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input orange-input" type="checkbox" value=""
                                        id="flexCheckChecked16">
                                    <label class="form-check-label" for="flexCheckChecked16">
                                        Yellow
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input red-input" type="checkbox" value=""
                                        id="flexCheckChecked17">
                                    <label class="form-check-label" for="flexCheckChecked17">
                                        Red
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="tpshop__widget mb-30 pb-25">
                            <h4 class="tpshop__widget-title">FILTER BY BRAND</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
                                <label class="form-check-label" for="flexCheckDefault18">
                                    Chrome Hearts (15)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19">
                                <label class="form-check-label" for="flexCheckDefault19">
                                    Dominique Aurientis (15)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked
                                    id="flexCheckDefault20">
                                <label class="form-check-label" for="flexCheckDefault20">
                                    Galliano (15)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked
                                    id="flexCheckDefault21">
                                <label class="form-check-label" for="flexCheckDefault21">
                                    Georgine (15)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                                <label class="form-check-label" for="flexCheckDefault22">
                                    Matthew Christopher (15)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23">
                                <label class="form-check-label" for="flexCheckDefault23">
                                    Paul Gaultier (15)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tpshop__widget">
                        <div class="tpshop__sidbar-thumb mt-35">
                            <img src="assets/img/shape/sidebar-product-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-12 col-md-12">
                    <div class="tpshop__top ml-60">
                        <div class="tab-content" id="nav-tabContent">
                            @if ($features)
                                <div
                                    class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                    @foreach ($features as $product)
                                        <div class="col">
                                            <div class="tpproduct p-relative mb-20">
                                                <div class="tpproduct__thumb p-relative text-center">
                                                    <a href="{{ route('product.details', $product->slug) }}"><img
                                                            src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                            alt="Product Image"></a>
                                                    <a class="tpproduct__thumb-img"
                                                        href="{{ route('product.details', $product->slug) }}"><img
                                                            src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                            alt="Products Image"></a>
                                                    <div class="tpproduct__info bage">
                                                        @if ($product->varient[0]->discount > 0)
                                                            <span
                                                                class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}%</span>
                                                        @endif

                                                        @if ($product->varient[0]->discount > 0)
                                                            <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                        @endif

                                                    </div>
                                                    <div class="tpproduct__shopping">
                                                        @auth
                                                            <a class="tpproduct__shopping-wishlist add_whishlist"
                                                                href="#" value="{{ $product->id }}">
                                                                <!-- <i class="icon-heart icons"></i> -->
                                                                @auth
                                                                    @php
                                                                        $loved = App\Models\WishList::where('user_id', Auth::user()->id)
                                                                            ->where('product_id', $product->id)
                                                                            ->first();
                                                                    @endphp
                                                                @endauth
                                                                <i style="color: {{ !empty($loved->loved) ? 'red' : '' }}"
                                                                    class="fas fa-heart icons"></i>
                                                            </a>
                                                        @else
                                                            <a class="tpproduct__shopping-wishlist"
                                                                href="{{ route('login') }}">
                                                                <i class="fas fa-heart icons"></i>
                                                            </a>
                                                        @endauth
                                                        <a class="tpproduct__shopping-cart"
                                                            href="{{ route('product.details', $product->slug) }}"><i
                                                                class="icon-eye"></i></a>
                                                    </div>
                                                </div>
                                                <div class="tpproduct__content">
                                                    <span class="tpproduct__content-weight">
                                                        <a
                                                            href="{{ route('category.wise.product', $product->category->slug) }}">{{ $product->category->categoryName }}</a>,
                                                        <a
                                                            href="{{ route('subcategory.wise.product', $product->subcategory->slug) }}">{{ $product->subcategory->subcategoryName }}</a>
                                                    </span>
                                                    <h4 class="tpproduct__title">
                                                        <a
                                                            href="{{ route('product.details', $product->slug) }}">{{ $product->product_name }}</a>
                                                    </h4>
                                                    <div class="tpproduct__rating mb-5">
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                        <a href="#"><i class="icon-star_outline1"></i></a>
                                                    </div>
                                                    <div class="tpproduct__price">
                                                        <span>৳{{ $product->varient[0]->discount_amount }}</span>
                                                        <span class="text-secondary"
                                                            style="font-size: 14px">/{{ $product->varient[0]->unit }}</span>
                                                        @if ($product->varient[0]->discount > 0)
                                                            <del>৳{{ $product->varient[0]->regular_price }}</del>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="tpproduct__hover-text">
                                                    <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                        <form method="POST" id="add_to_cart_form">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}"
                                                                name="product_id">
                                                            <input type="hidden" value="{{ $product->varient[0]->id }}"
                                                                name="variant_id">
                                                            <input type="hidden"
                                                                value="{{ $product->varient[0]->discount_amount }}"
                                                                name="selling_price">
                                                            <button class="tp-btn-2">Add to
                                                                cart</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @else
                                <div
                                    class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                    <div class="col">
                                        <div class="tpproduct p-relative mb-20">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products21-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img
                                                        src="assets/img/product/products1-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
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
                                                <div class="tpproduct__price">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products22-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img
                                                        src="assets/img/product/products11-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose
                                                        Gold)</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products4-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img
                                                        src="assets/img/product/products23-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-10%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit
                                                        Vegetables</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products27-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="assets/img/product/products14-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-90%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter
                                                        Pounder Burgers</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products16-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img
                                                        src="assets/img/product/products11-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
                                                            class="icon-heart icons"></i></a>
                                                    <a class="tpproduct__shopping-wishlist" href="#"><i
                                                            class="icon-layers"></i></a>
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
                                                    <a href="shop-details-3.html">Ginger Fresh, Whole, Organic -
                                                        250gram</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products17-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img
                                                        src="assets/img/product/products37-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details-grid.html">Laffy Taffy Laff Bites Gone
                                                        Bananas -
                                                        4 Packs</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative mb-20">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products29-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="assets/img/product/products30-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                <div class="tpproduct__price">
                                                    <span>$56.00</span>
                                                    <del>$19.00</del>
                                                </div>
                                            </div>
                                            <div class="tpproduct__hover-text">
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products9-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="assets/img/product/products10-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-40%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details-top.html">Soda Sparkling Water Maker (Rose
                                                        Gold)</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products13-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="assets/img/product/products35-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-10%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details.html">HOT - Lettuce Fresh Produce Fruit
                                                        Vegetables</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products27-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="assets/img/product/products14-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-90%</span>
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details-grid.html">Pure Irish Organic Beef Quarter
                                                        Pounder Burgers</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                                    <div class="col">
                                        <div class="tpproduct p-relative">
                                            <div class="tpproduct__thumb p-relative text-center">
                                                <a href="#"><img src="assets/img/product/products15-min.jpg"
                                                        alt=""></a>
                                                <a class="tpproduct__thumb-img" href="shop-details.html"><img
                                                        src="assets/img/product/products32-min.jpg" alt=""></a>
                                                <div class="tpproduct__info bage">
                                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                </div>
                                                <div class="tpproduct__shopping">
                                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
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
                                                    <a href="shop-details-3.html">Ginger Fresh, Whole, Organic -
                                                        250gram</a>
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
                                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
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
                            @endif
                        </div>

                        {{-- pagination  --}}
                        <div class="basic-pagination text-center mt-35 d-flex justify-content-center">
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($features->onFirstPage())
                                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                        <span class="page-link pt-0" aria-hidden="true">&lsaquo;</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link pt-0" href="{{ $features->previousPageUrl() }}"
                                            rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($features->getUrlRange(1, $features->lastPage()) as $page => $url)
                                    @if ($page == $features->currentPage())
                                        <li class="page-item active" aria-current="page"><span
                                                class="page-link pt-0">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link pt-0"
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($features->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link pt-0" href="{{ $features->nextPageUrl() }}" rel="next"
                                            aria-label="@lang('pagination.next')">&rsaquo;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                        <span class="page-link pt-0" aria-hidden="true">&rsaquo;</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->


    <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->
@endsection
