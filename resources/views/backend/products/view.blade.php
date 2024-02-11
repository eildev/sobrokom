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

                                            <td>
                                                 <button class="btn btn-sm btn-success status_active" value="{{$product->id}}">Active</button>
                                            </td>
                                            <td>
                                                <div class="col">
                                                    <div class="dropdown">
            											<button class="btn btn-sm btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
            											<ul class="dropdown-menu" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 40px, 0px);">
            												<li><a class="dropdown-item" href="{{ route('product.view.details', $product->id) }}">View Details</a></li>
            												<li><a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">Edit</a></li>
            												<li><a class="dropdown-item" href="{{ route('product.delete', $product->id) }}" id="delete">Delete</a></li>
            											</ul>
            									</div>
                                                </div>
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
    
    
    
    <script>
         $(document).ready(function() {
            // Status Update
            $(document).on('click', '.status_active', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                let itemValue = this.value;
                
                $.ajax({
                    url: '/product/status/'+itemValue,
                    type: 'POST',
                    data: {
                        'status': 0,
                    },
                    success: function(response) {
                        if (response.status == 200) {
                            toastr.success(response.message);
                        } else {
                            toastr.warning(error.message);
                        }
                    }
                });
            })
         })
    </script>
@endsection
