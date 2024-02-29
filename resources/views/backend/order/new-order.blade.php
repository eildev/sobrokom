@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-12">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">New Order Table</h5>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Date</th>
                                    <th>Invoice no</th>
                                    <th>User Phone Number</th>
                                    <th>Product Qty</th>
                                    <th>Amount</th>
                                    <th>Pay to</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($newOrders->count() > 0)
                                {{-- @dd($newOrders); --}}
                                    @foreach ($newOrders as $order)
                                    @dd($order->orderDetails);
                                    @php
                                        $orderDetails = App\Models\OrderDetails::where('order_id ', $order->id)->get();
                                    @endphp
                                    @dd($orderDetails);

                                    {{-- @foreach ($orderDetails as $orderDetail)
                                    @dd($orderDetail);
                                    @endforeach --}}

                                        @php
                                            $originalDateString = $order->created_at;
                                            $dateTime = new DateTime($originalDateString);
                                            $formattedDate = $dateTime->format('Y-m-d');
                                        @endphp
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $formattedDate }}</td>
                                            <td>{{ $order->invoice_number }}</td>
                                            <td>{{ $order->user_identity }}</td>
                                            <td>{{ $order->product_quantity }}</td>
                                            <td>{{ $order->grand_total }}</td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>{{ $order->orderBillingDetails->address_1 ?? '' }}</td>
                                            <td>
                                                <span class="text-warning text-capitalize">{{ $order->status }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.approve.order', $order->invoice_number) }}"
                                                    class="btn btn-sm btn-info">Approve</a>
                                                <a href="#" class="btn btn-sm btn-success" id="delete">View</a>
                                                <a href="#" class="btn btn-sm btn-danger" id="delete">Denied</a>
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
