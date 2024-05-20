<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/cart.css') }}">

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
                                        <td class="col-2">No.</td>
                                        <td class="col-8">NAME</td>
                                        <td class="col-2 text-end">SUBTOTAL</td>
                                    </tr>
                                    <table id="prod">
                                    </table>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <!----------------------RIGHT------------------------------------->
                    <div class="col-4 col">
                        <h3 id="voucher-text"><b>VOUCHER</b></h3>
                        <div class="search">
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="w-100 text_p1 boxvoucher" placeholder="Voucher">
                                </div>
                                <div class="col-4">
                                    <button class="btn_search1">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row"></th>
                                    <td class="col-8">
                                        <p1>Subtotal</p1>
                                    </td>
                                    <td class="col-4 text-end">
                                        <p1 id="rightsub"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td class="col-8" id="shipping">
                                        <p1>Shipping</p1>
                                    </td>
                                    <td class="col-4 text-end"id="shipping-price">
                                        <p1>14.00</p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td class="col-8">
                                        <p1>Discount</p1>
                                    </td>
                                    <td class="col-4 text-end" id="discount-price">
                                        <p1>2.00</p1>
                                    </td>
                                </tr>

                                <tr class="total" style="margin-top: 100px;">
                                    <th scope="row"></th>
                                    <td class="col-8">
                                        <h3><b>TOTAL</b></h3>
                                    </td>
                                    <td class="col-2 text-end" id="totalprice">
                                        <h3><b></b></h3>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="bt-pay pm">
                            @if (auth()->check())
                                <a class="btn" id="btn-p" href="/checkout">
                                    <p1>Payment</p1>
                                </a>
                            @else
                                <a class="btn" id="btn-p" href="/checkout">
                                    <p1>Payment</p1>
                                </a>
                                <div class="overlay"></div>
                                <div class="popup">
                                    <div class="modalbox center">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <h3>Login first!</h3>
                                        <div class="btnback">
                                            <a class="btn" href="{{ url('/dashboard') }}"> Back to HomePage </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="../header-footer/js/jquery-3.7.1.min.js"></script>
    <script src="../header-footer/js/bootstrap.bundle.js"></script>
    <script src="{{ asset('frontend/js/cart.js') }}"></script>
</x-app-layout>
