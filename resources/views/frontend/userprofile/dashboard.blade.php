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
                            <span>User</span>
                            <span class="dvdr">/</span>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area-end -->

    <style>
        .tabContent {
            display: none;
        }

        .tab_active {
            display: block !important;

        }

        .tab_card {

            background-color: var(--tp-common-white);
            padding: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
    <!-- track-area-start -->
    <section class="track-area pb-40 grey-bg">
        <div class="container">
            <div class="row">
                {{-- User Dashboard sidebar --}}
                <div class="col-xl-3 col-lg-12 col-md-12">
                    <div class="tpshop__leftbar">
                        {{-- sidebar search --}}
                        <div class="sidebar__widget mb-20">
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search">
                                    <form action="#">
                                        <div class="sidebar__search p-relative">
                                            <input type="text" placeholder="Search">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- sidebar menu --}}
                        <div class="sidebar__widget mb-40">
                            <h3 class="sidebar__widget-title mb-15">User Dashboard</h3>
                            <div class="sidebar__widget-content tab__main">
                                <ul>
                                    <li>
                                        <span><i class="fas fa-user pe-2"></i>
                                            <a href="#" tabindex="1" class="active">Profile</a>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-envelope-open-dollar pe-2"></i>
                                            <a href="#" tabindex="2">Billings</a>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-heart-circle pe-2"></i>
                                            <a href="#" tabindex="3">Wishlist</a>
                                    </li>
                                    <li>
                                        <span><i class="far fa-home pe-2"></i>
                                            <a href="#" tabindex="4">Orders</a>
                                    </li>
                                    <li>
                                        <span><i class="far fa-home pe-2"></i>
                                            <a href="#" tabindex="5">Order Tracking</a>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-money-check-alt pe-2"></i>
                                            <a href="#" tabindex="6">Refunds</a>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-user-cog pe-2"></i>
                                            <a href="#" tabindex="7">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tpshop__widget">
                        <div class="tpshop__sidbar-thumb mt-35">
                            <img src="assets/img/shape/sidebar-product-1.png" alt="">
                        </div>
                    </div>
                </div>
                {{-- User Dashboard Body --}}
                <div class="col-xl-9 col-lg-12 col-md-12">
                    {{-- profile body --}}
                    @php
                        $user = App\Models\User::findOrFail(Auth::user()->id);
                        // dd($user);
                    @endphp
                    <div class="tab__content--1 tabContent tab_active">
                        @include('frontend.userprofile.tabs.profile')
                    </div>
                    {{-- Billings body --}}
                    <div class="tab__content--2 tabContent">
                        @include('frontend.userprofile.tabs.billings')
                    </div>
                    {{-- Wishlist body --}}
                    @php
                        $wishlists = App\Models\WishList::where('user_id', $user->id)
                            ->where('loved', 1)
                            ->get();
                    @endphp
                    <div class="tab__content--3 tabContent">

                        @include('frontend.userprofile.tabs.wishlist')
                    </div>
                    {{-- Orders body --}}
                    @php
                        $orders = App\Models\Order::where('user_identity', $user->phone)->get();
                        //  dd($orders);
                    @endphp

                    <div class="tab__content--4 tabContent">
                        @include('frontend.userprofile.tabs.orders')
                    </div>
                    {{-- Orders Tracking body --}}
                    <div class="tab__content--5 tabContent">
                        @include('frontend.userprofile.tabs.orderTracking')
                    </div>
                    {{-- Refunds body --}}
                    <div class="tab__content--6 tabContent">
                        @include('frontend.userprofile.tabs.refunds')
                    </div>
                    {{-- settings body --}}
                    <div class="tab__content--7 tabContent">
                        @include('frontend.userprofile.tabs.settings')
                    </div>

                </div>
            </div>
            {{-- <div class="row justify-content-center my-5">
                <div class="col-12 tab__container">
                    <div class="row">
                        <div class="col-md-3 tab__main">

                            <ul class="nav flex-column border border-primary">
                                <li>
                                    <a class="nav-link active" href="#" tabindex="1">Dashboard</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#" tabindex="2">Profile</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#" tabindex="3">Orders</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#" tabindex="4">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9 tab__content">
                            <div class="tab__content--1 tabContent ">
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#" tabindex="-1"
                                            aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                this is dashboard
                            </div>
                            <div class="tab__content--2 tabContent">this is Profile</div>
                            <div class="tab__content--3 tabContent">this is Orders</div>
                            <div class="tab__content--4 tabContent">this is dashboard</div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="card">
                <div class="card-body">
                    <div id="invoice">
                        <div class="toolbar hidden-print">
                            <div class="text-end">
                                <button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as
                                    PDF</button>
                            </div>
                            <hr />
                        </div>
                        <div class="invoice overflow-auto">
                            <div style="min-width: 600px">
                                <header>
                                    <div class="row">
                                        <div class="col">
                                            <a href="javascript:;">
                                                <img src="assets/images/logo-icon.png" width="80" alt="" />
                                            </a>
                                        </div>
                                        <div class="col company-details">
                                            <h2 class="name">
                                                <a target="_blank" href="javascript:;">
                                                    Sobrokom Corporation
                                                </a>
                                            </h2>
                                            <div>+880 1602 08 51 21</div>
                                            <div>sobrokom.store@gmail.com</div>
                                            <div>info@sobrokom.store</div>
                                        </div>
                                    </div>
                                </header>
                                <main>
                                    <div class="row contacts">
                                        <div class="col invoice-to">
                                            <div class="text-gray-light">INVOICE TO:</div>
                                            <h2 class="to">Client Name</h2>
                                            <div class="address">Client Address</div>
                                            <div class="email"><a href="mailto:john@example.com">client@example.com</a>
                                            </div>
                                        </div>
                                        <div class="col invoice-details">
                                            <h1 class="invoice-id">INVOICE 3-2-1</h1>
                                            <div class="date">Date of Invoice: 01/10/2018</div>
                                            <div class="date">Due Date: 30/10/2018</div>
                                        </div>
                                    </div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="text-left">PRODUCT NAME</th>
                                                <th class="text-right">PRODUCT QUANTITY</th>
                                                <th class="text-right">WEIGHT</th>
                                                <th class="text-right">UNIT PRICE</th>
                                                <th class="text-right">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="no">01</td>
                                                <td class="text-left">
                                                    <h3>Website Design</h3>Creating a recognizable design solution based on the
                                                    company's existing visual identity
                                                </td>
                                                <td class="">30</td>
                                                <td class="unit">$40.00</td>
                                                <td class="qty">30</td>
                                                <td class="total">$1,200.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="3">SUBTOTAL</td>
                                                <td>$5,200.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="2">TAX 25%</td>
                                                <td>$1,300.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="2">GRAND TOTAL</td>
                                                <td>$6,500.00</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="thanks">Thank you!</div>
                                    <div class="notices">
                                        <div>NOTICE:</div>
                                        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30
                                            days.</div>
                                    </div>
                                </main>
                                <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                            </div>
                            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!-- Recommended product-area-start -->
    @include('frontend.pageContent.recommendedProduct')
    <!-- Recommended product-area-end -->

    <!-- feature-area-start -->
    <section class="feature-area mainfeature__bg pt-50 pb-40"
        data-background="{{ asset('frontend') }}/assets/img/shape/footer-shape-1.svg">
        <div class="container">
            <div class="mainfeature__border pb-15">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                    <div class="col">
                        <div class="mainfeature__item text-center mb-30">
                            <div class="mainfeature__icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-1.svg" alt="">
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
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-2.svg" alt="">
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
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-3.svg" alt="">
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
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-4.svg" alt="">
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
                                <img src="{{ asset('frontend') }}/assets/img/icon/feature-icon-5.svg" alt="">
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
    <script>
        const tabmain = document.querySelectorAll('.tab__main ul li a');
        tabmain.forEach((main) => {
            // console.log(main);
            main.addEventListener('click', (e) => {
                e.preventDefault();

                // alert('ok');


                let index = main.getAttribute('tabindex');
                // alert(index)

                document.querySelectorAll('.tabContent').forEach((content) => {
                    content.classList.remove('tab_active');
                });

                const tab__content = document.querySelector(".tab__content--" + index);
                // console.log(tab__content);
                tab__content.classList.add('tab_active');

            })
        })
    </script>
    <!-- track-area-end -->
@endsection
