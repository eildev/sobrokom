@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="col-12 mb-3">
                <span class="badge bg-info p-2">All Time History</span>
            </div>
        <div class="row">
            <div class="col">
                <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <p class="mb-0 text-white pb-2"> Visitor </p>
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0 text-white">Today</h6>
                            <div class="ms-auto">
                                <h6 class="mb-0 text-white"> {{ $refund ?? 0 }}</h6>
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
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 bg-gradient-deepblue">
                    <div class="card-body">
                        @php
                            $products = App\Models\Product::whereHas('varient')->count();
                            $users = App\Models\User::where('role', 'user')->count();
                            $orders = App\Models\Order::where('status', 'pending')->count();
                            $refund = App\Models\Order::where('status', 'refunded')->count();
                            $visitors = App\Models\UserTracker::all()->count();
                        @endphp

                        {{-- @dd($visitors); --}}

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
                            <h5 class="mb-0 text-white">{{ $orders }}</h5>
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
            <div class="col-12 mb-3">
                <span class="badge bg-info p-2">Today History</span>
            </div>
            <div class="col">
                <a href="{{ route('user-tracker.show') }}">
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
                </a>
            </div>
            <div class="col">
                <a href="{{ route('user-tracker.show') }}">
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
                </a>
            </div>
            <div class="col">
                <a href="{{ route('user-tracker.show') }}">
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
                </a>
            </div>
        </div>


        <!--end row-->
    </div>
@endsection
