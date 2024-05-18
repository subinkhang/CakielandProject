<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/productList.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#sort').select2({
                minimumResultsForSearch: Infinity, // Disable the search box
                theme: "classic"
            });
        });
    </script>

    <livewire:breadcrumb-banner />

    <div class="container header">
        <!-- END HEADER -->
        <!-- PRODUCT LIST -->
        <div class="container">
            <div class="row">
                <h2 class="menutitle">MENU</h2>
                <div class="col-3" id="aside">
                    <div class="pr-list-sidebar">
                        <div class="pr-list-sidebar-title">
                            <h3>Categories</h3>
                            <div class="line"></div>
                            <ul class="mainmenu">
                                @foreach($category as $key => $cate)
                                <li class="mainmenu_title"><a href="{{URL::to('/category'.$cate->id)}}"><span>{{$cate->name}} </span>
                                    <i class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        @foreach($sub_category as $sub_cate)
                                            @if($sub_cate->category_id == $cate->id)
                                                <li class="menu_title"><a href="{{URL::to('/sub-category'.$sub_cate->id)}}">{{$sub_cate->name}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>                                    
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="pr-list-sidebar">
                        <div class="pr-list-sidebar-title">
                            <h3>Filter by brand</h3>
                            <div class="line"></div>
                            <div class="row">
                                <form id="brandFilterForm">
                                    <div class="row">
                                        @php $count = 0; @endphp
                                        @foreach ($brands as $brand)
                                            <div class="col-6 filter-box">
                                                <input type="checkbox" class="filter-checkbox" id="checkbox-{{$brand}}" name="brand" value="{{$brand}}">
                                                <label for="checkbox-{{$brand}}">{{$brand}}</label> <br>
                                            </div>
                                            @php $count++; @endphp
                                            @if ($count == ceil($brands->count() / 2))
                                                </div><div class="row">
                                            @endif
                                        @endforeach
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- @php
                        $small_list_product = $all_product->toArray();
                    @endphp --}}
                    {{-- <div class="pr-list-sidebar">
                        <div class="pr-list-sidebar-title">
                            <h3>Products</h3>
                            <div class="line"></div>
                            <div class="row pr-sidebar my-3">
                                @for ($i = 0; $i < min(3, count($all_product)); $i++)
                                    <div class="col-3 pt-3">
                                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <h4 class="pr-i1-cat">{{ $all_product[$i]->name }}</h4>
                                        <a href="#" class="text-product">{{ $all_product[$i]->description }}</a>
                                        <ul class="pr-i3-rating d-flex star">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="old-price">{{ $all_product[$i]->fake_price }}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p class="new-price">{{ $all_product[$i]->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- @foreach($products as $product)
                    <div class="product">
                        <h4>{{ $product->name }}</h4>
                    </div>
                @endforeach --}}
                <!--  -->

                {{-- </div> --}}
                <!--  -->
                {{-- <div class="col-1"></div> --}}
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-10"></div>
                        <link rel="stylesheet" href="path/to/your/custom-style.css">
                        <div class="col-2">
                            {{-- <label for="amount">Sort by</label> --}}
                            <form id="sortForm">
                                <select name="sort" id="sort" class="form-control select-custom"
                                    onchange="this.form.submit()">
                                    <option value="none">Sort by</option>
                                    <option value="tang_dan">Increase</option>
                                    <option value="giam_dan">Decrease</option>
                                    <option value="az">A - Z</option>
                                    <option value="za">Z - A</option>
                                </select>
                            </form>
                        </div>
                        <script src="path/to/your/custom-script.js"></script>
                    </div>
                    <div class="row">
                        <!-- ĐỔI THÀNH PRODUCT KHI CÓ DATA -->
                        @foreach ($list_product as $key => $list_product_user )
                            <div class="col-4  product-item {{$list_product_user->brand}}">
                                <div class="pr-i3" data-brand="{{ $list_product_user->brand }}">
                                    <a href="{{ URL::to('product-detail/' . $list_product_user->id) }}">
                                        <img src="{{ asset('public/backend/upload/' . $list_product_user->thumbnail) }}" alt=""
                                            class="w-100 productList_image">
                                    </a>
                                    <span class="btn_add"><i class="fa-solid fa-circle-plus"
                                            onclick="addToCart(this)"></i></span>
                                    <div class="container_information">
                                        <a href="#" class="pr-i2-name">{{ $list_product_user->name }}</a>
                                        <ul class="pr-i2-rating d-flex">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <div class="text_product">
                                            {{ $list_product_user->description }}
                                        </div>
                                        <div class="row productList_price">
                                            <div class="col-6">
                                                <p class="old-price">{{$list_product_user->fake_price}}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p class="new-price">{{ $list_product_user->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <!-- {!! $list_product->links() !!} --> --}}
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="cartegory_page_number">
                                <!-- ĐỔI THÀNH PRODUCT KHI CÓ -->
                                {{-- {!! $list_product->links('components/paginationButton') !!} --}}
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PRODUCT LIST -->
    <!-- PRODUCT LIST SUBIN-->

    <!-- BANNER -->
    <div class="container image_getintouch">
        <div class="getintouch" style="background-image: url('{{ '/frontend/images/Group 13943.png' }}');">
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
                            <div class="row getintouch_search">
                                <div class="col-8 ">
                                    <input type="text" class="w-100 text_p1" placeholder="Your email address...">
                                </div>
                                <div class="col-4 ">
                                    <button class="btn_submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ 'frontend/js/jquery-3.7.1.min.js' }}"></script>
    <script src="{{ 'frontend/js/bootstrap.bundle.js' }}"></script>
    <script src="{{ 'frontend/js/productList.js' }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.filter-checkbox').change(function() {
                var selectedBrands = [];
                $('.filter-checkbox:checked').each(function() {
                    selectedBrands.push($(this).val());
                });

                // Nếu không có checkbox nào được chọn, hiển thị lại tất cả sản phẩm
                if (selectedBrands.length === 0) {
                    $('.product-item').removeClass('hidden');
                } else {
                    // Ẩn tất cả sản phẩm trước khi hiển thị lại sản phẩm của các thương hiệu đã chọn
                    $('.product-item').addClass('hidden');

                    // Hiển thị sản phẩm của các thương hiệu đã chọn
                    selectedBrands.forEach(function(brand) {
                        $('.' + brand).removeClass('hidden');
                    });
                }
            });
        });
    </script>
    <!-- END FOOTER -->
</x-app-layout>
