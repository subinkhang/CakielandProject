@extends('components.layout')
@section('myOrders')

<title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
<link rel="stylesheet" href="{{asset('/frontend/css/myorder.css')}}">

<livewire:breadcrumb-banner />
    <!-- ACCOUNT -->
    <div class="container my_orders_container">
        <div class="row">
            <div class="col-3 pr-list-sidebar">
                <div class="row pr-list-sidebar-title">
                    <div class="col-8 my_account">
                        <h3>My Account</h3>
                    </div>
                    <div class="line"></div>
                    <div class="col-8 list_ac">
                        <ul>
                            <li><a href="../Account/account.html">My Proflie</a></li>
                            <li><a href="../Cart/cart.html">My Carts</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12 product_detail">
                        <div class="col-12 order_title">
                            <h5>DELIVERING</h5>
                        </div>
                        <div class="row">
                            <div class="col-3" class="img_order">
                                <img src="{{asset('frontend/images/My-order/71012Ro-efL.jpg')}}" alt="" class="w-100">
                            </div>
                            <div class="col-5 order_name">
                                <h5>Cook Classic Wood Rolling Pin</h5>
                                <p>Quantity: 1</p>
                            </div>
                            <div class="col-4">
                                <p class="price">$112.00</p>
                            </div>
                            <div class="col-3 status">
                                <h5>Order status: </h5>
                            </div>
                            <div class="col-5 order_deli">
                                <h5>DELIVERING</h5>
                            </div>
                            <div class="col-4 total_price">
                                <h6>Total: $112.00</h6>
                                <button type="submit" class="button_order">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12 product_detail_2">
                        <div class="col-12 order_title">
                            <h5>DELIVERED</h5>
                        </div>
                        <div class="row">
                            <div class="col-3" class="img_order">
                                <img src="{{asset('frontend/images/My-order/71012Ro-efL.jpg')}}" alt="" class="w-100">
                            </div>
                            <div class="col-5 order_name">
                                <h5>Cook Classic Wood Rolling Pin</h5>
                                <p>Quantity: 1</p>
                            </div>
                            <div class="col-4">
                                <p class="price">$112.00</p>
                            </div>
                            <div class="col-3 status"></div>
                            <div class="col-5 order_deli"></div>
                            <div class="col-4 total_price">
                                <h6>Total: $112.00</h6>
                                <button type="submit" class="button_order">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12 product_detail_3">
                        <div class="col-12 order_title">
                            <h5>DELIVERING</h5>
                        </div>
                        <div class="row">
                            <div class="col-3" class="img_order">
                                <img src="{{asset('frontend/images/My-order/71012Ro-efL.jpg')}}" alt="" class="w-100">
                            </div>
                            <div class="col-5 order_name">
                                <h5>Cook Classic Wood Rolling Pin</h5>
                                <p>Quantity: 1</p>
                            </div>
                            <div class="col-4">
                                <p class="price">$112.00</p>
                            </div>
                            <div class="col-3 img_order_2" >
                                <img src="{{asset('frontend/images/My-order/71012Ro-efL.jpg')}}" alt="" class="w-100">
                            </div>
                            <div class="col-5 order_name_2">
                                <h5>Cook Classic Wood Rolling Pin</h5>
                                <p>Quantity: 1</p>
                            </div>
                            <div class="col-4 price_order">
                                <p class="price_2">$112.00</p>
                            </div>
                            <div class="col-3 status">
                                <h5>Order status: </h5>
                            </div>
                            <div class="col-5 order_deli">
                                <h5>ORDER RECEIVED</h5>
                            </div>
                            <div class="col-4 total_price">
                                <h6>Total: $112.00</h6>
                                <button type="submit" class="button_order">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('frontend/js/myorder.js')}}"></script>

@endsection