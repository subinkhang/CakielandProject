@extends('components.layout')
@section('cart')

<title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
<link rel="stylesheet" href="{{ asset('frontend/css/cart.css')}}">

<livewire:breadcrumb-banner />

<div class="container">
    <div class="row">
        <div class="col-3">
            <h1 id="title"><b>MY CART</b></h1>
        </div>
        <div class="col-9"></div>
        <!-------------------------LEFT------------------------------>
        <div class="container">
        <div class="row">
        <div class="col-7">
            <div class="container">
            <form>
            <table class="table">
                <tr class="text-center">
                    <th scope="row"></th>
                    <td class="col-2">#</td>
                    <td class="col-8">NAME</td>
                    <td class="col-2 text-end">SUBTOTAL</td>
                </tr>
                <tr id="item1">
                    <th scope="row"></th>
                    <td class="col-2 text-center">1</td>
                    <td class="col-8">
                        <div class="row pr-list-co">
                            <div class="col-3">
                                <img src="{{ asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="img-fluid">
                            </div>
                            <div class="col-9 row">
                                <h6>lăn bột hjghvhhgfhgvhvjvjvjvjvjgc</h6>
                                <div class="d-flex">
                                <button id="btn-minus" class="btn-minuse" type="button" onclick="decreaseQuantity()">-</button>
                                <span id="numb"><input type="number" value="1" id="pr-number" name="quan[1]" min="1"></span>
                                <button id="btn-plus" class="btn-pluss" type="button" onclick="increaseQuantity()">+</button>
                                </div>
                                <h6 class="price" id="pricee">$112.00</h6>             
                        </div>
                    </td>
                    <td class="col-2 text-end">
                        <b class="subprice" id="subtotal">$112.00</b>
                        <p></p>
                        <p></P>
                        <button class="removeitem" onclick = "rmitem1()"> <h7> remove </h7> </button>
                    </td>
                </tr>
                <tr id="item2">
                    <th scope="row"></th>
                    <td class="col-2 text-center">1</td>
                    <td class="col-8">
                        <div class="row pr-list-co">
                            <div class="col-3">
                            <img src="{{ asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg')}}"  class="img-fluid">
                            </div>
                            <div class="col-9 row">
                            <h6>lăn bột hjghvhhgfhgvhvjvjvjvjvjgc</h6>
                            <div class="col-1">
                                <button class="btn">
                                <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                            <div class="col-1">
                                <input type="text" name="quant[1]" class="form-control input-number" style="text-align:center; width:50px; height:25px; margin-top:5px;" value="1">
                            </div>
                            <div class="col-1">
                                <button class="btn" style="margin-left:10px" >
                                    <i class="fa-solid fa-plus"></i>
                                    </button>
                            </div>
                            <h6 class="price">$112.00</h6>             
                        </div>
                    </td>
                    <td class="col-2 text-end"><b>$112.00</b></td>
                </tr>
            </table>
            </form>
            </div>
        </div>
        <div class="col-1"></div>
        <!----------------------RIGHT------------------------------------->
        <div class="col-4">
        <h3 id="voucher-text"><b>VOUCHER</b></h3>
        <div class="search">
            <div class="row">
                <div class="col-8">
                    <input type="text" class="w-100 text_p1 boxvoucher" placeholder="Voucher">
                </div>
                <div class="col-4">
                    <button class="btn_search">SUBMIT</button>
                </div>
            </div>
        </div>
        <div class="container">
        <table class="table table-borderless">
            <tr>
                <th scope="row"></th>
                <td class="col-8"><p1>Subtotal</p1></td>
                <td class="col-4 text-end"><p1 id="rightsub">199.00</p1></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td class="col-8"><p1>Shipping</p1></td>
                <td class="col-4 text-end"id="shipping-price"><p1>2.00</p1></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td class="col-8"><p1>Discount</p1</td>
                <td class="col-4 text-end" id="discount-price"><p1>2.00</p1></td>
            </tr>
            
            <tr class="total" style="margin-top: 100px;">
                <th scope="row"></th>
                <td class="col-8"><h3><b>TOTAL</b></h3></td>
                <td class="col-2 text-end" id="totalprice"><h3><b>199.00</b></h3></td>
            </tr>
                </table>
            </div>
                <div class="col-8 bt-pay pm">
                <a class="btn" href="http://localhost:8000/checkout" id="btn-p">
                    <p1>Payment</p1>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="../header-footer/js/jquery-3.7.1.min.js"></script>
<script src="../header-footer/js/bootstrap.bundle.js"></script>
<script src="{{asset('frontend/js/cart.js')}}"></script>

@endsection