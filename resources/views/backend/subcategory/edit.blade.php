@extends('backend.master')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-4 border-info">
                <form action="{{ Route('subcategory.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-info">Update Subcategory</h5>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-12 form-label">Subcategory Name</label>
                                <div class="col-12">
                                    <input type="text" name="subcategoryName" class="form-control" id="inputEnterYourName"
                                        placeholder="Enter Subcategory Name" value="{{$subcategory->subcategoryName}}">
                                </div>
                            </div>

                            @php
                                $categories = App\Models\Category::all();
                            @endphp
                            <div class="row mb-3">
                                <label class="form-label col-12">Select Category</label>
                                <div class="col-12">
                                    <select class="form-select" name="categoryId">
                                        <option value="{{$subcategory->category->id}}">{{$subcategory->category->categoryName}}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-12 form-label">Subcategory Thumbnail </label>
                                <div class="col-12">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Update Subategory</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection
