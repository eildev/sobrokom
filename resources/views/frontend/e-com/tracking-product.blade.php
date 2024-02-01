@extends('frontend.master')
@section('maincontent')
    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area grey-bg pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                            <span class="tp-breadcrumb__active"><a href="{{ route('home') }}">Home</a></span>
                            <span class="dvdr">/</span>
                            <span>Tracking Page</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- shop-area-start -->
    <section class="shop-area-start grey-bg pb-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__filter-content mb-40">
                        <div class="row align-items-center py-2 text-center">
                            <form action="{{ route('order.tracking.invoice') }}" method="GET">
                                <div class="d-flex">
                                    <input type="text" name="search" placeholder="Search your Invoice Number"
                                        class="form-control rounded-0 rounded-start" value="{{ !empty($searchTag)? $searchTag : '' }}">
                                    <button type="submit" class="tp-btn rounded-0 rounded-end">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @if(!empty($trackes))
                        @if ($trackes->count() > 0)
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Date</th>
                                            <th class="product-thumbnail">Invoice</th>
                                            <th class="cart-product-name">Phone Number</th>
                                            <th class="product-price">Product Qty</th>
                                            <th class="product-quantity">Grand Total</th>
                                            <th class="product-subtotal">Payment Method</th>
                                            <th class="product-remove">Status</th>
                                            <th class="product-remove">Order Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($trackes as $order)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    {{ $order->created_at }}
                                                </td>
                                                <td class="product-name">
                                                    {{ $order->invoice_number }}
                                                </td>
                                                <td class="product-price">
                                                    {{ $order->user_identity }}
                                                </td>
                                                <td class="product-quantity">
                                                    {{ $order->product_quantity }}
                                                </td>
                                                <td class="product-subtotal">
                                                    {{ $order->grand_total }}
                                                </td>
                                                <td class="product-remove">
                                                    {{ $order->payment_method }}
                                                </td>
                                                <td class="product-remove text-info">
                                                    {{ $order->status }}
                                                </td>
                                                <td class="product-remove">
                                                    @php
                                                        $address = App\Models\OrderBillingDetails::where('order_id', $order->id)->first();
                                                    @endphp
                                                    {{ $address->address_1 ?? '' }}
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p>No Order found</p>
                        @endif
                    @endif
                </div>
            </div>
    </section>
    <!-- shop-area-end -->
@endsection
