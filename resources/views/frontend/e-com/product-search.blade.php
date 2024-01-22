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
                            <span>Search Page</span>
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
                  <div class="col-xl-2 col-lg-12 col-md-12 order-2">
                     <div class="tpshop__leftbar tpshop__leftbar-area">
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title">Product Categories</h4>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault9">
                              <label class="form-check-label" for="flexCheckDefault9">
                                 Biscuits & Snacks (08)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                              <label class="form-check-label" for="flexCheckDefault2">
                                 Fresh Fruits (12)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                              <label class="form-check-label" for="flexCheckDefault3">
                                 Exotic Fruits (09)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                              <label class="form-check-label" for="flexCheckDefault4">
                                 Breads & Bakery (05)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                              <label class="form-check-label" for="flexCheckDefault5">
                                 Breakfast & Dairy (09)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                              <label class="form-check-label" for="flexCheckDefault6">
                                 Honey (05)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                              <label class="form-check-label" for="flexCheckDefault7">
                                 Milk & Flavoured (04)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                              <label class="form-check-label" for="flexCheckDefault8">
                                 Meats & Seafood (08)
                              </label>
                           </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title mb-20">FILTER BY PRICE</h4>
                           <div class="productsidebar">
                              <div class="productsidebar__head">
                              </div>
                              <div class="productsidebar__range">
                                 <div id="slider-range"></div>
                                 <div class="price-filter mt-10"><input type="text" id="amount">
                              </div>
                              </div>
                           </div>
                           <div class="productsidebar__btn mt-15 mb-15">
                              <a href="#">FILTER</a>
                           </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title mb-20">Filter by Color</h4>
                           <div class="tpshop__widget-color-box">
                              <div class="form-check">
                                 <input class="form-check-input black-input" type="checkbox" value="" id="flexCheckDefault12">
                                 <label class="form-check-label" for="flexCheckDefault12">
                                    Black
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input blue-input" type="checkbox" value="" id="flexCheckChecked13">
                                 <label class="form-check-label" for="flexCheckChecked13">
                                    Blue
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input brown-input" type="checkbox" value="" id="flexCheckChecked18">
                                 <label class="form-check-label" for="flexCheckChecked18">
                                    Blue
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input grey-input" type="checkbox" value="" id="flexCheckChecked14">
                                 <label class="form-check-label" for="flexCheckChecked14">
                                    Gray
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input green-input" type="checkbox" value="" id="flexCheckChecked15">
                                 <label class="form-check-label" for="flexCheckChecked15">
                                    Green
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input orange-input" type="checkbox" value="" id="flexCheckChecked16">
                                 <label class="form-check-label" for="flexCheckChecked16">
                                    Red
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input red-input" type="checkbox" value="" id="flexCheckChecked17">
                                 <label class="form-check-label" for="flexCheckChecked17">
                                    Yellow
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="tpshop__widget mb-30 pb-25">
                           <h4 class="tpshop__widget-title">FILTER BY BRAND</h4>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
                              <label class="form-check-label" for="flexCheckDefault18">
                                 Chrome Hearts  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19">
                              <label class="form-check-label" for="flexCheckDefault19">
                                 Dominique Aurientis  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20">
                              <label class="form-check-label" for="flexCheckDefault20">
                                 Galliano  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault21">
                              <label class="form-check-label" for="flexCheckDefault21">
                                 Georgine  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                              <label class="form-check-label" for="flexCheckDefault22">
                                 Matthew Christopher  (15)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23">
                              <label class="form-check-label" for="flexCheckDefault23">
                                 Paul Gaultier  (15)
                              </label>
                           </div>
                        </div>
                        <div class="tpshop__widget">
                           <h4 class="tpshop__widget-title">FILTER BY RATING</h4>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24">
                              <label class="form-check-label" for="flexCheckDefault24">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (45)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault25">
                              <label class="form-check-label" for="flexCheckDefault25">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (10)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault26">
                              <label class="form-check-label" for="flexCheckDefault26">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (05)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27">
                              <label class="form-check-label" for="flexCheckDefault27">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (02)
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">
                              <label class="form-check-label" for="flexCheckDefault28">
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 <i class="icon-star_rate"></i>
                                 (02)
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="tpshop__widget tpshop__leftbar-area">
                        <div class="tpshop__sidbar-thumb mt-35">
                           <img src="assets/img/shape/sidebar-product-1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-10 col-lg-12 col-md-12">
                     <div class="tpshop__top tpshop__sidebar-area mr-60 ">
                        
                        <div class="product__filter-content mb-40">
                           <div class="row align-items-center py-2 text-center">
                              <div class="">
                                 <div class="product__item-count">
                                    <span class="pt-2 pb-2">Search By: {{ $searchTag }}</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                           <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                              <div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                              @if($products->count() > 0)
                                 @foreach($products as $product)
                                 <div class="col">
                                       <div class="tpproduct p-relative mb-20">
                                          <div class="tpproduct__thumb p-relative text-center">
                                             <a href="#"><img src="assets/img/product/products21-min.jpg" alt=""></a>
                                             <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="assets/img/product/products1-min.jpg" alt=""></a>
                                             <div class="tpproduct__info bage">
                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                             </div>
                                             <div class="tpproduct__shopping">
                                                <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                                                <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                                <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                             </div>
                                          </div>
                                          <div class="tpproduct__content">
                                             <span class="tpproduct__content-weight">
                                                <a href="shop-details-3.html">Fresh Fruits</a>,
                                                <a href="shop-details-3.html">Vagetables</a>
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
                                 </div>
                                 @endforeach
                              @else
                              <div class="row text-center bg-white" style="padding:10px 0;margin: auto;width: 96% !important;border-radius: 10px;">
                                       
                              <h4> <a href="shop-details-top-.html">Product Not Found</a>
                                             </h4>
                              </div>
                              @endif
                           </div>
                           
                        </div>   
                        
                        <div class="basic-pagination text-center mt-35">
                           <nav>
                              <ul>
                              {{-- Previous Page Link --}}
                                @if ($products->onFirstPage())
                                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                        <span class="page-link pt-0" aria-hidden="true">&lsaquo;</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link pt-0" href="{{ $products->previousPageUrl() }}"
                                            rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                    @if ($page == $products->currentPage())
                                        <li class="page-item active" aria-current="page"><span
                                                class="page-link pt-0">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link pt-0"
                                                href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($products->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link pt-0" href="{{ $products->nextPageUrl() }}"
                                            rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                        <span class="page-link pt-0" aria-hidden="true">&rsaquo;</span>
                                    </li>
                                @endif
                              </ul>
                            </nav>
                        </div>   
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- shop-area-end -->

         
         <!-- feature-area-start -->
         <section class="feature-area mainfeature__bg grey-bg pt-50 pb-40" data-background="assets/img/shape/footer-shape-1.svg">
            <div class="container">
               <div class="mainfeature__border pb-15">
                  <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="assets/img/icon/feature-icon-1.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Fast Delivery</h4>
                              <p>Across West & East India</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="assets/img/icon/feature-icon-2.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">safe payment</h4>
                              <p>100% Secure Payment</p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="assets/img/icon/feature-icon-3.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Online Discount</h4>
                              <p>Add Multi-buy Discount </p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="assets/img/icon/feature-icon-4.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Help Center</h4>
                              <p>Dedicated 24/7 Support </p>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                           <div class="mainfeature__icon">
                              <img src="assets/img/icon/feature-icon-5.svg" alt="">
                           </div>
                           <div class="mainfeature__content">
                              <h4 class="mainfeature__title">Curated items</h4>
                              <p>From Handpicked Sellers</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- feature-area-end -->
      
    <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->
@endsection
