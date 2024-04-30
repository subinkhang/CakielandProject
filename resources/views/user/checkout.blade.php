<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout.css')}}">
</head>
<body>
    <!-----------HEADER-------------->
    <div class="contanier-fluid bg-breadcrub my-3" style="background-image: url('{{asset('frontend/images/pr-detail/banner.png')}}');">
        <div class="col-12 text-center">
            <h2>Check Out</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                 </ol>
            </nav>
        </div>
    </div>
    <!-----------------LEFT---------------------------->
    <div class="container">
    <div class="row">
    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6">
                <h1 class="title"><b>DELIVERY DETAILS</b></h1>
            </div>
            <div class="col-6">
                <div class="container">
                <div class="row pr-list-co">
                    <div class="col-3">
                        <img src="{{asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="img-fluid">
                    </div>
                    <div class="col-9 row">
                    <h5><b>lăn bột hjghvhhgfhgvhvjvjvjvjvjgc</b></h5>
                    <h6 class="col-2" >Quantity:</h6>
                    <h6 class="col-10">1</h6>
                    <h5 class="price"><b>$112.00</b></h5>             
                </div>           
                </div>
                <div class="row pr-list-co">
                    <div class="col-3">
                    <img src="{{asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="img-fluid">
                    </div>
                    <div class="col-9 row">
                    <h5><b>lăn bột hjghvhhgfhgvhvjvjvjvjvjgc</b></h5>
                    <h6 class="col-2" >Quantity:</h6>
                    <h6 class="col-10">1</h6>
                    <h5 class="price"><b>$112.00</b></h5>             
                </div>           
                </div>
            </div>
            
            <table class="table table-borderless">
            <tr>
                <th scope="row"></th>
                <td class="col-8"><p1>Subtotal</p1></td>
                <td class="col-4 text-end"><p1><b>199.00</b></p1></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td class="col-8"><p1>Shipping</p1></td>
                <td class="col-4 text-end"><p1><b>2.00</b></p1></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td class="col-8"><p1>Discount</p1</td>
                <td class="col-4 text-end"><p1><b>2.00</b></p1></td>
            </tr>
            
            <tr class="total" style="margin-top: 100px;">
                <th scope="row"></th>
                <td class="col-8"><h3><b>TOTAL</b></h3></td>
                <td class="col-2 text-end"><h3><b>199.00</b></h3></td>
                <td class="col-2"></td>
            </tr>
        </caption>
            <tr>
                <td></td>
                <td></td>
            </tr>
              </table>
                          
    
            </div>
<!----------------------right----------------------------->
        
            <div class="col-5 cont">
            <form required>
            <div class="row">
                <h6><b>E-mail</b></h6>
                <input type="email" placeholder="Nguyenvana@gmail.com" class="deli" id="email">
                <h6 class="ip"><b>Name</b></h6>
                <input type="text" placeholder="Nguyen Van A" class="deli" id="name">
                <h6 class="ip"><b>Phone Number</b></h6>
                <input type="tel" placeholder="0123456789" class="deli" id="phone">
                <h6 class="ip"><b>Address</b></h6>
                <input type="text" placeholder="11/22/33 Ho Chi Minh city" class="deli" id="address">
                <h6 class="pmmt"><b>Payment Methods</b></h6>
                <select class="form-select form-select-pm pmbox">
                    <option selected>COD</option>
                    <option>Bank</option>
                </select>
                <div class="col-8 bt-pay pm">
                    <button class="btn" id="btn-p">
                        <p1>Payment</p1>
                    </button>
                </div>
            </div>
            </form>

            </div>
        </div>
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
    </div>

    <!-----------DONE--------------->
    <div class="overlay"></div>
    <div class="popup">
    <div class="modalbox center">
        <i class="fa-solid fa-circle-check"></i>
        <h3>PAYMENT COMPLETE</h3>
        <div class="btnback">
            <a class="btn" href="http://localhost:8000"> Back to HomePage </a>
        </div>
    </div>
</div>

<!------------QR---------------->
<div class="bankmethod">
<img src="{{asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="qr">
</div>
    <script src="{{asset('frontend/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/checkout.js')}}"></script>
    
</body>
</html>