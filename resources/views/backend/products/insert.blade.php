@extends('backend.master')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="card">
                <div class="card-body p-4">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-info">Add Product</h5>

                        <a href="{{ route('product.view') }}" class=" btn-info btn-sm text-light ">
                            <i class='bx bx-show'></i>
                        </a>
                    </div>
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
                                                        <select class="form-select" name="category_id">
                                                            <option value="">Select Category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->categoryName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="category_error text-danger"></span>

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
                                                        <select class="form-select " name="subcategory_id">
                                                            <option value="">Select Subcategory</option>
                                                            @foreach ($subcategories as $subcategory)
                                                                <option value="{{ $subcategory->id }}">
                                                                    {{ $subcategory->subcategoryName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="subcategory_error text-danger"></span>

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
                                                        <select class="form-select " name="brand_id">
                                                            <option value="">Select Brand</option>
                                                            @foreach ($brands as $brand)
                                                                <option value="{{ $brand->id }}">
                                                                    {{ $brand->BrandName }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <span class="brand_error text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <label class="form-label col-12">Select Feature</label>
                                                    <div class="col-12">
                                                        <select id="multi_select" name="product_feature[]" multiple>
                                                            <option value="feature">Feature</option>
                                                            <option value="new-arrival">New Arrival</option>
                                                            <option value="trending">Trending</option>
                                                            <option value="best-rate">Best Rate</option>
                                                            <option value="weekend-deals">Weekend Deals</option>
                                                            <option value="top-seller">Top Seller</option>
                                                            <option value="top-offers">Top Offers</option>
                                                        </select>
                                                        <span class="feature_error text-danger"></span>
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
                                                        <input type="text" name="product_name" class="form-control "
                                                            id="inputEnterYourName" placeholder="Enter Product Name">
                                                        <span class="product_name_error text-danger"></span>
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
                                                        <textarea class="form-control " name="short_desc" placeholder="" style="resize: none; height: 70px;"></textarea>
                                                        <span class="short_desc text-danger"></span>
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
                                                        <textarea class="form-control" name="long_desc" placeholder="Enter Long Description"
                                                            style="resize: none; height: 100px;"></textarea>
                                                        <span class="long_desc text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3 d-flex align-items-center">
                                            <div class="col-md-6">
                                                <label for="image" class="form-label">Product Thumbnail</label>
                                                <input type="file" id="image" class="form-control  "
                                                    name="product_image">
                                                <div class="my-1"><i><b>Note:</b> Please provide 600 X 600 size
                                                        image</i></div>
                                                <span class="product_image text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <img id="showImage" class="" height="150" width="200"
                                                    src="{{ asset('uploads/productempty.jpg') }}" alt="Product Image">
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
                                                    <span class="sku_error text-danger"></span>
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
                                                <input type="file" id="imageGallery" class="form-control "
                                                    name="imageGallery[]" multiple>
                                                <div class="my-1"><i><b>Note:</b> Please provide 600 X 600 size
                                                        image</i></div>

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

                        {{-- style="display: none" --}}
                        <div class="row variant_section">
                            <div class="card-title d-flex">
                                <h5 class="mb-0 text-info">Add Variants</h5>
                            </div>
                            <form method="POST" id="productVariant">
                                @csrf
                                <div class="col-12">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="row g-3 mb-4">
                                            <div class="col-lg-3 col-md-6">
                                                <label for="inputPrice" class="form-label">Regular Price</label>
                                                <input type="number" class="form-control regular_price" id="inputPrice"
                                                    placeholder="00.00" name="regular_price">
                                                <input type="hidden" class="product_id" name="product_id">
                                                <span class="regular_price_error text-danger"></span>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Discount</label>
                                                <select class="form-select discount" name="discount" disabled>
                                                    <option value="0">discount</option>
                                                    <option value="0">0</option>
                                                    <option value="10">10%</option>
                                                    <option value="20">20%</option>
                                                    <option value="30">30%</option>
                                                    <option value="40">40%</option>

                                                </select>
                                                <span class="discount_error text-danger"></span>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="inputPrice" class="form-label">Discount Price</label>
                                                <input type="number" class="form-control discount_amount"
                                                    id="inputPrice" placeholder="00.00" name="discount_amount" readonly>
                                                <span class="discount_amount_error text-danger"></span>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="inputPrice" class="form-label">Stock Quantity</label>
                                                <input type="number" class="form-control" id="stock"
                                                    placeholder="00.00" name="stock_quantity">
                                                <span class="stock_quantity_error text-danger"></span>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Unit</label>
                                                <select class="form-select unit" name="unit">
                                                    <option value="">Unit</option>
                                                    <option value="kg">KG</option>
                                                    <option value="liter">Liter</option>
                                                    <option value="piece">Piece</option>
                                                    <option value="dozon">Dozon</option>
                                                    <option value="inch">Inch</option>
                                                    <option value="gm">GM</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label">Weight</label> <br>
                                                <input type="text" class="form-control weight" id="inputPrice"
                                                    placeholder="Weight" name="weight">
                                            </div>
                                            {{-- <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Color</label>
                                                <select class="form-select color" name="color">
                                                    <option value="">Color</option>
                                                    <option value="red">red</option>
                                                    <option value="blue">Blue</option>
                                                    <option value="green">Green</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label col-12">Size</label>
                                                <select class="form-select size" name="size">
                                                    <option value="">Size</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                </select>
                                            </div> --}}
                                            {{-- <div class="col-lg-3 col-md-6">
                                                <label class="form-label">Barcode Generator</label> <br>
                                                <input type="text" class="form-control barcode" id="inputPrice"
                                                    placeholder="Barcode" name="barcode">
                                            </div> --}}
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label">Manufacture Date</label> <br>
                                                <input type="date" class="form-control" id="inputPrice"
                                                    placeholder="" name="manufacture_date">
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label class="form-label">Expire Date</label> <br>
                                                <input type="date" class="form-control" id="inputPrice"
                                                    placeholder="" name="expire_date">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="d-flex justify-content-center align-items-center h-100">
                                                    <button type="button" class="btn btn-primary add_varient">Add
                                                        Varients</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-3">
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
                                                    <th>Unit</th>
                                                    <th>Weight</th>
                                                    <th>Manufacture Date</th>
                                                    <th>Expire Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="varient_container">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <a href="{{ route('product') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i>
                                    Add New Product</a>
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
        // !.. add product ajax Crud
        const add_product = document.querySelector('.add_product');
        add_product.addEventListener('click', function(e) {
            e.preventDefault();
            let allData = new FormData(jQuery("#productForm")[0]);
            $.ajax({
                url: "/product/store/",
                type: "POST",
                data: allData,
                contentType: false,
                processData: false,
                success: function(res) {
                    if (res.status == 200) {
                        $('.variant_section').show();
                        $('.add_product').addClass('disabled');
                        $('.product_id').val(res.productId);
                        toastr.success(res.message);
                    } else {
                        $('.category_error').text(res.error.category_id);
                        $('.subcategory_error').text(res.error.subcategory_id);
                        $('.brand_error').text(res.error.brand_id);
                        $('.feature_error').text(res.error.product_feature);
                        $('.product_name_error').text(res.error.product_name);
                        $('.short_desc').text(res.error.short_desc);
                        $('.long_desc').text(res.error.long_desc);
                        $('.product_image').text(res.error.product_image);
                        $('.sku_error').text(res.error.sku);
                        $('.shipping_error').text(res.error.shipping);
                        // $('.tag_error').text(res.error.tags);
                        toastr.warning(res.error);
                    }
                },
            });
        });



        // !.. add variant ajax Crud
        const add_varient = document.querySelector('.add_varient');
        add_varient.addEventListener('click', function(e) {
            e.preventDefault();
            let varientData = new FormData(jQuery("#productVariant")[0]);
            $.ajax({
                url: '/product/variant/store/',
                type: "POST",
                data: varientData,
                contentType: false,
                processData: false,
                success: function(response) {
                    let regular_price = parseFloat(document.querySelector('.regular_price').value);
                    let discount = parseFloat(document.querySelector('.discount').value);
                    let discount_amount = parseFloat(document.querySelector('.discount_amount')
                        .value);
                    let stock = parseFloat(document.querySelector('#stock').value);

                    if (response.status == 200 && regular_price > 0 && discount >= 0 &&
                        discount_amount >
                        0 && stock > 0) {
                        toastr.success(response.message);
                        document.querySelector('.discount_amount')
                            .value = '';
                        document.querySelector('.regular_price').value = '';
                        document.querySelector('.discount').value = '';
                        document.querySelector('#stock').value = '';
                        document.querySelector('.unit').value = '';
                        document.querySelector('.weight').value = '';
                        show();
                    } else {
                        toastr.warning('please provide varient');
                    }
                }
            })
        })


        // show variantData on Table
        function show() {
            const productId = document.querySelector('.product_id').value;
            $.ajax({
                url: '/product/variant/show/' + productId,
                type: "GET",
                dataType: 'JSON',
                success: function(res) {
                    if (res.status == 200) {
                        // console.log(res);
                        let varient_container = document.querySelector('.varient_container');
                        varient_container.innerHTML = "";
                        const allData = res.variantData;
                        allData.forEach(function(data) {
                            const tr = document.createElement('tr');
                            tr.innerHTML += `
                                            <td>${data.regular_price}</td>
                                            <td>${data.discount}</td>
                                            <td>${data.discount_amount}</td>
                                            <td>${data.stock_quantity}</td>
                                            <td>${data.unit}</td>
                                            <td>${data.weight}</td>
                                            <td>${data.manufacture_date}</td>
                                            <td>${data.expire_date}</td>
                                            <td>
                                                <button value="${data.id}" id="delete_variant" class="btn-sm btn-danger btn">Delete</button>
                                            </td>
                                    `;
                            varient_container.appendChild(tr);
                        })
                    } else {
                        toastr.warning(res.error);
                    }
                }
            })
        }



        // price and discount calculation
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
            update(regularPrice, discount);
        })

        regular_price.addEventListener('change', function() {
            let regularPrice = this.value;
            update(regularPrice, discount);
        });

        function update(regularPrice, discount) {
            if (regularPrice !== "" && regularPrice > 0) {
                discount.removeAttribute('disabled');
            } else {
                discount.setAttribute('disabled', '');
            }
        }


        // Input field Validation 
        function inputFieldValidation(inputFieldName) {
            var inputField = document.querySelector(inputFieldName);
            // console.log(inputField);
            inputField.addEventListener('keyup', function() {
                let inputValue = parseInt(this.value);
                // console.log(quantity);
                if (inputValue < 1 || isNaN(inputValue)) {
                    toastr.warning('Please provide a valid number greater than or equal to 1.');
                }
            })
        }

        function inputFieldValidation2(inputFieldName) {
            var inputField = document.querySelector(inputFieldName);
            // console.log(inputField);
            inputField.addEventListener('change', function() {
                let inputValue = parseInt(this.value);
                // console.log(quantity);
                if (inputValue < 1) {
                    toastr.warning('Please provide a valid number greater than or equal to 1.');
                }
            })
        }


        inputFieldValidation('.shipping');
        inputFieldValidation2('.shipping');





        // // delete varient data
        // const delete_variant = document.querySelectorAll('#delete_variant');
        // delete_variant.map(data => {
        //     data.addEventListener('click', function(event) {
        //         alert('delete');

        //     })
        // })

        // delete_variant.addEventListener('click', function(e) {
        //     e.preventDefault();
        //     const id = this.value;
        //     alert('hello');
        //     console.log(id);
        // })
    </script>
@endsection
