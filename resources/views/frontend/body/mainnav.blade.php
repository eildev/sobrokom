<div id="header-sticky" class="header__main-area d-none d-xl-block">
    <div class="container">
        <div class="header__for-megamenu p-relative">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="header__logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('frontend') }}/assets/img/logo/logo.png"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="header__menu main-menu text-center">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="has-dropdown has-homemenu">
                                    <a href="#">Brands</a>
                                    @php
                                        $brands = App\Models\brand::where('status', 1)
                                            ->take(6)
                                            ->get();
                                    @endphp
                                    @if ($brands->count() > 0)
                                        <ul class="sub-menu home-menu-style">


                                            @foreach ($brands as $brand)
                                                <li>
                                                    <a href="{{ route('brand.wise.product', $brand->slug) }}"><img
                                                            src="{{ asset('uploads/brands/' . $brand->image) }} "
                                                            alt=""> {{ $brand->BrandName }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <ul class="sub-menu home-menu-style">
                                            <li>
                                                <a href="index.html"><img
                                                        src="{{ asset('frontend') }}/assets/img//header/home1-1.jpg"
                                                        alt=""> Home Page V1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html"><img
                                                        src="{{ asset('frontend') }}/assets/img//header/home2-1.jpg"
                                                        alt=""> Home Page V2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html"><img
                                                        src="{{ asset('frontend') }}/assets/img//header/home3-1.jpg"
                                                        alt=""> Home Page V3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html"><img
                                                        src="{{ asset('frontend') }}/assets/img//header/home4-1.jpg"
                                                        alt=""> Home Page V4</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html"><img
                                                        src="{{ asset('frontend') }}/assets/img//header/home5-1.jpg"
                                                        alt=""> Home Page V5</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html"><img
                                                        src="{{ asset('frontend') }}/assets/img//header/home6-1.jpg"
                                                        alt=""> Home Page V6</a>
                                            </li>
                                        </ul>
                                    @endif
                                </li>
                                <li class="has-dropdown has-megamenu">
                                    <a href="#">Shop</a>
                                    @php
                                        $categoris = App\Models\Category::take(4)->get();
                                    @endphp
                                    @if ($categoris->count() > 0)
                                        <ul class="sub-menu mega-menu">
                                            @foreach ($categoris as $category)
                                                <li>

                                                    <a href="{{ route('category.wise.product', $category->slug) }}"
                                                        class="mega-menu-title">{{ $category->categoryName }}</a>
                                                    <ul>
                                                        @php
                                                            $subcategories = $category->subcategories->take(5);
                                                        @endphp
                                                        @foreach ($subcategories as $subcategory)
                                                            <li><a
                                                                    href="{{ route('subcategory.wise.product', $subcategory->slug) }}">
                                                                    {{ $subcategory->subcategoryName }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <ul class="sub-menu mega-menu"
                                            data-background="{{ asset('frontend') }}/assets/img/banner/mega-menu-shop-1.jpg">
                                            <li>
                                                <a class="mega-menu-title">Shop layout</a>
                                                <ul>
                                                    <li><a href="shop-left-sidebar.html">Shop With Banner </a></li>
                                                    <li><a href="shop-3.html">Shop Without Banner</a></li>
                                                    <li><a href="shop-2.html">Shop Version</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                                                    <li><a href="shop-list-view.html">Shop List view</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mega-menu-title">Product layout</a>
                                                <ul>
                                                    <li><a href="shop-details-3.html">Image scroll</a></li>
                                                    <li><a href="shop-details-grid.html">Product grid</a></li>
                                                    <li><a href="shop-details-top.html">Top Thumb Product</a></li>
                                                    <li><a href="shop-details.html">Bottom Thumb Product</a></li>
                                                    <li><a href="shop-details-4.html">Simple Product</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mega-menu-title">Product type</a>
                                                <ul>
                                                    <li><a href="shop-details.html">Products Simple</a></li>
                                                    <li><a href="shop-details-grid.html">Products Group</a></li>
                                                    <li><a href="shop-details-3.html">Products Variable</a></li>
                                                    <li><a href="shop-details-3.html">Special</a></li>
                                                    <li><a href="shop-details-4.html">Decoration</a></li>
                                                    <li><a href="shop-details-top.html">Contruction</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="mega-menu-title">Product category</a>
                                                <ul>
                                                    <li><a href="shop-details.html">Fresh bakery</a></li>
                                                    <li><a href="shop-details-3.html">Fresh fruits</a></li>
                                                    <li><a href="shop-details-4.html">Fresh meat</a></li>
                                                    <li><a href="shop-details.html">Fruit drink</a></li>
                                                    <li><a href="shop-details.html">Fresh bakery</a></li>
                                                    <li><a href="shop-details-grid.html">Biscuits snack</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    @endif

                                </li>

                                <li class="has-dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="">
                                            <a href="#">Blog</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="{{ route('aboutus') }}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contactus') }}">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('order.tracking') }}">Tracking</a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="header__info d-flex align-items-center">
                        <div class="header__info-search tpcolor__purple ml-10">
                            <button class="tp-search-toggle"><i class="icon-search"></i></button>
                        </div>

                        <div class="header__info-user tpcolor__yellow ml-10">
                            <!-- <a href="log-in.html"><i class="icon-user"></i></a> -->
                            <a href="{{ !empty(Auth::user()->id) ? route('user.dashboard') : route('login') }}"><i
                                    class="icon-user"></i></a>
                        </div>

                        <div class="header__info-cart tpcolor__oasis ml-10 tp-cart-toggle">
                            <button>
                                <i>
                                    <img src="{{ asset('frontend') }}/assets/img/icon/cart-1.svg" alt="">
                                </i>
                                <span class="cart_quantity"></span>
                            </button>
                        </div>
                        @auth
                            <div class="header__info-wishlist tpcolor__greenish ml-10">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button href="#"><i class="fas fa-power-off"></i></button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header-search -->
@include('frontend.body.headerSearch')
<!-- header-search-end -->

<!-- header-cart-start -->
@include('frontend.body.cartArea')
<!-- header-cart-end -->

<!-- mobile-menu-area -->
@include('frontend.body.mobileMenu')
<!-- mobile-menu-area-end -->

<!-- sidebar-menu-area -->
<div class="tpsideinfo">
    <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
    <div class="tpsideinfo__search text-center pt-35">
        <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
        <form action="#">
            <input type="text" placeholder="Search Products...">
            <button><i class="icon-search"></i></button>
        </form>
    </div>
    <div class="tpsideinfo__nabtab">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Menu</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Categories</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div class="tpsidebar-categories">
                    <ul>
                        <li><a href="shop-details.html">Dairy Farm</a></li>
                        <li><a href="shop-details.html">Healthy Foods</a></li>
                        <li><a href="shop-details.html">Lifestyle</a></li>
                        <li><a href="shop-details.html">Organics</a></li>
                        <li><a href="shop-details.html">Photography</a></li>
                        <li><a href="shop-details.html">Shopping</a></li>
                        <li><a href="shop-details.html">Tips & Tricks</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tpsideinfo__account-link">
        <a href="log-in.html"><i class="icon-user icons"></i> Login / Register</a>
    </div>
    <div class="tpsideinfo__wishlist-link">
        <a href="wishlist.html" target="_parent"><i class="icon-heart"></i> Wishlist</a>
    </div>
</div>
<!-- sidebar-menu-area-end -->
