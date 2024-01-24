        <!-- cart Area start -->
        <div class="tpcartinfo tp-cart-info-area p-relative">
            <button class="tpcart__close"><i class="icon-x"></i></button>
            <div class="tpcart">
                <h4 class="tpcart__title">Your Cart</h4>
                <div class="tpcart__product">
                    <div class="tpcart__product-list">
                        @if ($cartData->count() > 0)
                            <ul class="cart_container">
                                
                            </ul>
                        @endif
                    </div>
                    <div class="tpcart__checkout">
                        <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                            <span> Subtotal: </span>
                            <span class="heilight-price">৳{{Cart::total()}}</span>
                        </div>
                        <div class="tpcart__checkout-btn">
                            <a class="tpcart-btn mb-10" href="{{route('product.show_cart_products')}}">View Cart</a>
                            <a class="tpcheck-btn" href="checkout.html">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="tpcart__free-shipping text-center">
                    <span>Free shipping for orders <b>under 10km</b></span>
                </div>
            </div>
        </div>
        <div class="cartbody-overlay"></div>
        <!-- cart Area end -->
