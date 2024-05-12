@extends('components.layout')
@section('checkout')
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout.css') }}">

    <livewire:breadcrumb-banner />
    <!-----------------LEFT---------------------------->
    <div class="container" id="all">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <h1 class="title"><b>DELIVERY DETAILS</b></h1>
                    </div>
                    <div class="col-6">
                        <div class="container">
                            
                            <div class="row pr-list-co">
                                <table id="list">
                                    
                                </table>
                            </div>
                        </div>

                        <table class="table table-borderless">
                            <tr>
                                <th scope="row"></th>
                                <td class="col-8">
                                    <p1>Subtotal</p1>
                                </td>
                                <td class="col-4 text-end">
                                    <p1 id="subtotal"><b></b></p1>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td class="col-8">
                                    <p1>Shipping</p1>
                                </td>
                                <td class="col-4 text-end">
                                    <p1 id="shipping"><b></b></p1>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td class="col-8">
                                    <p1>Discount</p1></td>
                                <td class="col-4 text-end">
                                    <p1 id="discount"><b></b></p1>
                                </td>
                            </tr>

                            <tr class="total" style="margin-top: 100px;">
                                <th scope="row"></th>
                                <td class="col-8">
                                    <h3><b>TOTAL</b></h3>
                                </td>
                                <td class="col-2 text-end">
                                    <h3 id="total"><b></b></h3>
                                </td>
                                <td class="col-2"></td>
                            </tr>
                            </caption>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>


                    </div>
                    <!----------------------right----------------------------->

                    <div class="col-5 cont">
                        <form required>
                            <div class="row">
                                <h6><b>E-mail</b></h6>
                                <input type="email" placeholder="Nguyenvana@gmail.com" class="deli" id="email">
                                <h6 class="ip"><b>Name</b></h6>
                                <input type="text" placeholder="Nguyen Van A" class="deli" id="name">
                                <h6 class="ip"><b>Phone Number</b></h6>
                                <input type="tel" placeholder="0123456789" class="deli" id="phone">
                                <h6 class="ip"><b>Address</b></h6>
                                <input type="text" placeholder="11/22/33 Ho Chi Minh city" class="deli" id="address">
                                <h6 class="pmmt"><b>Payment Methods</b></h6>
                                <select class="form-select form-select-pm pmbox">
                                    <option selected>COD</option>
                                    <option>Bank</option>
                                </select>
                                <h6 id="checkinfo">Please check information</h6>
                                <div class="col-8 bt-pay pm">
                                    <button class="btn" id="btn-p">
                                        <p1>Payment</p1>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-----------DONE--------------->
    <div class="overlay"></div>
    <div class="popup">
        <div class="modalbox center">
            <i class="fa-solid fa-circle-check"></i>
            <h3>PAYMENT COMPLETE</h3>
            <div class="btnback">
                <a class="btn" href="http://localhost:8000"> Back to HomePage </a>
            </div>
        </div>
    </div>

    <!------------QR---------------->
    <div class="bankmethod">
        <img src="{{ asset('frontend/images/checkout-cart/cay-lan-bot-trung-go-xa-cu-tu-nhien-ichigo-ig-5550-201903061343233383.jpg') }}"
            class="qr">
    </div>


    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>
@endsection
