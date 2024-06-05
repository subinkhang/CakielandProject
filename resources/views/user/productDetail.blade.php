<x-app-layout>
    <title>{{ $product_name[0]->name }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/productDetail.css') }}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMKeKxHeE/8D6LJJ6Gu0JeBdbVYlc2X6I5f3/0n" crossorigin="anonymous">
    
    @livewire('breadcrumb-banner', ['productId' => $product_detail->first()->id])
    {{-- @livewire('breadcrumb', ['productId' => $product_detail->first()->id]) --}}
    @foreach ($product_detail as $key => $product)
        <div class="container mt-5 carousel_product">
            <div class="row detail">
                {{-- <div class="col-lg-6 pr-slide carousel" data-bs-ride="carousel" id="pr-slide">
                    <div class="carousel-indicators">
                        <div class="row">
                            <div class="col-4">
                                <img data-bs-target="#pr-slide" data-bs-slide-to="0" class="active carousel-btn1"
                                    src="{{ asset('public/backend/upload/' . $product->thumbnail) }}" />
                            </div>
                            @php $slide_index = 1; @endphp <!-- Khởi tạo biến đếm -->
                            @foreach ($gallery_images as $image)
                                @if ($slide_index < 3)
                                    <div class="col-4">
                                        <img data-bs-target="#pr-slide" data-bs-slide-to="{{ $slide_index }}"
                                            class="carousel-btn{{ $slide_index + 1 }}"
                                            src="{{ asset('backend/upload/' . $image->image_product) }}" />
                                    </div>
                                @endif
                                @php $slide_index++; @endphp <!-- Tăng giá trị biến đếm sau mỗi lần lặp -->
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#pr-slide" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#pr-slide" role="button" data-bs-slide="next" id="next-slide">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <div class="carousel-inner parent">
                        <div class="carousel-item active">
                            <img src="{{ asset('public/backend/upload/' . $product->thumbnail) }}" alt=""
                                class="w-100 img-fluid">
                        </div>
                        @php $slide_index = 1; @endphp <!-- Đặt lại giá trị biến đếm -->
                        @foreach ($gallery_images as $image)
                            <div class="carousel-item">
                                <img src="{{ asset('backend/upload/' . $image->image_product) }}" alt=""
                                    class="img-fluid w-100">
                            </div>
                            @php $slide_index++; @endphp <!-- Tăng giá trị biến đếm sau mỗi lần lặp -->
                        @endforeach
                    </div>
                </div>
                <script>
                    var galleryImages = @json($gallery_images->map(function($image) {
                        return asset('backend/upload/' . $image->image_product);
                    }));
                </script>
                <script src="{{ asset('path/to/your/custom.js') }}"></script> --}}
                <div class="col-lg-6 pr-slide carousel" data-bs-ride="carousel" id="pr-slide">
                    <div class="id" style="display: none;">
                        {{ $product->id }}
                    </div>
                    <div class="carousel-indicators">
                        <div class="row" id="carousel-indicators">
                            <div class="col-4 ">
                                <img data-bs-target="#pr-slide" data-bs-slide-to="0" class="active carousel-btn1"
                                    src="{{ asset('public/backend/upload/' . $product->thumbnail) }}" />
                                    <div class="text-hidden" style="display: none;">{{ asset($product->thumbnail) }}</div>
                            </div>
                            @php $slide_index = 1; @endphp
                            
                            @foreach ($gallery_images as $image)
                                @if ($slide_index < 3)
                                    <div class="col-4">
                                        <img data-bs-target="#pr-slide" data-bs-slide-to="{{ $slide_index }}"
                                            class="carousel-btn{{ $slide_index + 1 }}"
                                            src="{{ asset('backend/upload/' . $image->image_product) }}" />
                                    </div>
                                @endif
                                @php $slide_index++; @endphp
                            @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#pr-slide" role="button" data-bs-slide="prev" id="prev-slide">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#pr-slide" role="button" data-bs-slide="next" id="next-slide">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                    <div class="carousel-inner parent">
                        <div class="carousel-item active">
                            <img src="{{ asset('public/backend/upload/' . $product->thumbnail) }}" alt="" class="w-100 img-fluid">
                        </div>
                        @php $slide_index = 1; @endphp
                        @foreach ($gallery_images as $image)
                            <div class="carousel-item">
                                <img src="{{ asset('backend/upload/' . $image->image_product) }}" alt="" class="img-fluid w-100">
                            </div>
                            @php $slide_index++; @endphp
                        @endforeach
                    </div>
                </div>
                
                <script>
                    var galleryImages = @json($gallery_images->map(function($image) {
                        return asset('backend/upload/' . $image->image_product);
                    }));
                </script>
                
                <script src="{{ asset('path/to/your/custom.js') }}"></script>
                
                <div class="col-lg-6">
                    <div class="col-12">
                        <h6 class="pr-detail-name pr-i2-name main_product_name"> {{ $product->name }} </h6>
                        <ul class="pr-i3-rating d-flex mb-3 star">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="row mb-3">
                            <div class="col-md-2 col-3 ">
                                <p class="old-price"> {{ $product->fake_price }} </p>
                            </div>
                            <div class="col-md-2 col-3">
                                <p class="new-price"> {{ $product->price }} </p>
                            </div>
                        </div>
                        <p class="pr-detail-content">{{ $product->description }}</p>

                        <h4 class="pr-property">Color</h4>
                        <ul class="pr-color d-flex ps-0 mt-3" id="colorList">
                            @foreach ($colors as $color)
                                <li class="color-item" style="background-color: {{ $color }};">
                                    <i class="fa-solid fa-circle-check checkmark"></i>
                                </li>
                            @endforeach
                        </ul>
                        <div class="d-flex">
                            <button id="btn-minus"><i class="fa-solid fa-minus"></i></button>
                            <input type="number" value="1" id="pr-number">
                            <button id="btn-plus"><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <button class="btn-shopnow btn_shop bg-vang my-3" onclick="addToCart(this)">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pr-content title_desc">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active custom-tab" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#des" type="button" role="tab" aria-controls="home"
                            aria-selected="true">DESCRIPTION</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link custom-tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#info"
                            type="button" role="tab" aria-controls="profile"
                            aria-selected="false">SPECIFICATIONS</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="des" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <h3 class="pr-des">Why choose product?</h3>
                        <p>{{ $product->description_detail }}</p>
                    </div>
                    <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <h3 class="pr-des">Product Description</h3>
                        <p>{{ $product->description_technique }}</p>
                    </div>
                    <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <h3 class="pr-des">Product information</h3>
                        <table></table>
                    </div>
                    <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="messages-tab"
                        tabindex="0">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- COMMENT AND POST -->
    <div data-my-div>
        <div class="comment-section">
            <div class="max-w-2xl mx-auto py-8">
                @foreach ($post as $posts)
                    <livewire:comments :model="$posts"/>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="container related-pr mt-5 mb-3">
        <div class="row">
            <div class="col-12 justify-content-start mb-3">
                <h3>Related Product</h3>
            </div>
            @foreach ($related_products as $key => $related_product)
                <div class="col-3">
                    <div class="pr-i3" data-brand="{{ $related_product->brand }}">
                        <div class="id" style="display: none;">
                            {{ $related_product->id }}
                        </div>
                        <a href="{{ URL::to('product-detail/' . $related_product->id) }}">
                            <img src="{{ asset('public/backend/upload/' . $related_product->thumbnail) }}"
                                alt="" class="w-100 productList_image">
                            <div class="text-hidden" style="display: none;">{{ asset($related_product->thumbnail) }}</div>
                        </a>
                        <span class="btn_shop btn_add" onclick="addToCart(this)"><i
                                class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="{{ URL::to('product-detail/' . $related_product->id) }}" class="pr-i2-name">{{ strlen($related_product->name) > 25 ? substr($related_product->name, 0, 25) . '...' : $related_product->name }}</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                <p>{{ strlen($related_product->description) > 115 ? substr($related_product->description, 0, 115) . '...' : $related_product->description }}</p>
                            </div>
                            <div class="row productList_price">
                                <div class="col-6">
                                    <p class="old-price">{{ $related_product->fake_price }}</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">{{ $related_product->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/productDetail.js') }}"></script>
</x-app-layout>
