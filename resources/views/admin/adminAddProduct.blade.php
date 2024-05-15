<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
{{-- <!DOCTYPE html> --}}
<x-app-layout>

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

            {{-- <livewire:adminHeader /> --}}

            <livewire:adminSidebar />

            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <form role="form" action="{{ URL::to('/save-product') }}" method="POST"
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

                                            <button class="btn" id="btn-p" type="submit"
                                                name="admin-add-product">
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
                                            <input type="file" class="image" name="img"
                                                accept="image/png, image/jpeg" multiple id="mainimg">
                                            <div id="main-img"></div>
                                            <h4 class="right-text"><b>Galary</b></h4>
                                            <input type="file" class="image" name="gal[]"
                                                accept="image/png, image/jpeg" multiple id="gallery"
                                                onchange="gallarypreview()">

                                            <div>
                                                <div id="gal"></div>

                                            </div>
                                            <h4 class="right-text"><b>Color</b></h4>
                                            <div class="cont">
                                                <div class="grey">
                                                    <input type="checkbox" style="text-align: center" id="op1"
                                                        value="1" name="color[]">
                                                    <div style="background-color: grey" class="color"></div>
                                                </div>
                                                <div class="black">
                                                    <input type="checkbox" style="text-align: center" id="op2"
                                                        value="2" name="color[]">
                                                    <div style="background-color: black" class="color"></div>
                                                </div>
                                                <div class="white">
                                                    <input type="checkbox" style="text-align: center" id="op3"
                                                        value="3" name="color[]">
                                                    <div style="background-color: white" class="color"></div>
                                                </div>

                                            </div>
                                            <h4 class="right-text"><b>Menu</b></h4>
                                            <select id="cate" name="cate"
                                                style="margin-top: 10px, width: 195px; border-radius: 15px;">
                                                <option value="" name="cate" disabled selected>Categories</option>
                                                <option value="CT01" name="cate">Wet Indredients</option>
                                                <option value="CT02" name="cate">Dry Indredients</option>
                                                <option value="CT03" name="cate">Baking Tools</option>
                                                <option value="CT04" name="cate">Utensiles</option>
                                                <option value="CT05" name="cate">Bar Tool</option>
                                                <option value="CT06" name="cate">Bar Ingredients</option>
                                            </select>
                                            <h4 class="right-text"><b>Tag</b></h4>
                                            <select id="tag" name="tag"
                                                style="margin-top: 10px; width: 195px; border-radius: 15px; margin-bottom: 30px;">
                                                <option value="" name="tag" disabled selected>Tag</option>
                                            </select>
                                            {{-- <option value="" name="tag" disabled selected>Tag</option> --}}
                                            {{-- <option value="SC01" name="tag">Milk</option>
                                            <option value="SC02" name="tag">Butter</option>
                                            <option value="SC03" name="tag">Flour</option>
                                            <option value="SC04" name="tag">Baking Soda</option>
                                            <option value="SC05" name="tag">Eggs Beater</option>
                                            <option value="SC06" name="tag">Mold</option>
                                            <option value="SC07" name="tag">Stainless Steel Pot Set</option>
                                            <option value="SC08" name="tag">Kitchen Knife Set</option>
                                            <option value="SC09" name="tag">Coffee Foam Maker</option>
                                            <option value="SC10" name="tag">Measuring Cup</option>
                                            <option value="SC11" name="tag">Tea</option>
                                            <option value="SC12" name="tag">Syrup</option>  --}}
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
    <script>
        document.getElementById("mainimg").addEventListener("change", function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                var preview = document.getElementById("main-img");
                preview.innerHTML = '<img src="' + e.target.result +
                    '" style="width: 200px; margin-top:20px; height: 200px; border-radius: 15px; border: 1px dashed #282828;">';
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
        function gallarypreview() {
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

        // document.getElementById("gallery").addEventListener("change", function() {
        //     var previewContainer = document.getElementById("preview-container");
        //     // Clear previous previews
        //     previewContainer.innerHTML = '';

        //     for (var i = 0; i < this.files.length; i++) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             var img = document.createElement("img");
        //             preview.innerHTML = '<img src="'+ e.target.result +'">';
        //             img.style.width = "50px";
        //             img.style.height = "50px";
        //             img.style.borderRadius = "15px";
        //             img.style.border = "2px dashed #282828";
        //             previewContainer.appendChild(img);
        //         };
        //         reader.readAsDataURL(this.files[i]);
        //     }
        // });

        const cateSelect = document.getElementById('cate');
        const tagSelect = document.getElementById('tag');

        const tagOptions = {
            CT01: [
                { value: 'SC01', text: 'Milk' },
                { value: 'SC02', text: 'Butter' }
            ],
            CT02: [
                { value: 'SC03', text: 'Flour' },
                { value: 'SC04', text: 'Baking Soda' }
            ],
            CT03: [
                { value: 'SC05', text: 'Eggs Beater' },
                { value: 'SC06', text: 'Mold' }
            ],
            CT04: [
                { value: 'SC07', text: 'Stainless Steel Pot Set' },
                { value: 'SC08', text: 'Kitchen Knife Set' }
            ],
            CT05: [
                { value: 'SC09', text: 'Coffee Foam Maker' },
                { value: 'SC10', text: 'Measuring Cup' }
            ],
            CT06: [
                { value: 'SC11', text: 'Tea' },
                { value: 'SC12', text: 'Syrup' }
            ]
        };

        cateSelect.addEventListener('change', function() {
            const selectedCate = cateSelect.value;

            if (tagOptions[selectedCate]) {
                // Populate new tag options
                tagOptions[selectedCate].forEach(option => {
                    const newOption = document.createElement('option');
                    newOption.value = option.value;
                    newOption.text = option.text;
                    tagSelect.add(newOption);
                });
            }
        });
    </script>

    </html>
</x-app-layout>
