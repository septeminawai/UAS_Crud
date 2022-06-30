<div class="container-fluid">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown d-none d-lg-inline-block">
            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                <i class="fe-maximize noti-icon"></i>
            </a>
        </li>

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
               data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('/vendor/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                            {{Auth::user()->name}}
                            <i class="mdi mdi-chevron-down"></i>
                    </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                <!-- item-->
                <a href="{{route('profil.index')}}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Profil</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fe-log-out"></i>
                    <span>Keluar</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="#" class="logo logo-dark text-center">
            <span class="logo-sm">
                    <img src="{{asset('/assets/img/logos.png')}}" alt="" height="50">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-lg">
                    <img src="{{asset('/assets/img/logos.png')}}" alt="" height="50">
                    <!-- <span class="logo-lg-text-light">U</span> -->
            </span>
        </a>

        <a href="#" class="logo logo-light text-center">
            <span class="logo-sm">
                    <img src="{{asset('/assets/img/logos.png')}}" alt="" height="50">
                </span>
            <span class="logo-lg">
                    <img src="{{asset('/assets/img/logos.png')}}" alt="" height="50">
                </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
        </li>

        <li>
            <!-- Mobile menu toggle (Horizontal Layout)-->
            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </li>

    </ul>
    <div class="clearfix"></div>
</div>
