<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/productDetail.css') }}">

    <livewire:breadcrumb-banner />


@foreach($product_detail as $key => $product)
    <div class="container mt-5 carousel_product">
        <div class="row detail">
            <div class="col-lg-6 pr-slide carousel" data-bs-ride="carousel" id="pr-slide">
                <div class="carousel-indicators">
                    <div class="row">
                        <div class="col-4">
                            <img data-bs-target="#pr-slide" data-bs-slide-to="0" class="active carousel-btn1"
                            src="data:image/png;base64,{{ base64_encode($thumbnails[$key]) }}"/>
                        </div>
                        <div class="col-4">
                            <img data-bs-target="#pr-slide" data-bs-slide-to="1" class="carousel-btn2"
                                src="data:image/png;base64,{{ base64_encode($thumbnails[$key]) }}" />
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
                <div class="carousel-inner parent">
                    <div class="carousel-item active">
                        <img src="data:image/png;base64,{{ base64_encode($thumbnails[$key]) }}" alt=""
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
                    <h6 class="pr-detail-name"> {{$product->name}} </h6>
                    <ul class="pr-i3-rating d-flex mb-3 star">
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                    </ul>
                    <div class="row mb-3">
                        <div class="col-md-2 col-3 ">
                            <p class="old-price"> {{$product->fake_price}} </p>
                        </div>
                        <div class="col-md-2 col-3">
                            <p class="new-price"> {{$product->price}} </p>
                        </div>
                        <button class="btn-shopnow bg-vang my-3" onclick="addToCart(this)" onclick="AddCart(4)">Add to
                            cart</button>
                    </div>
                    <p class="pr-detail-content">{{$product->description}}</p>
                    
                    <h4 class="pr-property">Color</h4>
                    <ul class="pr-color d-flex ps-0 mt-3" id="colorList">
                        @foreach($colors as $color)
                        {{-- <li>{{$color}}</li> --}}
                        <li style="background-color: {{ $color }};"></li>
                        @endforeach
                    </ul>
                    {{-- <ul class="pr-color d-flex ps-0 mt-3" id="colorList">
                        @foreach($product_colors as $color)
                            <li style="background-color: {{ $color }};"></li>
                        @endforeach
                    </ul> --}}
                    <div class="d-flex">
                        <button id="btn-minus"><i class="fa-solid fa-minus"></i></button>
                        <input type="number" value="1" id="pr-number">
                        <button id="btn-plus"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <button class="btn-shopnow bg-vang my-3" onclick="addToCart(this)" onclick="AddCart(4)">Add to cart</button>
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
                    {{-- <p>{{$product->description_detail}}</p> --}}
                    <h3 class="pr-des">Why choose product?</h3>
                    <p>{{$product->description_detail}}</p>
                    {{-- <ul>
                        <li>Compact design, convenient handle</li>
                        <li>Turbo function with 5 smart attack speeds</li>
                        <li>Strong capacity, safe materials</li>
                        <li>Equipped with two convenient sticks</li>
                    </ul> --}}
                    <h3 class="pr-des">Product Description</h3>
                    <p>{{$product->description_technique}}</p>
                    {{-- <ol>
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
                    </ol> --}}
                </div>
                <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <h3 class="pr-des">Product information</h3>
                    <table> 
                        <p>{{$product->description_information}}</p>

                        {{-- <tr>
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
                        </tr> --}}
                    </table>
                </div>
                <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                    </div>
                    <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="messages-tab"
                        tabindex="0">

                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container related-pr mt-5 mb-3">
        <div class="row">
            <div class="col-12 justify-content-start mb-3">
                <h3>Related Product</h3>
            </div>
            @foreach($related_products as $key => $related_products)
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pr-i3">
                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
                            class="w-100 productList_image">
                        <span class="btn_add" onclick="addToCart(this)"><i class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="#" class="pr-i2-name">{{$related_products->name}}</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                <p>{{$related_products->description}}</p>
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">{{$related_products->fake_price}}</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">{{$related_products->price}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pr-i3">
                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
                            class="w-100 productList_image">
                        <span class="btn_add" onclick="addToCart(this)"><i class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="#" class="pr-i2-name">Salim</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                The product is contained in a glass bottle, environmentally friendly and beautiful, can be used to decorate the dispenser.
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">$123.00</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">$100.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pr-i3">
                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
                            class="w-100 productList_image">
                        <span class="btn_add" onclick="addToCart(this)"><i class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="#" class="pr-i2-name">Salim</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                The product is contained in a glass bottle, environmentally friendly and beautiful, can be used to decorate the dispenser.
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">$123.00</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">$100.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pr-i3">
                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
                            class="w-100 productList_image">
                        <span class="btn_add" onclick="addToCart(this)"><i class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="#" class="pr-i2-name">Salim</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                The product is contained in a glass bottle, environmentally friendly and beautiful, can be used to decorate the dispenser.
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">$123.00</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">$100.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>
    
    <!-- END PRODUCT DETAIL -->

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/productDetail.js') }}"></script>
</x-app-layout>
