@php
    $flash_selling_product = App\Models\Product::where('status', 1)
        ->where('product_feature', 'like', '%' . 'weekend-deals' . '%')
        ->take(10)
        ->orderBy('id', 'ASC')
        ->get();
    // @dd($flash_selling_product);
@endphp

@if ($flash_selling_product->count() > 0)
    <section class="weekly-product-area grey-bg whight-product">
        <div class="container">
            <div class="sections__wrapper white-bg pr-50 pl-50">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <div class="tpsection mb-15">
                            <h4 class="tpsection__title text-start brand-product-title">Weekly Best Offers</h4>
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
                                        @foreach ($flash_selling_product as $product)
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
                                                            <a href="{{ route('category.wise.product', $product->category->slug) }}">{{ $product->category->categoryName }}
                                                            </a>
                                                        </span>
                                                        <h4 class="tpproduct__title">
                                                            <a href="{{ route('product.details', $product->slug) }}">{{ $product->product_name }}
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
                                                            @if ($product->varient[0]->discount > 0)
                                                                <del>৳{{ $product->varient[0]->regular_price }}</del>
                                                            @endif

                                                        </div>
                                                        <div class="tpproduct__progress">
                                                            <div class="progress mb-5">
                                                                <div class="progress-bar w-25" role="progressbar"
                                                                    aria-label="Basic example" aria-valuenow="75"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span>Sold:
                                                                <b>16/{{ $product->varient[0]->stock_quantity }}</b></span>
                                                        </div>
                                                    </div>
                                                    <div class="tpproduct__hover-text">
                                                        <div
                                                            class="tpproduct__hover-btn d-flex justify-content-center mb-0">
                                                            <form method="POST" id="add_to_cart_form">
                                                                @csrf
                                                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                                <input type="hidden" value="{{ $product->varient[0]->id }}" name="variant_id">
                                                                <input type="hidden" value="{{ $product->varient[0]->discount_amount }}" name="selling_price">
                                                                <button class="tp-btn-2">Add to
                                                                    cart</button>
                                                            </form>
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
            </div>
        </div>
    </section>
@else
@endif
<!-- product-area-end -->
