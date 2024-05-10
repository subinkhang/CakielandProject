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
                    <li><a href="{{ url('/account') }}">Profile</a></li>
                    <li><a href="{{ url('/my-orders') }}">My orders</a></li>
                    <li><a href="{{ url('/my-orders') }}">Shipping</a></li>
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
                    <li><a href="about-us">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Return policy</a></li>
                    <li><a href="#">Shipping policy</a></li>
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
</div>
