@extends('components.layout')
@section('myOrders')
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/myorder.css') }}">

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
                @if (count($data) > 0)
                    <div class="row">
                        @foreach ($data as $item)
                        <div class="col-12 product_detail">
                            <div class="col-12 order_title">
                                <h5>{{ $item['status'] }}</h5>
                            </div>
                            <div class="row">
                                <div class="col-3" class="img_order">
                                    <img src="{{ asset('frontend/images/My-order/71012Ro-efL.jpg') }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="col-5 order_name">
                                    <h5>{{ $item['product_name'] }}</h5>
                                    <p> Quantity: {{ $item['quantity'] }}</p>
                                </div>
                                <div class="col-4">
                                    <p class="price">{{ $item['price'] }}</p>
                                </div>
                                <div class="col-3 status">
                                    <h5>Order status: </h5>
                                </div>
                                <div class="col-5 order_deli">
                                    <h5>{{ $item['status'] }}</h5>
                                </div>
                                <div class="col-4 total_price">
                                    <h6>Total: {{ $item['total_money'] }}</h6>
                                    <button type="submit" class="button_order">Buy Again</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> 
                
                {{-- <div class="row">
                    @foreach ($data as $item)
                    <div class="col-12 product_detail_2">
                        <div class="col-12 order_title">
                            <h5>DELIVERED</h5>
                        </div>
                        <div class="row">
                            <div class="col-3" class="img_order">
                                <img src="{{ asset('frontend/images/My-order/71012Ro-efL.jpg') }}" alt=""
                                    class="w-100">
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
                            <div class="col-4 total_price">z
                                <h6>Total: $112.00</h6>
                                <button type="submit" class="button_order">Buy Again</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> --}}
                <div class="row">
                    @foreach ($data as $key=>$item)
                    <div class="col-12 product_detail_3">
                        <div class="col-12 order_title" >
                            @foreach($product_list as $product)
                                @if ($data[$key] == $product->id)
                                {{-- <h5>{{($product)}}</h5> --}}
                                @endif
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-3" class="img_order">
                                <img src="{{ asset('frontend/images/My-order/71012Ro-efL.jpg') }}" alt=""
                                    class="w-100">
                            </div>
                            <div class="col-5 order_name">
                                @foreach($product_list as $product)
                                    @if ($data[$key] == $product->id)
                                    <h5>{{($product->name)}}</h5>
                                    @endif
                                @endforeach
                                <p>Quantity: 1</p>
                            </div>
                            <div class="col-4">
                                <p class="price">$112.00</p>
                            </div>
                    @endforeach
                            {{-- <div class="col-3 img_order_2">
                                <img src="{{ asset('frontend/images/My-order/71012Ro-efL.jpg') }}" alt=""
                                    class="w-100">
                            </div>
                            <div class="col-5 order_name_2">
                                <h5>Cook Classic Wood Rolling Pin</h5>
                                <p>Quantity: 1</p>
                            </div>
                            <div class="col-4 price_order">
                                <p class="price_2">$112.00</p>
                            </div> --}}
                            <div class="col-3 status">
                                <h5>Order status: </h5>
                            </div>
                            <div class="col-5 order_deli">
                                <h5>ORDER RECEIVED</h5>
                            </div>
                            <div class="col-4 total_price">
                                <h6>Total: $112.00</h6>
                                <button type="submit" class="button_order">Buy Again</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif 
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/myorder.js') }}"></script>
@endsection
