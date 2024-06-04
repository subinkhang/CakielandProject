{{-- @yield('homepage')
@yield('productList')
@yield('productDetail')
@yield('cart')
@yield('checkout')
@yield('aboutUs')
@yield('myOrders')
@yield('account') --}}

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
                        <p>cakielandofficial@gmail.com</p>
                    </div>
                    <div class="col-2">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="col-10">
                        <p>0707351783</p>
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
                    <li><a href="{{ url('/account') }}">Profile</a></li>
                    <li><a href="{{ url('/my-orders') }}">My orders</a></li>
                    <li><a href="{{ url('/my-orders') }}">Shipping</a></li>
                </ul>
            </div>
            <div class="col-2 policies">
                <h3 class="footer-title">Products</h3>
                <ul>
                    <li><a href="category6">Bar ingredients</a></li>
                    <li><a href="category5">Bar Tool</a></li>
                    <li><a href="category4">Cooking utensils</a></li>
                    <li><a href="category3">Baking tools</a></li>
                    <li><a href="category2">Wet ingredients</a></li>
                    <li><a href="category1">Dry ingredients</a></li>
                </ul>
            </div>
            <div class="col-2 services">
                <h3 class="footer-title">Policies</h3>
                <ul>
                    <li><a href="about-us">About Us</a></li>
                    <li><a href="about-us">Contact</a></li>
                    <li><a href="about-us">Privacy policy</a></li>
                    <li><a href="about-us">Shipping policy</a></li>
                    <li><a href="about-us">Return policy</a></li>
                </ul>
            </div>
            <div class="col-3 bocongthuong">
                <div class="d-flex">
                    <a href="http://online.gov.vn/Home/AppDetails/29"><img
                            src="{{ asset('frontend/images/bocongthuong.png') }}" alt="" class="w-100"></a>
                </div>
            </div>
        </div>
    </div>
    <a href="https://m.me/271053872769047">
        <i class="fa-brands fa-facebook-messenger fa-3x mess"></i>
    </a>
</div>
