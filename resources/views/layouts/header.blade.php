<!-- header -->
<div class="header">
    <div class="nav-header">
        <div class="brand-logo">
            <a href="{{ route('dashboard') }}">
                <!-- <i class="icofont icofont-dart"></i> -->
                <img src="{{ asset('paito/main') }}/../assets/images/logo-mini.png" alt="">
                <span class="brand-title" style="font-size: 20px">xtream-forex</span>
            </a>
        </div>
    </div>

    <div class="header-content">
        <div class="header-left d-flex">
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>

            </div>
        </div>
    </div>


    <div class="navbar-custom-menu pull-right d-flex nav-right">
        <div class="dropdown">
            <a class="dropdown-toggle user-profile-dropdown" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="user-img">
                    <img src="{{ asset('paito/main') }}/../assets/images/user.png" alt="">
                </span>
                <span class="user-name">{{ Auth::user()->name }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#" id="buttonLogout">
                    <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                </a>
            </div>
        </div>
    </div>

</div>
<!-- #/ header -->
