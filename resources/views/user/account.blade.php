@extends('components.layout')
@section('account')

<title>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</title>
<link rel="stylesheet" href="{{asset('/frontend/css/account.css')}}">

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
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Carts</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-6">
            <form action="#">
                <div class="row">
                    <div class="col-6 box_account">
                        <h1>MY PROFILE</h1>
                    </div>
                    <div class="col-6"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="title">
                            <p>My Name</p>
                        </div>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-12 boxac">
                        <input type="text" placeholder="Nguyen Van A" class="inside">
                    </div>
                    <div class="col-4">
                        <div class="title">
                            <p>Date of Birth</p>
                        </div>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-12 boxac">
                        <input type="text" placeholder="01/01/2000" class="inside">
                    </div>
                    <div class="col-4">
                        <div class="title">
                            <p>Phone Number</p>
                        </div>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-12 boxac">
                        <input type="text" placeholder="0123456789" class="inside">
                    </div>
                    <div class="col-4">
                        <div class="title">
                            <p>Email</p>
                        </div>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-12 boxac">
                        <input type="text" placeholder="Nguyenvana@gmail.com" class="inside">
                    </div>
                    <div class="col-4">
                        <div class="title">
                            <p>Address</p>
                        </div>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-12 boxac">
                        <input type="text" placeholder="22/11/33 HCM city" class="inside">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <button class="button_ac1">Cancel</button>
                    </div>
                    <div class="col-4">
                        <button class="button_ac2">Save</button>
                    </div>
                    <div class="col-2"></div>
                </div>
            </form>
            
        </div>
        <div class="col-2 avatar">
            <div class="circle"></div>
        </div>

    </div>
</div>
    
<script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.js')}}"></script>

@endsection