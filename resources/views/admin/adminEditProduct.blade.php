<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Mail_compose :: w3layouts</title>
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
<link href="{{asset('backend/css/adminaddproduct.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
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


<!------------------------ALTER----------------------------->
<!--------------------LEFT--------------------------------->
<section id="main-content">
	<section class="wrapper">
		<!-- page start-->

        @foreach($edit_product as $key => $edit_value)
        <form role="form" action="{{ URL::to('/update-product/'.$edit_value->id)}}" method="POST">
            {{ csrf_field() }}

		<div class="mail-w3agile">
        <div class="row">
            <div class="col-sm-8 com-w3ls">
                @php
                    $message = Session::get('message');
                @endphp

                @if($message)
                    <h3 style="white-space: nowrap; color: red">{{ $message }}</h3>
                    {{ Session::put('message', null) }}
                @endif

                <section class="panel">
                    <h4 class="menu"id="text-name"><b>ID</b></h4>
                    <textarea name="id" type="text" id="name" class="text-title">{{$edit_value->id}}</textarea>

                    <h4 class="menu"id="text-name"><b>Name</b></h4>
                    <textarea name="name" type="text" id="name" class="text-title">{{$edit_value->name}}</textarea>

                    <h4 class="menu"><b>Fake Price</b></h4>
                    <textarea name="fake_price" type="text" id="curp" class="text-title">{{$edit_value->fake_price}}</textarea>

                    <h4 class="menu"><b>New Price</b></h4>
                    <textarea name="price" type="text" id="newp" class="text-title">{{$edit_value->price}}</textarea>

                    <h4 class="menu"><b>Brand</b></h4>
                    <textarea name="brand" type="text" id="brand" class="text-title">{{$edit_value->brand}}</textarea>

                    <h4 class="menu"><b>Description</b></h4>
                    <textarea name="description" type="text" id="desc" class="text-title">{{$edit_value->description}}</textarea>

                    <h4 class="menu"><b>Detail</b></h4>
                    <textarea name="description_detail" type="text" id="detail"  class="text-title">{{$edit_value->description_detail}}</textarea>

                    <h4 class="menu"><b>Technical</b></h4>
                    <textarea name="description_technique" type="text" id="tech" class="text-title">{{$edit_value->description_technique}}</textarea>

                    <div class="col-8 bt-pay pm">

                    <button class="btn" id="btn-p" type="submit" name="admin-edit-product">
                        <p1>Update product</p1>
                    </button>
                </div>
                </section>

<!-----------------------------------------------RIGHT---------------------------------------------------------------------------->
            </div>
            <div class="col-sm-3 mail-w3agile">
                <section class="panel">
                    <div class="right">
                    <h4 class="right-text"><b>Image</b></h4>
                    <input type="file" class="image" accept="image/png, image/jpeg" multiple>
                    <div id="main-img"></div>
                    <h4  class="right-text"><b>Galary</b></h4>
                    <input type="file" class="image" accept="image/png, image/jpeg" multiple>
                    <div class="cont">
                    <div class="gal"></div>
                    <div class="gal"></div>
                    <div class="gal"></div>
                    <div class="gal"></div>
                    <div class="gal"></div>
                    <div class="gal"></div>
                    </div>
                    <h4 class="right-text"><b>Color</b></h4>
                    <div class="cont">
                    <div class="grey">
                    <input type="checkbox" style="text-align: center" id="op1">
                    <div style="background-color: grey" class="color"></div>
                    </div>
                    <div class="black">
                    <input type="checkbox" style="text-align: center" id="op2">
                    <div style="background-color: black" class="color"></div>
                    </div>
                    <div class="white">
                    <input type="checkbox" style="text-align: center" id="op3">
                    <div style="background-color: white" class="color"></div>
                    </div>
                    
                    </div>
                    <h4 class="right-text"><b>Menu</b></h4>
                    <select id="cate" style="margin-top: 10px, width: 195px; border-radius: 15px;">
                        <option value="">Categories</option>
                        <option value="wet">Wet Indredients</option>
                        <option value="dry">Dry Indredients</option>
                        <option value="baking">Baking Tools</option>
                        <option value="cooking">Utensiles</option>
                        <option value="bartool">Bar Tool</option>
                        <option value="bar">Bar Ingredients</option>
                    </select>
                    <h4 class="right-text"><b>Tag</b></h4>
                    <select id="tag" style="margin-top: 10px, width: 195px; border-radius: 15px; margin-bottom: 30px;">
                    <option value="">Tag</option>
                        <option value="milk">Milk</option>
                        <option value="butter">Butter</option>
                        <option value="flour">Flour</option>
                        <option value="bakingsoda">Baking Soda</option>
                        <option value="egg">Eggs Beater</option>
                        <option value="mold">Mold</option>
                        <option value="potset">Stainless Steel Pot Set</option>
                        <option value="knifeset">Kitchen Knife Set</option>
                        <option value="foammaker">Coffee Foam Maker</option>
                        <option value="cup">Measuring Cup</option>
                        <option value="tea">Tea</option>
                        <option value="syrup">Syrup</option>
                    </div>
                    
                </section>
            </div>
        </div>
        

        <!-- page end-->
		 </div>

        </form>
        @endforeach
         
</section>
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
<script src="{{asset('backend/js/adminaddproduct.js')}}"></script>
</body>
</html>
