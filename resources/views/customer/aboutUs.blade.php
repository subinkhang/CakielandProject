<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link rel="stylesheet" href="{{('public/frontend/css/aboutus.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
</head>
<body>
    <!-- HEADER -->
    <div class="container nav_top">
        <div class="row">
            <div class="col-2 logo">
                <img src="{{('public/frontend/images/logo - temp.png')}}" alt=""class="w-100">
            </div>
            <div class="col-2"></div>
            <div class="col-4 search">
                <div class="row">
                    <div class="col-8">
                        <input type="text" class="w-100 text_p1" placeholder="Search products...">
                    </div>
                    <div class="col-4">
                        <button class="btn_search">Search</button>
                    </div>
                </div>
            </div>
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

<!-- --------------------------------------- -->
    <!-- BODY -->
    <!-- BANNER -->
    <div class="contanier-fluid bg-breadcrub my-3">
		<div class="col-12 text-center">
			<h1>ABOUT US</h1>
			<nav aria-label="breadcrumb">
                <p class="breadcrumb-item">From cake pans to sprinkles, all your baking tinkles.</p>
			</nav>
		</div>
	</div>
    <!-- DESCRIPTION -->
    <div class="container information">
        <div class="row in4_us">
            <div class="col-12 infor">
                <div class="row small_in4">
                    <div class="col-6 img_in4">
                        <img src="{{('public/frontend/images/About us/tải xuống (17).jfif')}}" alt="" class="img_in4_1 w-100">
                    </div>
                    <div class="col-6 description_in4">
                        <h1>FROM OVEN TO AWESOME</h1>
                        <p>We offer everything you need to bring your baking dreams to life, from essential ingredients like flours, sugars, and chocolates to specialty items like cupcake liners, decorating tools, and hard-to-find baking extracts. Browse our wide variety of top brands and discover baking essentials to create delicious pastries, cakes, breads, and more, all from the comfort of your home!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row policy">
            <div class="col-12 policy">
                <div class="row policy_title">
                    <div class="col-4"></div>
                    <div class="col-4 policy_header">
                        <h1>POLICY</h1>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="row policy_small">
                    <div class="col-4 policy_small_1">
                        <div class="icon1"><i class="fa-solid fa-user-lock"></i></div>
                        <p>Our privacy policy outlines how we collect, use, and disclose information you provide while using our website and services. We take data security seriously and employ safeguards to keep your information protected.</p>
                    </div>
                    <div class="col-4 policy_smaill_2">
                        <div class="icon2"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <p>We offer a variety of shipping options to suit your needs, with clear details provided at checkout. You'll be able to choose from standard shipping with estimated delivery timeframes, or opt for expedited shipping for a faster delivery at an additional cost.</p>
                    </div>
                    <div class="col-4 policy_smaill_3">
                        <div class="icon3"><i class="fa-solid fa-rotate-left"></i></div>
                        <p> If you're not satisfied with your baking supplies, you can easily return them within 5 days of receiving your order. Simply contact our friendly customer service team to initiate the return process.  For unopened and unused items in their original packaging, we offer a full refund on the purchase price.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- FOOTER -->
    <div class="contanier-fluid bg-footer py-5 footer">
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