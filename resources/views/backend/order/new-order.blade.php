@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-12">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">New Order Table</h5>

                        <a href="{{ route('popupMessage') }}" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Date</th>
                                    <th>Invoice Number</th>
                                    <th>User Phone Number</th>
                                    <th>Product Quantity</th>
                                    <th>Grand Total</th>
                                    <th>Payment Method</th>
                                    <th>Order Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($newOrders->count() > 0)
                                    @foreach ($newOrders as $order)
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->invoice_number }}</td>
                                            <td>{{ $order->user_identity }}</td>
                                            <td>{{ $order->product_quantity }}</td>
                                            <td>{{ $order->grand_total }}</td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ $order->orderBillingDetails->address_1 }}</td>
                                            <td>
                                                <span class="text-warning text-capitalize">{{ $order->status }}</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center text-warning">Data not Found</td>
                                    </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
