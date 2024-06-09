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
                            <li><a href="{{ url('/account') }}">My Proflie</a></li>
                            <li><a href="{{ url('/cart') }}">My Carts</a></li>
                            <li><a href="{{ url('/my-orders') }}">My Orders</a></li>
                            <li><a href="{{ url('/about-us') }}">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="col-8"></div>
                <div class="col-4">
                    <form id="sortForm">
                        <select name="sort" id="status" class="form-control select-custom">
                            <option value="none">SORT STATUS</option>
                            <option value="all">ALL</option>
                            <option value="0">CANCELLED</option>
                            <option value="1">COMPLETED</option>
                            <option value="2">DELIVERING</option>
                        </select>
                    </form>
                </div>
                
                <div class="row">
                    @if($userId)
                        {{-- @foreach ($statuses as $key => $status) --}}
                            {{-- @if (isset($data[$key])) --}}
                            @foreach ($orders as $order)
                                <div class="col-12 product_detail_3 " data-order-id="{{ $order['order_id'] }}" data-status="{{ $order['status'] }}">
                                    <div class="col-12 order_title">
                                        <h5>
                                            @if ($order['status'] == 1)
                                                <span class="completed">{{ $statuses[$order['status']] }}</span>
                                            @elseif ($order['status'] == 0)
                                                <span class="cancelled">{{ $statuses[$order['status']] }}</span>
                                            @else
                                                <span class="delivering">{{ $statuses[$order['status']] }}</span>
                                            @endif
                                        </h5>
                                    </div>
                                    {{-- @foreach ($data[$key] as $order) --}}
                                        @foreach ($order['items'] as $item)
                                            <div class="row">
                                                <div class="col-3 img_order">
                                                    <img src="{{ asset('public/backend/upload/'. $item['product_thumbnail']) }}" alt="" class="w-100">
                                                </div>
                                                <div class="col-5 order_name">
                                                    <h5>{{ $item['product_name'] }}</h5>
                                                    <p>Quantity: {{ $item['quantity'] }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="price">{{ $item['price'] }}</p>
                                                </div>
                                            </div>
                                            <div class="product-separator"></div>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-3 status">
                                                <h5>Order date:</h5>
                                            </div>
                                            <div class="col-5 order_deli">
                                                <h5>{{ $order['order_date'] }}</h5>
                                            </div>
                                            <div class="col-4 total_price">
                                                <h5>Total: {{ $order['total_price'] }}</h5>
                                                <button type="submit" class="button_order">Buy Again</button>
                                            </div>
                                        </div>
                                    {{-- @endforeach --}}
                                </div>
                            {{-- @endif --}}
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
