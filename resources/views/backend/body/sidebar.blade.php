<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rukada</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        {{-- category menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
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

        {{-- brand menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
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

        {{-- Subcategory menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
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

        {{-- popup menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
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
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
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


        {{-- banner menu  --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Home Banner</div>
            </a>
            <ul>
                <li> <a href="{{ route('banner') }}"><i class="bx bx-right-arrow-alt"></i>Add Tag</a>
                </li>
                <li> <a href="{{ route('banner.view') }}"><i class="bx bx-right-arrow-alt"></i>Manage Tags</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
