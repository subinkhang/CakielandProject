<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{('public/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/frontend/css/cart.css')}}">
</head>
<body>
<!----------HEADER-------->
<div class="contanier-fluid bg-breadcrub my-3">
    <div class="col-12 text-center">
        <h2>My Cart</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">My Cart</li>
             </ol>
        </nav>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <h1 id="title"><b>MY CART</b></h1>
            </div>
            <div class="col-9"></div>
            <!-------------------------LEFT------------------------------>
            <div class="col-7">
                <div class="container">
                <form>
                <table class="table">
                    <tr class="text-center">
                        <th scope="row"></th>
                        <td class="col-2">#</td>
                        <td class="col-8">NAME</td>
                        <td class="col-2 text-end">SUBTOTAL</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td class="col-2 text-center">1</td>
                        <td class="col-8">
                            <div class="row pr-list-co">
                                <div class="col-3">
                                    <img src="{{('public/frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="img-fluid">
                                </div>
                                <div class="col-9 row">
                                <h6>lăn bột hjghvhhgfhgvhvjvjvjvjvjgc</h6>
                                <div class="col-1">
                                    <button class="btn">
                                    <i class="fa-solid fa-minus"></i>
                                    </button>
                                </div>
                                <div class="col-1">
                                    <input type="text" name="quant[1]" class="form-control input-number" style="text-align:center; width:50px; height:25px; margin-top:5px;" value="1">
                                </div>
                                <div class="col-1">
                                    <button class="btn" style="margin-left:10px" >
                                        <i class="fa-solid fa-plus"></i>
                                        </button>
                                </div>
                                <h6 class="price">$112.00</h6>             
                            </div>
                        </td>
                        <td class="col-2 text-end"><b>$112.00</b></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td class="col-2 text-center">1</td>
                        <td class="col-8">
                            <div class="row pr-list-co">
                                <div class="col-3">
                                    <img src="{{('public/frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="img-fluid">
                                </div>
                                <div class="col-9 row">
                                <h6>lăn bột hjghvhhgfhgvhvjvjvjvjvjgc</h6>
                                <div class="col-1">
                                    <button class="btn">
                                    <i class="fa-solid fa-minus"></i>
                                    </button>
                                </div>
                                <div class="col-1">
                                    <input type="text" name="quant[1]" class="form-control input-number" style="text-align:center; width:50px; height:25px; margin-top:5px;" value="1">
                                </div>
                                <div class="col-1">
                                    <button class="btn" style="margin-left:10px" >
                                        <i class="fa-solid fa-plus"></i>
                                        </button>
                                </div>
                                <h6 class="price">$112.00</h6>             
                            </div>
                        </td>
                        <td class="col-2 text-end"><b>$112.00</b></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
            <div class="col-1"></div>
            <!----------------------RIGHT------------------------------------->
            <div class="col-4">
            <h3 id="voucher-text"><b>VOUCHER</b></h3>
            <div class="search">
                <div class="row">
                    <div class="col-8">
                        <input type="text" class="w-100 text_p1 boxvoucher" placeholder="Voucher">
                    </div>
                    <div class="col-4">
                        <button class="btn_search">SUBMIT</button>
                    </div>
                </div>
            </div>
            <div class="container">
            <table class="table table-borderless">
                <tr>
                    <th scope="row"></th>
                    <td class="col-8"><p1>Subtotal</p1></td>
                    <td class="col-4 text-end"><p1>199.00</p1></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td class="col-8"><p1>Shipping</p1></td>
                    <td class="col-4 text-end"><p1>2.00</p1></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td class="col-8"><p1>Discount</p1</td>
                    <td class="col-4 text-end"><p1>2.00</p1></td>
                </tr>
                
                <tr class="total" style="margin-top: 100px;">
                    <th scope="row"></th>
                    <td class="col-8"><h3><b>TOTAL</b></h3></td>
                    <td class="col-2 text-end"><h3><b>199.00</b></h3></td>
                </tr>
                  </table>
                </div>
                  <div class="col-8 bt-pay pm">
                    <button class="btn" id="btn-p">
                        <p1>Payment</p1>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!--------------Footer---------------->
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