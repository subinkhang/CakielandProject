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

    <link rel="stylesheet" href="{{ asset('backend/css/adminAddVoucher.css') }}">
    <title>Add Voucher</title>
    <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
</head>

<body>

    {{--  --}}
    <section id="container">
        <livewire:adminHeader />
        <livewire:adminSidebar />

        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <form role="form" action="{{ URL::to('/admin-add-voucher') }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="mail-w3agile">
                        <div class="row">
                            <div class="col-sm-8 com-w3ls">
                                @php
                                    $message = Session::get('message');
                                @endphp
                    
                                @if ($message)
                                    <h3 style="white-space: nowrap; color: red">{{ $message }}</h3>
                                    {{ Session::put('message', null) }}
                                @endif
                    
                                <section class="panel">
                                    <form action="{{ url('/admin-add-voucher') }}" method="POST">
                                        @csrf
                                        <h4 class="menu" id="text-name"><b>Voucher name</b></h4>
                                        <textarea name="name_voucher" type="text" id="name" class="text-title"></textarea>
                    
                                        <h4 class="menu"><b>Discount code</b></h4>
                                        <textarea name="code_voucher" type="text" id="curp" class="text-title"></textarea>
                    
                                        <h4 class="menu"><b>Number of discount codes</b></h4>
                                        <textarea name="number_voucher" type="text" id="newp" class="text-title"></textarea>
                    
                                        <h4 class="menu"><b>Discount conditions</b></h4>
                                        <select name="condition_voucher" class="text-title input-sm m-bot15" id="condition_voucher" class="text-title">
                                            <option value="0">-----Select-----</option>
                                            <option value="1">Decrease by %</option>
                                            <option value="2">Decrease by money</option>
                                        </select>
                    
                                        <h4 class="menu"><b>Enter the % or reduction amount</b></h4>
                                        <textarea name="value_voucher" type="text" id="newp" class="text-title"></textarea>
                    
                                        <h4 class="menu"><b>Start Date</b></h4>
                                        <input type="date" name="start_voucher" id="start_voucher" class="text-title">
                    
                                        <h4 class="menu"><b>End Date</b></h4>
                                        <input type="date" name="end_voucher" id="end_voucher" class="text-title">
                    
                                        <div class="col-8 bt-pay pm">
                                            <button class="btn" id="btn-p" type="submit" name="admin-add-product">
                                                <p1>Add voucher</p1>
                                            </button>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                    

                </form>

            </section>
        </section>
        <!--main content end-->
    </section>
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script>
</body>

</html>
