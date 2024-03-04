@extends('backend.master')
@section('admin')
@php
    $products = App\Models\Product::whereHas('varient')->count();
    $users = App\Models\User::where('role', 'user')->count();
    $total_orders = App\Models\Order::all()->count();
    $new_orders = App\Models\Order::where('status', 'pending')->count();
    $approve_orders = App\Models\Order::where('status', 'approve')->count();
    $processing_orders = App\Models\Order::where('status', 'processing')->count();
    $delivering_orders = App\Models\Order::where('status', 'delivering')->count();
    $completed_order = App\Models\Order::where('status', 'completed')->count();
    $refunding_order = App\Models\Order::where('status', 'refunding')->count();
    $refunded_order = App\Models\Order::where('status', 'refunded')->count();
    $canceled_order = App\Models\Order::where('status', 'canceled')->count();
    $visitors = App\Models\UserTracker::all()->count();
@endphp
    <div class="page-content">
        <div class="col-12 mb-3">
                <span class="badge bg-info p-2">All Time History</span>
            </div>
        <div class="row">
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">

                <a href="{{ route('user-tracker.show') }}">
                    <div class="card-body">
                        <p class="mb-0 text-white pb-2"> Visitor </p>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 text-white">Today</h6>
                            <div class="ms-auto">
                                <h6 class="mb-0 text-white"> {{ $visitors }}</h6>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <h6 class="mb-0 text-white">Total</h6>
                            <h6 class="mb-0 ms-auto text-white">100</h6>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">{{ $products }}</h5>
                            <div class="ms-auto">
                                <i class='bx bx-cart fs-3 text-white'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Products</p>
                            <p class="mb-0 ms-auto"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-orange">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">{{ $new_orders }}</h5>
                            <div class="ms-auto">
                                <i class='bx bx-package fs-3 text-white'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">New Order</p>
                            <p class="mb-0 ms-auto"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <a href="{{ route('all.users') }}">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">{{ $users }}</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-group fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Users</p>
                                <p class="mb-0 ms-auto"></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">{{ $refund ?? 0 }}</h5>
                            <div class="ms-auto">
                                <i class='bx bx-envelope fs-3 text-white'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total Refund</p>
                            <p class="mb-0 ms-auto"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3 d-flex">
                <button class="btn btn-sm btn-info me-1">Today</button>
                <button class="btn btn-sm btn-info me-1">Current Weekly</button>
                <button class="btn btn-sm btn-info me-1">Current Monthly</button>
                <button class="btn btn-sm btn-info me-1">Current Yearly</button>
                <input type="month" class="bg-info border-0 rounded">
                <div class="ms-1">
                    <button class="btn btn-sm btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select Year</button>
                    <ul class="dropdown-menu" style="margin: 0px;">
                        <li><a class="dropdown-item" href="#">2024</a></li>
                        <li><a class="dropdown-item" href="#">2025</a></li>
                        <li><a class="dropdown-item" href="#">2026</a></li>
                        <li><a class="dropdown-item" href="#">2027</a></li>
                        <li><a class="dropdown-item" href="#">2028</a></li>
                        <li><a class="dropdown-item" href="#">2029</a></li>
                        <li><a class="dropdown-item" href="#">2030</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="text-center text-white">
                                <label style="text-decoration: underline">Date: 02-02-2024</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Total Order </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{ $visitors }}</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Quantity </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{ $visitors }} </p>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <h6 class="mb-0">Amount</h6>
                                <p class="mb-0 ms-auto">151521212 TK</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="text-center text-white">
                                <label style="text-decoration: underline">Date: 02-02-2024</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Total Purchase </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{ $visitors }}</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Quantity </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{ $visitors }} </p>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <h6 class="mb-0">Amount</h6>
                                <p class="mb-0 ms-auto">151521212 TK</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="text-center text-white">
                                <label style="text-decoration: underline">Date: 02-02-2024</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Total Refund </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{ $visitors }}</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Total Quantity </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{ $visitors }} </p>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <h6 class="mb-0">Amount</h6>
                                <p class="mb-0 ms-auto">151521212 TK</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Total Order</p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> {{$total_orders}} Nos</p>
                                </div>
                            </div>

                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <table class="table" id="order_table">
                                <thead>
                                    <tr>
                                        <th>Order Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>New </td>
                                        <td>{{ $new_orders }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm</td>
                                        <td>{{ $approve_orders }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Proccess</td>
                                        <td>{{ $processing_orders }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Delivery</td>
                                        <td>{{ $delivering_orders }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Completed</td>
                                        <td>{{ $completed_order }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Refunding</td>
                                        <td>{{ $refunding_order }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Refunded</td>
                                        <td>{{ $refunded_order }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Canceled</td>
                                        <td>{{ $canceled_order }}</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <div class="col">
                    <div class="card radius-10 bg-gradient-orange">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <p class="mb-0 text-white">Total Purchase </p>
                                <div class="ms-auto">
                                    <p class="mb-0 text-white"> 1510 Pcs</p>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <table class="table" id="genarel">
                                <thead>
                                    <tr>
                                        <th>Order Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>New </td>
                                        <td>10</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm</td>
                                        <td>10</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Proccess</td>
                                        <td>10</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Delivery</td>
                                        <td>10</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Completed</td>
                                        <td>10</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Canceled</td>
                                        <td>10</td>
                                        <td><a href="">View Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>


        <!--end row-->
    </div>
@endsection
