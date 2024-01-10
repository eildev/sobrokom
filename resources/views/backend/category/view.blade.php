@extends('backend.master')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="card border-top border-0 border-4 border-info col-md-8 offset-md-2">

            <div class="card-body">
                <div class="card-title d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-info">Manage Category</h5>

                    <a href="{{ route('category') }}" class="btn btn-info btn-sm text-light ">Add Category</a>
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
                            @foreach ($categories as $category )
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->categoryName }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <img src="{{ asset('/uploads/category/' . $category->image) }}" style="height: 100px;" class="img-fluid" alt="Category Image">
                                    </td>
                                    <td>{{ $category->status }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('category.delete', $category->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection