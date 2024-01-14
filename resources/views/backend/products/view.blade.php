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
                                    <th>Category Id</th>
                                    <th>Subcategory Id</th>
                                    <th>Brand Id</th>
                                    <th>Product name</th>
                                    <th>Feature</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Image</th>
                                    <th>SKU</th>
                                    <th>Tags</th>
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
                                            <td>{{ $product->category->categoryName }}</td>
                                            <td>{{ $product->subcategory->subcategoryName }}</td>
                                            <td>{{ $product->brand->BrandName }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->product_feature }}</td>
                                            <td>{{ $product->short_desc }}</td>
                                            <td>{{ $product->long_desc }}</td>
                                            <td>
                                                <img src="{{ asset('/uploads/products/' . $product->product_image) }}"
                                                    style="height: 100px;" class="img-fluid" alt="Products Image">
                                            </td>
                                            <td>{{ $product->sku }}</td>
                                            <td>{{ $product->tags }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td>
                                                <a href="#" class="btn btn-info">Edit</a>
                                                <a href="#" class="btn btn-danger" id="delete">Delete</a>
                                                {{-- <a href="{{ route('subcategory.edit', $subcategory->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('subcategory.delete', $subcategory->id) }}"
                                                    class="btn btn-danger" id="delete">Delete</a> --}}
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
