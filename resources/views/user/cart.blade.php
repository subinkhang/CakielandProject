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
            <div class="cont">
                <div class="row">
                    <div class="col-7">
                        <div class="cont">
                            <form>
                                <table class="table">
                                    <thead style="position: sticky; top: 0">
                                        <tr class="text-center">
                                            <td class="col-2">No.</td>
                                            <th class="col-8">NAME</th>
                                            <th class="col-2 text-end">SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                            <form>
                                <table id="prod">
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
                                    <input type="text" class="w-100 text_p1 boxvoucher" id="voucher-input" placeholder="Voucher">
                                </div>
                                <div class="col-4">
                                    <button class="btn_search1" id="check-voucher-btn">Submit</button>
                                </div>
                            </div>
                            <div id="voucher-error" class="text-danger" style="text-align:center"></div>
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
                                    <td class="col-4 text-end">
                                        <p1 id="discount-price">0.00</p1>
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
                                        <i class="fa-solid fa-circle-xmark"></i>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#check-voucher-btn').click(function() {
                var voucherCode = $('#voucher-input').val();
        
                $.ajax({
                    url: '/check-voucher',
                    type: 'POST',
                    data: {
                        code_voucher: voucherCode,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var discountPriceElement = $('#discount-price');
                        var errorElement = $('#voucher-error');
                        errorElement.text(''); // Xóa thông báo lỗi trước đó

                        if (response.error) {
                            errorElement.text(response.error); // Hiển thị thông báo lỗi
                        } else {
                            var discountValue = 0;

                            if (response.condition_voucher == "2") {
                                discountValue = parseFloat(response.value_voucher);
                            } else {
                                discountValue = (response.value_voucher / 100) * parseFloat($('#rightsub').text());
                            }
                            discountPriceElement.text(discountValue.toFixed(2));
                            updateTotal();
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        });
        </script>
</x-app-layout>
