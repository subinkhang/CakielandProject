<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Mail_compose :: w3layouts</title>
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
    <link href="{{ asset('backend/css/adminaddproduct.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
    <link href="{{ asset('backend/css/admineditproduct.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{ asset('/admin-dashboard') }}" class="logo">
                    <img src="{{ asset('frontend/images/logo - temp.png') }}" alt=""class="">
                </a>
            </div>
            <!--logo end-->
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ asset('backend/images/2.png') }}">
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="{{ asset('backend/login.html') }}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <h1>ADMIN</h1>
                        <li>
                            <a class="active" href="{{ url('/admin-dashboard') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin-list-product') }}">
                                <i class="fa-solid fa-utensils"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin-list-bill') }}">
                                <i class="fa-solid fa-truck-fast"></i>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-user"></i>
                                <span>User</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->


        <!------------------------ALTER----------------------------->
        <!--------------------LEFT--------------------------------->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->

                @php
                    $colorCounts = [];
                @endphp

                @foreach ($edit_product as $key => $edit_value)
                    @php
                        $selected_colors = $edit_product->pluck('color')->toArray(); // Lấy tất cả các giá trị màu từ dữ liệu sản phẩm
                        $color_count = count($selected_colors); // Đếm số lượng màu

                        // Kiểm tra xem số lượng màu đã xuất hiện trước đó chưa
                        $counted = in_array($color_count, $colorCounts);

                        // Nếu số lượng màu chưa được đếm trước đó, thêm vào mảng colorCounts
                        if (!$counted) {
                            $colorCounts[] = $color_count;
                        }
                    @endphp

                    @if (!$counted)
                        <form role="form" action="{{ URL::to('/update-product/' . $edit_value->id) }}"
                            enctype="multipart/form-data" method="POST">
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
                                            <textarea name="name" type="text" id="name" class="text-title">{{ $edit_value->name }}</textarea>

                                            <h4 class="menu"><b>Fake Price</b></h4>
                                            <textarea name="fake_price" type="text" id="curp" class="text-title">{{ $edit_value->fake_price }}</textarea>

                                            <h4 class="menu"><b>New Price</b></h4>
                                            <textarea name="price" type="text" id="newp" class="text-title">{{ $edit_value->price }}</textarea>

                                            <h4 class="menu"><b>Brand</b></h4>
                                            <textarea name="brand" type="text" id="brand" class="text-title">{{ $edit_value->brand }}</textarea>

                                            <h4 class="menu"><b>Description</b></h4>
                                            <textarea name="description" type="text" id="desc" class="text-title">{{ $edit_value->description }}</textarea>

                                            <h4 class="menu"><b>Detail</b></h4>
                                            <textarea name="description_detail" type="text" id="detail" class="text-title">{{ $edit_value->description_detail }}</textarea>

                                            <h4 class="menu"><b>Technical</b></h4>
                                            <textarea name="description_technique" type="text" id="tech" class="text-title">{{ $edit_value->description_technique }}</textarea>

                                            <div class="col-8 bt-pay pm">

                                                <button class="btn" id="btn-p" type="submit">
                                                    <p1>Update product</p1>
                                                </button>
                                            </div>
                                        </section>

                                        <!-----------------------------------------------RIGHT---------------------------------------------------------------------------->
                                    </div>
                                    <div class="col-sm-3 mail-w3agile">
                                        <section class="panel">
                                            <div class="right">
                                                <h4 class="right-text"><b>Image</b></h4>
                                                <input type="file" class="image" name="img"
                                                    accept="image/png, image/jpeg" id="mainimg">
                                                <div id="main-img">
                                                    <img src="{{ asset('public/backend/upload/' . $edit_value->thumbnail) }}"
                                                        alt="Image" name="img_thumbnail"
                                                        style="width: 200px; margin-top:20px; height: 200px; border-radius: 15px; border: 1px dashed #282828;">
                                                </div>

                                                <h4 class="right-text"><b>Gallery</b>
                                                </h4>
                                                <input type="file" class="image" name="gall[]"
                                                    accept="image/png, image/jpeg" multiple id="gallery"
                                                    onchange="gallerypreview()">
                                                <div class="cont">

                                                    <div id="gal">
                                                        @foreach ($gallery_images as $image)
                                                            <figure>
                                                                <img src="{{ asset('backend/upload/' . $image) }}"
                                                                    alt="Image"
                                                                    style="width: 100px; height: 100px">
                                                            </figure>
                                                        @endforeach
                                                    </div>

                                                </div>

                                                <div>
                                                    <h4 class="right-text"><b>Color</b></h4>

                                                    <div class="cont">
                                                        <div class="black">
                                                            <input type="checkbox" style="text-align: center"
                                                                id="op1" value="1" name="color[]"
                                                                class="color-check"
                                                                {{ in_array('1', $selected_colors) ? 'checked' : '' }}>
                                                            <div style="background-color: black" class="color">
                                                            </div>
                                                        </div>
                                                        <div class="yellow">
                                                            <input type="checkbox" style="text-align: center"
                                                                id="op2" value="2" name="color[]"
                                                                class="color-check"
                                                                {{ in_array('2', $selected_colors) ? 'checked' : '' }}>
                                                            <div style="background-color: yellow" class="color">
                                                            </div>
                                                        </div>
                                                        <div class="pink">
                                                            <input type="checkbox" style="text-align: center"
                                                                id="op3" value="3" name="color[]"
                                                                class="color-check"
                                                                {{ in_array('3', $selected_colors) ? 'checked' : '' }}>
                                                            <div style="background-color: pink" class="color">
                                                            </div>
                                                        </div>
                                                        <div class="grey">
                                                            <input type="checkbox" style="text-align: center"
                                                                id="op4" value="4" name="color[]"
                                                                class="color-check"
                                                                {{ in_array('4', $selected_colors) ? 'checked' : '' }}>
                                                            <div style="background-color: grey" class="color">
                                                            </div>
                                                        </div>
                                                        <div class="blue">
                                                            <input type="checkbox" style="text-align: center"
                                                                id="op5" value="5" name="color[]"
                                                                class="color-check"
                                                                {{ in_array('5', $selected_colors) ? 'checked' : '' }}>
                                                            <div style="background-color: blue" class="color">
                                                            </div>
                                                        </div>
                                                        <div class="green">
                                                            <input type="checkbox" style="text-align: center"
                                                                id="op6" value="6" name="color[]"
                                                                class="color-check"
                                                                {{ in_array('6', $selected_colors) ? 'checked' : '' }}>
                                                            <div style="background-color: green" class="color">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="right-text"><b>Menu</b></h4>
                                                    <select id="cate" name="cate"
                                                        style="margin-top: 10px, width: 195px; border-radius: 15px;">
                                                        <option value="" name="cate" disabled selected>
                                                            Categories
                                                        </option>
                                                        <option value="1" name="cate"
                                                            {{ $edit_value->category_id == 1 ? 'selected' : '' }}>
                                                            Dry
                                                            Indredients
                                                        </option>
                                                        <option value="2" name="cate"
                                                            {{ $edit_value->category_id == 2 ? 'selected' : '' }}>
                                                            Wet
                                                            Indredients
                                                        </option>
                                                        <option value="3" name="cate"
                                                            {{ $edit_value->category_id == 3 ? 'selected' : '' }}>
                                                            Baking
                                                            Tools
                                                        </option>
                                                        <option value="4" name="cate"
                                                            {{ $edit_value->category_id == 4 ? 'selected' : '' }}>
                                                            Cooking
                                                            Utensiles
                                                        </option>
                                                        <option value="5" name="cate"
                                                            {{ $edit_value->category_id == 5 ? 'selected' : '' }}>
                                                            Bar
                                                            Tool
                                                        </option>
                                                        <option value="6" name="cate"
                                                            {{ $edit_value->category_id == 6 ? 'selected' : '' }}>
                                                            Bar
                                                            Ingredients
                                                        </option>
                                                    </select>
                                                    <h4 class="right-text"><b>Tag</b></h4>
                                                    <select id="tag" name="tag"
                                                        style="margin-top: 10px; width: 195px; border-radius: 15px; margin-bottom: 30px;">
                                                        <option value="" name="tag" disabled selected>
                                                            Tag
                                                        </option>
                                                    </select>

                                                </div>

                                        </section>
                                    </div>
                                </div>


                                <!-- page end-->
                            </div>
                            @php
                                $counted = true;
                            @endphp
                        </form>
                    @endif
                @endforeach
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
<script>
    document.getElementById("mainimg").addEventListener("change", function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            var preview = document.getElementById("main-img");
            preview.innerHTML = '<img src="' + e.target.result +
                '"style="width: 200px; margin-top:20px; height: 200px; border-radius: 15px; border: 1px dashed #282828;">';
        };
        reader.readAsDataURL(this.files[0]);
    });
    // document.getElementById("gallery").addEventListener("change", function() {
    //     var reader = new FileReader();
    //     reader.onload = function(e) {
    //         var newitem = document.createElement("div");
    //         var preview = document.getElementById("gal");
    //         preview.innerHTML = '<img src="'+ e.target.result +'" style="width: 50px; height: 50px; border-radius: 5px; border: 2px dashed #282828;">';
    //         preview.appendChild(newitem);
    //     };
    //     reader.readAsDataURL(this.files[0]);
    // });
    function gallerypreview() {
        let fileinput = document.getElementById('gallery');
        let display = document.getElementById('gal');
        display.innerHTML = ''; // Clear previous content

        for (let i of fileinput.files) {
            let reader = new FileReader();
            reader.onload = () => {
                let figure = document.createElement("figure");
                let gallery = document.createElement("img");
                gallery.style.width = "100px";
                gallery.style.height = "100px";
                gallery.setAttribute("src", reader.result); // Corrected syntax
                figure.appendChild(gallery);
                display.appendChild(figure);
            };
            reader.readAsDataURL(i);
        }
    }
    document.querySelectorAll('.color-check').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var form = this.closest('form');
            var formData = new FormData(form);

            // Send AJAX request to update the database
            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Handle response if needed
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
    const tagOptions = {
        "1": [{
                value: "7",
                text: "Flour"
            },
            {
                value: "8",
                text: "Yeast"
            }
        ],
        "2": [{
                value: "9",
                text: "Milk"
            },
            {
                value: "10",
                text: "Whipping cream"
            }
        ],
        "3": [{
                value: "11",
                text: "Cake mold"
            },
            {
                value: "12",
                text: "Electric mixer"
            }
        ],
        "4": [{
                value: "1",
                text: "Stainless steel tool"
            },
            {
                value: "2",
                text: "Kitchen knife set"
            }
        ],
        "5": [{
                value: "3",
                text: "Coffee Foam Maker"
            },
            {
                value: "4",
                text: "Measuring Cup"
            }
        ],
        "6": [{
                value: "5",
                text: "Tea"
            },
            {
                value: "6",
                text: "Syrup"
            }
        ]
    };


    document.getElementById('cate').addEventListener('change', function() {
        const selectedCategory = this.value;
        const tagSelect = document.getElementById('tag');
        tagSelect.innerHTML = '<option value="" name="tag" disabled selected>Tag</option>'; // Reset options

        if (tagOptions[selectedCategory]) {
            tagOptions[selectedCategory].forEach(option => {
                const newOption = document.createElement('option');
                newOption.value = option.value;
                newOption.text = option.text;
                tagSelect.appendChild(newOption);
            });
        }
    });
    document.getElementById('cate').addEventListener('change', function() {
        const selectedCategory = this.value;
        updateTagOptions(selectedCategory);
    });

    function setInitialTags() {
        const cateSelect = document.getElementById('cate');
        const selectedCategory = cateSelect.value;
        const tagSelect = document.getElementById('tag');
        const currentTag = "{{ $edit_value->sub_category_id }}";

        if (tagOptions[selectedCategory]) {
            tagOptions[selectedCategory].forEach(option => {
                const newOption = document.createElement('option');
                newOption.value = option.value;
                newOption.text = option.text;
                if (option.value == currentTag) {
                    newOption.selected = true;
                }
                tagSelect.appendChild(newOption);
            });
        }
    }
    window.onload = setInitialTags;

    // // Gọi hàm kiểm tra khi tài liệu đã được tải
    // window.onload = checkColor;
</script>

</html>
