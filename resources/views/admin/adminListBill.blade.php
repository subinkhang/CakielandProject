<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/morris.css') }}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('backend/css/monthly.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/adminDashboard.css') }}">
    <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/js/raphael-min.js') }}"></script>
    <script src="{{ asset('backend/js/morris.js') }}"></script>

    {{-- ADD CSS SUBIN --}}
    <link href="{{ asset('backend/css/adminListBill.css') }}" rel="stylesheet">
    <title>List Bill</title>
    <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <section id="container">

        <livewire:adminHeader />

        <livewire:adminSidebar />

        {{-- ========================================================================================================================================================= --}}

        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info" id="table_agile_info">
                    <div class="panel panel-default">
                        @php
                            $message = Session::get('message');
                            if ($message) {
                                echo '<span class="text-alert">' . $message . '</span>';
                                Session::put('message', null);
                            }
                        @endphp
                        <div class="panel-heading" id="order_list_heading">
                            Order List
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="order_column">Order ID</div>
                                        </th>
                                        <th>
                                            <div class="all_column">Username</div>
                                        </th>
                                        <th>
                                            <div class="all_column">Products</div>
                                        </th>
                                        <th>
                                            <div class="all_column">Total Money</div>
                                        </th>
                                        <th>
                                            <div class="all_column">Date</div>
                                        </th>
                                        <th>
                                            <div class="order_column">Status</div>
                                        </th>
                                        <a href="{{ url('/download-bill') }}"><input type="submit" class="btn_download" value="Donwload Data"></a>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grouped_orders as $order_id => $order_group)
                                        <tr>
                                            <td><span class="order_column">{{ $order_id }}</span></td>
                                            <td><span class="all_column">{{ auth()->user()->name }}</span>
                                            </td>
                                            <td>
                                                <span class="all_column">
                                                    @foreach ($order_group as $order)
                                                        {{ $order->product_name }}@if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                </span>
                                            </td>
                                            <td><span
                                                    class="all_column">{{ $order_group->first()->total_money }}</span>
                                            </td>
                                            <td><span class="all_column">{{ $order_group->first()->order_date }}</span>
                                            </td>
                                            <td>
                                                <select name="option" class="order_column btn-shopnow bg-vang my-3 oho"
                                                    onchange="addToCart(this)" data-id="{{ $order_id }}">
                                                    <option value="0" class="option_status"
                                                        {{ $order_group->first()->status == 0 ? 'selected' : '' }}
                                                        style="background-color: rgb(231, 29, 29)">
                                                        Canceled
                                                    </option>
                                                    <option value="1" class="option_status"
                                                        style="background-color: rgb(66, 151, 66)"
                                                        {{ $order_group->first()->status == 1 ? 'selected' : '' }}>
                                                        Completed
                                                    </option>
                                                    <option value="2" class="option_status"
                                                        style="background-color: #FBC31C"
                                                        {{ $order_group->first()->status == 2 ? 'selected' : '' }}>
                                                        Delivering
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-sm-5 text-center">
                                    <small class="text-muted inline m-t-sm m-b-sm">showing 1-{{ count($grouped_orders) }} of {{ count($grouped_orders) }} items</small>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </section>
        </section>

        <!--main content end-->
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('backend/js/adminListBill.js') }}"></script>
</body>

</html>
