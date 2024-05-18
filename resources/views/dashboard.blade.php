<x-app-layout>
    <link rel="stylesheet" href="{{ asset('frontend/css/homepage.css') }}">
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
                                <button class="text_overlay_btn text_p1">Buy now</button>
                                <button class="text_overlay_btn text_p1">Contact us</button>
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
                                <button class="text_overlay_btn text_p1">Buy now</button>
                                <button class="text_overlay_btn text_p1">Contact us</button>
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
                <div class="categories_item">
                    <img src="{{ asset('frontend/images/homepage/image 25.png') }}" alt="" class="img-fluid">
                    <p class="h6">DRY INGREDIENTS</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{ asset('frontend/images/homepage/image 25 (1).png') }}" alt=""
                        class="img-fluid">
                    <p class="h6">wet ingredients</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{ asset('frontend/images/homepage/image 25 (2).png') }}" alt=""
                        class="img-fluid">
                    <p class="h6">baking tools</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{ asset('frontend/images/homepage/image 25 (3).png') }}" alt=""
                        class="img-fluid">
                    <p class="h6">Cooking Utensils</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{ asset('frontend/images/homepage/image 25 (4).pn') }}g" alt=""
                        class="img-fluid">
                    <p class="h6">Bar Tools</p>
                </div>
            </div>
            <div class="col-2">
                <div class="categories_item">
                    <img src="{{ asset('frontend/images/homepage/image 25 (5).png') }}" alt=""
                        class="img-fluid">
                    <p class="h6">Bar Ingredients</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marquee">
        <marquee direction="right">Download our new app today! Dont miss our mobile-only offers and shop with Android
            Play.
        </marquee>
    </div>

    <div class="container">
        <div class="text_h1 feature_pr_title">Featured Products</div>
        <div class="row">

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
                    <button class="banner_btn">Discuss now</button>
                </div>
                <div class="col-6">
                    <img src="{{ asset('frontend/images/homepage/Rectangle 167.png') }}" alt=""
                        class="img-fluid">
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
                    <button class="btn-shopnow bg-xanh text-white">Discuss Now</button>
                </div>
            </div>
            <div class="col-4">
                <div class="sub_banner"
                    style="background-image: url('{{ '/frontend/images/homepage/Untitled_design.png' }}');">
                    <p>COOKING TIPS</p>
                    <h3>Make Baking Powder</h3>
                    <button class="btn-shopnow bg-xanh text-white">Discuss Now</button>
                </div>
            </div>
            <div class="col-4">
                <div class="sub_banner"
                    style="background-image: url('{{ '/frontend/images/homepage/Untitled_design.png' }}');">
                    <p>RECOMMEND TIPS</p>
                    <h3>Make Baking Powder</h3>
                    <button class="btn-shopnow bg-xanh text-white">Discuss Now</button>
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
                            <form role="form" class="row getintouch_search" action="{{ URL::to('/save-email') }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="col-8 ">
                                    <input type="text" id="email" name="email" class="w-100 text_p1"
                                        placeholder="Your email address...">
                                </div>
                                <div class="col-4 ">
                                    <button type="submit" class="btn_submit"
                                        onclick="validateEmail()">Submit</button>
                                </div>
                                <p id="email-error" class="text_p1" style="color: red; display: none;">Email is not
                                    valid
                                </p>
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

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/homepage.js') }}"></script>


</x-app-layout>
