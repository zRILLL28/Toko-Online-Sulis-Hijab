<!-- Navbar -->
<nav class="navbar-custom">
    <ul class="list-unstyled topbar-nav float-right mb-0">
        <li class="hidden-sm">
            <a class="nav-link waves-effect waves-light" href="javascript:void(0);" id="btn-fullscreen"><i
                    class="mdi mdi-fullscreen nav-icon"></i></a>
        </li>
        <li class="dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="profile-user" class="rounded-circle" /> <span
                    class="ml-1 nav-user-name hidden-sm">{{ auth()->user()->name }}<i class="mdi mdi-chevron-down"></i></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ url('/') }}"><i class="dripicons-home text-muted mr-2"></i> Home</a>
                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        <i class="dripicons-exit text-muted mr-2"></i>{{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
    <ul class="list-unstyled topbar-nav mb-0">
        <li>
            <button class="button-menu-mobile nav-link waves-effect waves-light"><i
                    class="mdi mdi-menu nav-icon"></i></button>
        </li>
    </ul>
</nav>
<!-- end navbar-->
