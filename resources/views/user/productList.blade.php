<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/productList.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
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
                                    @php
                                        $isParentActive = false;
                                    @endphp
                                    @foreach($sub_category as $sub_cate)
                                        @if($sub_cate->category_id == $cate->id && Request::is('sub-category'.$sub_cate->id))
                                            @php
                                                $isParentActive = true;
                                                break;
                                            @endphp
                                        @endif
                                    @endforeach
                            
                                    <li class="mainmenu_title {{ Request::is('category'.$cate->id) || $isParentActive ? 'active' : '' }}">
                                        <a href="{{ URL::to('/category'.$cate->id) }}" class="category-link">
                                            <span>{{ $cate->name }}</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="menucon">
                                            @foreach($sub_category as $sub_cate)
                                                @if($sub_cate->category_id == $cate->id)
                                                    <li class="menu_title">
                                                        <a href="{{ URL::to('/sub-category'.$sub_cate->id) }}" class="{{ Request::is('sub-category'.$sub_cate->id) ? 'active' : '' }}">
                                                            {{ $sub_cate->name }}
                                                        </a>
                                                    </li>
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
                                        @foreach ($brands as $index => $brand)
                                            @php 
                                                $escapedBrand = preg_replace('/[^A-Za-z0-9]/', '-', $brand); 
                                                $isHidden = $index >= 6 ? 'hidden-brand' : '';
                                            @endphp
                                            <div class="col-6 filter-box {{ $isHidden }}">
                                                <input type="checkbox" class="filter-checkbox" id="checkbox-{{$escapedBrand}}" name="brand" value="{{$escapedBrand}}">
                                                <label for="checkbox-{{$escapedBrand}}">{{$brand}}</label> <br>
                                            </div>
                                            @php $count++; @endphp
                                            @if ($count == ceil($brands->count() / 2))
                                                </div><div class="row">
                                            @endif
                                        @endforeach
                                    </div>
                                    @if ($brands->count() > 6)
                                        <div class="row">
                                            <div class="col-12 text-more-less">
                                                <button type="button" id="toggleBrands" class="btn btn-link">More</button>
                                            </div>
                                        </div>
                                    @endif
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-10"></div>
                        <link rel="stylesheet" href="path/to/your/custom-style.css">
                        <div class="col-2">
                            {{-- <label for="amount">Sort by</label> --}}
                            <form id="sortForm">
                                <select name="sort" id="sort" class="form-control select-custom" onchange="this.form.submit()">
                                    <option value="none" {{ request('sort') == 'none' ? 'selected' : '' }}>{{ request('sort') == 'none' ? 'Sort by' : 'No sort' }}</option>
                                    <option value="increase" {{ request('sort') == 'increase' ? 'selected' : '' }}>Increase</option>
                                    <option value="decrease" {{ request('sort') == 'decrease' ? 'selected' : '' }}>Decrease</option>
                                    <option value="az" {{ request('sort') == 'az' ? 'selected' : '' }}>A - Z</option>
                                    <option value="za" {{ request('sort') == 'za' ? 'selected' : '' }}>Z - A</option>
                                </select>
                            </form>
                        </div>
                        <script src="path/to/your/custom-script.js"></script>
                    </div>
                    <div class="row">
                        <!-- ĐỔI THÀNH PRODUCT KHI CÓ DATA -->
                        @foreach ($list_product as $key => $list_product_user)
                            @php 
                                // Escape các ký tự đặc biệt để sử dụng làm class
                                $escapedBrand = preg_replace('/[^A-Za-z0-9]/', '-', $list_product_user->brand); 
                            @endphp
                            <div class="col-4 product-item {{$escapedBrand}}">
                                <div class="pr-i3" data-brand="{{ $list_product_user->brand }}">
                                    <a href="{{ URL::to('product-detail/' . $list_product_user->id) }}">
                                        <img src="{{ asset('public/backend/upload/' . $list_product_user->thumbnail) }}" alt="" class="w-100 productList_image">
                                    </a>
                                    <span class="btn_add"><i class="fa-solid fa-circle-plus" onclick="addToCart(this)"></i></span>
                                    <div class="container_information">
                                        <a href="#" class="pr-i2-name">{{ strlen($list_product_user->name) > 30 ? substr($list_product_user->name, 0, 30).'...' : $list_product_user->name }}</a>
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
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6"></div>   
                        <div class="col-6">
                            <div class="cartegory_page_number">
                                {!! $list_product->links('components/paginationButton') !!}
                            </div>
                        </div>
                        {{-- <div class="col-3"></div> --}}
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
    
                if (selectedBrands.length === 0) {
                    $('.product-item').removeClass('hidden');
                } else {
                    $('.product-item').addClass('hidden');
                    selectedBrands.forEach(function(brand) {
                        $('.' + brand).removeClass('hidden');
                    });
                }
            });
    
            $('#toggleBrands').click(function() {
                if ($('.hidden-brand').length) {
                    $('.hidden-brand').removeClass('hidden-brand');
                    $(this).text('Less');
                } else {
                    $('.filter-box').each(function(index) {
                        if (index >= 6) {
                            $(this).addClass('hidden-brand');
                        }
                    });
                    $(this).text('More');
                }
            });
        });
    </script>
    <!-- END FOOTER -->
</x-app-layout>
