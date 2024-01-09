@extends('backend.master')
@section('admin')
<div class="page-content">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-4 border-info">
                <form action="{{ Route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0 text-info">Update Category</h5>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="categoryName" class="form-control" id="inputEnterYourName"
                                        placeholder="Enter Category Name" value="{{$category->categoryName}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Category Thumbnail </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" value="{{$category->image}}">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Update Category</button>
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