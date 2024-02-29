<div class="header__top theme-bg-1 d-md-block" style="position: fixed;top:0;z-index:999999;right:0;left:0;padding:10px 15px 15px 10px">
    <div class="">
        <div class="row align-items-center d-flex justify-content-lg-around" style="padding-left: 20px">
            <div class="col-lg-2 col-md-3 d-flex justify-content-between" style="padding-right: 0">
                <div class="header__top-left d-flex align-items-center">
                    {{-- <span>Our <strong> Hot Line:</strong> +880 1602 08 51 21</span> --}}
                    <a href="#" class="myToggle" style="color:white;font-size:22px"><i class="fas fa-bars"></i></a>
                </div>
                <a href="{{ route('home') }}" style="margin-left: 10px" class="mytop-logo"><img width="150" src="{{ asset('/frontend/assets/img/logo/white-logo.png') }}" alt="Sobrokom Logo" height="40"></a>
            </div>
            <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center top-serch-container">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products (e.g. fet food, milk, cat food)" aria-label="Search for products (e.g. fet food, milk, cat food)" aria-describedby="button-addon2" style="border-radius: 0;">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" style="color: var(--tp-heading-secondary) !important;
                    border: 1px solid var(--tp-heading-secondary);">Search</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 align-items-center accounts-nav">
                <div class="header__info d-flex align-items-center">
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

