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
                            <button class="nav-link active" id="order_history" data-bs-toggle="tab"
                                data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                                aria-selected="true">
                                Order History
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
            aria-labelledby="order_history">
            <div class="row">
                <div class="tab_card mb-20">
                    <div class="table-content table-responsive">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Invoice Number</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Download Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($orders->count() > 0)
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $order->invoice_number }}</td>
                                            <td>{{ $order->product_quantity }}</td>
                                            <td>{{ $order->grand_total }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td> </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center text-warning">Data not Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-pane fade whight-product" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab_card d-flex align-items-center justify-content-between mb-20">
                        this is sub tab 3
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
