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
        // const add_to_cart = document.querySelectorAll('.btn_add_to_cart');
        // // console.log(add_whishlist);
        // add_to_cart.forEach(element => {
        //     // console.log(element)


        //     element.addEventListener('click', function(e) {


        //         e.preventDefault();
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });
        //         let product_id = this.getAttribute('value');
        //         // alert(product_id);

        //         $.ajax({
        //             url: '/',
        //             type: 'POST',
        //             data: {
        //                 'product_id': product_id,
        //                 'variant_id': product_id,
        //                 'selling_price': product_id,
        //             },
        //             success: function(response) {
        //                 if (response.status == 200) {
        //                     toastr.success(response.message);
        //                     element.querySelector('i').setAttribute('style', 'color:red');
        //                     // console.log(element.querySelector('i'));
        //                 } else {
        //                     // toastr.warning(response);
        //                 }
        //             }
        //         });
        //     })
        // });




        const addForm = document.getElementById('add_to_cart_form');
        addForm.forEach(element => {
            element.addEventListener('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);
                console.log(formData);

            });
        })
    </script>
</body>

</html>
