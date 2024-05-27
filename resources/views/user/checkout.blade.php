<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <livewire:breadcrumb-banner />
    <!-----------------LEFT---------------------------->
    <div class="container" id="all">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1 class="title"><b>INVOICE</b></h1>
                    </div>
                    <div class="col-6">
                        <h1 class="title"><b>DELIVERY DETAILS</b></h1>
                    </div>
                    <div class="col-6">
                        <div class="container">
                            <form>
                            <div class="row pr-list-co">
                                <table id="list">
                                </table>
                            </div>
                            </form>
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
                                    <p1>Discount</p1>
                                </td>
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
                        <form required id="updateForm" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <h6><b>E-mail</b></h6>
                                <div class="col-12 boxac w-full d-flex align-items-center">
                                    <div class="font-medium text-base text-gray-800">
                                        <div>{{ auth()->user()->email }}</div>
                                    </div>
                                </div>


                                <h6 class="ip"><b>Name</b></h6>
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ name: '{{ auth()->user()->name }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->name)
                                        <div class="font-medium text-base text-gray-800 w-full">
                                            <span x-show="!editing" x-text="name"></span>
                                            <input x-show="editing" id="name" x-model="name" class="deli"
                                                name="name" placeholder="Nguyen Van A"
                                                @keydown.enter="editing = false"
                                                @change="if (name == '') editing = false"
                                                class="deli border-0 outline-none bg-transparent w-full"
                                                style="width: 550px">
                                        </div>
                                    @else
                                        <input type="text" placeholder="Nguyen Van A" class="deli" id="name"
                                            name="name">
                                    @endif
                                </div>
                                <h6 class="ip"><b>Phone Number</b></h6>
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ phone: '{{ auth()->user()->phone_number }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->phone_number)
                                        <div class="font-medium text-base text-gray-800 w-full">
                                            <span x-show="!editing" x-text="phone"></span>
                                            <input x-show="editing" id="phone" x-model="phone" name="phone"
                                                @keydown.enter="editing = false"
                                                @change="if (phone == '') editing = false"
                                                class="border-0 outline-none bg-transparent w-full" style="width: 100%">
                                        </div>
                                    @else
                                        <input type="tel" placeholder="0123456789" class="deli" id="phone"
                                            name="phone">
                                    @endif
                                </div>
                                <h6 class="ip"><b>Address</b></h6>
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ address: '{{ auth()->user()->address }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->address)
                                        <div
                                            class="font-medium text-base text-gray-800 w-full d-flex align-items-center">
                                            <span x-show="!editing" x-text="address"></span>
                                            <input x-show="editing" id="address" x-model="address" name="address"
                                                @keydown.enter="editing = false"
                                                @change="if (address == '') editing = false"
                                                class="border-0 outline-none bg-transparent w-full flex-grow-1"
                                                x-bind:style="editing ? 'width: 100%' : ''">
                                        </div>
                                    @else
                                        <input type="text" placeholder="11/22/33 Ho Chi Minh city" class="deli"
                                            id="address" name="address">
                                    @endif
                                </div>

                                <h6 class="pmmt"><b>Payment Methods</b></h6>
                                <select class="form-select form-select-pm pmbox">
                                    <option selected>COD</option>
                                    <option>Bank</option>
                                </select>
                                <h6 id="checkinfo">Please check information</h6>
                                <div class="col-8 bt-pay pm">
                                    <button type="submit" class="btn" id="btn-p">
                                        <p1>Payment</p1>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                        <form action="{{ URL::to('/vnpay') }}" method="POST">
                             @csrf
                            <button type="submit" name="redirect">VNPAY</button>
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

    <script>
        document.getElementById('updateForm').addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            // Lấy sản phẩm từ localStorage và tính tổng
            var products = JSON.parse(localStorage.getItem('products'));
            var total = products.reduce(function(sum, item) {
                return sum + (item.price * item.quantity);
            }, 0);

            // Lấy thông tin giỏ hàng từ localStorage
            var cartData = JSON.parse(localStorage.getItem('cartData'));
            var shipping = cartData.shippingPrice;
            var discount = cartData.discountPrice;

            // Tính tổng cuối cùng
            total += shipping;
            total -= discount;
            // Thêm tổng vào FormData
            formData.append('total', total);
            stringProductData = JSON.stringify(cartData.products)
            console.log('stringProductData:', stringProductData);
            // Thêm cartData vào FormData dưới dạng JSON string
            formData.append('productData', stringProductData);
            // console.log('cartData:', JSON.stringify(cartData));
            // for (var pair of formData.entries()) {
            //     console.log(pair[0] + ', ' + pair[1]);
            // }

            var data = {
                name: formData.get('name'),
                phone: formData.get('phone'),
                address: formData.get('address'),
                total: total,
                cartData: cartData
            };

            // Gửi dữ liệu qua axios
            axios.post('{{ url('/update/' . auth()->user()->id) }}', data)
                .then(function(response) {
                    console.log('Success:', response);
                })
                .catch(function(error) {
                    console.log('Error:', error);
                });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>
</x-app-layout>
