@extends('backend.master')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SI</th>
                                <th>Category Name</th>
                                <th>Subategory Name</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategories as $subcategory )
                                <tr>
                                    <td>{{ $subcategory->id }}</td>
                                    <td>{{ $subcategory->category->categoryName }}</td>
                                    <td>{{ $subcategory->subcategoryName }}</td>
                                    <td>{{ $subcategory->slug }}</td>
                                    <td>
                                        {{-- <img src="{{ $subcategory->image }}" class="img-fluid" alt=""> --}}
                                        <img src="{{ asset('/uploads/subcategory/' . $subcategory->image) }}" style="height: 100px;" class="img-fluid" alt="Subcategory Image">
                                    </td>
                                    <td>{{ $subcategory->status }}</td>
                                    <td>
                                        <a href="{{ route('subcategory.edit', $subcategory->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('subcategory.delete', $subcategory->id)}}" class="btn btn-danger">Delete</a>
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