        <!-- cart Area start -->
        <div class="tpcartinfo tp-cart-info-area p-relative">
            <button class="tpcart__close"><i class="icon-x"></i></button>
            <div class="tpcart">
                <h4 class="tpcart__title">Your Cart</h4>
                <div class="tpcart__product">
                    <div class="tpcart__product-list">
                        @if ($cartData->count() > 0)
                            <ul class="cart_container">
                                @foreach ($cartData->take(3) as $cart)
                                    <li>
                                        <div class="tpcart__item">
                                            <div class="tpcart__img">
                                                <img src="{{ asset('uploads/products/' . $cart->options->image) }}"
                                                    alt="">
                                                <div class="tpcart__del">
                                                    <a href="#"><i class="icon-x-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="tpcart__content">
                                                <span class="tpcart__content-title"><a
                                                        href="shop-details.html">{{ $cart->name }}</a>
                                                </span>
                                                <div class="tpcart__cart-price">
                                                    <span class="quantity">{{ $cart->qty }}</span> x
                                                    <span class="new-price">৳{{ $cart->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            @if ($cartData->count() > 3)
                                <p>And {{ $cartData->count() - 3 }} more item(s)</p>
                            @endif
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
