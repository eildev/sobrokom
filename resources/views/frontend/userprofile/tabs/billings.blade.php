<div class="tpshop__top ml-60">
    <div class="product__filter-content mb-40">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="tpproductnav tpnavbar product-filter-nav d-flex align-items-center justify-content-center">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all"
                                type="button" role="tab" aria-controls="nav-all" aria-selected="false">tab 1

                            </button>
                            <button class="nav-link active" id="nav-popular-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                aria-selected="true">
                                tab 2
                            </button>
                            <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-product"
                                aria-selected="false">
                                tab 3
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab_card d-flex align-items-center justify-content-between mb-20">
                        this is sub tab 1
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel"
            aria-labelledby="nav-popular-tab">
            <div class="row">
                <div class="tab_card d-flex align-items-center justify-content-between mb-20">
                    <div class="col-lg-12">
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
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> ×
                                                    1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$165.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> ×
                                                    1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$50.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">$215.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>
                                                            Flat Rate: <span class="amount">$7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>Free Shipping:</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">$215.00</span></strong>
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
                                                Direct Bank Transfer
                                            </button>
                                        </h2>
                                        <div id="bankOne" class="accordion-collapse collapse show"
                                            aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Make your payment directly into our bank account. Please use
                                                your Order ID as the payment reference. Your order won’t be
                                                shipped until the funds have cleared in our account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paymentTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#payment"
                                                aria-expanded="false" aria-controls="payment">
                                                Cheque Payment
                                            </button>
                                        </h2>
                                        <div id="payment" class="accordion-collapse collapse"
                                            aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Please send your cheque to Store Name, Store Street, Store
                                                Town, Store
                                                State / County, Store
                                                Postcode.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paypalThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#paypal"
                                                aria-expanded="false" aria-controls="paypal">
                                                PayPal
                                            </button>
                                        </h2>
                                        <div id="paypal" class="accordion-collapse collapse"
                                            aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                Pay via PayPal; you can pay with your credit card if you
                                                don’t have a
                                                PayPal account.
                                            </div>
                                        </div>
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
            </div>
        </div>
        <div class="tab-pane fade whight-product" id="nav-product" role="tabpanel"
            aria-labelledby="nav-product-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab_card d-flex align-items-center justify-content-between mb-20">
                        {{-- <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkbox-form">
                                        <h3>Update Billing Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input type="text" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address 1<span class="required">*</span></label>
                                                    <input type="text" placeholder="Address 1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>City/Town<span class="required">*</span></label>
                                                    <input type="text" placeholder="City/Town">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Division <span class="required">*</span></label>
                                                    <input type="text" placeholder="Division">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">United States</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Canada</option>
                                                        <option value="audi">Germany</option>
                                                        <option value="audi2">England</option>
                                                        <option value="audi3">Qatar</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="order-notes">
                                                <div class="checkout-form-list">
                                                    <label>Order Notes</label>
                                                    <textarea id="checkout-mess" cols="30" rows="10"
                                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>

                                            <div class="order-button-payment mt-20 w-50 mx-auto">
                                                <button type="submit"
                                                    class="tp-btn tp-color-btn w-100 banner-animation">Update Billing
                                                    Details</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form> --}}


                        <form id="addBillinForm" method="POST" action="">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkbox-form">
                                        <h3>Add Billing Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="First Name" class="first_name"
                                                        name="first_name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="Last Name" class="last_name"
                                                        name="last_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Email Address</label>
                                                    <input type="email" placeholder="Email" class="email"
                                                        name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input type="text" placeholder="Phone" class="phone"
                                                        name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address 1<span class="required">*</span></label>
                                                    <input type="text" placeholder="Address 1" class="address_1"
                                                        name="address_1">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address 2</label>
                                                    <input type="text" placeholder="Address 2" class="address_2"
                                                        name="address_2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>City/Town<span class="required">*</span></label>
                                                    <input type="text" placeholder="City/Town" class="city"
                                                        name="city">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Division <span class="required">*</span></label>
                                                    <input type="text" placeholder="Division" class="division"
                                                        name="division">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip"
                                                        class="post_code" name="post_code">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select name="country" class="country">
                                                        <option value="united-states">United States</option>
                                                        <option value="algeria">Algeria</option>
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="canada">Canada</option>
                                                        <option value="germany">Germany</option>
                                                        <option value="england">England</option>
                                                        <option value="qatar">Qatar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="order-notes">
                                                <div class="checkout-form-list">
                                                    <label>Order Notes</label>
                                                    <textarea id="checkout-mess" cols="30" rows="10" class="order_notes" name="order_notes"
                                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>

                                            <div class="order-button-payment mt-20 w-50 mx-auto">
                                                <button type="submit"
                                                    class="tp-btn tp-color-btn w-100 banner-animation add_billing_details">Add
                                                    Billing
                                                    Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    // Add Billing Details 
    const add_billing_details = document.querySelector('.add_billing_details');
    // console.log(add_billing_details);
    add_billing_details.addEventListener('click', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // let allBillingData = new FormData(jQuery("#addBillinForm")[0]);
        // console.log(allBillingData);

        // const form = e.target.form;
        const user_id = "{{ Auth::user()->id }}";
        const first_name = document.querySelector('.first_name').value;
        const last_name = document.querySelector('.last_name').value;
        const email = document.querySelector('.email').value;
        const phone = document.querySelector('.phone').value;
        const address_1 = document.querySelector('.address_1').value;
        const address_2 = document.querySelector('.address_2').value;
        const city = document.querySelector('.city').value;
        const division = document.querySelector('.division').value;
        const post_code = document.querySelector('.post_code').value;
        const country = document.querySelector('.country').value;
        const order_notes = document.querySelector('.order_notes').value;
        alert(first_name);
        // let allData = {
        //     "user_id": user_id,
        //     "first_name": first_name,
        //     "last_name": last_name,
        //     "email": email,
        //     "phone": phone,
        //     "address_1": address_1,
        //     "address_2": address_2,
        //     "city": city,
        //     "division": division,
        //     "post_code": post_code,
        //     "country": country,
        //     "order_notes": order_notes
        // }



        $.ajax({
            url: "/billing/insert",
            type: "POST",
            data: {
                "user_id": user_id,
                "first_name": first_name,
                "last_name": last_name,
                "email": email,
                "phone": phone,
                "address_1": address_1,
                "address_2": address_2,
                "city": city,
                "division": division,
                "post_code": post_code,
                "country": country,
                "order_notes": order_notes
            },
            contentType: false,
            processData: false,
            success: function(res) {
                if (res.status == 200) {
                    toastr.success(res.message);
                } else {

                }
            },
        });

    });


    // document.addEventListener('DOMContentLoaded', function() {
    //     document.getElementById('addBillingForm').addEventListener('submit', function(e) {
    //         e.preventDefault();

    //         let formData = new FormData(this);
    //         console.log(formData);


    //     });
    // });
</script>
