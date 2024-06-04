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

    <link rel="stylesheet" href="{{ asset('backend/css/adminListVoucher.css') }}">
    <title>List Voucher</title>
    <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
</head>

<body>
    <section id="container">

        <livewire:adminHeader />
        <livewire:adminSidebar />
        <!-- làm từ đây -->
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info" id="background">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading">
                            Voucher List
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <!-- <th></th> -->
                                        <th>Id</th>
                                        <th>Voucher name</th>
                                        <th>Discount code</th>
                                        <th>Number of discount codes</th>
                                        <th>Discount conditions</th>
                                        <th>Reduced value</th>
                                        <th><a href="{{ url('/admin-add-voucher') }}"><input type="submit" class="btn_addpro" value="Add"></th></a>
                                        {{-- <th></th>
                                        <th></th>
                                        <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_voucher as $key => $coupon)
                                        <tr>
                                            <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                                            <td>{{ $coupon->id }}</td>
                                            <td>{{ $coupon->name_voucher }}</td>
                                            <td><span class="text-ellipsis">{{ $coupon->code_voucher }}</span></td>
                                            <td><span class="text-ellipsis">{{ $coupon->number_voucher }}</span></td>
                                            <td><span class="text-ellipsis">
                                                <?php
                                                if($coupon->condition_voucher==1){
                                                    ?>
                                                    Giảm theo %
                                                    <?php
                                                }else{
                                                    ?>
                                                    Giảm theo tiền
                                                    <?php
                                                }
                                                ?>
                                                </span></td>
                                                <td><span class="text-ellipsis">
                                                    <?php
                                                    if($coupon->condition_voucher==1){
                                                        ?>
                                                        Giảm {{ $coupon->value_voucher }} %
                                                        <?php
                                                    }else{
                                                        ?>
                                                        Giảm {{ $coupon->value_voucher }} $
                                                        <?php
                                                    }
                                                    ?>
                                                    </span></td>
                                            <td>
                                                <a onclick="return confirm('Are you sure to delete?')" href="{{ URL::to('/delete-list-voucher/' . $coupon->id)}}">
                                                    <i class="fa-regular fa-trash-can trash-icon thungrac" style="margin-left: 20px;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-sm-5 text-center">
                                    <small class="text-muted inline m-t-sm m-b-sm">showing 1-{{ count($all_voucher) }} of {{ count($all_voucher) }} items</small>
                                </div>
                        </footer>
                    </div>
                </div>
            </section>
        </section>

        <!--main content end-->
    </section>
    <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('backend/js/admin_list_product.js') }}"></script>
</body>

</html>
