<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOBROKOM | Largest Ecommerce Website </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ajax Header -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/logo/favicon.svg">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/icon-dukamarket.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    {{-- main jquery file --}}
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
</head>

<body>
    @php
        $cartData = Cart::content();
        // @dd(Cart::total());
    @endphp

    @if ($cartData->count() > 0)
        @foreach ($cartData as $cart)
        {{-- @dd($cart->options->image); --}}
            {{-- @dd($cart->name); --}}
            {{-- <p>{{$cart->name}}</p> --}}
        @endforeach
    @endif
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area-start -->
    <header>

        @include('frontend.body.topheader')
        @include('frontend.body.mainnav')
    </header>
    <!-- header-area-end -->

    <main>

        @yield('maincontent')

    </main>

    <!-- footer-area-start -->
    @include('frontend.body.footer')
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/waypoints.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/nice-select.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/counterup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/meanmenu.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>

    {{-- add wishlist  --}}
    <script>
        const add_whishlist = document.querySelectorAll('.add_whishlist');
        // console.log(add_whishlist);
        add_whishlist.forEach(element => {
            // console.log(element)


            element.addEventListener('click', function(e) {


                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let product_id = this.getAttribute('value');
                // alert(product_id);

                $.ajax({
                    url: '/wishlist/add',
                    type: 'POST',
                    data: {
                        'product_id': product_id,
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            toastr.success(response.message);
                            element.querySelector('i').setAttribute('style', 'color:red');
                            // console.log(element.querySelector('i'));
                        } else {
                            // toastr.warning(response);
                        }
                    }
                });
            })
        });
    </script>

    {{-- add To Cart  --}}
    <script>
        const addForm = document.querySelectorAll('#add_to_cart_form');
        addForm.forEach(element => {
            element.addEventListener('submit', function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                let product_id = this.elements.product_id.value
                let variant_id = this.elements.variant_id.value
                let selling_price = this.elements.selling_price.value

                // console.log(product_id, variant_id,selling_price);

                $.ajax({
                    url: '/product/add_to_cart',
                    type: 'POST',
                    data: {
                        'product_id': product_id,
                        'variant_id': variant_id,
                        'selling_price': selling_price,
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            toastr.success(response.message);
                            // showCart();
                        } else {

                        }
                    }
                });

            });
        })



        // show data on cart
        // function showCart() {

        //     $.ajax({
        //         url: '/product/show_cart',
        //         type: "GET",
        //         dataType: 'JSON',
        //         success: function(res) {
        //             if (res.status == 200) {
        //                 // console.log(res);
        //                 const cart_container = document.querySelector('.cart_container');
        //                 cart_container.innerHTML = "";
        //                 const allData = res.cartData;
        //                 allData.forEach((data) => {
        //                     console.log(data);
        //                     // const li = document.createElement('li');
        //                     // li.innerHTML += `
        //                     //         <div class="tpcart__item">
        //                     //                 <div class="tpcart__img">
        //                     //                     <img src=""
        //                     //                         alt="">
        //                     //                     <div class="tpcart__del">
        //                     //                         <a href="#"><i class="icon-x-circle"></i></a>
        //                     //                     </div>
        //                     //                 </div>
        //                     //                 <div class="tpcart__content">
        //                     //                     <span class="tpcart__content-title"><a
        //                     //                             href="shop-details.html">{{ $cart->name }}</a>
        //                     //                     </span>
        //                     //                     <div class="tpcart__cart-price">
        //                     //                         <span class="quantity">{{ $cart->qty }}</span> x
        //                     //                         <span class="new-price">৳{{ $cart->price }}</span>
        //                     //                     </div>
        //                     //                 </div>
        //                     //             </div>
        //                     //         `;
        //                     // varient_container.appendChild(tr);
        //                 })
        //             } else {
        //                 toastr.warning(res.error);
        //             }
        //         }
        //     })
        // }


    </script>
</body>

</html>
