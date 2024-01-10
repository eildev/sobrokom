@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card border-top border-0 border-3 border-info col-md-8 offset-md-2">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">Manage Subcategory</h5>

                        <a href="{{ route('subcategory') }}" class="btn btn-info btn-sm text-light ">
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
                                    <th>Subategory Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($subcategories->count() > 0)
                                    @foreach ($subcategories as $subcategory)
                                        <tr>
                                            <td>{{ $subcategory->id }}</td>
                                            <td>{{ $subcategory->category->categoryName }}</td>
                                            <td>{{ $subcategory->subcategoryName }}</td>
                                            <td>{{ $subcategory->slug }}</td>
                                            <td>{{ $subcategory->status }}</td>
                                            <td>
                                                <a href="{{ route('subcategory.edit', $subcategory->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('subcategory.delete', $subcategory->id) }}"
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
