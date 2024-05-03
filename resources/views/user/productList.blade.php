@extends('components.layout')
@section('productList')

<title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title> 
<link rel="stylesheet" href="{{ asset('frontend/css/productList.css') }}">

<livewire:breadcrumb-banner />

<div class="container header">
    <div class="row">
        <h2 class="menutitle">MENU</h2>
        <div class="col-3" id="aside">
            <div class="pr-list-sidebar">
                <div class="pr-list-sidebar-title">
                    <h3>Categories</h3>
                    <div class="line"></div>
                    <ul class="mainmenu">
                        <li class="mainmenu_title"><a href="#"><span>Wet ingredients</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                            <ul class="menucon">
                                <li class="menu_title"><a href="">Milk</a></li>
                                <li class="menu_title"><a href="">Butter</a></li>
                            </ul>
                        </li>
                        <li class="mainmenu_title"><a href="#"><span>Dry ingredients</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                            <ul class="menucon">
                                <li class="menu_title"><a href="">Flour</a></li>
                                <li class="menu_title"><a href="">Baking soda</a></li>
                            </ul>
                        </li>
                        <li class="mainmenu_title"><a href="#"><span>Baking tools</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                            <ul class="menucon">
                                <li class="menu_title"><a href="">Egg beater</a></li>
                                <li class="menu_title"><a href="">Mold</a></li>
                            </ul>
                        </li>
                        <li class="mainmenu_title"><a href="#"><span>Cooking utensils</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                            <ul class="menucon">
                                <li class="menu_title"><a href="">Stainless steel pot set</a></li>
                                <li class="menu_title"><a href="">Kitchen knife set</a></li>
                            </ul>
                        </li>
                        <li class="mainmenu_title"><a href="#"><span>Bar tool</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                            <ul class="menucon">
                                <li class="menu_title"><a href="">Coffee foam maker</a></li>
                                <li class="menu_title"><a href="">Measuring cup</a></li>
                            </ul>
                        </li>
                        <li class="mainmenu_title"><a href="#"><span>Bar ingredients</span><i class="fa-solid fa-sort-down icon_arrow"></i></a>
                            <ul class="menucon">
                                <li class="menu_title"><a href="">Tea</a></li>
                                <li class="menu_title"><a href="">Syrup</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pr-list-sidebar">
                <h3>Filter by price</h3>
            </div>
            <!--  -->
            <div class="pr-list-sidebar">
                <div class="pr-list-sidebar-title">
                    <h3>Products</h3>
                    <div class="line"></div>
                    <div class="row pr-sidebar my-3">
                        <div class="col-3 pt-3">
                            <img src="{{ asset('frontend/images/product.png')}}" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-9">
                            <h4 class="pr-i1-cat">HEADPHONE</h4>
                            <a href="#" class="text-product">JBL Everest 710 Gun Metal Front</a>
                            <ul class="pr-i3-rating d-flex star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="row">
                                <div class="col-6">
                                    <p class="old-price">$134.00</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">$112.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pt-3">
                            <img src="{{ asset('frontend/images/product.png')}}" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-9">
                            <h4 class="pr-i1-cat">HEADPHONE</h4>
                            <a href="#" class="text-product">JBL Everest 710 Gun Metal Front</a>
                            <ul class="pr-i3-rating d-flex star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="row">
                                <div class="col-6">
                                    <p class="old-price">$134.00</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="new-price">$112.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pt-3">
                            <img src="{{ asset('frontend/images/product.png')}}" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-9">
                            <h4 class="pr-i1-cat">HEADPHONE</h4>
                            <a href="#" class="text-product">JBL Everest 710 Gun Metal Front</a>
                            <ul class="pr-i3-rating d-flex star">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="row">
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
            </div>
        </div>
        <!--  -->
        <div class="col-lg-9">
            <div class="row">
                                                            <!-- ĐỔI THÀNH PRODUCT KHI CÓ DATA -->
            @foreach ($users as $user)
                <div class="col-4">
                    <div class="pr-i3">
                        <img src="{{ asset('frontend/images/product.png')}}" alt="" class="w-100 productList_image">
                        <span class="btn_add"><i class="fa-solid fa-circle-plus"></i></span>
                        <div class="container_information">
                            <a href="#" class="pr-i2-name">Slim {{ $user->name }}</a>
                            <ul class="pr-i2-rating d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <div class="text_product">
                                Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                            </div>
                            <div class="row productList_price">
                                <div class="col-6"><p class="old-price">$134.00</p></div>
                                <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
<!-- <nav aria-label="Pages"> -->
    <!-- {!! $users->links() !!} -->
<!-- </nav> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                    <div class="cartegory_page_number">
                                                            <!-- ĐỔI THÀNH PRODUCT KHI CÓ -->
                            {!! $users->links('components/paginationButton') !!}
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
<!-- <div class="col-8">
    <div class="row">
        <div class="col-4">	
            <div class="pr-i3">
                <img src="{{ asset('frontend/images/product.png')}}" alt="" class="w-100 productList_image">
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
                        Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                    </div>
                    <div class="row productList_price">
                        <div class="col-6"><p class="old-price">$134.00</p></div>
                        <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- BANNER -->
<div class="container image_getintouch">
    <div class="getintouch" style="background-image: url('{{'/frontend/images/Group 13943.png'}}');">
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

<script src="{{('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{('frontend/js/bootstrap.bundle.js')}}"></script>
<script src="{{('frontend/js/productList.js')}}"></script>
    <!-- END FOOTER -->

    @endsection