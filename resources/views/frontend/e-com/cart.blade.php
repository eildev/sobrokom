@extends('frontend.master')
@section('maincontent')
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                            <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                            <span class="dvdr">/</span>
                            <span>Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- cart area -->
    <section class="cart-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Courses</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($products); --}}
                                    @if ($products->count() > 0)
                                        @foreach ($products as $product)
                                            <tr class="cart_row">
                                                <td class="product-thumbnail">
                                                    <a href="shop-details.html">
                                                        <img src="{{ asset('uploads/products/' . $product->options->image) }}"
                                                            alt="Product Image">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="shop-details.html">{{ $product->name }}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount unit_price" data-value="{{ $product->price }}">
                                                        ৳{{ $product->price }}
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span class="cart-minus">-</span>
                                                    <input class="cart-input product_input" type="text"
                                                        value="{{ $product->qty }}">
                                                    <span class="cart-plus cart_plus" value="{{ $product->rowId }}">+</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="amount">$130.00</span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="#" value="{{ $product->rowId }}" class="item_remove"><i
                                                            class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text">
                                        <button class="tp-btn tp-color-btn banner-animation" name="apply_coupon"
                                            type="submit">Apply
                                            Coupon</button>
                                    </div>
                                    <div class="coupon2">
                                        <button class="tp-btn tp-color-btn banner-animation" name="update_cart"
                                            type="submit">Update cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5 ">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Subtotal
                                            <span>
                                                &#2547 {{ Cart::subtotal() }}
                                            </span>
                                        </li>
                                        <li>Total <span>$250.00</span></li>
                                    </ul>
                                    <a href="checkout.html" class="tp-btn tp-color-btn banner-animation">Proceed to
                                        Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cart area end-->

    <script>
        $(document).ready(function() {
            $('.cart-minus').on('click', function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
        });

        $(document).ready(function() {
            $('.cart-plus').on('click', function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                // Find the parent <td> and then find the .unit_price within it
                    let unit_price_element = $(this).parents('.cart_row').find('.unit_price').attr('data-value');


            });
        });



        // // remove Item from Cart
        // $(document).on('click', '.item_remove', function(e) {
        //         e.preventDefault();
        //         // alert('ok')
        //         let itemValue = this.getAttribute('value');
        //         // alert(itemValue);
        //         $.ajax({
        //             url: '/product/remove_cart_product/' + itemValue,
        //             type: "GET",
        //             success: function(res){
        //                 toastr.success(res.message);
        //                 showCart();
        //             }
        //         })
        //     })



        // remove Item from Cart
        // const removeItem = document.querySelectorAll('.remove_item');
        // removeItem.forEach(item => {
        //     item.addEventListener('click', (e) => {
        //         e.preventDefault();

        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });
        //         const id = item.getAttribute('data-id');
        //         $.ajax({
        //             url: '/product/remove_cart_product/' + id,
        //             type: 'GET',
        //             data: {
        //                 'id': id,
        //             },
        //             success: function(response) {
        //                 if (response.status == 200) {
        //                     toastr.success(response.message);

        //                 } else {

        //                 }
        //             }
        //         });

        //     })
        // });


        // $('.cart-plus').on('click', function() {
        //     var $input = $(this).parent().find('input');
        //     $input.val(parseInt($input.val()) + 1);
        //     $input.change();
        //     return false;
        // });
        // let cartPlus = document.querySelectorAll('.cart-plus');

        // // console.log(cartPlus);
        // cartPlus.forEach(element => {
        //     element.addEventListener('click',function() {
        //         let cartInput = document.querySelectorAll('.cart-input');
        //         cartInput.forEach(input => {

        //         })
        //     });
        // });


        // $(document).on('click', '.cart-plus', function(e) {
        //         e.preventDefault();
        //         alert('ok')
        //         let itemValue = this.getAttribute('value');
        //         alert(itemValue);
        //         $.ajax({
        //             url: '/product/remove_cart_product/' + itemValue,
        //             type: "GET",
        //             success: function(res){
        //                 toastr.success(res.message);
        //                 showCart();
        //             }
        //         })
        //     })
    </script>



    <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->
@endsection
