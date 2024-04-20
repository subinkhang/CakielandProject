<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
    <link rel="stylesheet" href="{{('public/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/account.css')}}">
</head>
<body>
    <!-- HEADER -->
    <div class="container nav_top">
        <div class="row">
            <div class="col-2 logo">
                <img src="{{('public/frontend/images/logo - temp.png')}}" alt=""class="w-100">
            </div>
            <div class="col-2"></div>
            <div class="col-4"></div>
            <div class="col-4 pages">
                <ul class="d-flex justify-content-end">
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
    <!-- END HEADER -->


    <!-- ACCOUNT -->
    <div class="container">
        <div class="row">
            <div class="col-3 pr-list-sidebar">
                <div class="row pr-list-sidebar-title">
                    <div class="col-8 my_account">
                        <h3>My Account</h3>
                    </div>
                    <div class="line"></div>
                    <div class="col-8 list_ac">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Carts</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <form action="#">
                    <div class="row">
                        <div class="col-6 box_account">
                            <h1>MY PROFILE</h1>
                        </div>
                        <div class="col-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="title">
                                <p>My Name</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input type="text" placeholder="Nguyen Van A" class="inside">
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Date of Birth</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input type="text" placeholder="01/01/2000" class="inside">
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Phone Number</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input type="text" placeholder="0123456789" class="inside">
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Email</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input type="text" placeholder="Nguyenvana@gmail.com" class="inside">
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Address</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input type="text" placeholder="22/11/33 HCM city" class="inside">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-4">
                            <button class="button_ac1">Cancel</button>
                        </div>
                        <div class="col-4">
                            <button class="button_ac2">Save</button>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
                
            </div>
            <div class="col-2 avatar">
                <div class="circle"></div>
            </div>

        </div>
    </div>
    <!-- FOOTER -->
    <div class="contanier-fluid bg-footer py-5 footer-le">
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
						<img src="{{('public/frontend/images/bocongthuong.png')}}" alt="" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</div>
    <script src="../header-footer/js/jquery-3.7.1.min.js"></script>
    <script src="../header-footer/js/bootstrap.bundle.js"></script>

</body>
</html>