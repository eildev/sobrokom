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
                                    $cats = App\Models\Category::where('status', 1)
                                    ->take(4)
                                    ->orderBy('id', 'ASC')
                                    ->get();
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


                            @php
                                $all_product = App\Models\Product::where('status', 1)
                                    ->take(10)
                                    ->orderBy('id', 'ASC')
                                    ->get();
                                // @dd($all_product);
                            @endphp
                            @if ($all_product->count() > 0)
                                <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                    aria-labelledby="nav-all-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div
                                            class="swiper-container tpproduct-active-3 tpslider-bottom p-relative tpproduct-priority">
                                            <div class="swiper-wrapper">

                                                @foreach ($all_product as $product)
                                                    {{-- @dd($product); --}}

                                                    <div class="swiper-slide">
                                                        <div class="tpproduct p-relative">
                                                            <div class="tpproduct__thumb p-relative text-center">
                                                                <a href="{{route('product.details', $product->slug)}}"><img
                                                                        src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                                        alt=""></a>
                                                                <a class="tpproduct__thumb-img"
                                                                    href="{{route('product.details', $product->slug)}}"><img
                                                                        src="{{ asset('frontend' . $product->product_image) }}"
                                                                        alt=""></a>
                                                                <div class="tpproduct__info bage">
                                                                    @if ( $product->varient[0]->discount)
                                                                    <span
                                                                        class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount}}%</span>
                                                                    @endif
                                                                    <span
                                                                        class="tpproduct__info-hot bage__hot">HOT</span>
                                                                </div>
                                                                <div class="tpproduct__shopping">
                                                                    @auth
                                                                    <a class="tpproduct__shopping-wishlist add_whishlist"
                                                                        href="#" value="{{ $product->id }}">
                                                                        <!-- <i class="icon-heart icons"></i> -->
                                                                        @auth
                                                                         @php
                                                                           $loved = App\Models\WishList::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
                                                                         @endphp
                                                                        @endauth
                                                                        <i style="color: {{ !empty($loved->loved) ? 'red' : '' }}" class="fas fa-heart icons"></i>
                                                                    </a>
                                                                    @else
                                                                    <a class="tpproduct__shopping-wishlist"
                                                                        href="{{ route('login') }}">
                                                                        <i class="fas fa-heart icons"></i>
                                                                    </a>
                                                                    @endauth
                                                                    
                                                                    <a class="tpproduct__shopping-cart"
                                                                        href="{{route('product.details', $product->slug)}}"><i class="icon-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tpproduct__content">
                                                                <span class="tpproduct__content-weight">
                                                                    <a
                                                                        href="shop-details.html">{{ $product->category->categoryName }}</a>
                                                                </span>
                                                                <h4 class="tpproduct__title">
                                                                    <a href="shop-details-top-.html">{{ $product->product_name }}
                                                                    </a>
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
                                                                    <span>৳{{ $product->varient[0]->discount_amount }}</span>
                                                                    <del>৳{{ $product->varient[0]->regular_price }}</del>
                                                                </div>
                                                            </div>
                                                            <div class="tpproduct__hover-text">
                                                                <div
                                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                    <a class="tp-btn-2" href="cart.html">Add to
                                                                        cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
                            @endif


                            <!-- Category Wise Product here -->




                            @foreach ($cats as $cat)
                                @php
                                    $all_product = App\Models\Product::where('status', 1)
                                        ->where('category_id', $cat->id)
                                        ->take(10)
                                        ->orderBy('id', 'ASC')
                                        ->get();
                                    // dd($all_product);
                                @endphp

                                {{-- @dd($cat); --}}
                                <div class="tab-pane fade" id="{{ $cat->slug }}" role="tabpanel"
                                    aria-labelledby="nav-meat-tab" tabindex="0">
                                    <div class="tpproduct__arrow p-relative">
                                        <div
                                            class="swiper-container tpproduct-active-3 tpslider-bottom p-relative tpproduct-priority">
                                            <div class="swiper-wrapper">
                                                @foreach ($all_product as $product)
                                                    {{-- @dd($product->varient[0]->discount); --}}
                                                    <div class="swiper-slide">
                                                        <div class="tpproduct p-relative">
                                                            <div class="tpproduct__thumb p-relative text-center">
                                                                <a href="{{route('product.details', $product->slug)}}"><img
                                                                        src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                                        alt=""></a>
                                                                <a class="tpproduct__thumb-img"
                                                                    href="{{route('product.details', $product->slug)}}"><img
                                                                        src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                                        alt=""></a>
                                                                <div class="tpproduct__info bage">
                                                                    <span
                                                                        class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}</span>
                                                                    <span
                                                                        class="tpproduct__info-hot bage__hot">HOT</span>
                                                                </div>
                                                                <div class="tpproduct__shopping">
                                                                    @auth
                                                                    <a class="tpproduct__shopping-wishlist add_whishlist"
                                                                        href="#" value="{{ $product->id }}">
                                                                        <!-- <i class="icon-heart icons"></i> -->
                                                                        @auth
                                                                         @php
                                                                           $loved = App\Models\WishList::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first();
                                                                         @endphp
                                                                        @endauth
                                                                        <i style="color: {{ !empty($loved->loved) ? 'red' : '' }}" class="fas fa-heart icons"></i>
                                                                    </a>
                                                                    @else
                                                                    <a class="tpproduct__shopping-wishlist"
                                                                        href="{{ route('login') }}">
                                                                        <i class="fas fa-heart icons"></i>
                                                                    </a>
                                                                    @endauth
                                                                    
                                                                    <a class="tpproduct__shopping-cart"
                                                                        href="{{route('product.details', $product->slug)}}"><i class="icon-eye"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="tpproduct__content">
                                                                <span class="tpproduct__content-weight">
                                                                    <a
                                                                        href="shop-details.html">{{ $cat->categoryName }}</a>
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
                                                                    <span>৳{{ $product->varient[0]->discount_amount }}</span>
                                                                    <del>৳{{ $product->varient[0]->regular_price }}</del>
                                                                </div>
                                                            </div>
                                                            <div class="tpproduct__hover-text">
                                                                <div
                                                                    class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                                    <a class="tp-btn-2" href="cart.html">Add to
                                                                        cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
