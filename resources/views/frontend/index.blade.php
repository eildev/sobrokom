@extends('frontend.master')
@section('maincontent')
    <!-- slider-area-start -->
    @include('frontend.indexContent.slider')
    <!-- slider-area-end -->

    <!-- feature-area-start -->
    @include('frontend.indexContent.feature')
    <!-- feature-area-end -->

    <!-- product-area-start -->
    @include('frontend.indexContent.productArea_1')
    <!-- product-area-end -->

    <!-- banner-area-start -->
    @include('frontend.indexContent.banner')
    <!-- banner-area-end -->

    <!-- product-area-start -->
    @include('frontend.indexContent.productArea_2')
    <!-- product-area-end -->

    <!--hot-contact-area-start -->
    @include('frontend.indexContent.hot-contact')
    <!-- hot-contact-area-end -->

    <!-- product-area-start -->
    @include('frontend.indexContent.productArea_3')
    <!-- product-area-end -->

    <!-- banner-area-start -->
    @include('frontend.indexContent.banner2')
    <!-- banner-area-end -->

    <!-- brand-product-area-start -->
    @include('frontend.indexContent.brandProduct')
    <!-- brand-product-area-end -->

    <!-- testimonial-area-start -->
    {{-- @include('frontend.indexContent.testimonial') --}}
    <!-- testimonial-area-end -->

    <!-- cart-area-start -->
    @include('frontend.indexContent.cartArea')
    <!-- cart-area-end -->

    <!-- blog-area-start -->
    @include('frontend.indexContent.blogArea')
    <!-- blog-area-end -->
@endsection
