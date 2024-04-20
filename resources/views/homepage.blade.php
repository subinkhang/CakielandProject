<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/homepage.css') }}">
</head>
<body>
    <div class="container nav_top">
        <div class="row">
            <div class="col-2 logo">
                <a href="{{URL::to('/')}}">
                    <img src="{{('resources/images/logo - temp.png')}}" alt=""class="w-100">
                </a>
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
                        <div><a href="{{URL::to('/')}}">Home</a></div>
                    </li>
                    <li class="page_item ">
                        <div><a href="{{URL::to('/product-list')}}">Product</a></div>
                    </li>
                    <li class="page_item ">
                        <div><a href="{{URL::to('/error-page')}}">Forum</a></div>
                    </li>
                    <li class="cart_item">
                        <a href="{{URL::to('/cart')}}">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        <div><p>2</p></div>
                    </li>
                    <li class="cart_item">
                        <a href="{{URL::to('/account')}}">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <div><p>2</p></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item image_container active">
            <img src="{{('public/frontend/images/homepage/banner 1.png')}}" class="d-block w-100" alt="...">
            <div class="text_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="text_h1 text_overlay_title">From ingredients to perfect cakes</div>
                            <p class="text_overlay_p">From selecting the finest ingredients to mastering the techniques of 
                                the journey to creating a perfect cake is filled with delightful steps.</p>
                            <button class="text_overlay_btn text_p1">Buy now</button>
                            <button class="text_overlay_btn text_p1">Contact us</button>
                        </div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <img src="{{('resources/images/homepage/banner (2) 1.png')}}" class="d-block w-100" alt="...">
            <div class="text_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-5">
                            <div class="text_h1 text_overlay_title">All at your fingertips</div>
                            <p class="text_overlay_p">The mixing process involves a delicate balance of combining dry and 
                                wet ingredients, ensuring proper aeration and avoiding overmixing.</p>
                            <button class="text_overlay_btn text_p1">Buy now</button>
                            <button class="text_overlay_btn text_p1">Contact us</button>
                        </div>
                        <div class="col-7"></div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-3 service-item">
				<div class="row">
					<div class="col-3 service-icon">
						<img src="{{('public/frontend/images/homepage/credit-card 1.png')}}" alt="" class="img-fluid">
					</div>
					<div class="col-9 service-content">
						<h4>PAYMENT & DELIVERY</h4>
						<p>Delivered on time, when you receive.</p>
					</div>
				</div>
			</div>
            <div class="col-3 service-item">
				<div class="row">
					<div class="col-3 service-icon">
						<img src="{{('public/frontend/images/homepage/credit-card 1 (1).png')}}" alt="" class="img-fluid">
					</div>
					<div class="col-9 service-content">
						<h4>RETURN PRODUCT</h4>
						<p>Retail, a Product Return Process</p>
					</div>
				</div>
			</div>
            <div class="col-3 service-item">
				<div class="row">
					<div class="col-3 service-icon">
						<img src="{{('public/frontend/images/homepage/credit-card 1 (2).png')}}" alt="" class="img-fluid">
					</div>
					<div class="col-9 service-content">
						<h4>MEMBER DISCOUNT</h4>
						<p>Get $15 off up to Own Customer.</p>
					</div>
				</div>
			</div>
            <div class="col-3 service-item">
				<div class="row">
					<div class="col-3 service-icon">
						<img src="{{('public/frontend/images/homepage/credit-card 1 (3).png')}}" alt="" class="img-fluid">
					</div>
					<div class="col-9 service-content">
						<h4>QUALITY SUPPORT</h4>
						<p>Support Options Including 24/7</p>
					</div>
				</div>
			</div>
	    </div>
    </div>

    <div class="container">
        <p class="text_h1 categories_title">CATEGORIES</p>
        <div class="row">
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{('public/frontend/images/homepage/image 25.png')}}" alt="" class="img-fluid">
                    <p class="h6">DRY INGREDIENTS</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{('public/frontend/images/homepage/image 25 (1).png')}}" alt="" class="img-fluid">
                    <p class="h6">wet ingredients</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{('public/frontend/images/homepage/image 25 (2).png')}}" alt="" class="img-fluid">
                    <p class="h6">baking tools</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{('public/frontend/images/homepage/image 25 (3).png')}}" alt="" class="img-fluid">
                    <p class="h6">Cooking Utensils</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{('public/frontend/images/homepage/image 25 (4).png')}}" alt="" class="img-fluid">
                    <p class="h6">Bar Tools</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{('public/frontend/images/homepage/image 25 (5).png')}}" alt="" class="img-fluid">
                    <p class="h6">Bar Ingredients</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marquee">
		<marquee direction="right">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</marquee>
	</div>

    <div class="container">
        <div class="text_h1 feature_pr_title">Featured Products</div>
        <div class="row">

        </div>
    </div>

    <div class="container-fluid bg_banner">
        <div class="container banner">
            <div class="row">
                <div class="col-6">
                    <h1 class="banner_title text_h1">COOKING TIPS</h1>
                    <p class="banner_para text_p1">With the cake baked to perfection, the canvas is set for creativity
                         to flourish. From simple frosting and sprinkles to elaborate designs and piped
                          decorations, the possibilities are endless. The joy of decorating lies in expressing
                           one's artistic flair and transforming a simple cake into a masterpiece.</p>
                    <button class="banner_btn">Discuss now</button>
                </div>
                <div class="col-6">
                    <img src="{{('public/frontend/images/homepage/Rectangle 167.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="sub_banner_title text_h1">TOPIC OF MONTH</p>
		<div class="row">
			<div class="col-4">
				<div class="sub_banner" style="background-image: url('{{'public/frontend/images/homepage/Untitled_design.png'}}');">
					<p>BAKING TIPS</p>
					<h3>Make Baking Powder</h3>
					<button class="btn-shopnow bg-xanh text-white">Discuss Now</button>
				</div>
			</div>
			<div class="col-4">
				<div class="sub_banner"  style="background-image: url('{{'public/frontend/images/homepage/Untitled_design.png'}}');">
					<p>COOKING TIPS</p>
					<h3>Make Baking Powder</h3>
					<button class="btn-shopnow bg-xanh text-white">Discuss Now</button>
				</div>
			</div>
			<div class="col-4">
				<div class="sub_banner"  style="background-image: url('{{'public/frontend/images/homepage/Untitled_design.png'}}');">
					<p>RECOMMEND TIPS</p>
					<h3>Make Baking Powder</h3>
					<button class="btn-shopnow bg-xanh text-white">Discuss Now</button>
				</div>
			</div>
		</div>
	</div>

    <div class="container getintouch"  style="background-image: url('{{'public/frontend/images/homepage/Mask\ Group.png'}}');">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 getintouch_info">
                <h1 class="text_h1">GET IN TOUCH WITH US</h1>
                <p class="text_p1">With the cake baked to perfection, the canvas is set for creativity to flourish.
                     From simple frosting and sprinkles to elaborate designs and piped decorations, the 
                     possibilities are endless.</p>
                <div class="row ">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="row getintouch_search">
                            <div class="col-8 ">
                                <input type="text" class="w-100 text_p1" placeholder="Your email address...">
                            </div>
                            <div class="col-4 ">
                                <button class="btn_submit">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>

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
						<li><a href="{{URL::to('/account')}}">Profile</a></li>
						<li><a href="{{URL::to('/cart')}}">My orders</a></li>
						<li><a href="{{URL::to('/error-page')}}">Shipping</a></li>
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
						<li><a href="{{URL::to('/about-us')}}">About</a></li>
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