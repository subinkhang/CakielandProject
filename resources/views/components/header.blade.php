<?php

function header($title, $description)
{
    $element = 
    "
    <div class="container-fluid  nav_top">
        <div class="container">
            <div class="row">
                <div class="col-2 logo">
                    <img src="{{asset('frontend/images/logo - temp.png')}}" alt=""class="w-100">
                </div>
                <div class="col-2"></div>
                <div class="col-4 search">
                    <div class="row">
                      <div class="col-8">
                        <input type="text" class="w-100 text_p1" placeholder="Search products..." id="searchInput">
                        <div class="suggestions text_p1" style="display: none;"></div> </div>
                      <div class="col-4">
                        <button class="btn_search">Search</button>
                      </div>
                    </div>
                  </div>
                <div class="col-4 pages">
                    <ul class="d-flex justify-content-end page_ul_li">
                        <li class="page_item ">
                            <div><a href="#">Home</a></div>
                        </li>
                        <li class="page_item ">
                            <div><a href="#">Product</a></div>
                        </li>
                        <li class="page_item ">
                            <div><a href="#">Forum</a></div>
                        </li>
                        <li class="cart_item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <div><p>2</p></div>
                        </li>
                        <li class="cart_item">
                            <i class="fa-solid fa-user"></i>
                            <div><p>2</p></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    "
}

?>