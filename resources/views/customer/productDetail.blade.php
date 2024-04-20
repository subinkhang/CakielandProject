<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="{{('public/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/productDetail.css')}}">
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
    <!-- END HEADER -->

    <!-- PRODUCT DETAIL -->
    <div class="contanier-fluid bg-breadcrub my-3">
		<div class="col-12 text-center">
			<h2>Product detail</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Philips HR3705 Egg Beater</li>
			 	</ol>
			</nav>
		</div>
	</div>
    
    <div class="container mt-5 carousel_product">
		<div class="row detail">
			<div class="col-lg-6 pr-slide carousel" data-bs-ride="carousel" id="pr-slide">
				<div class="carousel-indicators">
					<div class="row">
						<div class="col-4">
							<button data-bs-target="#pr-slide" data-bs-slide-to="0" class="active carousel-btn1"></button>
						</div>
						<div class="col-4">
							<button data-bs-target="#pr-slide" data-bs-slide-to="1" class="carousel-btn2"></button>
						</div>
						<div class="col-4">
							<button data-bs-target="#pr-slide" data-bs-slide-to="2" class="carousel-btn3"></button>
						</div>
					</div>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="{{('public/frontend/images/pr-detail/máy đánh trứng 1.web')}}p" alt="" class="w-100 img-fluid">
					</div>
					<div class="carousel-item">
						<img src="{{('public/frontend/images/pr-detail/máy dánh trứng 2.webp')}}" alt="" class="img-fluid w-100">
					</div>
					<div class="carousel-item">
						<img src="{{('public/frontend/images/pr-detail/máy đánh trứng 3.webp')}}" alt="" class="img-fluid w-100">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="col-12">
					<h6 class="pr-detail-name"> Philips HR3705 Egg Beater (300W)</h6>
					<ul class="pr-i3-rating d-flex mb-3 star">
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
					</ul>
					<div class="row mb-3">
						<div class="col-md-2 col-3 ">
							<p class="old-price">$139.00</p>
						</div>
						<div class="col-md-2 col-3">
							<p class="new-price">$110.00</p>
						</div>
					</div>
					<p class="pr-detail-content">Philips HR3705 Egg Beater (300W) has a compact design with a sturdy handle so you can use it easily without getting tired of your hands after long use. The parts are easily removable and can be cleaned in the dishwasher.</p>
					<h4 class="pr-property">COLOR</h4>
					<ul class="pr-color d-flex ps-0 mt-3">
						<li></li>
						<li></li>
						<li></li>
						<li></li> 
					</ul>
					<div class="d-flex">
						<button id="btn-minus"><i class="fa-solid fa-minus"></i></button>
						<input type="number" value="1" id="pr-number">
						<button id="btn-plus"><i class="fa-solid fa-plus"></i></button>
					</div>
					<button class="btn-shopnow bg-vang my-3">Add to cart</button>
				</div>
				
			</div>
		</div>
	</div>
    <div class="container pr-content title_desc">
		<div class="col-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</button>
			  </li>
			  <li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="profile" aria-selected="false">SPECIFICATIONS</button>
			  </li>
			</ul>
            <div class="tab-content">
                <div class="tab-pane active" id="des" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                  <h3 class="pr-des">Why choose product?</h3>
                  <ul>
                      <li>Compact design, convenient handle</li> 
                      <li>Turbo function with 5 smart attack speeds</li>
                      <li>Strong capacity, safe materials</li>
                      <li>Equipped with two convenient sticks</li>
                  </ul>
                  <h3 class="pr-des">Product Description</h3>
                  <ol>
                      <li>Compact design, convenient to hold</li>
                      <p>Philips HR3705 Egg Beater (300W) has a compact design with a sturdy handle so you can use it easily without getting tired of your hands after long-term use. Parts are easily removable and biodegradable in the dishwasher.</p>
                      <li>Turbo function with 5 smart speeds</li>
                      <p>The machine has a Turbo function with 5 beating speeds from low to high, helping you easily choose the speed to suit each different type of ingredient. Combining beneficial adjustment buttons on the machine's body helps you operate easily and quickly.</p>
                      <li>Strong company, safe materials</li>
                      <p>In particular, the Philips handheld plane operates with a fairly high capacity of 300W, and the motor makes no noise when operating. The tool helps you perfect, mix faster, more evenly and softer. Besides, the body is made of sturdy plastic and the mixing bars are made of high-quality, non-toxic stainless steel, ensuring absolute safety for your family's health.</p>
                        <li>Equipped with two benefits</li>
                        <p>In particular, included with the Phillips HR3705 egg are 2 types of mixing rods that users can change to suit different types of food to increase mixing efficiency.</p>
                    </ol>
              </div>
                  <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <h3 class="pr-des">Product information</h3>
                    <table>
                    <tr>
                      <td>Trademark:</td>
                      <td>Philips</td>
                    </tr>
                    <tr>
                      <td>Brand origin:</td>
                      <td>Netherlands</td>
                    </tr>
                    <tr>
                      <td>Material:</td>
                      <td>High quality plastic, stainless steel</td>
                    </tr>
                    <tr>
                      <td>Wattage:</td>
                      <td>300W</td>
                    </tr>
                    <tr>
                      <td>Size:</td>
                      <td>186 x 84 x 154 mm</td>
                    </tr>
                    <tr>
                      <td>Product weight:</td>
                      <td>0.853kg</td>
                    </tr>
                    <tr>
                      <td>Warranty form:</td>
                      <td>Warranty</td>
                    </tr>
                    <tr>
                      <td>Warranty period:</td>
                      <td>12 month</td>
                    </tr>
                  </table>
              </div>
                <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  
              </div>
                <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                  
              </div>
              </div>
          </div>
      </div>
      <div class="container related-pr mt-5 mb-3">
		<div class="row">
			<div class="col-12 justify-content-start mb-3">
				<h3>Related Product</h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="pr-i3">
					<img src="{{('public/frontend/images/pr-detail/bình lắc.webp')}}" alt="" class="w-100 img-fluid">
					<a href="#" class="pr-i3-name">High quality mixing shaker</a>
					<ul class="pr-i3-rating d-flex">
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
					</ul>
                    <p>Trong bộ dụng cụ pha chế cocktail, café và rượu, bình lắc pha chế là một trong những dụng cụ không thể thiếu của người pha chế.</p>
					<div class="row">
						<div class="col-6"><p class="old-price">$134.00</p></div>
						<div class="col-6 text-end"><p class="new-price">$112.00</p></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="pr-i3">
					<img src="{{('public/frontend/images/pr-detail/muỗng múc đá 3.jpg')}}" alt="" class="w-100 img-fluid">
					<a href="#" class="pr-i3-name">Stainless Steel Ice Scoop</a>
					<ul class="pr-i3-rating d-flex">
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
					</ul>
                    <p>Trong bộ dụng cụ pha chế cocktail, café và rượu, bình lắc pha chế là một trong những dụng cụ không thể thiếu của người pha chế.</p>
					<div class="row">
						<div class="col-6"><p class="old-price">$134.00</p></div>
						<div class="col-6 text-end"><p class="new-price">$112.00</p></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="pr-i3">
					<img src="{{('public/frontend/images/pr-detail/máy tạo bọt 1.jpg')}}" alt="" class="w-100 img-fluid">
					<a href="#" class="pr-i3-name">Multi-function coffee foam maker</a>
					<ul class="pr-i3-rating d-flex">
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
					</ul>
                    <p>Trong bộ dụng cụ pha chế cocktail, café và rượu, bình lắc pha chế là một trong những dụng cụ không thể thiếu của người pha chế.</p>
					<div class="row">
						<div class="col-6"><p class="old-price">$134.00</p></div>
						<div class="col-6 text-end"><p class="new-price">$112.00</p></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="pr-i3">
					<img src="{{('public/frontend/images/pr-detail/rây 1.webp')}}" alt="" class="w-100 img-fluid">
					<a href="#" class="pr-i3-name">Stainless steel tea strainer</a>
					<ul class="pr-i3-rating d-flex">
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
						<li><i class="fa-solid fa-star"></i></li>
					</ul>
                    <p>Trong bộ dụng cụ pha chế cocktail, café và rượu, bình lắc pha chế là một trong những dụng cụ không thể thiếu của người pha chế.</p>
					<div class="row">
						<div class="col-6"><p class="old-price">$134.00</p></div>
						<div class="col-6 text-end"><p class="new-price">$112.00</p></div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- END PRODUCT DETAIL -->

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