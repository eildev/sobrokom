<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo.svg" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Sobrokom</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        {{-- Product menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-package'></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('product') }}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
                <li>
                    <a href="{{ route('product.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Products</a>
                </li>

            </ul>
        </li>

        {{-- category menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category-alt'></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('category') }}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                </li>
                <li> <a href="{{ route('category.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Category</a>
                </li>
            </ul>
        </li>



        {{-- Subcategory menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-menu-alt-right'></i>
                </div>
                <div class="menu-title">Subcategory</div>
            </a>
            <ul>
                <li> <a href="{{ route('subcategory') }}"><i class="bx bx-right-arrow-alt"></i>Add Subcategory</a>
                </li>
                <li> <a href="{{ route('subcategory.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage
                        Subcategory</a>
                </li>
            </ul>
        </li>

        {{-- brand menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-cube-alt'></i>
                </div>
                <div class="menu-title">Brands</div>
            </a>
            <ul>
                <li> <a href="{{ route('brand') }}"><i class="bx bx-right-arrow-alt"></i>Add Brand</a>
                </li>
                <li> <a href="{{ route('brand.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Brand</a>
                </li>
            </ul>
        </li>

        {{-- popup menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-message-rounded-dots'></i>
                </div>
                <div class="menu-title">Popup Message</div>
            </a>
            <ul>

                <li> <a href="{{ route('popupMessage') }}"><i class="bx bx-right-arrow-alt"></i>Add Popup Message</a>
                </li>
                <li> <a href="{{ route('popupMessage.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Popup
                        Message</a>
                </li>
            </ul>
        </li>

        {{-- tag menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-purchase-tag-alt'></i>
                </div>
                <div class="menu-title">Product Tag</div>
            </a>
            <ul>
                <li> <a href="{{ route('tagname') }}"><i class="bx bx-right-arrow-alt"></i>Add Tag</a>
                </li>
                <li> <a href="{{ route('tagname.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Tags</a>
                </li>
            </ul>
        </li>


        {{-- Home Banner menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-image-alt'></i>
                </div>
                <div class="menu-title">Home Banner</div>
            </a>
            <ul>
                <li> <a href="{{ route('banner') }}"><i class="bx bx-right-arrow-alt"></i>Add Banner</a>
                </li>
                <li> <a href="{{ route('banner.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Banner</a>
                </li>
            </ul>
        </li>
        {{-- Offer Banner menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class='bx bx-image-alt'></i>
                </div>
                <div class="menu-title">Offer Banner </div>
            </a>
            <ul>
                <li> <a href="{{ route('offerbanner') }}"><i class="bx bx-right-arrow-alt"></i>Add Banner</a>
                </li>
                <li> <a href="{{ route('offerbanner.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Banner</a>
                </li>
            </ul>
        </li>
        {{-- Subscriber list  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="menu-title">Subscriber</div>
            </a>
            <ul>
                <li> <a href="{{ route('subscribe.view') }}"><i class="bx bx-right-arrow-alt"></i>Subscriber list</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="menu-title">Global Coupon</div>
            </a>
            <ul>
                <li> <a href="{{ route('global.coupon') }}"><i class="bx bx-right-arrow-alt"></i>Add Global Coupon</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="menu-title">Order</div>
            </a>
            <ul>
                <li> <a href="{{ route('new.order') }}"><i class="bx bx-right-arrow-alt"></i>New Order</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="menu-title">Stock Management</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('stock.view') }}"><i class="bx bx-right-arrow-alt"></i>View Stock</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="menu-title">Contact Messages</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('contact-message.show') }}"><i class="bx bx-right-arrow-alt"></i>View New Message</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
