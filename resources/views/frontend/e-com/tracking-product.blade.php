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
                                            <th class="product-remove">Order Address</th>
                                            <th class="product-remove">Status</th>
                                            <th class="product-remove">Invoice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($trackes as $order)
                                        @php
                                        $address = App\Models\OrderBillingDetails::where('order_id', $order->id)->first();
                                    @endphp
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
                                                <td class="product-remove text-info">
                                                    {{ $order->status }}
                                                </td>
                                                <td class="product-remove">

                                                    {{ $address->address_1 ?? '' }}
                                                </td>
                                                <td class="product-remove">
                                                    <a href="{{ url('/pdf/genarate/'.$order->id.'/'.$order->invoice_number) }}">Download</a>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="invoice">
                                <div class="toolbar hidden-print">
                                    <div class="text-end">
                                        <button type="button" class="btn btn-dark invoice_print"><i class="fa fa-print"></i> Print</button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as
                                            PDF</button>
                                    </div>
                                    <hr>
                                </div>
                                <div class="invoice overflow-auto">
                                    <div style="min-width: 600px">
                                        <header>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="javascript:;">
                                                        <img src="{{ asset('frontend/assets/img/logo/sobrokom-logo.svg') }}" width="80" alt="">
                                                    </a>
                                                </div>
                                                <div class="col company-details">
                                                    <h2 class="name">
                                                        <a target="_blank" href="javascript:;">
                                                            Sobrokom Corporation
                                                        </a>
                                                    </h2>
                                                    <div>+880 1602 08 51 21</div>
                                                    <div>sobrokom.store@gmail.com</div>
                                                    <div>info@sobrokom.store</div>
                                                </div>
                                            </div>
                                        </header>
                                        <main>
                                            <div class="row contacts">
                                                <div class="col invoice-to">
                                                    <div class="text-gray-light">INVOICE TO:</div>
                                                    <h2 class="to">{{$address->first_name}}</h2>
                                                    <div class="address">{{$address->address_1 ?? ''}}</div>
                                                    <div class="email"><a href="{{$address->email}}">{{$address->email}}</a>
                                                    </div>
                                                </div>
                                                <div class="col invoice-details">
                                                    <h1 class="invoice-id">INVOICE: #{{ $order->invoice_number }}</h1>
                                                    <div class="date">Date of Invoice: {{ $order->created_at }}</div>
                                                    <div class="date">Paymentt Status: <span class="badge text-bg-warning px-25">Unpaid</span></div>
                                                </div>
                                            </div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="text-left">PRODUCT NAME</th>
                                                        <th class="text-right">PRODUCT QUANTITY</th>
                                                        <th class="text-right">WEIGHT</th>
                                                        <th class="text-right">UNIT PRICE</th>
                                                        <th class="text-right">TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $orderDetails = App\Models\OrderDetails::where('order_id', $order->id)->get();
                                                    @endphp
                                                    @foreach ($orderDetails as $key => $orderDetail)
                                                    <tr>
                                                        <td class="no">{{ $key+1 }}</td>
                                                        <td class="text-left">
                                                           <p>name</p>
                                                        </td>
                                                        <td class="">{{ $orderDetail->product_quantity }}</td>
                                                        <td class="unit">1kg</td>
                                                        <td class="qty">৳250</td>
                                                        <td class="total">৳{{ $orderDetail->total_price }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5">SUBTOTAL</td>
                                                        <td colspan="5">৳{{ $order->product_total }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">Dis {{ $order->discount }}%</td>
                                                        <td>৳{{ ((($order->product_total*$order->discount)/100)+$order->product_total) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">Shipping Chage</td>
                                                        <td>৳{{ $order->shipping_amount }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">GRAND TOTAL</td>
                                                        <td>৳{{ $order->grand_total }}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="thanks">Thank you!</div>
                                            <div class="notices">
                                                <div>NOTICE:</div>
                                                <div class="notice">A finance charge of 1.5% will be made on unpaid balances after
                                                    50
                                                    days.</div>
                                            </div>
                                        </main>
                                        <footer>Invoice was created on a computer and is valid without the signature and seal.
                                        </footer>

                                    </div>
                                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                            <p>No Order found</p>
                        @endif
                    @endif
    </section>
    <!-- shop-area-end -->
@endsection
