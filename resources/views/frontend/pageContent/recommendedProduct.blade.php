<section class="product-area whight-product pt-75 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="tpdescription__product-title mb-20">Related Products</h5>
            </div>
        </div>

        @php
            $category = App\Models\Category::where('categoryName', 'like', '%' . 'Fashion' . '%')->first();
            $products = App\Models\Product::where('category_id', $category->id)
                ->take(10)
                ->orderBy('id', 'ASC')
                ->get();
            // dd($products);
        @endphp
        <div class="tpproduct__arrow double-product p-relative">
            <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                <div class="swiper-wrapper">
                    @if ($products->count() > 0)
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="tpproduct p-relative tpprogress__hover">
                                    <div class="tpproduct__thumb p-relative text-center">
                                        <a href="{{ route('product.details', $product->slug) }}"><img
                                                src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                alt=""></a>
                                        <a class="tpproduct__thumb-img"
                                            href="{{ route('product.details', $product->slug) }}"><img
                                                src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                alt=""></a>
                                        <div class="tpproduct__info bage">
                                            @if ($product->varient[0]->discount)
                                                <span
                                                    class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}%</span>
                                            @endif
                                            <span class="tpproduct__info-hot bage__hot">HOT</span>
                                        </div>
                                        <div class="tpproduct__shopping">
                                            @auth
                                                <a class="tpproduct__shopping-wishlist add_whishlist" href="#"
                                                    value="{{ $product->id }}">
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
                                                <a class="tpproduct__shopping-wishlist" href="{{ route('login') }}">
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
                                            <a href="shop-details.html">{{ $product->category->categoryName }} </a>
                                        </span>
                                        <h4 class="tpproduct__title">
                                            <a href="shop-details-top-.html">{{ $product->product_name }}
                                            </a>
                                        </h4>
                                        <div class="tpproduct__rating mb-5">
                                            <a href="#"><i class="icon-star_outline1"></i></a>
                                            <a href="#"><i class="icon-star_outline1"></i></a>
                                            <a href="#"><i class="icon-star_outline1"></i></a>
                                            <a href="#"><i class="icon-star_outline1"></i></a>
                                            <a href="#"><i class="icon-star_outline1"></i></a>
                                        </div>
                                        <div class="tpproduct__price mb-5">
                                            <span>৳{{ $product->varient[0]->discount_amount }}</span>
                                            <del>৳{{ $product->varient[0]->regular_price }}</del>
                                        </div>
                                        <div class="tpproduct__progress">
                                            <div class="progress mb-5">
                                                <div class="progress-bar w-25" role="progressbar"
                                                    aria-label="Basic example" aria-valuenow="75" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <span>Sold: <b>16/{{$product->varient[0]->stock_quantity}}</b></span>
                                        </div>
                                    </div>
                                    <div class="tpproduct__hover-text">
                                        <div class="tpproduct__hover-btn d-flex justify-content-center mb-0">
                                            <a class="tp-btn-2" href="cart.html">Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <div class="tpproduct p-relative">
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
                                        <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                    </div>
                                </div>
                                <div class="tpproduct__content">
                                    <span class="tpproduct__content-weight">
                                        <a href="shop-details.html">Fresh Meat</a>
                                    </span>
                                    <h4 class="tpproduct__title">
                                        <a href="shop-details-top-.html">Mangosteen Organic From VietNamese</a>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
