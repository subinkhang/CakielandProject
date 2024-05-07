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
<link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/admin-list-product.css')}}">
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
<!-- làm từ đây -->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info" id="background">
  <div class="panel panel-default">
    <div class="panel-heading" id="heading">
      Product List
    </div>
    <!-- <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div> -->
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <!-- <th style="width:20px;">
              <label class="i-checks m-b-none">
              <input type="checkbox"><i></i>
              </label>
            </th> -->
            <!-- <th></th> -->
            <th>Id</th>
            <th>Product's name</th>
            <th>Price</th>
            <th>Date</th>
            <th><a href="{{ url('/admin-add-product') }}"><input type="submit" class="btn_addpro" value="Add"></th></a>
            <!-- <th style="width:30px;"></th> -->
          </tr>
        </thead>
        <tbody>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>01</td>
            <td>Philips HR3705 Egg Beater (300W)</td>
            <td><span class="text-ellipsis">$100.00</span></td>
            <td><span class="text-ellipsis">Jul 22, 2013</span></td>
            <td>
                <a href="{{ url('/admin-add-product') }}" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can trash-icon" onclick="deleteProduct()" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>02</td>
            <td>Formasa</td>
            <td>$200.00</td>
            <td>Jul 22, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>03</td>
            <td>Avatar system</td>
            <td>$150.00</td>
            <td>Jul 15, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>04</td>
            <td>Throwdown</td>
            <td>$160.00</td>
            <td>Jul 11, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>05</td>
            <td>Idrawfast</td>
            <td>$130.00</td>
            <td>Jul 7, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>06</td>
            <td>Formasa</td>
            <td>$123.00</td>
            <td>Jul 3, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>07</td>
            <td>Avatar system</td>
            <td>$147.08</td>
            <td>Jul 2, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
          <tr>
            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
            <td>08</td>
            <td>Videodown</td>
            <td>$147.08</td>
            <td>Jul 1, 2013</td>
            <td>
                <a href="" class="active" ui-toggle-class="" id="icon">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can" style="margin-left: 20px;"></i>
                </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 01-08 of 50 items</small>
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
<script src="{{asset('backend/js/admin_list_product.js')}}"></script>
</body>
</html>
