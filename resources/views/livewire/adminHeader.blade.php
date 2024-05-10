<header class="header fixed-top clearfix">
    <link rel="stylesheet" href="{{asset('backend/css/livewire/adminHeader.css')}}">
    <!--logo start-->
    <div class="brand">
        <a href="{{ asset('/admin-dashboard') }}" class="logo">
            <img src="{{ asset('frontend/images/logo - temp.png') }}" alt=""class="">
        </a>
    </div>
    <!--logo end-->
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{ asset('backend/images/2.png') }}">
                    <span class="username">Admin</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="{{ asset('backend/login.html') }}"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</header>
<!--header end-->