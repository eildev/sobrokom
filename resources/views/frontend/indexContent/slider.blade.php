<!-- slider-area-start -->
<section class="container slider-area tpslider__home-3 tpslider-delay grey-bg slider-three" style="margin-top:64px !important">
    <div class="swiper-container slider-active">
        <div class="swiper-wrapper">
            @php
                $sliders = App\Models\HomeBanner::where('status', 1)->get();
            @endphp
            @if ($sliders->count() > 0)
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="tpslider grey-bg">
                            <div class="" style="margin-left: 20px !important">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7">
                                        <div class="tpslider__content slider-three-content text-center">
                                            <span class="tpslider__sub-title mb-15">{{ $slider->title }}</span>
                                            <h2 class="tpslider__title mb-25">{{ $slider->short_description }}</h2>
                                            <p>{{ $slider->long_description }}</p>
                                            <div class="tpslider__btn">
                                                <a class="tp-btn" href="{{ $slider->link }}">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                        <div class="tpslider__thumb p-relative">

                                            <img class="tpslider__thumb-img tpslider__three"
                                                src="{{ asset('uploads/banner/' . $slider->image) }}" alt="slider-bg">
                                            <div class="tpslider__shape d-none d-lg-block">
                                                @if ($slider->gallery->count() > 0)
                                                    <img class="tpslider__shape-three three-shap-one"
                                                        src="{{ asset('uploads/banner/gallery/' . $slider->gallery[0]->image) }}"
                                                        alt="shape">
                                                    <img class=" three-shap-two"
                                                        src="{{ asset('uploads/banner/gallery/' . $slider->gallery[1]->image) }}"
                                                        alt="shape">
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="swiper-slide">
                    <div class="tpslider grey-bg">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7">
                                    <div class="tpslider__content slider-three-content text-center">
                                        <span class="tpslider__sub-title mb-15">Special Offer</span>
                                        <h2 class="tpslider__title mb-25">Vegetable <br> Good For Health</h2>
                                        <p>Presentation matters. Our fresh Vietnamese vegetable rolls <br> look good and
                                            taste even better</p>
                                        <div class="tpslider__btn">
                                            <a class="tp-btn" href="shop-3.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                                    <div class="tpslider__thumb p-relative">
                                        <img class="tpslider__thumb-img tpslider__three"
                                            src="{{ asset('frontend') }}/assets/img/slider/slider-bg-6.png"
                                            alt="slider-bg">
                                        <div class="tpslider__shape d-none d-lg-block">
                                            <img class="tpslider__shape-three three-shap-one"
                                                src="{{ asset('frontend') }}/assets/img/slider/slider-shape-5.png"
                                                alt="shape">
                                            <img class=" three-shap-two"
                                                src="{{ asset('frontend') }}/assets/img/slider/slider-shape-6.png"
                                                alt="shape">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


        </div>
        <div class="tpslider__arrow d-none  d-xxl-block">
            <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
            <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
        </div>
    </div>
</section>
<!-- slider-area-end -->
