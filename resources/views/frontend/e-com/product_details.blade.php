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
                            <span class="tp-breadcrumb__active"><a
                                    href="{{ route('category.wise.product', $product->category->slug) }}">{{ $product->category->categoryName }}</a></span>
                            <span class="dvdr">/</span>
                            <span class="tp-breadcrumb__active"><a
                                    href="{{ route('subcategory.wise.product', $product->subcategory->slug) }}">{{ $product->subcategory->subcategoryName }}</a></span>
                            <span class="dvdr">/</span>
                            <span>{{ $product->product_name }}</span>
                            {{-- <span>{{dd($product->varient);}}</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- shop-details-area-start -->
    <section class="shopdetails-area grey-bg pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <div class="tpdetails__area mr-60 pb-30">
                        <div class="tpdetails__product mb-30">
                            <div class="tpdetails__title-box">
                                <h3 class="tpdetails__title">{{ $product->product_name }}</h3>
                                <ul class="tpdetails__brand">
                                    <li> Brands: <a
                                            href="{{ route('brand.wise.product', $product->brand->slug) }}">{{ $product->brand->BrandName }}</a>
                                    </li>
                                    <li>
                                        <i class="icon-star_outline1"></i>
                                        <i class="icon-star_outline1"></i>
                                        <i class="icon-star_outline1"></i>
                                        <i class="icon-star_outline1"></i>
                                        <i class="icon-star_outline1"></i>
                                        <b>02 Reviews</b>
                                    </li>
                                    <li>
                                        SKU: <span>{{ $product->sku }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tpdetails__box">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="tpproduct-details__nab">
                                            <div class="tab-content" id="nav-tabContents">

                                                @php
                                                    $galleries = App\Models\ProductGallery::where('product_id', $product->id);

                                                @endphp
                                                @foreach ($product->gallary as $key => $gallery)
                                                    <div class="tab-pane fade w-img show {{ $key == 0 ? 'active' : '' }}"
                                                        id="nav-home{{ $gallery->id }}" role="tabpanel"
                                                        aria-labelledby="nav-home-tab" tabindex="0">
                                                        <img src="{{ asset('/uploads/products/gallery/' . $gallery->image) }}"
                                                            alt="">
                                                        <div class="tpproduct__info bage">
                                                            @if ($product->varient[0]->discount > 0)
                                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <nav>
                                                <div class="nav nav-tabs justify-content-center" id="nav-tab"
                                                    role="tablist">
                                                    <!-- <button class="active nav-link" id="nav-home-tab" data-bs-toggle="tab"
                                                                                              </button> -->
                                                    @foreach ($product->gallary as $gallery)
                                                        <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-home{{ $gallery->id }}" type="button"
                                                            role="tab" aria-controls="nav-home" aria-selected="true">
                                                            <img src="{{ asset('/uploads/products/gallery/' . $gallery->image) }}"
                                                                alt="">
                                                        </button>
                                                    @endforeach
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="product__details">


                                            <div class="product__details-price-box">
                                                <h5 class="product__details-price">
                                                    ৳{{ $product->varient[0]->discount_amount }}</h5>
                                                <ul class="product__details-info-list">
                                                    <li>{{ $product->short_desc }}</li>
                                                </ul>

                                                {{-- variant price --}}
                                                {{-- @if ($product->varient->count() > 1)
                                                    @php
                                                        $variants = $product->varient;
                                                    @endphp

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="tpnavtab__area pb-40">
                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                    @foreach ($variants as $variant)
                                                                        <button class="nav-link active text-capitalize" id="nav-all-tab"
                                                                            data-bs-toggle="tab" data-bs-target="#nav-all-{{$variant->id}}"
                                                                            type="button" role="tab"
                                                                            aria-controls="nav-all" aria-selected="true">{{$variant->color}}</button>
                                                                        @endforeach
                                                                    </div>
                                                                </nav>

                                                                <div>
                                                                    @foreach ($variants as $variant)
                                                                    <h1 class="product__details-price">{{$variant->discount_amount}}</h1>
                                                                    <div><p class="border-1">{{$variant->size}}</p></div>
                                                                    @endforeach
                                                                </div>

                                                                <div class="tab-content" id="nav-tabContent">
                                                                    @foreach ($product->varient as $key => $variant)
                                                                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="nav-all-{{$variant->id}}"
                                                                        role="tabpanel" aria-labelledby="nav-all-tab"
                                                                        tabindex="0">


                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Price</th>
                                                                                    <th>Discount</th>
                                                                                    <th>Sale Price</th>
                                                                                    <th>Size</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>{{$variant->regular_price}}</td>
                                                                                    <td>{{$variant->discount}}</td>
                                                                                    <td>{{$variant->discount_amount}}</td>
                                                                                    <td>{{$variant->size}}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    @endforeach
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                @else
                                                    <h5 class="product__details-price">
                                                        ৳{{ $product->varient[0]->discount_amount }}</h5>
                                                    <ul class="product__details-info-list">
                                                        <li>{{ $product->short_desc }}</li>
                                                    </ul>
                                                @endif --}}



                                            </div>

                                            <div class="product__details-cart">
                                                <div class="product__details-quantity d-flex align-items-center mb-15">
                                                    <b>Qty:</b>
                                                    <div class="product__details-count mr-10">
                                                        <span class="cart-minus"><i class="far fa-minus"></i></span>
                                                        <input class="tp-cart-input" id="pr_quantity" type="text"
                                                            value="1">
                                                        <span class="cart-plus"><i class="far fa-plus"></i></span>
                                                    </div>
                                                    <div class="product__details-btn">
                                                        <form id="">

                                                            <input type="hidden" value="{{ $product->id }}"
                                                                name="product_id" id="product_id">
                                                            <input type="hidden" value="{{ $product->varient[0]->id }}"
                                                                name="variant_id" id="variant_id">
                                                            <input type="hidden"
                                                                value="{{ $product->varient[0]->discount_amount }}"
                                                                name="selling_price" id="selling_price">
                                                            <button class="tp-btn-2 px-5 py-1" id="details_cart">Add
                                                                to
                                                                cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <ul class="product__details-check">
                                                    @auth
                                                        <li>
                                                            <a class="" href="#" value="{{ $product->id }}">
                                                                <!-- <i class="icon-heart icons"></i> -->
                                                                @auth
                                                                    @php
                                                                        $loved = App\Models\WishList::where('user_id', Auth::user()->id)
                                                                            ->where('product_id', $product->id)
                                                                            ->first();
                                                                    @endphp
                                                                @endauth
                                                                <i style="color: {{ !empty($loved->loved) ? 'red' : '' }}"
                                                                    class="icon-heart icons"></i> add to
                                                                wishlist
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a class="" href="{{ route('login') }}">
                                                                <i class="icon-heart icons"></i> add to
                                                                wishlist
                                                            </a>
                                                        </li>
                                                    @endauth
                                                    <li>
                                                        <a href="#"><i class="icon-share-2"></i> Share</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product__details-stock mb-25">
                                                <ul>
                                                    <li>Availability: <i>{{ $product->varient[0]->stock_quantity ?? 0 }}
                                                            Instock</i>
                                                    </li>
                                                    <li>Category: <span>{{ $product->category->categoryName }} </span>
                                                    </li>
                                                    <li>Subcategory: <span>{{ $product->subcategory->subcategoryName }}
                                                        </span>
                                                    </li>
                                                    <li class="text-capitalize">Tags: {{ $product->tags }}</li>
                                                </ul>
                                            </div>
                                            <div class="product__details-payment text-center">
                                                <img src="{{ asset('frontend') }}/assets/img/shape/footer-payment.png "
                                                    alt="">
                                                <span>Guarantee safe & Secure checkout</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tpdescription__box">
                            <div class="tpdescription__box-center d-flex align-items-center justify-content-center">
                                <nav>
                                    <div class="nav nav-tabs" role="tablist">
                                        <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-description" type="button" role="tab"
                                            aria-controls="nav-description" aria-selected="true">Product
                                            Description</button>

                                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-review" type="button" role="tab"
                                            aria-controls="nav-review" aria-selected="false">Reviews (0)</button>
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                    aria-labelledby="nav-description-tab" tabindex="0">

                                    <div class="tpdescription__content">
                                        <p> {{ $product->long_desc }}</p>
                                    </div>
                                    {{-- <div
                                        class="tpdescription__product-wrapper mt-30 mb-30 d-flex justify-content-between align-items-center">
                                        <div class="tpdescription__product-info">
                                            <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                                            <ul class="tpdescription__product-info">
                                                <li>Material: Plastic, Wood</li>
                                                <li>Legs: Lacquered oak and black painted oak</li>
                                                <li>Dimensions and Weight: Height: 80 cm, Weight: 5.3 kg</li>
                                                <li>Length: 48cm</li>
                                                <li>Depth: 52 cm</li>
                                            </ul>
                                            <p>Lemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut <br>
                                                fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem <br>
                                                sequi nesciunt.</p>
                                        </div>
                                        <div class="tpdescription__product-thumb">
                                            <img src="{{ asset('frontend') }}/assets/img/product/product-single-1.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="tpdescription__video">
                                        <h5 class="tpdescription__product-title">PRODUCT DETAILS</h5>
                                        <p>Form is an armless modern chair with a minimalistic expression. With a simple and
                                            contemporary design Form Chair has a soft and welcoming ilhouette and a
                                            distinctly residential look. The legs appear almost as if they are growing out
                                            of the shell. This gives the design flexibility and makes it possible to vary
                                            the frame. Unika is a mouth blown series of small, glass pendant lamps,
                                            originally designed for the Restaurant Gronbech. Est eum itaque maiores qui
                                            blanditiis architecto. Eligendi saepe rem ut. Cumque quia earum eligendi. </p>
                                        <div class="tpdescription__video-wrapper p-relative mt-30 mb-35 w-img">
                                            <img src="{{ asset('frontend') }}/assets/img/product/product-video1.jpg"
                                                alt="">
                                            <div class="tpvideo__video-btn">
                                                <a class="tpvideo__video-icon popup-video"
                                                    href="https://www.youtube.com/watch?v=rLrV5Tel7zw">
                                                    <i>
                                                        <svg width="20" height="22" viewBox="0 0 20 22"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.6499 6.58886L15.651 6.58953C17.8499 7.85553 18.7829 9.42511 18.7829 10.8432C18.7829 12.2613 17.8499 13.8308 15.651 15.0968L15.6499 15.0975L12.0218 17.195L8.3948 19.2919C8.3946 19.292 8.3944 19.2921 8.3942 19.2922C6.19546 20.558 4.36817 20.5794 3.13833 19.8697C1.9087 19.1602 1.01562 17.5694 1.01562 15.0382V10.8432V6.64818C1.01562 4.10132 1.90954 2.51221 3.13721 1.80666C4.36609 1.1004 6.1936 1.12735 8.3942 2.39416C8.3944 2.39428 8.3946 2.3944 8.3948 2.39451L12.0218 4.49135L15.6499 6.58886Z"
                                                                stroke="white" stroke-width="1.5" stroke-miterlimit="10"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="tpdescription__product-title">Product supreme quality</h5>
                                        <p>Form is an armless modern chair with a minimalistic expression. With a simple and
                                            contemporary design Form Chair has a soft and welcoming ilhouette and a
                                            distinctly residential look. The legs appear almost as if they are growing out
                                            of the shell. This gives the design flexibility and makes it possible to vary
                                            the frame. Unika is a mouth blown series of small, glass pendant lamps,
                                            originally designed for the Restaurant Gronbech. Est eum itaque maiores qui
                                            blanditiis architecto. Eligendi saepe rem ut. Cumque quia earum eligendi. </p>
                                        <p>Duis semper erat mauris, sed egestas purus commodo. Cras imperdiet est in nunc
                                            tristique lacinia. Nullam aliquam mauris eu accumsan tincidunt. Suspendisse
                                            velit ex, aliquet vel ornare vel, dignissim a tortor. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                                    </div> --}}
                                </div>





                                <div class="tab-pane fade" id="nav-review" role="tabpanel"
                                    aria-labelledby="nav-review-tab" tabindex="0">
                                    <div class="tpreview__wrapper">
                                        {{-- <h4 class="tpreview__wrapper-title">1 review for Cheap and delicious fresh chicken
                                        </h4>
                                        <div class="tpreview__comment">
                                            <div class="tpreview__comment-img mr-20">
                                                <img src="{{ asset('frontend') }}/assets/img/testimonial/test-avata-1.png"
                                                    alt="">
                                            </div>
                                            <div class="tpreview__comment-text">
                                                <div
                                                    class="tpreview__comment-autor-info d-flex align-items-center justify-content-between">
                                                    <div class="tpreview__comment-author">
                                                        <span>admin</span>
                                                    </div>
                                                    <div class="tpreview__comment-star">
                                                        <i class="icon-star_outline1"></i>
                                                        <i class="icon-star_outline1"></i>
                                                        <i class="icon-star_outline1"></i>
                                                        <i class="icon-star_outline1"></i>
                                                        <i class="icon-star_outline1"></i>
                                                    </div>
                                                </div>
                                                <span class="date mb-20">--April 9, 2022: </span>
                                                <p>very good</p>
                                            </div>
                                        </div> --}}
                                        <div class="tpreview__form">
                                            <h4 class="tpreview__form-title mb-25">Add a review </h4>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="tpreview__input mb-30">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="tpreview__input mb-30">
                                                            <input type="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tpreview__star mb-20">
                                                            <h4 class="title">Your Rating</h4>
                                                            <div class="tpreview__star-icon">
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="tpreview__input mb-30">
                                                            <textarea name="text" placeholder="Message"></textarea>
                                                            <div class="tpreview__submit mt-30">
                                                                <button class="tp-btn">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $featureProducts = App\Models\Product::where('product_feature', 'like', '%' . 'new-arrival' . '%')
                        ->take(3)
                        ->orderBy('id', 'ASC')
                        ->get();
                    // dd($featureProducts);
                @endphp
                <div class="col-lg-2 col-md-12">
                    <div class="tpsidebar pb-30">
                        <div class="tpsidebar__product">
                            <h4 class="tpsidebar__title mb-15">Recent Products</h4>
                            @if ($featureProducts->count() > 0)
                                @foreach ($featureProducts as $product)
                                    <div class="tpsidebar__product-item">
                                        <div class="tpsidebar__product-thumb p-relative">
                                            <img src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                alt="Product Image">
                                            <div class="tpsidebar__info bage">
                                                @if ($product->varient[0]->discount > 0)
                                                    <span
                                                        class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}%</span>
                                                @endif
                                                @if ($product->varient[0]->discount > 0)
                                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tpsidebar__product-content">
                                            <span class="tpproduct__product-category">
                                                <a
                                                    href="{{ route('category.wise.product', $product->category->slug) }}">{{ $product->category->categoryName }}</a>
                                            </span>
                                            <h4 class="tpsidebar__product-title">
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
                                                <span>৳{{ $product->varient[0]->discount_amount ?? '' }}</span>
                                                @if ($product->varient[0]->discount > 0)
                                                    <del>৳{{ $product->varient[0]->regular_price ?? '' }}</del>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="tpsidebar__product-item">
                                    <div class="tpsidebar__product-thumb p-relative">
                                        <img src="{{ asset('frontend') }}/assets/img/product/sidebar-pro-1.jpg"
                                            alt="">
                                        <div class="tpsidebar__info bage">
                                            <span class="tpproduct__info-hot bage__hot">HOT</span>
                                        </div>
                                    </div>
                                    <div class="tpsidebar__product-content">
                                        <span class="tpproduct__product-category">
                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                        </span>
                                        <h4 class="tpsidebar__product-title">
                                            <a href="shop-details-3.html">Fresh Mangosteen 100% Organic From VietNamese</a>
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
                                </div>
                                <div class="tpsidebar__product-item">
                                    <div class="tpsidebar__product-thumb p-relative">
                                        <img src="{{ asset('frontend') }}/assets/img/product/sidebar-pro-2.jpg"
                                            alt="">
                                        <div class="tpsidebar__info bage">
                                            <span class="tpproduct__info-hot bage__hot">HOT</span>
                                        </div>
                                    </div>
                                    <div class="tpsidebar__product-content">
                                        <span class="tpproduct__product-category">
                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                        </span>
                                        <h4 class="tpsidebar__product-title">
                                            <a href="shop-details-3.html">Fresh Mangosteen 100% Organic From VietNamese</a>
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
                                </div>
                                <div class="tpsidebar__product-item">
                                    <div class="tpsidebar__product-thumb p-relative">
                                        <img src="{{ asset('frontend') }}/assets/img/product/sidebar-pro-3.jpg"
                                            alt="">
                                        <div class="tpsidebar__info bage">
                                            <span class="tpproduct__info-hot bage__hot">HOT</span>
                                        </div>
                                    </div>
                                    <div class="tpsidebar__product-content">
                                        <span class="tpproduct__product-category">
                                            <a href="shop-details-3.html">Fresh Fruits</a>
                                        </span>
                                        <h4 class="tpsidebar__product-title">
                                            <a href="shop-details-grid.html">Fresh Mangosteen 100% Organic From
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
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-details-area-end -->

    <!-- Recommended product-area-start -->
    @include('frontend.pageContent.recommendedProduct')
    <!-- Recommended product-area-end -->

    <!-- feature-area-start -->
    <section class="feature-area mainfeature__bg pt-50 pb-40"
        data-background="{{ asset('frontend') }}/assets/img/shape/footer-shape-1.svg">
        <div class="container">
            <div class="mainfeature__border pb-15">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-1.svg" alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Fast Delivery</h4>
                                <p>Across West & East India</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-2.svg" alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">safe payment</h4>
                                <p>100% Secure Payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-3.svg" alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Online Discount</h4>
                                <p>Add Multi-buy Discount </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-4.svg" alt="">
                            </div>
                            <div class="mainfeature__content">
                                <h4 class="mainfeature__title">Help Center</h4>
                                <p>Dedicated 24/7 Support </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-5.svg" alt="">
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
    </section>
    <!-- feature-area-end -->

    <script>

        const details_cart_btn = document.querySelector('#details_cart');
        details_cart_btn.addEventListener('click', function(e) {
            e.preventDefault();

            // alert('add to cart');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let product_id = document.querySelector('#product_id').value;
            let variant_id = document.querySelector('#variant_id').value;
            let selling_price = document.querySelector('#selling_price').value;
            let Quantity = document.querySelector('#pr_quantity').value;

            // alert(product_id);
            // alert(variant_id);
            // alert(selling_price);
            // alert(Quantity);


            $.ajax({
                url: '/product/add_to_cart',
                type: 'POST',
                data: {
                    'product_id': product_id,
                    'variant_id': variant_id,
                    'selling_price': selling_price,
                    'pr_quantity': pr_quantity,
                },
                success: function(success_response) {
                    console.log(success_response);
                    if (success_response.status == 200) {
                        toastr.success(success_response.message);
                        document.querySelector('#pr_quantity').value = (success_response.cartData.qty);
                    } else {
                        toastr.warning(success_response.error.email);
                    }
                    console.log(success_response);

                }
            });
        });






        // const addForm = document.querySelectorAll('#details_cart');
        // addForm.forEach(element => {
        //     element.addEventListener('submit', function(e) {
        //         e.preventDefault();

        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });


        //         let product_id = this.elements.product_id.value
        //         let variant_id = this.elements.variant_id.value
        //         let selling_price = this.elements.selling_price.value
        //         let quantity = this.elements.pr_quantity.value


        //         // console.log(product_id, variant_id,selling_price);

        //         $.ajax({
        //             url: '/product/add_to_cart',
        //             type: 'POST',
        //             data: {
        //                 'product_id': product_id,
        //                 'variant_id': variant_id,
        //                 'selling_price': selling_price,
        //                 'pr_quantity': pr_quantity,
        //             },
        //             success: function(response) {
        //                 if (response.status == 200) {
        //                     toastr.success(response.message);
        //                     showCart();
        //                 } else {

        //                 }
        //             }
        //         });

        //     });
        // })
    </script>
@endsection
