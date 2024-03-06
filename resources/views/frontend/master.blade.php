<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sobrokom – Let’s Shop </title>
    <meta name="description"
        content="Sobrokom.store, your premier destination for online shopping, offers a curated selection of grocery, food, fashion, electronics, home decor, and more. Discover quality products, exclusive deals, and a seamless shopping experience that reflects the modern lifestyle. Elevate your online shopping journey with Sobrokom.store">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword"
        content="onlineshopping,e-commerce,groceryfoods,electronics,homedecor,gadgets,trendyapparel,affordableprices,qualityproducts,techaccessories,lifestyle,exclusivedeals,fastshipping,bestprices,homeessentials,stylishgoods,modernliving,smarthome,latesttrends,beautyproducts,uniquefinds,digitalmarketplace,convenientshopping,securetransactions,customersatisfaction">
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

<body style="background: var(--tp-grey-1);">
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
    <style>
        .chat {
            font-size: 20px;
            display: none !important;
            justify-content: center;
            align-items: center;
            position: fixed;
            bottom: 24px;
            left: 20px;
            z-index: 99999;
            border-radius: 50%;
            height: 50px;
            width: 50px;
            box-shadow: 1px 1px 5px gray;
            background: #2D2A6E;
            border-color: #9e54a1 !important;
        }

        .chat:hover {
            scale: 1.045;
            color: #2D2A6E !important;
            background: white;
        }

        .chat::after {
            position: absolute;
            z-index: -1;
            content: '';
            top: 100%;
            left: 5%;
            height: 10px;
            width: 90%;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0) 80%);
        }

        .top_search_list li {
            cursor: pointer;
            padding: 5px 0;
        }
    </style>

    <a target="_blank" class="chat btn btn-info text-white" href="https://www.m.me/105731512599106"><i
            class="fab fa-facebook-messenger"></i></a>

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
    <button class="scroll-top scroll-to-target my-scroll-top d-flex justify-content-center align-content-center"
        data-target="html">
        <i class="icon-chevrons-up" style="margin-top: 15px"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area-start -->
    <header>
        @include('frontend.body.topheader')
        @include('frontend.body.mainnav')
    </header>
    <style>
        .my_menu {
            font-weight: 100;
            font-size: 14px;
        }

        /* .first_li{
            display: flex;
            justify-content: space-between
        } */
        .first_li>ul {
            margin-left: 13px;
            color: white;
            font-weight: 100;
            font-size: 14px;
            display: none;
        }

        .second_li>ul {
            margin-left: 13px;
            color: white;
            font-weight: 100;
            font-size: 14px;
            display: none;
        }

        .my_menu li,
        .my_menu i {
            line-height: 30px
        }

        hr {
            margin: 0
        }

        .mobile-bottom-menu {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            right: 0;
            background: #2D2C6E;
            color: #2D2C6E;
            z-index: 999;
            border-top: 1px solid white;
        }

        .bottom-chat,
        .mycard {
            padding: 7px 10px;
            background: white;
            text-align: center
        }

        .mycard {
            width: 80px;
            height: 100% !important;
            padding: 14px 10px;
        }

        .cardI {
            font-size: 40px
        }

        .bottom-chat a {
            color: #2D2C6E !important;
            background: white !important;
            border: none;
            display: flex;
            justify-content: center;
            padding: 7px 10px;
        }
    </style>
    <!-- header-area-end -->

    <main>
        <div class="mobile-bottom-menu d-none justify-content-between align-items-center">
            <div class="bottom-chat brl" style="width: 80px">
                <a target="_blank" class="" href="https://www.m.me/105731512599106"><i
                        class="fab fa-facebook-messenger"></i></a>
            </div>
            <div class="bottom-button d-flex justify-content-around w-75">
                <a href="{{ route('home') }}" style="color: white">Home</a>
                <div style="height: 100%; width:1px; background:white;border:none">s</div>
                @auth
                    <a href="{{ !empty(Auth::user()->id) ? route('user.dashboard') : route('login') }}"
                        style="color: white">Account</a>
                @else
                    <a href="{{ !empty(Auth::user()->id) ? route('user.dashboard') : route('login') }}"
                        style="color: white">Login</a>
                @endauth
            </div>
            <div class="mycard">
                <div class="header__info-cart tp-cart-toggle">
                    <button>
                        <i class="cardI">
                            <img src="{{ asset('frontend') }}/assets/img/icon/cart-1.svg" alt="">
                        </i>
                        {{-- <span class="cart_quantity d-inline"></span> --}}
                    </button>
                </div>
            </div>
        </div>
        <div class="mySlidBar"
            style="display:none;width: 220px; background:#2D2C6E; overflow-y:scroll;position:fixed; z-index:99999;height:100%;top:65px;padding:15px;color:white;">
            <div class="my_menu">
                <div class="my_menu_inner">
                    <div class="my_menu_list">
                        <ul class="list-unstyled">
                            <li class="first_li"><a href="#weekly_offers">Weekly Offers</a>
                            <li>
                                <hr>
                            <li class="first_li"><a href="#New_Arrivals">New Arrivals</a>
                            <li>
                                <hr>
                            <li class="first_li"><a href="#top_trending">Top Trending</a>
                            <li>
                                <hr>
                                @php
                                    $categoris = App\Models\Category::all();
                                @endphp
                                @if ($categoris->count() > 0)
                                    @foreach ($categoris as $category)
                            <li class="first_li" id="first_li_{{ $category->id }}"><a
                                    href="{{ route('category.wise.product', $category->slug) }}">{{ $category->categoryName }}</a>
                                <ul class="list-unstyled">
                                    @php
                                        $subcategories = $category->subcategories;
                                    @endphp
                                    @if ($subcategories->count() > 0)
                                        @foreach ($subcategories as $subcategory)
                                            <li class="second_li" id="second_li_{{ $subcategory->id }}"><a
                                                    href="{{ route('subcategory.wise.product', $subcategory->slug) }}">{{ $subcategory->subcategoryName }}</a>

                                                @php
                                                    $subSubcategories = App\Models\SubSubcategory::where(
                                                        'subcategoryId',
                                                        $subcategory->id,
                                                    )
                                                        ->take(5)
                                                        ->get();
                                                @endphp
                                                @if ($subSubcategories->count() > 0)
                                                    <ul class="list-unstyled">
                                                        @foreach ($subSubcategories as $subSubcategorie)
                                                            <li class="third_li"
                                                                id="third_li_{{ $subSubcategorie->id }}"><a
                                                                    href="{{ route('sub.subcategory.wise.product', $subSubcategorie->slug) }}">{{ $subSubcategorie->subSubcategoryName }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif

                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <hr>
                            @endforeach
                            @endif
                            <li class="first_li"><a href="{{ route('order.tracking') }}">Order Tracking</a>
                            <li>
                                <hr>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
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
    <script src="{{ asset('js') }}/share.js"></script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script defer src="{{ asset('frontend') }}/assets/js/myjsforfrontendmaster.js"></script> --}}
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
        //add wishlist
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
                        } else if (response.status == 500) {
                            toastr.warning("Remove from wishlist");
                            element.querySelector('i').removeAttribute('style', 'color:red');
                        }
                    }
                });
            })
        });
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
                        // if (res.cartData.length > 0) {
                        //     const view_checkout = document.querySelector('.view_checkout');
                        //     view_checkout.style.display = 'block';
                        // } else {
                        //     const view_checkout = document.querySelector('.view_checkout');
                        //     view_checkout.style.display = 'none';
                        // }
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
        .mySlidBarActive {
            width: 0px !important;
            display: block !important;
            padding: 0px !important;
            /* transition: 0.2s ease-in-out; */
        }

        .first_liActive {
            font-weight: 500 !important;
            color: var(--tp-heading-secondary);
        }

        .my_menu i {
            float: right;
        }

        li {
            cursor: pointer;
        }

        .second_liActive {
            font-weight: 500 !important;
            color: var(--tp-heading-secondary);
        }

        .third_liActive {
            font-weight: 500 !important;
            color: var(--tp-heading-secondary);
        }

        .rotate90 {
            transform: rotate(90deg);
            /* transition: transform 0.3s ease; */
        }

        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #FFF;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: var(--tp-heading-secondary)
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #2D2C6E;
        }

        .container {
            margin-top: 20px !important;
        }

        .container {
            margin-left: 215px;
        }
        .mySlidBar{
                display: block !important;
            }

        @media (max-width: 1080px) {
            .mySlidBar{
                display: block !important;
            }
            .container {
                margin-left: 60px;
            }
        }

        @media (max-width: 767px),
        only screen and (min-width: 576px) and (max-width: 767px) {
            .tpslider__content {
                margin-top: 50px !important;
            }

            .tp-btn {
                padding: 8px 30px;
            }

            .mytop-logo {
                padding-right: 20px !important;
            }

            .accounts-nav {
                display: none !important;
            }

            .top-serch-container {
                margin-top: 10px
            }

            .mySlidBar {
                margin-top: 48px !important;
            }

            .container {
                margin: 0 !important;
            }

            .mobile-bottom-menu {
                display: flex !important;
            }

            .my-scroll-top {
                display: none !important;
            }

            .container {
                margin-top: 40px !important;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let width = document.body.offsetWidth;
            if (width < 767) {
                const sidebar = document.querySelector('.mySlidBar').classList.add('mySlidBarActive');
                $('.container').css({
                    'marginLeft': '65px',
                    'marginRight': '0'
                })
            }
            const firstLis = document.querySelectorAll('.first_li');
            const secondLis = document.querySelectorAll('.second_li');

            firstLis.forEach((li) => {
                if (li.querySelector('ul')) { // Check if the li contains a ul
                    const icon = document.createElement('i'); // Create the i element
                    icon.className = 'fas fa-angle-right'; // Add the class
                    li.insertBefore(icon, li.childNodes[1]); // Insert the icon before the first child of li
                }
            });

            secondLis.forEach((li) => {
                if (li.querySelector('ul')) { // Check if the li contains a ul
                    const icon = document.createElement('i'); // Create the i element
                    icon.className = 'fas fa-angle-right'; // Add the class
                    li.insertBefore(icon, li.childNodes[1]); // Insert the icon before the first child of li
                }
            });

            // Toggle sidebar
            const myToggle = document.querySelector('.myToggle');
            myToggle.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('.mySlidBar').classList.toggle('mySlidBarActive');
                let width = document.body.offsetWidth;
                if (width > 1080) {
                    if (document.querySelector('.mySlidBar').classList.contains('mySlidBarActive')) {
                        $('.container').css({
                            'marginLeft': '130px',
                            'marginRight': '0'
                        })
                    } else {
                        $('.container').css({
                            'marginLeft': '215px'
                        })
                    }
                }
                // if(width > 767){
                //     if(document.querySelector('.mySlidBar').classList.contains('mySlidBarActive')){
                //         $('.container').css({'marginLeft':'50px','marginRight':'0'})
                //     }else{
                //         $('.container').css({'marginLeft':'130px'})
                //     }
                // }
                // let width = document.body.offsetWidth;
                // if(width < 767){
                //     $('.container').css({'marginLeft':'40px','marginRight':'0'})
                // }
                // if(width < 1081){
                //     $('.container').css({'marginLeft':'20','width':'100%'})
                // }
            });
            // Function to handle click on list items
            function handleLiClick(items, storageKey) {
                items.forEach((item) => {
                    item.addEventListener('click', function(e) {
                        items.forEach((el) => {
                            el.classList.remove('first_liActive',
                                'second_liActive'); // Adjust based on your classes
                            const insideI = el.querySelector('i');
                            if (insideI) {
                                insideI.classList.remove('rotate90');
                            }
                            if (el.querySelector('ul')) { // Check if the li contains a ul
                                el.querySelector('ul').style.display = "none";
                            }
                        });
                        item.classList.add(storageKey === 'firstActiveLi' ? 'first_liActive' :
                            'second_liActive');
                        const insideI = item.querySelector('i');
                        if (insideI) {
                            insideI.classList.add('rotate90');
                        }
                        if (item.querySelector('ul')) { // Check if the li contains a ul
                            item.querySelector('ul').style.display = "block";
                        }
                        // Save the id of the clicked item in localStorage
                        localStorage.setItem(storageKey, item.id);
                    })
                });
            }

            const first_lis = document.querySelectorAll('.first_li');
            handleLiClick(first_lis, 'firstActiveLi');

            const second_lis = document.querySelectorAll('.second_li');
            handleLiClick(second_lis, 'secondActiveLi');

            const third_lis = document.querySelectorAll('.third_li');
            handleLiClick(third_lis, 'thirdActiveLi');

            // Restore active state from localStorage
            function restoreActiveState(items, storageKey) {
                const activeLiId = localStorage.getItem(storageKey);
                if (activeLiId) {
                    const activeLi = document.getElementById(activeLiId);
                    if (activeLi) {
                        activeLi.classList.add(storageKey === 'firstActiveLi' ? 'first_liActive' :
                            'second_liActive');
                        const insideI = activeLi.querySelector('i');
                        if (insideI) {
                            insideI.classList.add('rotate90');
                        }
                        if (activeLi.querySelector('ul')) {
                            activeLi.querySelector('ul').style.display = "block";
                        }
                    }
                }
            }

            restoreActiveState(first_lis, 'firstActiveLi');
            restoreActiveState(second_lis, 'secondActiveLi');
            restoreActiveState(second_lis, 'thirdActiveLi');

        });
        // const myToggle = document.querySelector('.myToggle');
        // myToggle.addEventListener('click', function(e) {
        //     e.preventDefault();
        //     document.querySelector('.mySlidBar').classList.toggle('mySlidBarActive');
        // });

        // const first_lis = document.querySelectorAll('.first_li');
        // first_lis.forEach((item) => {
        //     item.addEventListener('click', function(e){
        //         // e.preventDefault();
        //         // alert("OK")
        //         document.querySelectorAll('.first_li').forEach((el)=>{
        //             el.classList.remove('first_liActive');
        //             const insideI = el.querySelector('i');
        //             if(insideI){
        //                 insideI.classList.remove('rotate90');
        //             }
        //             if (el.querySelector('ul')) { // Check if the li contains a ul
        //                 el.querySelector('ul').style.display ="none";
        //         }
        //         });
        //         item.classList.add('first_liActive');
        //         const insideI = item.querySelector('i');
        //         if(insideI){
        //             insideI.classList.add('rotate90');
        //         }
        //         // console.log(item)
        //         if (item.querySelector('ul')) { // Check if the li contains a ul
        //             item.querySelector('ul').style.display ="block";
        //         }
        //     })
        // });

        // const second_lis = document.querySelectorAll('.second_li');
        // second_lis.forEach((item) => {
        //     item.addEventListener('click', function(e){
        //         // alert("OK")
        //         document.querySelectorAll('.second_li').forEach((el)=>{
        //             el.classList.remove('second_liActive');
        //             const insideI = el.querySelector('i');
        //             if(insideI){
        //                 insideI.classList.remove('rotate90');
        //             }
        //             if (el.querySelector('ul')) { // Check if the li contains a ul
        //                 el.querySelector('ul').style.display ="none";
        //         }
        //         });
        //         item.classList.add('second_liActive');
        //         const insideI = item.querySelector('i');
        //         if(insideI){
        //             insideI.classList.add('rotate90');
        //         }
        //         // console.log(item)
        //         if (item.querySelector('ul')) { // Check if the li contains a ul
        //             item.querySelector('ul').style.display ="block";
        //         }
        //     })
        // });
    </script>

    <script>
        //add Tracker
        $(document).ready(function() {
            fetch('https://ipinfo.io/json')
                .then(response => response.json())
                .then(data => {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '{{ route('user.count') }}',
                        type: 'post',
                        data: {
                            'country_info': data.country,
                            'url': window.location.href
                        },
                        success: function(response) {
                            // console.log(response);

                        }
                    });
                })
        })
    </script>

    {{-- ALl Code For Order Tracking Information --}}
    @if (!empty($order))
        <script>
            <?php
            $date = new DateTime($order->updated_at);
            $formattedDate = $date->format('M j');
            $day = $date->format('j');
            if ($day % 10 == 1 && $day != 11) {
                $formattedDate .= 'st';
            } elseif ($day % 10 == 2 && $day != 12) {
                $formattedDate .= 'nd';
            } elseif ($day % 10 == 3 && $day != 13) {
                $formattedDate .= 'rd';
            } else {
                $formattedDate .= 'th';
            }
            $formattedDate .= $date->format(' Y g:i A');
            ?>
            let status = '{{ $order->status }}';
            let date = '{{ $formattedDate }}';
            const submit_circle = document.querySelector('.submit_circle');
            const submit_card = document.querySelector('.submit_card');
            const submit_card_date = document.querySelector('.submit_data');
            const submit_card_h4 = document.querySelector('.submit_title');

            const confirm_circle = document.querySelector('.confirm_circle');
            const confirm_card = document.querySelector('.confirm_card');
            const confirm_card_date = document.querySelector('.confirm_date');
            const confirm_card_h4 = document.querySelector('.confirm_title');

            const process_circle = document.querySelector('.process_circle');
            const process_card = document.querySelector('.process_card');
            const process_card_date = document.querySelector('.process_date');
            const process_card_h4 = document.querySelector('.process_title');

            const onthe_way_circle = document.querySelector('.onthe_way_circle');
            const onthe_way_card = document.querySelector('.onthe_way_card');
            const onthe_way_card_date = document.querySelector('.onthe_way_date');
            const onthe_way_card_h4 = document.querySelector('.onthe_way_title');

            const complete_circle = document.querySelector('.complete_circle');
            const complete_card = document.querySelector('.complete_card');
            const complete_card_date = document.querySelector('.complete_date');
            const complete_card_h4 = document.querySelector('.complete_title');

            if (status === 'pending') {
                submit_circle.setAttribute('style', 'background: #9e54a1 !important');
                submit_card.setAttribute('style', 'border-color: #9e54a1 !important');
                submit_card_date.setAttribute('style', 'color: #9e54a1 !important');
                submit_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                submit_card.classList.add('shadow');
            }
            if (status === 'approve') {
                submit_circle.setAttribute('style', 'background: #9e54a1 !important');
                submit_card.setAttribute('style', 'border-color: #9e54a1 !important');
                submit_card_date.setAttribute('style', 'color: #9e54a1 !important');
                submit_card_date.innerHTML = date;
                submit_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                submit_card.classList.add('shadow');

                confirm_circle.setAttribute('style', 'background: #9e54a1 !important');
                confirm_card.setAttribute('style', 'border-color: #9e54a1 !important');
                confirm_card_date.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card_date.innerHTML = date;
                confirm_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card.classList.add('shadow');
            }
            if (status === 'processing') {
                submit_circle.setAttribute('style', 'background: #9e54a1 !important');
                submit_card.setAttribute('style', 'border-color: #9e54a1 !important');
                submit_card_date.setAttribute('style', 'color: #9e54a1 !important');
                submit_card_date.innerHTML = date;
                submit_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                submit_card.classList.add('shadow');

                confirm_circle.setAttribute('style', 'background: #9e54a1 !important');
                confirm_card.setAttribute('style', 'border-color: #9e54a1 !important');
                confirm_card_date.innerHTML = date;
                confirm_card_date.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card.classList.add('shadow');

                process_circle.setAttribute('style', 'background: #9e54a1 !important');
                process_card.setAttribute('style', 'border-color: #9e54a1 !important');
                process_card_date.setAttribute('style', 'color: #9e54a1 !important');
                process_card_date.innerHTML = date;
                process_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                process_card.classList.add('shadow');
            }
            if (status === 'delivering') {
                submit_circle.setAttribute('style', 'background: #9e54a1 !important');
                submit_card.setAttribute('style', 'border-color: #9e54a1 !important');
                submit_card_date.setAttribute('style', 'color: #9e54a1 !important');
                submit_card_date.innerHTML = date;
                submit_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                submit_card.classList.add('shadow');

                confirm_circle.setAttribute('style', 'background: #9e54a1 !important');
                confirm_card.setAttribute('style', 'border-color: #9e54a1 !important');
                confirm_card_date.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card_date.innerHTML = date;
                confirm_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card.classList.add('shadow');

                process_circle.setAttribute('style', 'background: #9e54a1 !important');
                process_card.setAttribute('style', 'border-color: #9e54a1 !important');
                process_card_date.setAttribute('style', 'color: #9e54a1 !important');
                process_card_date.innerHTML = date;
                process_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                process_card.classList.add('shadow');

                onthe_way_circle.setAttribute('style', 'background: #9e54a1 !important');
                onthe_way_card.setAttribute('style', 'border-color: #9e54a1 !important');
                onthe_way_card_date.setAttribute('style', 'color: #9e54a1 !important');
                onthe_way_card_date.innerHTML = date;
                onthe_way_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                onthe_way_card.classList.add('shadow');
            }
            if (status === 'completed') {
                submit_circle.setAttribute('style', 'background: #9e54a1 !important');
                submit_card.setAttribute('style', 'border-color: #9e54a1 !important');
                submit_card_date.setAttribute('style', 'color: #9e54a1 !important');
                submit_card_date.innerHTML = date;
                submit_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                submit_card.classList.add('shadow');

                confirm_circle.setAttribute('style', 'background: #9e54a1 !important');
                confirm_card.setAttribute('style', 'border-color: #9e54a1 !important');
                confirm_card_date.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card_date.innerHTML = date;
                confirm_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                confirm_card.classList.add('shadow');

                process_circle.setAttribute('style', 'background: #9e54a1 !important');
                process_card.setAttribute('style', 'border-color: #9e54a1 !important');
                process_card_date.setAttribute('style', 'color: #9e54a1 !important');
                process_card_date.innerHTML = date;
                process_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                process_card.classList.add('shadow');

                onthe_way_circle.setAttribute('style', 'background: #9e54a1 !important');
                onthe_way_card.setAttribute('style', 'border-color: #9e54a1 !important');
                onthe_way_card_date.setAttribute('style', 'color: #9e54a1 !important');
                onthe_way_card_date.innerHTML = date;
                onthe_way_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                onthe_way_card.classList.add('shadow');

                complete_circle.setAttribute('style', 'background: #9e54a1 !important');
                complete_card.setAttribute('style', 'border-color: #9e54a1 !important');
                complete_card_date.setAttribute('style', 'color: #9e54a1 !important');
                complete_card_date.innerHTML = date;
                complete_card_h4.setAttribute('style', 'color: #9e54a1 !important');
                complete_card.classList.add('shadow');
            }
        </script>
    @endif

</body>

</html>
