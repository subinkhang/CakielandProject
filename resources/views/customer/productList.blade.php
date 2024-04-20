<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="{{('public/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/productList.css')}}">
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
    <!-- PRODUCT LIST -->
    <div class="container">
		<div class="row">
            <h2 class="menutitle">MENU</h2>
			<div class="col-3" id="aside">
				<div class="pr-list-sidebar">
					<div class="pr-list-sidebar-title">
						<h3>Categories</h3>
						<div class="line"></div>
						<ul class="mainmenu">
							<li class="mainmenu_title"><a href="#"><span>Wet ingredients</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                <ul class="menucon">
                                    <li class="menu_title"><a href="">Milk</a></li>
                                    <li class="menu_title"><a href="">Butter</a></li>
                                </ul>
                            </li>
							<li class="mainmenu_title"><a href="#"><span>Dry ingredients</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                <ul class="menucon">
                                    <li class="menu_title"><a href="">Flour</a></li>
                                    <li class="menu_title"><a href="">Baking soda</a></li>
                                </ul>
                            </li>
							<li class="mainmenu_title"><a href="#"><span>Baking tools</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                <ul class="menucon">
                                    <li class="menu_title"><a href="">Egg beater</a></li>
                                    <li class="menu_title"><a href="">Mold</a></li>
                                </ul>
                            </li>
							<li class="mainmenu_title"><a href="#"><span>Cooking utensils</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                <ul class="menucon">
                                    <li class="menu_title"><a href="">Stainless steel pot set</a></li>
                                    <li class="menu_title"><a href="">Kitchen knife set</a></li>
                                </ul>
                            </li>
							<li class="mainmenu_title"><a href="#"><span>Bar tool</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                <ul class="menucon">
                                    <li class="menu_title"><a href="">Coffee foam maker</a></li>
                                    <li class="menu_title"><a href="">Measuring cup</a></li>
                                </ul>
                            </li>
							<li class="mainmenu_title"><a href="#"><span>Bar ingredients</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                <ul class="menucon">
                                    <li class="menu_title"><a href="">Tea</a></li>
                                    <li class="menu_title"><a href="">Syrup</a></li>
                                </ul>
                            </li>
						</ul>
					</div>
				</div>
				<div class="pr-list-sidebar">
					<h3>Filter by price</h3>
				</div>
                <!--  -->
                <div class="pr-list-sidebar">
					<div class="pr-list-sidebar-title">
						<h3>Products</h3>
						<div class="line"></div>
						<div class="row pr-sidebar my-3">
							<div class="col-3 pt-3">
								<img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 img-fluid">
							</div>
							<div class="col-9">
								<h4 class="pr-i1-cat">HEADPHONE</h4>
								<a href="#" class="text-product">JBL Everest 710 Gun Metal Front</a>
								<ul class="pr-i3-rating d-flex star">
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
								<div class="row">
									<div class="col-6">
										<p class="old-price">$134.00</p>
									</div>
									<div class="col-6 text-end">
										<p class="new-price">$112.00</p>
									</div>
								</div>
							</div>
                            <div class="col-3 pt-3">
								<img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 img-fluid">
							</div>
							<div class="col-9">
								<h4 class="pr-i1-cat">HEADPHONE</h4>
								<a href="#" class="text-product">JBL Everest 710 Gun Metal Front</a>
								<ul class="pr-i3-rating d-flex star">
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
								<div class="row">
									<div class="col-6">
										<p class="old-price">$134.00</p>
									</div>
									<div class="col-6 text-end">
										<p class="new-price">$112.00</p>
									</div>
								</div>
							</div>
                            <div class="col-3 pt-3">
								<img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 img-fluid">
							</div>
							<div class="col-9">
								<h4 class="pr-i1-cat">HEADPHONE</h4>
								<a href="#" class="text-product">JBL Everest 710 Gun Metal Front</a>
								<ul class="pr-i3-rating d-flex star">
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
								<div class="row">
									<div class="col-6">
										<p class="old-price">$134.00</p>
									</div>
									<div class="col-6 text-end">
										<p class="new-price">$112.00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--  -->
            <div class="col-lg-9">
                <div class="row">
				    <div class="col-4">
                        <div class="pr-i3">
                            <img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                            <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                            <div class="container_information">
                                <a href="#" class="pr-i2-name">Slim</a>
                                    <ul class="pr-i2-rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <div class="text_product">
                                        Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                                    </div>
                                    <div class="row productList_price">
                                        <div class="col-6"><p class="old-price">$134.00</p></div>
                                        <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-i3">
                            <img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                            <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                            <div class="container_information">
                                <a href="#" class="pr-i2-name">Slim</a>
                                    <ul class="pr-i2-rating d-flex">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                    <div class="text_product">
                                        Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                                    </div>
                                    <div class="row productList_price">
                                        <div class="col-6"><p class="old-price">$134.00</p></div>
                                        <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-4">
                        <div class="pr-i3">
                            <img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                            <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                            <div class="container_information">
                            <a href="#" class="pr-i2-name">Slim</a>
                                <ul class="pr-i2-rating d-flex">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="text_product">
                                    Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                                </div>
                                <div class="row productList_price">
                                    <div class="col-6"><p class="old-price">$134.00</p></div>
                                    <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-i3">
                            <img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                            <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                            <div class="container_information">
                                <a href="#" class="pr-i2-name">Slim</a>
                                <ul class="pr-i2-rating d-flex">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="text_product">
                                    Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                                </div>
                                <div class="row productList_price">
                                    <div class="col-6"><p class="old-price">$134.00</p></div>
                                    <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-i3">
                            <img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                            <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                            <div class="container_information">
                                <a href="#" class="pr-i2-name">Slim</a>
                                <ul class="pr-i2-rating d-flex">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="text_product">
                                    Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                                </div>
                                <div class="row productList_price">
                                    <div class="col-6"><p class="old-price">$134.00</p></div>
                                    <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="cartegory_page_number">
                                <p><span>&#171;</span class="text_p1">1  2  3  4  5<span>&#187;</span></p>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRODUCT LIST -->
    <!-- PRODUCT LIST SUBIN-->
    <!-- <div class="col-8">
        <div class="row">
            <div class="col-4">	
                <div class="pr-i3">
                    <img src="{{('public/frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                    <div class="container_information">
                        <a href="#" class="pr-i2-name">Slim</a>
                        <ul class="pr-i2-rating d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="text_product">
                            Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                        </div>
                        <div class="row productList_price">
                            <div class="col-6"><p class="old-price">$134.00</p></div>
                            <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END PRODUCT LIST SUBIN -->

    <!-- BANNER -->
    <div class="container getintouch">
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
    <!-- END FOOTER -->

</body>
</html>