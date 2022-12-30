<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a  href="{{route('dashboard')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('categories.create')}}">Add Category</a></li>
                    <li><a href="{{route('categories.index')}}">All Category</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Sub Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('subcategory.create')}}">Add Sub Category</a></li>
                    <li><a href="{{route('subcategory.index')}}">All Sub Category</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-cube" aria-hidden="true"></i><span class="nav-text">Brands</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('brand.create')}}">Add Brand</a></li>
                    <li><a href="{{route('brand.index')}}">All Brand</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-tree" aria-hidden="true"></i><span class="nav-text">Units</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('unit.create')}}">Add Unit</a></li>
                    <li><a href="{{route('unit.index')}}">All Unit</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-arrows" aria-hidden="true"></i><span class="nav-text">Size</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('size.create')}}">Add Size</a></li>
                    <li><a href="{{route('size.index')}}">All Size</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-paint-brush" aria-hidden="true"></i><span class="nav-text">Color</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('color.create')}}">Add Color</a></li>
                    <li><a href="{{route('color.index')}}">All Color</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i><span class="nav-text">Products</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('products.create')}}">Add Product</a></li>
                    <li><a href="{{route('products.index')}}">All Product</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
