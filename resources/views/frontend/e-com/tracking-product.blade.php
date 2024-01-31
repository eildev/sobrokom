@extends('frontend.master')
@section('maincontent')
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area grey-bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                            <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                            <span class="dvdr">/</span>
                            <span>Tracking Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- shop-area-start -->
    <section class="shop-area-start grey-bg pb-200">
        <div class="container">
            <div class="row row-reverse">
                <div class="col-xl-10 col-lg-12 col-md-12">
                    <div class="tpshop__top tpshop__sidebar-area mr-60 ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product__filter-content mb-40">
                                    <div class="row align-items-center py-2 text-center">
                                        <form action="{{ route('search.product') }}" method="POST">
                                            @csrf
                                            <div class="d-flex">
                                                <input type="text" name="search" placeholder="Search Here"
                                                    class="form-control rounded-0 rounded-start">
                                                <button class="tp-btn rounded-0 rounded-end">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- shop-area-end -->
@endsection
