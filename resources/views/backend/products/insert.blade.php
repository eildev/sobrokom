@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Add New Product</h5>
                    <hr />
                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            @php
                                                $categories = App\Models\Category::all();
                                            @endphp
                                            <div class="row">
                                                <label class="form-label col-12">Select Category</label>
                                                <div class="col-12">
                                                    <select class="form-select @error('categoryId') is-invalid  @enderror"
                                                        name="categoryId">
                                                        <option value="">-----Select Category-----</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->categoryName }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('categoryId')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @php
                                                $categories = App\Models\Category::all();
                                            @endphp
                                            <div class="row">
                                                <label class="form-label col-12">Select Subcategory</label>
                                                <div class="col-12">
                                                    <select class="form-select @error('categoryId') is-invalid  @enderror"
                                                        name="categoryId">
                                                        <option value="">-----Select Category-----</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->categoryName }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('categoryId')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @php
                                                $categories = App\Models\Category::all();
                                            @endphp
                                            <div class="row">
                                                <label class="form-label col-12">Select Brand</label>
                                                <div class="col-12">
                                                    <select class="form-select @error('categoryId') is-invalid  @enderror"
                                                        name="categoryId">
                                                        <option value="">-----Select Category-----</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->categoryName }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('categoryId')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @php
                                                $categories = App\Models\Category::all();
                                            @endphp
                                            <div class="row mb-3">
                                                <label class="form-label col-12">Select Tag</label>
                                                <div class="col-12">
                                                    <select class="form-select @error('categoryId') is-invalid  @enderror"
                                                        name="categoryId">
                                                        <option value="">-----Select Tag-----</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->categoryName }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('categoryId')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="" class="form-label">Product Name</label>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" name="product_name"
                                                        class="form-control @error('product_name') is-invalid  @enderror"
                                                        id="inputEnterYourName" placeholder="Enter Product Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="" class="form-label">Short Description</label>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control @error('short_description') is-invalid  @enderror" name="short_description" placeholder=""
                                                        style="resize: none; height: 100px;"></textarea>
                                                    @error('short_description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="" class="form-label">Long Description</label>
                                                </div>
                                                <div class="col-12">
                                                    <textarea class="form-control @error('short_description') is-invalid  @enderror" name="short_description" placeholder=""
                                                        style="resize: none; height: 100px;"></textarea>
                                                    @error('short_description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 d-flex align-items-center">

                                        <div class="col-md-6">
                                            <label for="image" class="form-label">Category Thumbnail </label>
                                            <input type="file" id="image"
                                                class="form-control  @error('image') is-invalid  @enderror" name="image">
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-6">
                                            <img id="showImage" class="" height="150" width="200"
                                                src="{{ asset('uploads/productempty.jpg') }}" alt="category image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputPrice" class="form-label">Price</label>
                                            <input type="email" class="form-control" id="inputPrice"
                                                placeholder="00.00">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCompareatprice" class="form-label">Compare at Price</label>
                                            <input type="password" class="form-control" id="inputCompareatprice"
                                                placeholder="00.00">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCostPerPrice" class="form-label">Cost Per Price</label>
                                            <input type="email" class="form-control" id="inputCostPerPrice"
                                                placeholder="00.00">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputStarPoints" class="form-label">Star Points</label>
                                            <input type="password" class="form-control" id="inputStarPoints"
                                                placeholder="00.00">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputProductType" class="form-label">Product Type</label>
                                            <select class="form-select" id="inputProductType">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputVendor" class="form-label">Vendor</label>
                                            <select class="form-select" id="inputVendor">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputCollection" class="form-label">Collection</label>
                                            <select class="form-select" id="inputCollection">
                                                <option></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputProductTags" class="form-label">Product Tags</label>
                                            <input type="text" class="form-control" id="inputProductTags"
                                                placeholder="Enter Product Tags">
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-primary">Save Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
