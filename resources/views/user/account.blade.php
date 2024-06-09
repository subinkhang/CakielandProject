    <x-app-layout>
        <title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
        <link rel="stylesheet" href="{{ asset('/frontend/css/account.css') }}">
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script> --}}
        <livewire:breadcrumb-banner />
        <!-- ACCOUNT -->
        <div class="container">
            <div class="row">
                <div class="col-3 pr-list-sidebar">
                    <div class="row pr-list-sidebar-title">
                        <div class="col-8 my_account oho">
                            <h3>My Account</h3>
                        </div>
                        <div class="line"></div>
                        <div class="col-8 list_ac oho">
                            <ul>
                                <li><a href="{{ url('/account') }}">My Proflie</a></li>
                                <li><a href="{{ url('/cart') }}">My Carts</a></li>
                                <li><a href="{{ url('/my-orders') }}">My Orders</a></li>
                                <li><a href="{{ url('/about-us') }}">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-8">
                    <form action="{{ route('update.account') }} " method="POST" role="form" onsubmit="return validateDateOfBirth()" enctype="multipart/form-data">
                        <div class="col-10">
                            {{ csrf_field() }}
                            <div class="row d-flex align-items-center">
                                <div class="col-8 box_account">
                                    <h1>MY PROFILE</h1>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <label for="avatarUpload" class="position-relative">
                                        <img class="circle" id="avatarPreview"
                                            src="{{ $avatar ? asset('public/avatars/' . $avatar) . '?' . time() : asset('default-avatar.png') }}"
                                            alt="">
                                        <input type="file" id="avatarUpload" accept="image/*" name="avatar" style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="title">
                                        <p>Full Name</p>
                                    </div>
                                </div>
                                <div class="col-8"></div>
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ name: '{{ auth()->user()->name }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->name)
                                        <div class="font-medium text-base text-gray-800 w-full">
                                            <span x-show="!editing" x-text="name"></span>
                                            <input x-show="editing" id="Name" x-model="name" name="name"
                                                @keydown.enter="editing = false"
                                                @change="if (name == '') editing = false"
                                                class="border-0 outline-none bg-transparent w-full"
                                                style="width: 530px">
                                        </div>
                                    @else
                                        <input id="Name" type="text" placeholder="Name" class="inside w-full"
                                            name="name">
                                    @endif
                                </div>
                                <div class="col-4">
                                    <div class="title">
                                        <p>Date of Birth</p>
                                    </div>
                                </div>
                                <div class="col-8"></div>
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ dob: '{{ \Carbon\Carbon::parse(auth()->user()->date_of_birth)->format('d/m/Y') }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->date_of_birth)
                                        <div class="font-medium text-base text-gray-800 w-full">
                                            <span x-show="!editing" x-text="dob"></span>
                                            <input type="date" x-show="editing" id="Birth" x-model="dob"
                                                name="dob" @keydown.enter="editing = false"
                                                @change="if (dob == '') editing = false"
                                                class="border-0 outline-none bg-transparent w-full"
                                                style="width: 530px">
                                        </div>
                                    @else
                                        <input type="date" id="Birth" placeholder="Birth" class="inside w-full"
                                            name="dob">
                                    @endif
                                </div>
                                <div class="col-4">
                                    <div class="title">
                                        <p>Phone number</p>
                                    </div>
                                </div>
                                <div class="col-8"></div>
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ phone: '{{ auth()->user()->phone_number }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->phone_number)
                                        <div class="font-medium text-base text-gray-800 w-full">
                                            <span x-show="!editing" x-text="phone"></span>
                                            <input x-show="editing" id="Phone_number" x-model="phone" name="phone"
                                                @keydown.enter="editing = false"
                                                @change="if (phone == '') editing = false"
                                                class="border-0 outline-none bg-transparent w-full"
                                                style="width: 530px">
                                        </div>
                                    @else
                                        <input id="Phone_number" type="text" placeholder="Phone Number"
                                            name="phone" class="inside w-full">
                                    @endif
                                </div>
                                <div class="col-4">
                                    <div class="title">
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="col-8"></div>
                                <div class="col-12 boxac w-full d-flex align-items-center">
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
                                <div class="col-12 boxac w-full d-flex align-items-center" x-data="{ address: '{{ auth()->user()->address }}', editing: false }"
                                    @click.away="editing = false" @click="editing = true">
                                    @if (auth()->user()->address)
                                        <div class="font-medium text-base text-gray-800 w-full d-flex align-items-center">
                                            <span x-show="!editing" x-text="address"></span>
                                            <input x-show="editing" id="Address" x-model="address"
                                                name = "address" @keydown.enter="editing = false"
                                                @change="if (address == '') editing = false"
                                                class="border-0 outline-none bg-transparent w-full flex-grow-1"
                                                x-bind:style="editing ? 'width: 530px' : ''">
                                        </div>
                                    @else
                                        <input id="Address" type="text" placeholder="Address"
                                            class="inside w-full flex-grow-1" name="address">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-4">
                                    <button class="button_ac1" type="reset">Reset</button>
                                </div>
                                <div class="col-4">
                                    <button class="button_ac2" type="submit" name="submit" value="save"
                                        formaction="/update-account">Save</button>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
        <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('frontend/js/account.js') }}"></script>
    </x-app-layout>
