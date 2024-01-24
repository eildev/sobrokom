<!-- cart-area-start -->
<section class="cart-area pt-30">
    <div class="container">
        <div class="swiper-container product-details-active">
            <div class="swiper-wrapper">



                @php
                    $Categories = App\Models\Category::where('status', 1)
                        ->take(6)
                        ->orderBy('id', 'ASC')
                        ->get();
                @endphp


                @if ($Categories->count() > 0)
                    @foreach ($Categories as $Category)
                        {{-- @dd($Category); --}}
                        <div class="swiper-slide">
                            <div class="tpcartitem">
                                <div class="tpcartitem__thumb mb-15">
                                    <a href="{{ route('category.wise.product',$Category->slug) }}"><img src="{{ asset('uploads/category/' . $Category->image) }}"
                                            alt="" class="img-fluid"></a>
                                </div>
                                <div class="tpcartitem__content">
                                    <h3 class="tpcartitem__title mb-15"><a
                                            href="{{ route('category.wise.product',$Category->slug) }}">{{ $Category->categoryName }}</a>
                                    </h3>
                                    <ul>
                                        @php
                                            $subcategories = App\Models\Subcategory::where('status', 1)
                                                ->where('categoryId', $Category->id)
                                                ->take(4)
                                                ->orderBy('id', 'ASC')
                                                ->get();
                                        @endphp
                                        @foreach ($subcategories as $subcategory)
                                            <li><a href="{{ route('subcategory.wise.product',$subcategory->slug) }}">{{ $subcategory->subcategoryName }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <span class="tpcartitem__all"><a href="{{ route('category.wise.product',$Category->slug) }}">See All <i
                                                class="icon-chevron-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide">
                        <div class="tpcartitem">
                            <div class="tpcartitem__thumb mb-15">
                                <a href="#"><img src="{{ asset('frontend') }}/assets/img/cart/cart-1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="tpcartitem__content">
                                <h3 class="tpcartitem__title mb-15"><a href="shop-3.html">Fresh Vegetables</a>
                                </h3>
                                <ul>
                                    <li><a href="shop-details-4.html">Exotic Fruits & Veggies</a></li>
                                    <li><a href="shop-details-3.html">Fresh Fruits jihadtfhdthdty</a></li>
                                    <li><a href="shop-details-3.html">Fresh Vegetables</a></li>
                                    <li><a href="shop-details-4.html">Herbs & Seasonings</a></li>
                                </ul>
                                <span class="tpcartitem__all"><a href="shop-3.html">See All <i
                                            class="icon-chevron-right"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
<!-- cart-area-end -->
