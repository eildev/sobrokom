@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-8 offset-md-2">

                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">Manage Category</h5>

                        <a href="{{ route('category') }}" class="btn btn-info btn-sm text-light ">
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI</th>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serialNumber = 1;
                                @endphp
                                @if ($categories->count() > 0)
                                    @foreach ($categories as $category)
                                        
                                        <tr>
                                            <td>{{ $serialNumber++ }}</td>
                                            <td>{{ $category->categoryName }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <img src="{{ asset('/uploads/category/' . $category->image) }}"
                                                    style="height: 100px;" class="img-fluid" alt="Category Image">
                                            </td>
                                            <td>
                                                {{-- {{ $category->status }} --}}
                                                <a href="#" class="btn btn-sm btn-success cat_active">Active</a>
                                                <a href="#" class="btn btn-sm btn-success">Inactive</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('category.delete', $category->id) }}"
                                                    class="btn btn-danger" id="delete">Delete</a>
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
