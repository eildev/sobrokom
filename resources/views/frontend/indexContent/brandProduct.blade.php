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
                    ->where('BrandName', 'Local')
                    ->first();
            @endphp



            <div class="row gx-3">
                <div class="col-lg-3">
                    <div class="tpbrandproduct__main text-center">
                        <div class="tpbrandproduct__main-thumb mb-20">
                            <img src="{{ asset('uploads/Brands/' . $brands->image) }} " alt="">
                        </div>
                        <div class="tpbrandproduct__main-contetn">
                            <h4 class="tpbrandproduct__title">{{ $brands->BrandName }}</h4>
                            <p>Nam liber tempor cum soluta nobis eleifend congue doming quod mazim placerat
                                facer possim assum typi.</p>
                        </div>
                    </div>
                </div>

                @php
                    $products = App\Models\Product::where('status', 1)
                        ->where('brand_id', $brands->id)
                        ->take(6)
                        ->orderBy('id', 'ASC')
                        ->get();
                    // dd($brand);
                @endphp
                @if ($products->count() > 0)

                    <div class="col-lg-9">
                        <div class="row gx-3">
                            @foreach ($products as $product)
                                {{-- @dd($product); --}}
                                <div class="col-xl-4 col-lg-6">
                                    <div class="tpbrandproduct__item d-flex mb-20">
                                        <div class="tpbrandproduct__img p-relative">
                                            <img src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                alt="">
                                            <div class="tpproduct__info bage tpbrandproduct__bage">
                                                <span class="tpproduct__info-discount bage__discount">-{{ $product->varient[0]->discount }}%</span>
                                            </div>
                                        </div>
                                        <div class="tpbrandproduct__contact">
                                            <span class="tpbrandproduct__product-title"><a
                                                    href="shop-details.html">{{ $product->product_name }}</a></span>
                                            <div class="tpproduct__rating mb-5">
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                                <a href="#"><i class="icon-star_outline1"></i></a>
                                            </div>
                                            <div class="tpproduct__price">
                                                <span>৳{{ $product->varient[0]->discount_amount }}</span>
                                                <del>৳{{ $product->varient[0]->regular_price }}</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>
<!-- brand-product-area-end -->
