<!-- Start Header Style -->
<header id="header" class="htc-header header--3 bg__white">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2 col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <img src="user-asset/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-md-8 col-lg-8 d-none d-md-block">
                    <nav class="mainmenu__nav  d-none d-lg-block">
                        <ul class="main__menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="drop"><a href="javascript:void(0);">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('shop.index') }}">shop</a></li>
                                    <li><a href="{{ route('cart.index') }}">cart</a></li>
                                    <li><a href="{{ route('checkout.index') }}">checkout</a></li>
                                    <li><a href="{{ route('wishlist.index') }}">wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }}">contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu clearfix d-block d-lg-none">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="javascript:void(0);">Shop</a>
                                    <ul>
                                        <li><a href="{{ route('shop.index') }}">shop</a></li>
                                        <li><a href="{{ route('cart.index') }}">cart</a></li>
                                        <li><a href="{{ route('checkout.index') }}">checkout</a></li>
                                        <li><a href="{{ route('wishlist.index') }}">wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End MAinmenu Ares -->
                <div class="col-md-2 col-lg-2 col-6">
                    <ul class="menu-extra">
                        @if (Route::has('login'))
                        @auth
                        @can('admin')
                        <li><a href="{{ route('dashboard') }}"><span class="ti-user"></span></a></li>
                        @else
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    logout
                                </a>
                            </form>
                        </li>
                        @endcan
                        @else
                        <li><a href="{{ route('login') }}"><span class="ti-user"></span></a></li>
                        @endauth
                        @endif
                        <li><a href="{{ route('cart.index') }}"><span class="ti-shopping-cart"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Style -->
<div class="body__overlay"></div>
