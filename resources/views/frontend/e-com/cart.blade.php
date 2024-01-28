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
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Courses</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($products); --}}
                                    @if ($products->count() > 0)
                                        @foreach ($products as $product)
                                            <form action="{{ route('product.cartpage.update',  $product->rowId) }}"
                                                method="POST">
                                                @csrf
                                                <tr class="cart_row">
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img src="{{ asset('uploads/products/' . $product->options->image) }}"
                                                                alt="Product Image">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">{{ $product->name }}</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount unit_price" data-value="{{ $product->price }}">
                                                            ৳{{ $product->price }}
                                                        </span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <span class="cart-minus">-</span>
                                                        <input class="cart-input product_input" type="text"
                                                            value="{{ $product->qty }}" name="quantity">
                                                        <span class="cart-plus cart_plus"
                                                            value="{{ $product->rowId }}">+</span>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount subTotal_price">৳{{ $product->price * $product->qty }}</span>
                                                    </td>
                                                    <td class="product-remove">
                                                        <button type="submit">Edit</button>
                                                        <a href="{{ route('product.cartpage.remove', $product->rowId) }}"
                                                            value="{{ $product->rowId }}" class="">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </form>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
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

                                    </ul>
                                    <a href="{{route('checkout')}}" class="tp-btn tp-color-btn banner-animation">Proceed to
                                        Checkout</a>
                                </div>
                            </div>
                        </div>
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
                let productQty = parseFloat($input.val());
                let unit_price_element = $(this).parents('.cart_row').find('.unit_price').attr(
                    'data-value');
                unit_price_element = parseFloat(unit_price_element);
                let subTotalPrice = unit_price_element * productQty;
                // console.log(subTotalPrice);
                $(this).parents('.cart_row').find('.subTotal_price').text("৳" + subTotalPrice);
            });
        });

        $(document).ready(function() {
            $('.cart-plus').on('click', function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                let productQty = parseFloat($input.val());
                // console.log(productQty);
                // Find the parent <td> and then find the .unit_price within it
                let unit_price_element = $(this).parents('.cart_row').find('.unit_price').attr(
                    'data-value');
                unit_price_element = parseFloat(unit_price_element);
                let subTotalPrice = unit_price_element * productQty;
                // console.log(subTotalPrice);
                $(this).parents('.cart_row').find('.subTotal_price').text("৳" + subTotalPrice);
            });
        });


        // cart quantity update









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
    </script>



    <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->
@endsection
