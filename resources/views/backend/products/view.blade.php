@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-12">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">Manage Products</h5>

                        <a href="{{ route('product') }}" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Image</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($products->count() > 0)
                                    @foreach ($products as $product)
                                        {{-- @dd($product->brand->BrandName); --}}

                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>
                                                <img src="{{ asset('/uploads/products/' . $product->product_image) }}"
                                                    style="height: 100px;" class="img-fluid" alt="Products Image">
                                            </td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>
                                                {{ $product->varient[0]->regular_price ?? 0 }}
                                            </td>

                                            <td>{{ $product->status }}</td>
                                            <td>
                                                <a href="{{ route('product.view.details', $product->id) }}"
                                                    class="btn btn-info">View
                                                    Details</a>
                                            </td>
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
        <!--end row-->
    </div>
@endsection
