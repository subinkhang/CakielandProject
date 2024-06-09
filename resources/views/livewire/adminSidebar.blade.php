<aside>
    <link rel="stylesheet" href="{{asset('backend/css/livewire/adminSidebar.css')}}">
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <h1>ADMIN</h1>
                <li>
                    <a class="{{ request()->is('admin-dashboard') ? 'active' : '' }}" href="{{ url('/admin-dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a  class="{{ request()->is(['admin-list-product', 'admin-add-product']) ? 'active' : '' }}" href="{{ url('/admin-list-product') }}">
                        <i class="fa-solid fa-utensils"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('admin-list-bill') ? 'active' : '' }}" href="{{ url('/admin-list-bill') }}">
                        <i class="fa-solid fa-truck-fast"></i>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is(['admin-list-voucher', 'admin-add-voucher']) ? 'active' : '' }}" href="{{ url('/admin-list-voucher') }}">
                        <i class="fa-solid fa-ticket"></i>
                        <span>List Voucher</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('admin-user') ? 'active' : '' }}" href="{{ url('/admin-user') }}">
                        <i class="fa fa-user"></i>
                        <span>User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>