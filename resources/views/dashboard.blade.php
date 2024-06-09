<x-app-layout>
    <link rel="stylesheet" href="{{ asset('frontend/css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Home Page</title>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item image_container active">
                <img src="{{ asset('frontend/images/homepage/banner 1.png') }}" class="d-block w-100" alt="...">
                <div class="text_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="text_h1 text_overlay_title">From ingredients to perfect cakes</div>
                                <p class="text_overlay_p">From selecting the finest ingredients to mastering the
                                    techniques
                                    of
                                    the journey to creating a perfect cake is filled with delightful steps.</p>
                                <button class="text_overlay_btn text_p1" onclick="window.location.href='{{ url('/product-list') }}';">Buy now</button>
                                <button class="text_overlay_btn text_p1" onclick="window.location.href='{{ url('/about-us') }}';">Contact us</button>
                            </div>
                            <div class="col-6"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('frontend/images/homepage/banner (2) 1.png') }}" class="d-block w-100"
                    alt="...">
                <div class="text_overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <div class="text_h1 text_overlay_title">All at your fingertips</div>
                                <p class="text_overlay_p">The mixing process involves a delicate balance of combining
                                    dry
                                    and
                                    wet ingredients, ensuring proper aeration and avoiding overmixing.</p>
                                <button class="text_overlay_btn text_p1" onclick="window.location.href='{{ url('/product-list') }}';">Buy now</button>
                                <button class="text_overlay_btn text_p1" onclick="window.location.href='{{ url('/about-us') }}';">Contact us</button>
                            </div>
                            <div class="col-7"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 service-item">
                <div class="row">
                    <div class="col-3 service-icon">
                        <img src="{{ asset('frontend/images/homepage/credit-card 1.png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-9 service-content">
                        <h4>PAYMENT & DELIVERY</h4>
                        <p>Delivered on time, when you receive.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 service-item">
                <div class="row">
                    <div class="col-3 service-icon">
                        <img src="{{ asset('frontend/images/homepage/credit-card 1 (1).png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-9 service-content">
                        <h4>RETURN PRODUCT</h4>
                        <p>Retail, a Product Return Process</p>
                    </div>
                </div>
            </div>
            <div class="col-3 service-item">
                <div class="row">
                    <div class="col-3 service-icon">
                        <img src="{{ asset('frontend/images/homepage/credit-card 1 (2).png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-9 service-content">
                        <h4>MEMBER DISCOUNT</h4>
                        <p>Get $15 off up to Own Customer.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 service-item">
                <div class="row">
                    <div class="col-3 service-icon">
                        <img src="{{ asset('frontend/images/homepage/credit-card 1 (3).png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-9 service-content">
                        <h4>QUALITY SUPPORT</h4>
                        <p>Support Options Including 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="text_h1 categories_title">CATEGORIES</p>
        <div class="row">
            <div class="col-2">
                <a href="{{ url('/category1') }}" class="categories_link">
                    <div class="categories_item">
                        <img src="{{ asset('frontend/images/homepage/image 25.png') }}" alt="" class="img-fluid">
                        <p class="h6">DRY INGREDIENTS</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <a href="{{ url('/category2') }}" class="categories_link">
                    <div class="categories_item">
                        <img src="{{ asset('frontend/images/homepage/image 25 (1).png') }}" alt="" class="img-fluid">
                        <p class="h6">wet ingredients</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <a href="{{ url('/category3') }}" class="categories_link">
                    <div class="categories_item">
                        <img src="{{ asset('frontend/images/homepage/image 25 (2).png') }}" alt="" class="img-fluid">
                        <p class="h6">baking tools</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <a href="{{ url('/category4') }}" class="categories_link">
                    <div class="categories_item">
                        <img src="{{ asset('frontend/images/homepage/image 25 (3).png') }}" alt="" class="img-fluid">
                        <p class="h6">Cooking Utensils</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <a href="{{ url('/category5') }}" class="categories_link">
                    <div class="categories_item">
                        <img src="{{ asset('frontend/images/homepage/image 25 (4).png') }}" alt="" class="img-fluid">
                        <p class="h6">Bar Tools</p>
                    </div>
                </a>
            </div>
            <div class="col-2">
                <a href="{{ url('/category6') }}" class="categories_link">
                    <div class="categories_item">
                        <img src="{{ asset('frontend/images/homepage/image 25 (5).png') }}" alt="" class="img-fluid">
                        <p class="h6">Bar Ingredients</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="marquee">
        <marquee direction="right">Here, we are passionate about the art of baking and believe
             that the right tools can elevate your culinary creations.
        </marquee>
    </div>

    <div class="container">
        <div class="text_h1 feature_pr_title">Featured Products</div>
        <div class="row">
            <!-- ĐỔI THÀNH PRODUCT KHI CÓ DATA -->
            @foreach ($all_product as $key => $list_product_user)
                <div class="col-3">
            
                    <div class="pr-i3">
                        <a href="{{ URL::to('product-detail/' . $list_product_user->id) }}">
                            <img src="{{ asset('public/backend/upload/' . $list_product_user->thumbnail) }}" alt="" class="w-100 productList_image">
                            <div class="text-hidden" style="display:none">{{ asset($list_product_user->thumbnail) }}</div>
                        </a>
                        <span class="btn_add"><i class="fa-solid fa-circle-plus"
                                onclick="addToCart(this)"></i></span>
                        <div class="container_information">
                            <a href="{{ URL::to('product-detail/' . $list_product_user->id) }}" class="pr-i2-name">{{ strlen($list_product_user->name) > 25 ? substr($list_product_user->name, 0, 25).'...' : $list_product_user->name }}</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                {{ strlen($list_product_user->description) > 115 ? substr($list_product_user->description, 0, 115).'...' : $list_product_user->description }}
                            </div>
                            <div class="pr-i2-id" style="display: none;">
                                {{ $list_product_user->id }}
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">${{ $list_product_user->fake_price }}</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">${{ $list_product_user->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid bg_banner">
        <div class="container banner">
            <div class="row">
                <div class="col-6">
                    <h1 class="banner_title text_h1">COOKING TIPS</h1>
                    <p class="banner_para text_p1">With the cake baked to perfection, the canvas is set for creativity
                        to flourish. From simple frosting and sprinkles to elaborate designs and piped
                        decorations, the possibilities are endless. The joy of decorating lies in expressing
                        one's artistic flair and transforming a simple cake into a masterpiece.</p>
                    <button class="banner_btn" onclick="window.location.href='https://www.cheftalk.com/forums/';">Discuss now</button>
                </div>
                <div class="col-6">
                    <img src="{{ asset('frontend/images/homepage/Rectangle 167.png') }}" alt=""
                        class="img-fluid banner_img">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="sub_banner_title text_h1">TOPIC OF MONTH</p>
        <div class="row">
            <div class="col-4">
                <div class="sub_banner"
                    style="background-image: url('{{ '/frontend/images/homepage/Untitled_design.png' }}');">
                    <p>BAKING TIPS</p>
                    <h3>Make Baking Powder</h3>
                    <button class="btn-shopnow" onclick="window.location.href='https://www.cheftalk.com/forums/';">Discuss now</button>
                </div>
            </div>
            <div class="col-4">
                <div class="sub_banner"
                    style="background-image: url('{{ '/frontend/images/homepage/Untitled_design.png' }}');">
                    <p>COOKING TIPS</p>
                    <h3>Make Baking Powder</h3>
                    <button class="btn-shopnow" onclick="window.location.href='https://www.cheftalk.com/forums/';">Discuss now</button>
                </div>
            </div>
            <div class="col-4">
                <div class="sub_banner"
                    style="background-image: url('{{ '/frontend/images/homepage/Untitled_design.png' }}');">
                    <p>RECOMMEND TIPS</p>
                    <h3>Make Baking Powder</h3>
                    <button class="btn-shopnow" onclick="window.location.href='https://www.cheftalk.com/forums/';">Discuss now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container image_getintouch">
        <div class="the_image" style="background-image: url('{{ '/frontend/images/homepage/Mask\ Group.png' }}');">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 getintouch_info">
                    <h1 class="text_h1">GET IN TOUCH WITH US</h1>
                    <p class="text_p1">With the cake baked to perfection, the canvas is set for creativity to flourish.
                        From simple frosting and sprinkles to elaborate designs and piped decorations, the
                        possibilities are endless.</p>
                    <div class="row ">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <form role="form" class="row getintouch_search" id="email-form"
                                action="{{ URL::to('/save-email') }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-8">
                                    <input type="text" id="email" name="email" class="w-100 text_p1" placeholder="Your email address...">
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn_submit"
                                        onclick="validateAndSubmit()">Submit</button>
                                </div>
                                <p id="email-error" class="text_p1" style="color: red; display: none;">Email is not
                                    valid</p>
                                <p id="success-message" class="text_p1" style="color: green; display: none;">Success!
                                    Your email has been submitted.</p>
                            </form>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    @foreach ($search_product as $key => $product)
        <script>
            let productNames = [];
            @foreach ($search_product as $product)
                productNames.push('{{ $product->name }}');
            @endforeach
            localStorage.setItem('productNames', JSON.stringify(productNames));
        </script>
    @endforeach

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/homepage.js') }}"></script>


</x-app-layout>
