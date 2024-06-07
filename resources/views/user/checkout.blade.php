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
                                                class="border-0 outline-none bg-transparent w-full" style="width: 550px">
                                        </div>
                                    @else
                                        <input type="tel" placeholder="0123456789" class="deli" id="phone"
                                            name="phone" style="width: 550px">
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
                                                x-bind:style="editing ? 'width: 550px' : ''">
                                        </div>
                                    @else
                                        <input type="text" placeholder="11/22/33 Ho Chi Minh city" class="deli"
                                            id="address" name="address" style="width: 550px">
                                    @endif
                                </div>

                            </div>
                        </form>
                        <form required id="updateForm" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <!-- Form fields here -->
                                <button type="submit" onclick="handleVNPay(event);" name="redirect" id="btn-p" class="btn bt-pay pm">VNPay</button>
                            </div>
                        </form> 
 @if (session('popup'))
<div class="overlay active"></div>
<div class="popup active">
    <div class="modalbox center">
        <i class="fa-solid fa-circle-check"></i>
        <h3>{{ session('popup') }}</h3>
        <div class="btnback">
            <a class="btn" id="back" href = "http://localhost:8000">Back to HomePage</a>
        </div>
    </div>
</div>

<script>
    // Xóa local storage khi popup thành công được hiển thị
    localStorage.removeItem('cartData');
    localStorage.removeItem('products');

</script>
@endif
<script>
function handleUpdateForm() {
    var formData = new FormData(document.getElementById('updateForm'));
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
    stringProductData = JSON.stringify(cartData.products);
    console.log('stringProductData:', stringProductData);
    // Thêm cartData vào FormData dưới dạng JSON string
    formData.append('productData', stringProductData);
    
    var data = {
        name: formData.get('name'),
        phone: formData.get('phone'),
        address: formData.get('address'),
        total: total,
        cartData: cartData,
    };
    // Gửi dữ liệu qua axios
    axios.post('{{ url('/update/' . auth()->user()->id) }}', data)
        .then(function(response) {
            console.log('Success:', response);
        })
        .catch(function(error) {
            console.log('Error:', error);
        });
}

function handleVNPay(event) {
    event.preventDefault(); // Ngăn chặn form bị submit

    var formData = new FormData(document.getElementById('updateForm'));

    var data = {
        name: formData.get('name'),
        phone: formData.get('phone'),
        address: formData.get('address'),
        total: formData.get('total'),
        cartData: JSON.parse(localStorage.getItem('cartData'))
    };

    axios.post('{{ url('/save-temp-data') }}', data)
        .then(function(response) {
            console.log('Data saved:', response);
            if (response.data.success) {
                axios.post('{{ url('/vnpay') }}', data) 
                    .then(function(response) {
                        console.log('Success:', response);
                        if (response.data.code === '00') {
                            window.location.href = response.data.data; // Chuyển hướng đến trang thanh toán VNPay
                        }
                    })
                    .catch(function(error) {
                        console.log('Error:', error);
                    });
            }
        })
        .catch(function(error) {
            console.log('Error:', error);
        });
}

document.getElementById('btn-p').addEventListener('click', handleVNPay);



const popup = document.querySelector(".popup");
const qr = document.querySelector(".qr");
const bankmethod = document.querySelector(".bankmethod");
const overlay = document.querySelector(".overlay");

overlay.addEventListener("click", () => {
    // popup.classList.remove("active");
    // bankmethod.classList.remove("active");
});
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/checkout.js') }}"></script>
</x-app-layout>
