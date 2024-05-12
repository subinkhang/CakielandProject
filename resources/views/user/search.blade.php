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
                <h2 class="menutitle">Kết quả tìm kiếm</h2>
                <div class="col-3" id="aside">
                    <div class="pr-list-sidebar">
                        <div class="pr-list-sidebar-title">
                            <h3>Categories</h3>
                            <div class="line"></div>
                            <ul class="mainmenu">
                                <li class="mainmenu_title"><a href="#"><span>Wet ingredients</span><i
                                            class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        <li class="menu_title"><a href="">Milk</a></li>
                                        <li class="menu_title"><a href="">Butter</a></li>
                                    </ul>
                                </li>
                                <li class="mainmenu_title"><a href="#"><span>Dry ingredients</span><i
                                            class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        <li class="menu_title"><a href="">Flour</a></li>
                                        <li class="menu_title"><a href="">Baking soda</a></li>
                                    </ul>
                                </li>
                                <li class="mainmenu_title"><a href="#"><span>Baking tools</span><i
                                            class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        <li class="menu_title"><a href="">Egg beater</a></li>
                                        <li class="menu_title"><a href="">Mold</a></li>
                                    </ul>
                                </li>
                                <li class="mainmenu_title"><a href="#"><span>Cooking utensils</span><i
                                            class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        <li class="menu_title"><a href="">Stainless steel pot set</a></li>
                                        <li class="menu_title"><a href="">Kitchen knife set</a></li>
                                    </ul>
                                </li>
                                <li class="mainmenu_title"><a href="#"><span>Bar tool</span><i
                                            class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        <li class="menu_title"><a href="">Coffee foam maker</a></li>
                                        <li class="menu_title"><a href="">Measuring cup</a></li>
                                    </ul>
                                </li>
                                <li class="mainmenu_title"><a href="#"><span>Bar ingredients</span><i
                                            class="fa-solid fa-sort-down icon_arrow"></i></a>
                                    <ul class="menucon">
                                        <li class="menu_title"><a href="">Tea</a></li>
                                        <li class="menu_title"><a href="">Syrup</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pr-list-sidebar">
                        <div class="pr-list-sidebar-title">
                            <h3>Filter by brand</h3>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-6 filter-box">
                                    <input type="checkbox" class="filter-checkbox" id="checkbox-oppo" value="oppo">
                                    <label for="checkbox-oppo">Oppo</label> <br>
                                    <input type="checkbox" class="filter-checkbox" id="checkbox-xiaomi" value="xiaomi">
                                    <label for="checkbox-xiaomi">Xiaomi</label> <br>
                                </div>
                                <div class="col-6 filter-box">
                                    <input type="checkbox" class="filter-checkbox" id="checkbox-apple" value="apple"
                                        checked>
                                    <label for="checkbox-apple">Apple</label> <br>
                                    <input type="checkbox" class="filter-checkbox" id="checkbox-samsung"
                                        value="samsung">
                                    <label for="checkbox-samsung">Samsung</label> <br>
                                    <input type="checkbox" class="filter-checkbox" id="checkbox-sony" value="sony">
                                    <label for="checkbox-samsung">Sony</label> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
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
                        @foreach ($search_product as $key => $list_product_user)
                            <div class="col-4">
                                <div class="pr-i3">
                                    <a href="{{ URL::to('product-detail/' . $list_product_user->id) }}">
                                        <img src="{{ asset('frontend/images/product.png') }}" alt=""
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
                                                <p class="old-price">{{ $list_product_user->fake_price }}</p>
                                            </div>
                                            <div class="col-6 text-end">
                                                <p class="new-price">{{ $list_product_user->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- <nav aria-label="Pages"> -->
                        <!-- {!! $list_product->links() !!} -->
                        <!-- </nav> -->
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="cartegory_page_number">
                                <!-- ĐỔI THÀNH PRODUCT KHI CÓ -->
                                {!! $list_product->links('components/paginationButton') !!}
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sort').on('change', function() {
                var sortBy = $(this).val();
                if (sortBy) {
                    window.location = '{{ Request::url() }}?sort_by=' + sortBy;
                }
                return false;
            });
        });
    </script>
    <script src="{{ 'frontend/js/jquery-3.7.1.min.js' }}"></script>
    <script src="{{ 'frontend/js/bootstrap.bundle.js' }}"></script>
    <script src="{{ 'frontend/js/productList.js' }}"></script>
    {{-- <script>
        console.log({!! json_encode($search_product) !!});
    </script> --}}
    <!-- END FOOTER -->
</x-app-layout>
