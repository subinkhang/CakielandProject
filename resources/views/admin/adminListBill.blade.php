<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Basic_table :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    
    {{-- ADD CSS SUBIN --}}
    <link href="{{asset('backend/css/adminListBill.css')}}" rel="stylesheet"> 

</head>
<body>
	<section id="container">
	<!--header start-->
	<header class="header fixed-top clearfix">
	<!--logo start-->
	<div class="brand">
		<a href="{{asset('/admin-dashboard')}}" class="logo">
			<img src="{{asset('frontend/images/logo - temp.png')}}" alt=""class="">
		</a>
	</div>
	<!--logo end-->
	<div class="top-nav clearfix">
		<!--search & user info start-->
		<ul class="nav pull-right top-menu">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<img alt="" src="{{asset('backend/images/2.png')}}">
					<span class="username">Admin</span>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu extended logout">
					<li><a href="{{asset('backend/login.html')}}"><i class="fa fa-key"></i> Log Out</a></li>
				</ul>
			</li>
			<!-- user login dropdown end -->
		
		</ul>
		<!--search & user info end-->
	</div>
	</header>
	<!--header end-->
	<!--sidebar start-->
	<aside>
		<div id="sidebar" class="nav-collapse">
			<!-- sidebar menu start-->
			<div class="leftside-navigation">
				<ul class="sidebar-menu" id="nav-accordion">
					<h1>ADMIN</h1>
					<li>
						<a class="active" href="{{ url('/admin-dashboard') }}">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/admin-list-product') }}">
							<i class="fa-solid fa-utensils"></i>
							<span>Products</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/admin-list-bill') }}">
							<i class="fa-solid fa-truck-fast"></i>
							<span>Orders</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-user"></i>
							<span>User</span>
						</a>
					</li>
				</ul>            
			</div>
			<!-- sidebar menu end-->
		</div>
	</aside>
<!--sidebar end-->
<!--main content start-->

{{-- ========================================================================================================================================================= --}}

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" id="table_agile_info">
  <div class="panel panel-default">
    <div class="panel-heading" id="order_list_heading">
      Order List
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default search_button" type="button">Search!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
            <tr>
                <th><div class="order_column">Order ID</div></th>
                <th><div class="all_column">User ID</div></th>
                <th><div class="all_column">Products ID</div></th>
                <th><div class="all_column">Total Money</div></th>
                <th><div class="all_column">Date</div></th>
                <th><div class="order_column">Status</div></th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <td><span class="order_column">SP01</span></td>
                    <td><span class="all_column">user01</span></td>
                    <td><span class="all_column">product01</span></td>
                    <td><span class="all_column">$69</span></td>
                    <td><span class="all_column">30/04</span></td>
                    <td>
                        <select name="option" class="order_column btn-shopnow bg-vang my-3" onchange="addToCart(this)">
                            <option value="" class="option_status" style="background-color: #FBC31C">Delivering</option>
                            <option value="" class="option_status" style="background-color: rgb(66, 151, 66)">Completed</option>
                            <option value="" class="option_status" style="background-color: rgb(231, 29, 29)">Canceled</option>
                        </select>
                    </td>
                </tr>
            @endfor
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('backend/js/adminListBill.js')}}"></script>
</body>
</html>
