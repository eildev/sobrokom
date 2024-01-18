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

            @php
                $brands = App\Models\Brand::where('status', 1)
                    ->where('BrandName', 'Local')->first();
            @endphp

            @if ($products->count() > 0)
                @foreach ($products as $product)


                <h1> {{$product->product_name}} </h1>
                <h1> {{$product->brand->BrandName}} </h1>
                @endforeach
            @else
            @endif

            <div class="row gx-3">
                <div class="col-lg-3">
                    <div class="tpbrandproduct__main text-center">
                        <div class="tpbrandproduct__main-thumb mb-20">
                            <img src="{{ asset('frontend') }}/assets/img/brand/brand-thumb-1.png" alt="">
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
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Lettuce
                                            Fresh Produce
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
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Cheap and
                                            delicious fresh
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
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh Milk
                                            Chocolate Quaker Popped Rice
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
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">1kg purple
                                            onion/ onion/ dried onion Kinh
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
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">1st
                                            Quality Fresh Meat From USA
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
                                    <span class="tpbrandproduct__product-title"><a href="shop-details.html">Fresh
                                            Organic Grape Tomatoes
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
