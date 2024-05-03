<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Home Page</title> --}}
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/homepage.css')}}">
    <link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid  nav_top">
        <div class="container">
            <div class="row">
                <div class="col-2 logo">
                    <img src="{{asset('frontend/images/logo - temp.png')}}" alt=""class="w-100">
                </div>
                <div class="col-2"></div>
                <div class="col-4 search">
                    <div class="row">
                        <div class="col-8">
                        <input type="text" class="w-100 text_p1" placeholder="Search products..." id="searchInput">
                        <div class="suggestions text_p1" style="display: none;"></div> </div>
                        <div class="col-4">
                        <button class="btn_search">Search</button>
                        </div>
                    </div>
                    </div>
                <div class="col-4 pages">
                    <ul class="d-flex justify-content-end page_ul_li">
                        <li class="page_item ">
                            <div><a href="#">Home</a></div>
                        </li>
                        <li class="page_item ">
                            <div><a href="#">Product</a></div>
                        </li>
                        <li class="page_item ">
                            <div><a href="#">Forum</a></div>
                        </li>
                        <li class="cart_item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <div><p>2</p></div>
                        </li>
                        <li class="cart_item">
                            <i class="fa-solid fa-user"></i>
                            <div><p>2</p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('homepage')
    @yield('productList')
    @yield('productDetail')
    @yield('cart')
    @yield('checkout')
    @yield('aboutUs')
    @yield('account')

    <div class="contanier-fluid bg-footer py-5">
		<div class="container">
			<div class="row">
				<div class="col-3 contact">
					<h3 class="footer-title">Contact info</h3>
					<div class="row">
						<div class="col-2">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="col-10">
							<p>22520094@gm.uit.edu.vn</p>
						</div>
						<div class="col-2">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="col-10">
							<p>0707351958</p>
						</div>
						<div class="col-2">
							<i class="fa-solid fa-location-pin"></i>
						</div>
						<div class="col-10">
							<p>Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh</p>
						</div>
					</div>
				</div>
				<div class="col-2 acc">
					<h3 class="footer-title">Account</h3>
					<ul>
						<li><a href="#">Profile</a></li>
						<li><a href="#">My orders</a></li>
						<li><a href="#">Shipping</a></li>
					</ul>
				</div>
				<div class="col-2 policies">
					<h3 class="footer-title">Products</h3>
					<ul>
						<li><a href="#">Baking tools</a></li>
						<li><a href="#">Dry ingredients</a></li>
						<li><a href="#">Wet ingredient</a></li>
						<li><a href="#">Recipes</a></li>
						<li><a href="#">Other</a></li>
					</ul>
				</div>
				<div class="col-2 services">
					<h3 class="footer-title">Policies</h3>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Return policy</a></li>
						<li><a href="#">Shipping policy</a></li>
					</ul>
				</div>
				<div class="col-3 bocongthuong">
					<div class="d-flex">
						<img src="{{asset('frontend/images/bocongthuong.png')}}" alt="" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>