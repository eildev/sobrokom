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
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/all.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/invoice.css">

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


    {{-- main jquery file --}}
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>

    <!-- tinymce js here -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document
                .querySelector(".pageLoader")
                .style.setProperty("display", "none", "important");
        });
    </script>
</head>

<body>
    <style>
        .pageLoader {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            display: flex;
            //display:none;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, .7);
            z-index: 9999999999999999999999;
        }
    </style>
    <div class="pageLoader">
        <img src="{{ asset('uploads/pageloader.gif') }}" style="width:112px;">
    </div>

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
                let product_id = this.elements.product_id.value;
                let variant_id = this.elements.variant_id.value;
                let selling_price = this.elements.selling_price.value;
                let weight = this.elements.weight.value;
                let unit = this.elements.unit.value;
                // console.log(product_id, variant_id,selling_price);
                $.ajax({
                    url: '/product/add_to_cart',
                    type: 'POST',
                    data: {
                        'product_id': product_id,
                        'variant_id': variant_id,
                        'selling_price': selling_price,
                        'pr_quantity': '1',
                        'weight': weight,
                        'unit': unit
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            toastr.success(response.message);
                            showCart();
                        } else {

                        }
                    }
                });

            });
        })
    </script>




    <script>
        // document.querySelector(".heilight-price").textContent = "200";
        // Function to update the cart display
        function updateCartDisplay(cartData) {
            $('.cart_container').empty();
            // console.log(cartData);
            if (Object.keys(cartData).length > 0) {
                var itemsToDisplay = 3;
                // console.log(Object.keys(cartData).length);
                $('.cart_quantity').text(Object.keys(cartData).length);
                $('.mobile_show_quantity').text(Object.keys(cartData).length);

                for (var i = 0; i < itemsToDisplay; i++) {
                    var key = Object.keys(cartData)[i];
                    var item = cartData[key];

                    $('.cart_container').append(
                        '<li>' +
                        '<div class="tpcart__item">' +
                        '<div class="tpcart__img">' +
                        '<img src="{{ asset('uploads/products/') }}/' + item.options.image + '" alt="product Image">' +
                        '<div class="tpcart__del">' +
                        '<a href="#" class="item_remove" value="' + item.rowId + '"><i class="icon-x-circle"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '<div class="tpcart__content">' +
                        '<span class="tpcart__content-title"><a href="#">' + item.name + '</a></span>' +
                        '<div class="tpcart__cart-price">' +
                        '<span class="quantity">' + item.qty + '</span> x ' +
                        '<span class="new-price">৳' + item.price + '</span>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</li>'
                    );
                }


                if (Object.keys(cartData).length > 3) {
                    var remainingItems = Object.keys(cartData).length - itemsToDisplay;
                    $('.cart_container').append('<li>and ' + remainingItems + ' more item(s)</li>');
                }
            } else {
                // Display a message when the cart is empty
                $('.cart_container').append('<p>Your cart is empty</p>');

                // Update the cart quantity span to 0 when the cart is empty
                $('.cart_quantity').text('0');
                $('.mobile_show_quantity').text('0');
            }

        }

        $(document).ready(function() {
            showCart();
            // document.querySelector(".heilight-price").textContent = "200";
        });



        // Function to show data on cart
        function showCart() {
            $.ajax({
                url: '/product/show_cart',
                type: "GET",
                dataType: 'JSON',
                success: function(res) {
                    if (res.status == 200) {
                        let totalPrice = 0;
                        $.each(res.cartData, function(key, val) {
                            totalPrice += val.subtotal;
                        });
                        document.querySelector(".heilight-price").textContent = "৳" + totalPrice;
                        updateCartDisplay(res.cartData);
                        // console.log(res.cartData);
                    }
                }
            });
        }


        // item remove from cart
        $(document).ready(function() {
            $(document).on('click', '.item_remove', function(e) {
                e.preventDefault();
                // alert('ok')
                let itemValue = this.getAttribute('value');
                // alert(itemValue);
                $.ajax({
                    url: '/product/remove_cart_product/' + itemValue,
                    type: "GET",
                    success: function(res) {
                        toastr.success(res.message);
                        showCart();
                    }
                })
            })
        });
    </script>





    {{-- swwetalert  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            //    delete function
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();

                var link = $(this).attr("href");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your File has been deleted.',
                            'success'
                        )
                    }
                })

            });
        });

        // search by suggestion
        const top_search = document.querySelector('.top_search');
        const top_search_list = document.querySelector('.top_search_list');
        top_search.addEventListener('keyup', function(e) {
            let search_value = this.value;
            if (search_value) {
                $.ajax({
                    url: '/product/global/search/' + search_value,
                    type: "GET",
                    success: function(res) {
                        if (res.products) {
                            $('.top_search_list').css('display', 'block');
                            let data = "";
                            $.each(res.products, function(key, val) {
                                data += '<li>' + val.product_name + '</li>';
                            });
                            $('.top_search_list').html(data);
                        }
                    }
                })


            } else {
                $('.top_search_list').css('display', 'none');
            }
        });



        // function searchSuggetion(inputField) {
        //     inputField.addEventListener('keyup', function(e) {
        //         let search_value = this.value;
        //         if (search_value) {
        //             $.ajax({
        //                 url: '/product/global/search/' + search_value,
        //                 type: "GET",
        //                 success: function(res) {
        //                     if (res.products) {
        //                         $('.top_search_list').css('display', 'block');
        //                         let data = "";
        //                         $.each(res.products, function(key, val) {
        //                             data += '<li>' + val.product_name + '</li>';
        //                         });
        //                         $('.top_search_list').html(data);
        //                     }
        //                 }
        //             })


        //         } else {
        //             $('.top_search_list').css('display', 'none');
        //         }
        //     });

        //     $(document).on('click', '.top_search_list li', function() {
        //         // $('.top_search').val($(this).text());
        //         inputField.value = this.value;
        //         $('.top_search_list').css('display', 'none');
        //     });
        // }

        $(document).on('click', '.top_search_list li', function() {
                $('.top_search').val($(this).text());
                $('.top_search_list').css('display', 'none');
            });
    </script>
    <style>
        .top_search_list li {
            cursor: pointer;
            padding: 5px 0;
        }
    </style>
    
  
</body>

</html>

 <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4843955,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4843955&101" alt="free hit counter code" border="0"></a></noscript>
<!-- Histats.com  END  -->
