<div class="tpshop__top ml-60">
    <div class="row">
        <div class="col-lg-12">
            @if ($wishlists->count() > 0)

                @foreach ($wishlists as $wishlist)
                    {{-- @dd($wishlist); --}}
                    {{-- @dd($wishlist->wishlistProduct->product_name); --}}

                    <div class="tplist__product d-flex align-items-center justify-content-between mb-20">
                        <div class="tplist__product-img">
                            <a href="{{ route('product.details', $wishlist->wishlistProduct->slug) }}"
                                class="tplist__product-img-one">
                                <img src="{{ asset('uploads/products/' . $wishlist->wishlistProduct->product_image) }}"
                                    alt="Product Image" style="height: 200px">
                            </a>
                            <a class="tplist__product-img-two"
                                href="{{ route('product.details', $wishlist->wishlistProduct->slug) }}">
                                <img src="{{ asset('uploads/products/' . $wishlist->wishlistProduct->product_image) }}"
                                    alt="Product Image" style="height: 200px">
                            </a>
                            <div class="tpproduct__info bage">
                                @if ($wishlist->wishlistProduct->varient[0]->discount)
                                    <span
                                        class="tpproduct__info-discount bage__discount">-{{ $wishlist->wishlistProduct->varient[0]->discount }}%</span>
                                @endif
                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                            </div>
                        </div>
                        <div class="tplist__content">
                            <span>1 {{ $wishlist->wishlistProduct->varient[0]->unit }}</span>
                            <h4 class="tplist__content-title"><a
                                    href="{{ route('product.details', $wishlist->wishlistProduct->slug) }}">{{ $wishlist->wishlistProduct->product_name }}</a>
                            </h4>
                            <div class="tplist__rating mb-5">
                                <a href="#"><i class="icon-star_outline1"></i></a>
                                <a href="#"><i class="icon-star_outline1"></i></a>
                                <a href="#"><i class="icon-star_outline1"></i></a>
                                <a href="#"><i class="icon-star_outline1"></i></a>
                                <a href="#"><i class="icon-star_outline1"></i></a>
                            </div>
                            <ul class="tplist__content-info">
                                <li>Delicous Non-Dairy cheese sauce</li>
                                <li>Vegan & Allergy Friendly</li>
                                <li>Smooth, velvety Dairy free cheese sauce</li>
                            </ul>
                        </div>
                        <div class="tplist__price justify-content-end">
                            <h4 class="tplist__instock">Availability:
                                <span>{{ $wishlist->wishlistProduct->varient[0]->stock_quantity ?? 10 }} in stock</span>
                            </h4>
                            <h3 class="tplist__count mb-15">
                                ৳{{ $wishlist->wishlistProduct->varient[0]->discount_amount ?? 10 }}</h3>
                            <button class="tp-btn-2 mb-10">Add to cart</button>
                            <div class="tplist__shopping">
                                {{-- @auth
                                    <a class="add_whishlist" href="#" value="{{ $wishlist->id }}">
                                        @auth
                                            @php
                                                $loved = App\Models\WishList::where('user_id', Auth::user()->id)
                                                    ->where('product_id', $wishlist->id)
                                                    ->first();
                                            @endphp
                                        @endauth
                                        <i style="color: {{ !empty($loved->loved) ? 'red' : '' }}"
                                            class="fas fa-heart icons"></i>wishlist
                                    </a>
                                @endauth --}}
                                <a href="{{ route('wishlist.delete', $wishlist->id) }}"><i
                                        style="color: {{ !empty($wishlist->loved) ? 'red' : '' }}"
                                        class="fas fa-heart icons"></i> wishlist</a>
                                <a href="{{ route('product.details', $wishlist->wishlistProduct->slug) }}"><i
                                        class="icon-eye"></i>View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="tplist__product text-center mb-20 py-5">
                    <p class="fw-bold fs-3">No data found</p>
                </div>
            @endif
        </div>
    </div>
</div>
