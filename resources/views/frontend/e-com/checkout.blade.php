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
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->




    @php
        $billingInfo = Auth::check() ? App\Models\BillingInfo::where('user_id', Auth::user()->id)->first() : null;
    @endphp
    <!-- checkout-area start -->
    <section class="checkout-area pb-50">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                            <div class=""
                                styyle="display: grid;
                            grid-template-columns: 1fr 1fr;">
                                <h3 class="border-0 d-inline">Billing Details</h3>
                                @if ($billingInfo)
                                    <div class="pt-2">
                                        <input type="checkbox" name="" id="isUsingAddress">
                                        <label for="">Using your Default Address</label>
                                    </div>
                                @endif
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" required placeholder="First Name" class="first_name"
                                            value="" name="first_name">
                                        <span class="first_name_error text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="Last Name" class="last_name" value=""
                                            name="last_name">
                                        <span class="last_name_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="Email" value="" class="email"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Phone" value="" class="phone user_phone"
                                            name="phone">
                                        <span class="phone_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address 1<span class="required">*</span></label>
                                        <input type="text" placeholder="Address 1" value="" class="address_1"
                                            name="address_1">
                                        <span class="address_1_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address 2</label>
                                        <input type="text" placeholder="Address 2" value="" class="address_2"
                                            name="address_2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>City/Town<span class="required">*</span></label>
                                        <input type="text" placeholder="City/Town" value="" class="city"
                                            name="city">
                                        <span class="city_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Division <span class="required">*</span></label>
                                        <input type="text" placeholder="Division" value="" class="division"
                                            name="division">
                                        <span class="division_error text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" value="" class="post_code"
                                            name="post_code">
                                        <span class="post_code_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select name="country" class="country" value="">
                                            <option value="">Select Country</option>
                                            <option value="united-states">United States</option>
                                            <option value="algeria">Algeria</option>
                                            <option value="bangladesh">Bangladesh</option>
                                            <option value="canada">Canada</option>
                                            <option value="germany">Germany</option>
                                            <option value="england">England</option>
                                            <option value="qatar">Qatar</option>
                                        </select>
                                        <span class="country_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" class="order_notes" name="order_notes"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="different-address">
                                <div class="ship-different-title">
                                   <h3>
                                      <label>Ship to a different address?</label>
                                      <input id="ship-box" type="checkbox" >
                                   </h3>
                                </div>
                                <div id="ship-box-info">
                                   <div class="row">
                                      <div class="col-md-12">
                                            <div class="country-select">
                                               <label>Country <span class="required">*</span></label>
                                               <select>
                                                  <option value="volvo">bangladesh</option>
                                                  <option value="saab">Algeria</option>
                                                  <option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option>
                                               </select>
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="checkout-form-list">
                                               <label>First Name <span class="required">*</span></label>
                                               <input type="text" placeholder="" >
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="checkout-form-list">
                                               <label>Last Name <span class="required">*</span></label>
                                               <input type="text" placeholder="" >
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                            <div class="checkout-form-list">
                                               <label>Company Name</label>
                                               <input type="text" placeholder="" >
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                            <div class="checkout-form-list">
                                               <label>Address <span class="required">*</span></label>
                                               <input type="text" placeholder="Street address" >
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                            <div class="checkout-form-list">
                                               <input type="text" placeholder="Apartment, suite, unit etc. (optional)" >
                                            </div>
                                      </div>
                                      <div class="col-md-12">
                                            <div class="checkout-form-list">
                                               <label>Town / City <span class="required">*</span></label>
                                               <input type="text" placeholder="Town / City" >
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="checkout-form-list">
                                               <label>State / County <span class="required">*</span></label>
                                               <input type="text" placeholder="" >
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="checkout-form-list">
                                               <label>Postcode / Zip <span class="required">*</span></label>
                                               <input type="text" placeholder="Postcode / Zip" >
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="checkout-form-list">
                                               <label>Email Address <span class="required">*</span></label>
                                               <input type="email" placeholder="" >
                                            </div>
                                      </div>
                                      <div class="col-md-6">
                                            <div class="checkout-form-list">
                                               <label>Phone <span class="required">*</span></label>
                                               <input type="text" placeholder="Postcode / Zip" >
                                            </div>
                                      </div>
                                   </div>
                                </div>

                          </div> --}}

                            {{-- creat account --}}
                            @if (!$billingInfo)
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label>Create an account?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                        <form action="#">
                                            <p class="form-row-first">
                                                <label>Email<span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password<span class="required">*</span></label>
                                                <input type="text">
                                            </p>

                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- your Order  --}}
                    @php
                        $cartProducts = Cart::content();
                    @endphp
                    <div style="margin-top: 70px" class="col-lg-6 col-md-12">
                        <div class="your-order mb-30 ">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($cartProducts->count() > 0)
                                            @foreach ($cartProducts as $product)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        {{ $product->name }} <strong class="product-quantity"> ×
                                                            {{ $product->qty }}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">৳{{ $product->price * $product->qty }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">৳{{ Cart::subtotal() }}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>
                                                            In Dhaka: <span class="amount">Free Delivery</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>Out Side Of Dhaka: <span
                                                                class="amount">৳100.00</span></label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">৳{{ Cart::total() }}</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="coupon_section">

                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control me-2 coupon_code"
                                        placeholder="Have you any Coupon Code">
                                    <button class="tp-btn tp-color-btn rounded-3 py-2 apply_coupon">Apply</button>
                                </div>
                                <div class="accordion" id="checkoutAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="checkoutOne">
                                            <button class="accordion-button shipping_method" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true"
                                                aria-controls="bankOne">
                                                Cash On Delivery
                                            </button>
                                        </h2>
                                        <div id="bankOne" class="accordion-collapse collapse show"
                                            aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Make your payment directly into our bank account. Please use your Order ID
                                                as the payment reference. Your order won’t be shipped until the funds have
                                                cleared in our account.
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="accordion-item">
                                        <h2 class="accordion-header" id="paymentTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false"
                                                aria-controls="payment">
                                                Cheque Payment
                                            </button>
                                        </h2>
                                        <div id="payment" class="accordion-collapse collapse"
                                            aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Please send your cheque to Store Name, Store Street, Store Town, Store
                                                State / County, Store
                                                Postcode.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paypalThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false"
                                                aria-controls="paypal">
                                                PayPal
                                            </button>
                                        </h2>
                                        <div id="paypal" class="accordion-collapse collapse"
                                            aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Pay via PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="order-button-payment mt-20">
                                    <button type="submit"
                                        class="tp-btn tp-color-btn w-100 banner-animation place_order">Place
                                        order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->

    <!-- OPT Checker Modal -->
    <div class="modal fade" id="otpCheck" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index: 99999999999999">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">OPT Check</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter OTP</label>
                        <input type="text" class="form-control otp_code" name="otp" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary otp_send">Send</button>
                </div>
            </div>
        </div>
    </div>

    @if ($billingInfo)
        <script>
            const isUsingAddress = document.querySelector('#isUsingAddress');
            isUsingAddress.addEventListener('change', function() {
                // Check if the checkbox is checked
                if (isUsingAddress.checked) {
                    // If checked, show Data on input
                    $('.first_name').val('{{ $billingInfo->first_name }}');
                    $('.last_name').val('{{ $billingInfo->last_name }}');
                    $('.email').val('{{ $billingInfo->email }}');
                    $('.phone').val('{{ $billingInfo->phone }}');
                    $('.address_1').val('{{ $billingInfo->address_1 }}');
                    $('.address_2').val('{{ $billingInfo->address_2 }}');
                    $('.address_2').val('{{ $billingInfo->address_2 }}');
                    $('.city').val('{{ $billingInfo->city }}');
                    $('.division').val('{{ $billingInfo->division }}');
                    $('.post_code').val('{{ $billingInfo->post_code }}');
                    $('.country').val('{{ $billingInfo->country }}');
                    $('.order_notes').text('{{ $billingInfo->order_notes }}');
                } else {
                    // If not checked,
                    $('.first_name').val('');
                    $('.last_name').val('');
                    $('.email').val('');
                    $('.phone').val('');
                    $('.address_1').val('');
                    $('.address_2').val('');
                    $('.city').val('');
                    $('.division').val('');
                    $('.post_code').val('');
                    $('.country').val('');
                    $('.order_notes').text('');
                }
            });
        </script>
    @endif


    <script>
        // console.log("{{ Cart::count() }}");
        const applyCoupon = document.querySelector('.apply_coupon');
        applyCoupon.addEventListener('click', function(e) {
            e.preventDefault();
            const coupon_code = document.querySelector('.coupon_code').value;
            // alert(coupon_code);

            $.ajax({
                url: "/apply-coupon/" + coupon_code,
                type: "GET",
                success: function(res) {
                    if (res.status == 500) {
                        toastr.warning(res.message);
                    } else if (res.status == 200) {
                        let couponDiscount = parseInt(res.couponData.discount);
                        // console.log(couponDiscount);
                        let cartSubtotal = parseFloat("{{ Cart::subtotal() }}");
                        let grandTotal = ((cartSubtotal * couponDiscount) / 100)
                        // console.log(cartSubtotal);

                        grandTotal = cartSubtotal - grandTotal;
                        const data = `
                        <tr class="cart-subtotal">
                                            <th>Coupon Discount</th>
                                            <td><span class="amount">${res.couponData.discount}%</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Grand Total</th>
                                            <td><strong><span class="amount">৳${grandTotal}</span></strong>
                                            </td>
                                        </tr>
                        `;
                        $('.coupon_section').html(data);
                    }
                }
            })
        });

        const place_order = document.querySelector('.place_order');
        place_order.addEventListener('click', function(e) {
            e.preventDefault();

            const first_name = $('.first_name').val();
            const phone = $('.phone').val();
            const address_1 = $('.address_1').val();
            const city = $('.city').val();
            const division = $('.division').val();
            const post_code = $('.post_code').val();
            const country = $('.country').val();

            if (first_name === "") {
                document.querySelector('.first_name_error').textContent = 'First Name is Required';
            }
            if (phone === "") {
                document.querySelector('.phone_error').textContent = 'Phone number is Required';
            }
            if (address_1 === "") {
                document.querySelector('.address_1_error').textContent = 'Address is Required';
            }
            if (city === "") {
                document.querySelector('.city_error').textContent = 'City is Required';
            }
            if (division === "") {
                document.querySelector('.division_error').textContent = 'Division Name is Required';
            }
            if (post_code === "") {
                document.querySelector('.post_code_error').textContent = 'post code is Required';
            }
            if (country === "") {
                document.querySelector('.country_error').textContent = 'country is Required';
            } else {
                let user_phone = document.querySelector('.user_phone').value;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/otp/store',
                    type: 'post',
                    data: {
                        'phone': user_phone
                    },
                    success: function(res) {
                        // console.log(res);
                        if (res.status == 200) {
                            $('#otpCheck').modal('show');
                        }
                    }
                })
            }


        });

        document.querySelector('.otp_send').addEventListener('click', function(e) {
            e.preventDefault();
            let user_phone = document.querySelector('.user_phone').value;
            let otp_code = document.querySelector('.otp_code').value;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // get order billing details
            const first_name = $('.first_name').val();
            const last_name = $('.last_name').val();
            const email = $('.email').val();
            const phone = $('.phone').val();
            const address_1 = $('.address_1').val();
            const address_2 = $('.address_2').val();
            const city = $('.city').val();
            const division = $('.division').val();
            const post_code = $('.post_code').val();
            const country = $('.country').val();
            const order_notes = $('.order_notes').text();

            // get order details
            const invoice_number = "1";
            const product_quantity = "{{ Cart::count() }}";
            const product_total = "{{ Cart::total() }}";
            const coupon_id = "";
            const discount = "";
            const sub_total = "{{ Cart::total() }}";
            const shipping_method = $('.shipping_method').text();
            const shipping_amount = "";
            const grand_total = "{{ Cart::total() }}";
            const payment_method = "";
            const payment_id = "";

            $.ajax({
                url: '/otp/check',
                type: 'post',
                data: {
                    'phone': user_phone,
                    'otp': otp_code,

                    first_name,
                    last_name,
                    email,
                    phone,
                    address_1,
                    address_2,
                    city,
                    division,
                    post_code,
                    country,
                    order_notes,

                    invoice_number,
                    "product_quantity": product_quantity,
                    product_total,
                    coupon_id,
                    discount,
                    sub_total,
                    shipping_method,
                    shipping_amount,
                    grand_total,
                    payment_method,
                    payment_id,
                },
                success: function(res) {
                    console.log(res);
                    if (res.status == 200) {
                        $('#otpCheck').modal('hide');
                    }
                }
            })
        });
    </script>



    <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->
@endsection
