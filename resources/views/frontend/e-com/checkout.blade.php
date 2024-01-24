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





    <!-- checkout-area start -->
    <section class="checkout-area pb-50">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            @php
                                // $billingInfo = App\Models\BillingInfo::where('user_id', Auth::user()->id)->first();
                            @endphp

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="First Name" class="first_name"
                                            value="{{ $billingInfo->first_name ?? '' }}" name="first_name">
                                        <span class="first_name_error text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="Last Name" class="last_name"
                                            value="{{ $billingInfo->last_name ?? '' }}" name="last_name">
                                        <span class="last_name_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="Email" value="{{ $billingInfo->email ?? '' }}"
                                            class="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Phone" value="{{ $billingInfo->phone ?? '' }}"
                                            class="phone" name="phone">
                                        <span class="phone_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address 1<span class="required">*</span></label>
                                        <input type="text" placeholder="Address 1"
                                            value="{{ $billingInfo->address_1 ?? '' }}" class="address_1" name="address_1">
                                        <span class="address_1_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address 2</label>
                                        <input type="text" placeholder="Address 2"
                                            value="{{ $billingInfo->address_2 ?? '' }}" class="address_2" name="address_2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>City/Town<span class="required">*</span></label>
                                        <input type="text" placeholder="City/Town" value="{{ $billingInfo->city ?? '' }}"
                                            class="city" name="city">
                                        <span class="city_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Division <span class="required">*</span></label>
                                        <input type="text" placeholder="Division"
                                            value="{{ $billingInfo->division ?? '' }}" class="division" name="division">
                                        <span class="division_error text-danger"></span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip"
                                            value="{{ $billingInfo->post_code ?? '' }}" class="post_code" name="post_code">
                                        <span class="post_code_error text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select name="country" class="country" value="{{ $billingInfo->country ?? '' }}">
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
                                            placeholder="Notes about your order, e.g. special notes for delivery.">{{ $billingInfo->order_notes ?? '' }}</textarea>
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
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-account">
                                    <form action="#">
                                        <p class="form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="text">
                                        </p>
                                        <p class="form-row d-flex align-items-center">
                                            <button class="tp-btn tp-color-btn me-3" type="submit">Login</button>
                                            <label>
                                                <input type="checkbox">
                                                Remember me
                                            </label>
                                        </p>
                                        <p class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- your Order  --}}
                    <div class="col-lg-6 col-md-12">
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
                                        @php
                                            $cartProducts = Cart::content();
                                            // dd($cartProducts);
                                        @endphp
                                        @if ($cartProducts->count() > 0)
                                            @foreach ($cartProducts as $product)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        {{ $product->name }} <strong class="product-quantity"> ×
                                                            {{ $product->qty }}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">&#2547 {{ $product->price }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">&#2547 {{Cart::total()}}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>
                                                            Into Dhaka City: <span class="amount">&#2547 100</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>
                                                            Out Of Dhaka: <span class="amount">&#2547 200</span>

                                                        </label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">&#2547 {{Cart::total()}}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="accordion" id="checkoutAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="checkoutOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
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
                                    <div class="accordion-item">
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
                                    </div>
                                    <div class="coupon-info">
                                        <form action="#">
                                            <div class="row align-items-center">
                                                <div class="col-md-6 checkout-coupon">
                                                    <input type="text" placeholder="Coupon Code" class="form-control">
                                                </div>
                                                <div class="col-md-6 checkout-coupon">
                                                    <button class="tp-btn tp-color-btn" 
                                                        type="submit">Apply Coupon</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place
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



    <script></script>



    <!-- feature-area-start -->
    @include('frontend.body.servicesfooter')
    <!-- feature-area-end -->
@endsection
