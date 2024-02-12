<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend') }}/assets/images/logo.svg" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend') }}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />


    <!-- Data table-->
    <link href="{{ asset('backend') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!-- loader-->
    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/app.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/header-colors.css" />
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    {{-- multi select tags  --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    {{-- main jquery file --}}
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
    <title>Sobrokom Control Panel</title>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document
                .querySelector(".pageLoader")
                .style.setProperty("display", "none", "important");
        });
    </script>
</head>

<body>
    <style>
        .pageLoader {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            display: flex;
            //display:none;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, .7);
            z-index: 9999999999999999999999;
        }
    </style>
    <div class="pageLoader">
        <img src="{{ asset('uploads/pageloader.gif') }}" style="width:112px;">
    </div>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('backend.body.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('backend.body.topbar')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('admin')
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('backend.body.footer')
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    @include('backend.body.switcher')
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/input-tags/js/tagsinput.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    {{-- Jquery data table  --}}
    <script src="{{ asset('backend') }}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#order_table').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#order_table .col-md-6:eq(0)');
        });
    </script>

    {{-- multi select tags  --}}
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>

    <script>
        new MultiSelectTag('multi_select');
    </script>

    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif



        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="{{ asset('backend') }}/assets/js/index.js"></script>
    <!--app JS-->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>



    {{-- image onload event  --}}
    <script>
        $(document).ready(function() {
            $('#image').change(function() {
                const file = this.files[0];

                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        $('#showImage').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });


        });
    </script>

    {{-- swwetalert  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            //    delete function
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();

                var link = $(this).attr("href");

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                            'Deleted!',
                            'Your File has been deleted.',
                            'success'
                        )
                    }
                })

            });
        });


        // subcategory select function 
        $(document).ready(function() {
            $('#product_descriptions').summernote();
            $('.category_id').on('change', function() {

                let category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: '/find/subcategory/' + category_id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(result) {
                            $('select[name="subcategory_id"]').html(
                                '<option value="">Select a Sub-Category</option>');
                            $.each(result.subcats, function(key, item) {
                                $('select[name="subcategory_id"]').append(
                                    '<option myid="' + item.id +
                                    '" value="' + item.id +
                                    '">' + item
                                    .subcategoryName + '</option>');
                            })
                        }
                    });
                }
            })

            $('.subcategory_id').on('change', function() {
                // alert('ok');
                let subcategory_id = $(this).val();
                if (subcategory_id) {
                    $.ajax({
                        url: '/find/sub-subcategory/' + subcategory_id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(result) {
                            // console.log(result);
                            $('select[name="sub_subcategory_id"]').html(
                                '<option value="">Select a Sub-Subcategory</option>');
                            // console.log(result.subsubcats.length);
                            if (result.subsubcats.length > 0) {

                                $.each(result.subsubcats, function(key, item) {
                                    $('select[name="sub_subcategory_id"]').append(
                                        '<option myid="' + item.id +
                                        '" value="' + item.id +
                                        '">' + item
                                        .subSubcategoryName + '</option>');
                                })
                            } else {
                                $('select[name="sub_subcategory_id"]').append(
                                    '<option value="0" selected>N/A</option>'
                                );
                            }
                        }
                    });
                }
            })
        });




        // delete variant
        $(document).ready(function() {
            $(document).on('click', '.delete_variant', function(e) {
                e.preventDefault();
                let id = this.getAttribute('value');
                $.ajax({
                    url: '/product/variant/delete/' + id,
                    type: "GET",
                    success: function(res) {
                        // console.log(res);
                        if (res.status == 200) {
                            toastr.success(res.message);
                            show();
                        } else {
                            toastr.error("variant deleted unsuccessful");
                        }

                    }
                })
            });
        });



        // Edit Variant
        $(document).on('click', '.edit_variant', function(e) {
            e.preventDefault();
            let id = this.getAttribute('value');
            // alert(id);
            $('.add_varient').css('display', 'none');
            $('.update_varient').css('display', 'block');

            $.ajax({
                url: "/product/variant/edit/" + id,
                type: "GET",
                success: function(data) {
                    let variantData = data.variantData;
                    // console.log(variantData);
                    toastr.warning(data.message);
                    $('.variant_id').val(variantData.id);
                    $('.regular_price').val(variantData.regular_price);
                    $('.discount').val(variantData.discount);
                    $('.discount_amount').val(variantData.discount_amount);
                    $('#stock').val(variantData.stock_quantity);
                    $('.unit').val(variantData.unit);
                    $('.weight').val(variantData.weight);
                    $('.manufacture_date').val(variantData.manufacture_date);
                    $('.expire_date').val(variantData.expire_date);
                }
            })
        });

        // updateProductVariant
        $(document).on('click', '.update_varient', function(e) {
            e.preventDefault();
            let id = $('.variant_id').val();
            // alert(id);
            let regular_price = parseFloat(document.querySelector('.regular_price').value);
            let discount = parseFloat(document.querySelector('.discount').value);
            let discount_amount = parseFloat(document.querySelector('.discount_amount').value);
            let stock = parseFloat(document.querySelector('#stock').value);
            let varientData = new FormData(jQuery("#productVariant")[0]);
            $.ajax({
                url: '/product/variant/update/' + id,
                type: "POST",
                data: varientData,
                contentType: false,
                processData: false,
                success: function(res) {
                    // console.log(res);
                    if (res.status == 200) {
                        toastr.success(res.message);
                        document.querySelector('.discount_amount').value = '';
                        document.querySelector('.regular_price').value = '';
                        document.querySelector('.discount').value = '';
                        document.querySelector('#stock').value = '';
                        document.querySelector('.unit').value = '';
                        document.querySelector('.weight').value = '';
                        show();
                        $('.add_varient').css('display', 'block');
                        $('.update_varient').css('display', 'none');
                    } else {
                        toastr.error("variant update unsuccessful");
                    }

                }

            })
        })



        // price and discount calculation 
        const regular_price = document.querySelector('.regular_price');
        const discount_amount = document.querySelector('.discount_amount');
        let Select_discount = document.querySelector('.discount');
        discount_amount.addEventListener('change', function() {
            let regurlarPrice = parseFloat(regular_price.value);
            let discountAmount = parseFloat(discount_amount.value);
            // alert(discountAmount);
            let discount = Math.round((regurlarPrice - discountAmount) / (regurlarPrice / 100));
            if (regurlarPrice > discountAmount) {
                let selectElement = document.querySelector('.discount');
                let option = document.createElement('option');
                option.value = discount;
                option.text = discount + '%';
                option.selected = true;
                selectElement.appendChild(option);
            } else {
                toastr.warning("discount amount is out of range");
            }
        });
        discount_amount.addEventListener('blur', function() {
            // alert('ok');
            let regurlarPrice = parseFloat(regular_price.value);
            let discountAmount = parseFloat(discount_amount.value);
            // alert(discountAmount);
            let discount = Math.round((regurlarPrice - discountAmount) / (regurlarPrice / 100));
            if (regurlarPrice > discountAmount) {
                let selectElement = document.querySelector('.discount');
                let option = document.createElement('option');
                option.value = discount;
                option.text = discount + '%';
                option.selected = true;
                selectElement.appendChild(option);
            } else {
                toastr.warning("discount amount is out of range");
            }
        });
        // discount calculation 
        Select_discount.addEventListener('click', function(e) {
            // alert('ok');
            let regurlarPrice = parseFloat(regular_price.value);
            let amount = ((regurlarPrice * parseFloat(this.value)) / 100);
            // console.log(((regurlarPrice * parseFloat(this.value)) / 100));
            let sellingPrice = regurlarPrice - amount;
            document.querySelector('.discount_amount').value = sellingPrice;
        });
    </script>



</body>

</html>
