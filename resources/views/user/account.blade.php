<x-app-layout>
    <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
    <link rel="stylesheet" href="{{ asset('/frontend/css/account.css') }}">

    <livewire:breadcrumb-banner />
    <!-- ACCOUNT -->
    <div class="container">
        <div class="row">
            <div class="col-3 pr-list-sidebar">
                <div class="row pr-list-sidebar-title">
                    <div class="col-8 my_account">
                        <h3>My Account</h3>
                    </div>
                    <div class="line"></div>
                    <div class="col-8 list_ac">
                        <ul>
                            <li><a href="#">My Proflie</a></li>
                            <li><a href="../Cart/cart.html">My Carts</a></li>
                            <li><a href="../MyOrder/myorder.html">My Orders</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <form action="#" onsubmit="return validateDateOfBirth()">
                    <div class="row">
                        <div class="col-6 box_account">
                            <h1>MY PROFILE</h1>
                        </div>
                        <div class="col-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="title">
                                <p>Full Name</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            {{-- <input id="Name" type="text" placeholder="Nguyen Van A" class="inside"> <br> --}}
                            <div class="font-medium text-base text-gray-800" x-data="{ name: '{{ auth()->user()->name }}', editing: false }"
                                @click.away="editing = false">
                                <span x-show="!editing" @click="editing = true" x-text="name"></span>
                                <input x-show="editing" x-model="name" @keydown.enter="editing = false"
                                    class="border-0 outline-none bg-transparent">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Date of Birth</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input id="Birthday" type="datetime" placeholder="01/01/2000" class="inside">
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p> </p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input id="Phone_number" type="text" placeholder="0123456789" class="inside">
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Email</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <div class="font-medium text-base text-gray-800">
                                <div>{{ auth()->user()->email }}</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="title">
                                <p>Address</p>
                            </div>
                        </div>
                        <div class="col-8"></div>
                        <div class="col-12 boxac">
                            <input id="Address" type="text" placeholder="22/11/33 HCM city" class="inside">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-4">
                            <button class="button_ac1" type="reset">Cancel</button>
                        </div>
                        <div class="col-4">
                            <button class="button_ac2">Save</button>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
            </div>
            <div class="col-2 avatar">
                <label for="avatarUpload">
                    <div class="circle"></div>
                </label>
                <input type="file" id="avatarUpload" accept="image/*" style="display: none;">
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/account.js') }}"></script>
</x-app-layout>
