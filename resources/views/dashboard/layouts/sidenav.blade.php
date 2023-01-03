<!-- Left Sidenav -->
<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu" id="side-nav">
        <li class="menu-title">Main</li>
        <li>
            <a href="{{ route('dashboard') }}"><i class="mdi mdi-home-variant"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-title">Produk</li>
        <li class="{{ Request::is('dashboard-product*') || Request::is('dashboard-merk*') ? 'active' : '' }}">
            <a href="javascript: void(0);">
                <i class="mdi mdi-cube-outline"></i><span>Manajemen Product</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="{{ Request::is('dashboard-product*') ? 'active' : '' }}"><a href="{{ route('dashboard-product.index') }}">Produk</a></li>
                <li class="{{ Request::is('dashboard-merk*') ? 'active' : '' }}"><a href="{{ route('dashboard-merk.index') }}">Merk Produk</a></li>
                <li><a href="{{ route('dashboard-invoice.index') }}">Invoices</a></li>
            </ul>
        </li>
        @can('admin')
        <li class="menu-title">User</li>
        <li>
            <a href="javascript: void(0);">
                <i class="mdi mdi-account-settings-variant"></i><span>Manajemen User</span><span class="menu-arrow"><i
                        class="mdi mdi-chevron-right"></i></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="{{ route('customer.index') }}">Customer</a></li>
                <li><a href="{{ route('operator.index') }}">Operator</a></li>
            </ul>
        </li>
        <li class="menu-title">Umum</li>
        <li>
            <a href="#"><i class="mdi mdi-settings"></i><span>Pengaturan</span></a>
        </li>
        @endcan
    </ul>
</div>
<!-- end left-sidenav-->
