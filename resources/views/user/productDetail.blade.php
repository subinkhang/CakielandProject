@extends('components.layout')
@section('productDetail')
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/productDetail.css') }}">

    <livewire:breadcrumb-banner />

    <div class="container mt-5 carousel_product">
        <div class="row detail">
            <div class="col-lg-6 pr-slide carousel" data-bs-ride="carousel" id="pr-slide">
                <div class="carousel-indicators">
                    <div class="row">
                        <div class="col-4">
                            <img data-bs-target="#pr-slide" data-bs-slide-to="0" class="active carousel-btn1"
                                src="{{ asset('frontend/images/pr-detail/máy đánh trứng 1.webp') }}" />
                        </div>
                        <div class="col-4">
                            <img data-bs-target="#pr-slide" data-bs-slide-to="1" class="carousel-btn2"
                                src="{{ asset('frontend/images/pr-detail/máy đánh trứng 2.webp') }}" />
                        </div>
                        <div class="col-4">
                            <img data-bs-target="#pr-slide" data-bs-slide-to="2" class="carousel-btn3"
                                src="{{ asset('frontend/images/pr-detail/máy đánh trứng 3.webp') }}" />
                        </div>
                    </div>
                </div>
                <div class="carousel-inner parent">
                    <div class="carousel-item active">
                        <img src="{{ asset('frontend/images/pr-detail/máy đánh trứng 1.webp') }}" alt=""
                            class="w-100 img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/images/pr-detail/máy dánh trứng 2.webp') }}" alt=""
                            class="img-fluid w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/images/pr-detail/máy đánh trứng 3.webp') }}" alt=""
                            class="img-fluid w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-12">
                    <h6 class="pr-detail-name"> Philips HR3705 Egg Beater (300W)</h6>
                    <ul class="pr-i3-rating d-flex mb-3 star">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="row mb-3">
                        <div class="col-md-2 col-3 ">
                            <p class="old-price">$139.00</p>
                        </div>
                        <div class="col-md-2 col-3">
                            <p class="new-price">$110.00</p>
                        </div>
                    </div>
                    <p class="pr-detail-content">Philips HR3705 Egg Beater (300W) has a compact design with a sturdy handle
                        so you can use it easily without getting tired of your hands after long use. The parts are easily
                        removable and can be cleaned in the dishwasher.</p>
                    <h4 class="pr-property">Color</h4>
                    <ul class="pr-color d-flex ps-0 mt-3" id="colorList">
                        <li onclick="selectColor(this)"></li>
                        <li onclick="selectColor(this)"></li>
                        <li onclick="selectColor(this)"></li>
                        <li onclick="selectColor(this)"></li>
                    </ul>
                    <div class="d-flex">
                        <button id="btn-minus"><i class="fa-solid fa-minus"></i></button>
                        <input type="number" value="1" id="pr-number">
                        <button id="btn-plus"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <button class="btn-shopnow bg-vang my-3" onclick="addToCart(this)" onclick="AddCart(4)">Add to
                        cart</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container pr-content title_desc">
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#des" type="button"
                        role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#info" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">SPECIFICATIONS</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="des" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <h3 class="pr-des">Why choose product?</h3>
                    <ul>
                        <li>Compact design, convenient handle</li>
                        <li>Turbo function with 5 smart attack speeds</li>
                        <li>Strong capacity, safe materials</li>
                        <li>Equipped with two convenient sticks</li>
                    </ul>
                    <h3 class="pr-des">Product Description</h3>
                    <ol>
                        <li>Compact design, convenient to hold</li>
                        <p>Philips HR3705 Egg Beater (300W) has a compact design with a sturdy handle so you can use it
                            easily without getting tired of your hands after long-term use. Parts are easily removable and
                            biodegradable in the dishwasher.</p>
                        <li>Turbo function with 5 smart speeds</li>
                        <p>The machine has a Turbo function with 5 beating speeds from low to high, helping you easily
                            choose the speed to suit each different type of ingredient. Combining beneficial adjustment
                            buttons on the machine's body helps you operate easily and quickly.</p>
                        <li>Strong company, safe materials</li>
                        <p>In particular, the Philips handheld plane operates with a fairly high capacity of 300W, and the
                            motor makes no noise when operating. The tool helps you perfect, mix faster, more evenly and
                            softer. Besides, the body is made of sturdy plastic and the mixing bars are made of
                            high-quality, non-toxic stainless steel, ensuring absolute safety for your family's health.</p>
                        <li>Equipped with two benefits</li>
                        <p>In particular, included with the Phillips HR3705 egg are 2 types of mixing rods that users can
                            change to suit different types of food to increase mixing efficiency.</p>
                    </ol>
                </div>
                <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <h3 class="pr-des">Product information</h3>
                    <table>
                        <tr>
                            <td>Trademark:</td>
                            <td>Philips</td>
                        </tr>
                        <tr>
                            <td>Brand origin:</td>
                            <td>Netherlands</td>
                        </tr>
                        <tr>
                            <td>Material:</td>
                            <td>High quality plastic, stainless steel</td>
                        </tr>
                        <tr>
                            <td>Wattage:</td>
                            <td>300W</td>
                        </tr>
                        <tr>
                            <td>Size:</td>
                            <td>186 x 84 x 154 mm</td>
                        </tr>
                        <tr>
                            <td>Product weight:</td>
                            <td>0.853kg</td>
                        </tr>
                        <tr>
                            <td>Warranty form:</td>
                            <td>Warranty</td>
                        </tr>
                        <tr>
                            <td>Warranty period:</td>
                            <td>12 month</td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                </div>
                <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">

                </div>
            </div>
        </div>
    </div>
    <div class="container related-pr mt-5 mb-3">
        <div class="row">
            <div class="col-12 justify-content-start mb-3">
                <h3>Related Product</h3>
            </div>
            @for ($i = 0; $i < 4; $i++)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pr-i3">
                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
                            class="w-100 productList_image">
                        <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="#" class="pr-i2-name">Slim</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus
                                asperiores...
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">$134.00</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">$112.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- END PRODUCT DETAIL -->

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/productDetail.js') }}"></script>
@endsection
