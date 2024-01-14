@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Add New Product</h5>
                    <hr />
                    <div class="form-body mt-4">
                        <form action="" method="POST" id="productForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3 mb-3">
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
                                                        <select
                                                            class="form-select @error('category_id') is-invalid  @enderror"
                                                            name="category_id">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->categoryName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                @php
                                                    $subcategories = App\Models\Subcategory::all();
                                                @endphp
                                                <div class="row">
                                                    <label class="form-label col-12">Select Subcategory</label>
                                                    <div class="col-12">
                                                        <select
                                                            class="form-select @error('subcategory_id') is-invalid  @enderror"
                                                            name="subcategory_id">
                                                            <option value="">Select Subcategory</option>
                                                            @foreach ($subcategories as $subcategory)
                                                                <option value="{{ $subcategory->id }}">
                                                                    {{ $subcategory->subcategoryName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('subcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                @php
                                                    $brands = App\Models\Brand::all();
                                                @endphp
                                                <div class="row">
                                                    <label class="form-label col-12">Select Brand</label>
                                                    <div class="col-12">
                                                        <select class="form-select @error('brand_id') is-invalid  @enderror"
                                                            name="brand_id">
                                                            <option value="">Select Brand</option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">
                                                                    {{ $brand->BrandName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('brand_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label class="form-label col-12">Select Feature</label>
                                                    <div class="col-12">
                                                        <select
                                                            class="form-select @error('product_feature') is-invalid  @enderror"
                                                            name="product_feature">
                                                            <option value="feature">Feature</option>
                                                            <option value="new">New Arrival</option>
                                                            <option value="trending">Trending</option>
                                                            <option value="best">Best Rate</option>
                                                            <option value="weekly">Weekend Deals</option>
                                                            <option value="seller">Top Seller</option>
                                                            <option value="offers">Top Offers</option>
                                                        </select>
                                                        @error('product_feature')
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
                                                        @error('product_name')
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
                                                        <label for="" class="form-label">Short Description</label>
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea class="form-control @error('short_desc') is-invalid  @enderror" name="short_desc" placeholder=""
                                                            style="resize: none; height: 70px;"></textarea>
                                                        @error('short_desc')
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
                                                        <textarea class="form-control @error('long_desc') is-invalid  @enderror" name="long_desc" placeholder=""
                                                            style="resize: none; height: 100px;"></textarea>
                                                        @error('long_desc')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3 d-flex align-items-center">
                                            <div class="col-md-6">
                                                <label for="image" class="form-label">Product Thumbnail</label>
                                                <input type="file" id="image"
                                                    class="form-control  @error('product_image') is-invalid  @enderror"
                                                    name="product_image">
                                                @error('product_image')
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
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">SKU</label>
                                                    <input type="text" class="form-control" placeholder="ASD1202"
                                                        name="sku">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Tags</label>
                                                    <input type="text" class="form-control" data-role="tagsinput"
                                                        placeholder="jQuery,Net" name="tag">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="image" class="form-label">Image Gallery </label>
                                                <input type="file" id="imageGallery"
                                                    class="form-control  @error('image') is-invalid  @enderror"
                                                    name="imageGallery[]" multiple>
                                                @error('imageGallery')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="my-3">
                                                    <img id="showImage" class="img-fluid" height="150" width="150"
                                                        src="{{ asset('uploads/productempty.jpg') }}"
                                                        alt="category image">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary add_product">Add Product</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row variant_section ">
                            <form action="" method="POST" id="productVariant" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3 mb-4">
                                            <div class="col-lg-3 col-md-6">
                                                <label for="inputPrice" class="form-label">Regular Price</label>
                                                <input type="number" class="form-control regular_price " id="inputPrice"
                                                    placeholder="00.00" name="regular_price">
                                                <input type="text" class="product_id" name="product_id">
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Discount</label>
                                                <select
                                                    class="form-select discount @error('discount') is-invalid  @enderror"
                                                    name="discount" disabled>
                                                    <option value="10">10%</option>
                                                    <option value="20">20%</option>
                                                    <option value="30">30%</option>
                                                    <option value="40">40%</option>
                                                </select>
                                                @error('discount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="inputPrice" class="form-label">Discount Price</label>
                                                <input type="number" class="form-control discount_amount"
                                                    id="inputPrice" placeholder="00.00" name="discount_amount" readonly>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="inputPrice" class="form-label">Stock Quantity</label>
                                                <input type="email" class="form-control" id="inputPrice"
                                                    placeholder="00.00" name="stock_quantity">
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Color</label>
                                                <select class="form-select @error('color') is-invalid  @enderror"
                                                    name="color">
                                                    <option value="red">Red</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="green">Green</option>
                                                </select>
                                                @error('color')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Size</label>
                                                <select class="form-select @error('size') is-invalid  @enderror"
                                                    name="size">
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                </select>
                                                @error('size')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label">Barcode Generator</label> <br>
                                                <input type="text" class="form-control" id="inputPrice"
                                                    placeholder="00.00" name="barcode">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <button type="button" class="btn btn-primary add_varient">Add
                                                        Varients</button>
                                                </div>
                                            </div>


                                        </div>

                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Regular Price</th>
                                                    <th>Discount</th>
                                                    <th>Discount Price</th>
                                                    <th>Stock Quantity</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Barcode</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--end row-->
            </div>
        </div>
    </div>
    </div>
    <!--end row-->
    </div>
    <script>
        const add_product = document.querySelector('.add_product');
        add_product.addEventListener('click', function(e) {
            e.preventDefault();
            // alert('ok');
            let allData = new FormData(jQuery("#productForm")[0]);
            $.ajax({
                url: "/product/store/",
                type: "POST",
                data: allData,
                contentType: false,
                processData: false,
                success: function(res) {
                    $('.variant_section').show();
                    $('.add_product').addClass('disabled');
                    $('.product_id').val(res.productId);
                },
            });
        });


        const add_varient = document.querySelector('.add_varient');
        add_varient.addEventListener('click', function(e) {
            e.preventDefault();
            // const form = e.target;
            // alert('hello');
            let varientData = new FormData(jQuery("#productVariant")[0]);
            // const regularPrice = document.querySelector('.regular_price').value;
            // const discount = 
            $.ajax({
                url: '/product/variant/store/',
                type: "POST",
                data: varientData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success(response.message);
                    // form.reset();
                    show();
                }
            })
        })

        const regular_price = document.querySelector('.regular_price');
        const discount = document.querySelector('.discount');
        discount.addEventListener('change', function() {
            let regurlarPrice = parseFloat(regular_price.value);
            let discountAmount = ((regurlarPrice * parseFloat(this.value)) / 100);
            discountAmount = regurlarPrice - discountAmount;
            document.querySelector('.discount_amount').value = discountAmount;
        })


        regular_price.addEventListener('keyup', function() {
            let regularPrice = this.value;
            // console.log(regularPrice);
            if (regularPrice !== "") {
                discount.removeAttribute('disabled');
            } else {
                discount.setAttribute('disabled', '');
            }
        })




        function show() {
            const productId = $('product_id').val();
            $.ajax([
                url: `/product/variant/show/${productId}`,
                type: "GET",
                dataType: 'JSON',
                success: function(res) {
                    console.log(res);
                }
            ])
        }
    </script>
@endsection
