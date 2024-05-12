<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/homepage.css') }}">
        <link rel="stylesheet" href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="container-fluid  nav_top">
            <div class="container">
                <div class="row">
                    <div class="col-2 logo">
                        <a href="{{ url('/dashboard') }}"><img src="{{ asset('frontend/images/logo - temp.png') }}"
                                alt=""class="w-100"></a>
                    </div>
                    <div class="col-2"></div>
                    {{-- @if (!request()->is('*admin*')) --}}
                        <div class="col-4 search">
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="w-100 text_p1" placeholder="Search products..."
                                        id="searchInput">
                                    <div class="suggestions text_p1" style="display: none;"></div>
                                </div>
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
                                    <div><a href="{{ url('/product-list') }}">Product</a></div>
                                </li>
                                <li class="page_item ">
                                    <div><a href="#">Forum</a></div>
                                </li>
                                <li class="cart_item">
                                    <a href="{{ url('/cart') }}"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <div>
                                        <p>2</p>
                                    </div>
                                </li>
                                <li class="cart_item">
                                    <x-dropdown width="48">
                                        <x-slot name="trigger">
                                            <i class="fa-solid fa-user"></i>
                                        </x-slot>

                                        <x-slot name="content">
                                            <button class="w-full text-start"
                                                onclick="window.location='{{ url('/account') }}'">
                                                <x-dropdown-link>
                                                    {{ __('Account') }}
                                                </x-dropdown-link>
                                            </button>

                                            <!-- Authentication -->
                                            <button wire:click="logout" class="w-full text-start">
                                                <x-dropdown-link>
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </button>
                                        </x-slot>
                                    </x-dropdown>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </body>
</div>
