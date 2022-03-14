 <div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="{{url('/')}}/assets/images/icon-dark.svg" alt="CAR WORKSHOP Logo" class="img-fluid logo"><span>CAR WORKSHOP</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{url('/')}}/assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Christy Wert</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>  
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li><a href="{{url('/admin/car_owners')}}"><i class="fa fa-users"></i><span>Car Owners</span></a></li>
                <li><a href="{{url('/admin/mechanics')}}"><i class="fa fa-wrench"></i><span>Mechanics</span></a></li>
                <li><a href="{{url('/admin/services')}}"><i class="icon-settings"></i><span>Services</span></a></li>
                <li><a href="{{url('/admin/cars_work')}}"><i class="fa fa-car"></i><span>Cars Work</span></a></li>
            </ul>
        </nav>     
    </div>
</div>

