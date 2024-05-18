<x-app-layout>
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
                <div class="row">
                    @if($userId)
                    @foreach ($data as $order)
                    {{-- @if ($order['order_id'] == $userId) --}}
                        <div class="col-12 product_detail_3">
                            <div class="col-12 order_title" >
                                <h5>{{ $order['status'] }}</h5>
                            </div>
                            @foreach ($order['items'] as $item)
                                <div class="row">
                                    <div class="col-3" class="img_order">
                                        <img src="{{ asset('frontend/images/My-order/71012Ro-efL.jpg') }}" alt=""
                                        class="w-100">
                                    </div>
                                    <div class="col-5 order_name">
                                        <h5>{{ $item['product_name'] }}</h5>
                                        <p>Quantity: {{ $item['quantity'] }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p class="price">{{ $item['price'] }}</p>
                                    </div>
                                </div>
                            @endforeach                       
                                <div class="row">
                                    <div class="col-3 status">
                                        <h5>Order status:</h5>
                                    </div>
                                    <div class="col-5 order_deli">
                                        <h5>{{ $order['status'] }}</h5>
                                    </div>
                                    <div class="col-4 total_price">
                                        <h6>Total: {{ $order['total_price'] }}</h6>
                                        <button type="submit" class="button_order">Buy Again</button>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                @else
                <p>Bạn cần đăng nhập để xem đơn hàng.</p>
                @endif
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/myorder.js') }}"></script>
</x-app-layout>
