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

    <link href="{{ asset('backend/css/adminaddproduct.css') }}" rel="stylesheet" />
    <title>Add Product</title>
</head>

<body>
    <section id="container">

        <livewire:adminHeader />

        <livewire:adminSidebar />

        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <form role="form" action="{{ URL::to('/save-product') }}" method="POST">
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
                                    <h4 class="menu"id="text-name"><b>Name</b></h4>
                                    <textarea name="name" type="text" id="name" class="text-title"></textarea>

                                    <h4 class="menu"><b>Fake Price</b></h4>
                                    <textarea name="fake_price" type="text" id="curp" class="text-title"></textarea>

                                    <h4 class="menu"><b>New Price</b></h4>
                                    <textarea name="price" type="text" id="newp" class="text-title"></textarea>

                                    <h4 class="menu"><b>Brand</b></h4>
                                    <textarea name="brand" type="text" id="brand" class="text-title"></textarea>

                                    <h4 class="menu"><b>Description</b></h4>
                                    <textarea name="description" type="text" id="desc" class="text-title"></textarea>

                                    <h4 class="menu"><b>Detail</b></h4>
                                    <textarea name="description_detail" type="text" id="detail" class="text-title"></textarea>

                                    <h4 class="menu"><b>Technical</b></h4>
                                    <textarea name="description_technique" type="text" id="tech" class="text-title"></textarea>

                                    <div class="col-8 bt-pay pm">

                                        <button class="btn" id="btn-p" type="submit" name="admin-add-product">
                                            <p1>Add product</p1>
                                        </button>
                                    </div>
                                </section>

                                <!-----------------------------------------------RIGHT---------------------------------------------------------------------------->
                            </div>
                            <div class="col-sm-3 mail-w3agile">
                                <section class="panel">
                                    <div class="right">
                                        <h4 class="right-text"><b>Image</b></h4>
                                        <input type="file" class="image" accept="image/png, image/jpeg" multiple>
                                        <div id="main-img"></div>
                                        <h4 class="right-text"><b>Galary</b></h4>
                                        <input type="file" class="image" accept="image/png, image/jpeg" multiple>
                                        <div class="cont">
                                            <div class="gal"></div>
                                            <div class="gal"></div>
                                            <div class="gal"></div>
                                            <div class="gal"></div>
                                            <div class="gal"></div>
                                            <div class="gal"></div>
                                        </div>
                                        <h4 class="right-text"><b>Color</b></h4>
                                        <div class="cont">
                                            <div class="grey">
                                                <input type="checkbox" style="text-align: center" id="op1">
                                                <div style="background-color: grey" class="color"></div>
                                            </div>
                                            <div class="black">
                                                <input type="checkbox" style="text-align: center" id="op2">
                                                <div style="background-color: black" class="color"></div>
                                            </div>
                                            <div class="white">
                                                <input type="checkbox" style="text-align: center" id="op3">
                                                <div style="background-color: white" class="color"></div>
                                            </div>
                                        </div>
                                        <h4 class="right-text"><b>Menu</b></h4>
                                        <select id="cate"
                                            style="margin-top: 10px, width: 195px; border-radius: 15px;">
                                            <option value="">Categories</option>
                                            <option value="wet">Wet Indredients</option>
                                            <option value="dry">Dry Indredients</option>
                                            <option value="baking">Baking Tools</option>
                                            <option value="cooking">Utensiles</option>
                                            <option value="bartool">Bar Tool</option>
                                            <option value="bar">Bar Ingredients</option>
                                        </select>
                                        <h4 class="right-text"><b>Tag</b></h4>
                                        <select id="tag"
                                            style="margin-top: 10px, width: 195px; border-radius: 15px; margin-bottom: 30px;">
                                            <option value="">Tag</option>
                                            <option value="milk">Milk</option>
                                            <option value="butter">Butter</option>
                                            <option value="flour">Flour</option>
                                            <option value="bakingsoda">Baking Soda</option>
                                            <option value="egg">Eggs Beater</option>
                                            <option value="mold">Mold</option>
                                            <option value="potset">Stainless Steel Pot Set</option>
                                            <option value="knifeset">Kitchen Knife Set</option>
                                            <option value="foammaker">Coffee Foam Maker</option>
                                            <option value="cup">Measuring Cup</option>
                                            <option value="tea">Tea</option>
                                            <option value="syrup">Syrup</option>
                                        </select>
                                    </div>

                                </section>
                            </div>
                        </div>


                        <!-- page end-->
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
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('backend/js/adminaddproduct.js') }}"></script>
</body>

</html>
