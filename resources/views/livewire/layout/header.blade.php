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

        {{-- New css --}}
        {{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- bootstrap-css -->
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
        <!-- //bootstrap-css -->
        <!-- Custom CSS -->
        <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' />
        <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
        <!-- font CSS -->
        <link
            href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
            rel='stylesheet' type='text/css'>
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{ asset('backend/css/font.css') }}" type="text/css" />
        <link href="{{ asset('backend/css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('backend/css/morris.css') }}" type="text/css" />
        <!-- calendar -->
        <link rel="stylesheet" href="{{ asset('backend/css/monthly.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/adminDashboard.css') }}">
        <link rel="stylesheet"
            href="{{ 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' }}">
        <!-- //calendar -->
        <!-- //font-awesome icons -->
        <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
        <script src="{{ asset('backend/js/raphael-min.js') }}"></script>
        <script src="{{ asset('backend/js/morris.js') }}"></script> --}}
        {{-- <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}"> --}}


        {{-- ==================================================================================================== --}}

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
                        <form action="{{ URL::to('search-product-list') }}" method="POST" class="row">
                            {{ csrf_field() }}
                            <div class="col-8">
                                <input type="text" class="w-100 text_p1" placeholder="Search products..."
                                    id="searchInput" name="keywords_submit">
                                <div class="suggestions text_p1" style="display: none;" id="suggestions"></div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn_search" name="search_item">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-4 pages">
                        <ul class="d-flex justify-content-end page_ul_li">
                            <li class="page_item ">
                                <div><a href="{{ url('/dashboard') }}">Home</a></div>
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

                            <li class="user_item">
                                <x-dropdown width="48">
                                    <x-slot name="trigger">
                                        @if (auth()->check())
                                            <div class="user-trigger">
                                                <img src="{{ asset('frontend/images/homepage/image 25 (2).png') }}"
                                                    alt="User Avatar" class="avatar">
                                                <span class="username">
                                                    {{ auth()->user()->name }}
                                                </span>
                                            </div>
                                        @else
                                            <div class="user-trigger">
                                                <img src="{{ asset('frontend/images/homepage/image 25 (2).png') }}"
                                                    alt="User Avatar" class="avatar">
                                                <span class="username">
                                                    Guest
                                                </span>
                                            </div>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        @if (auth()->check())
                                            <!-- Sử dụng button thay vì link để giữ nguyên style và hành vi nhất quán -->
                                            <button onclick="window.location='{{ url('/account') }}'"
                                                class="dropdown-item">
                                                {{ __('Account') }}
                                            </button>

                                            <!-- Authentication -->
                                            <button wire:click="logout" class="dropdown-item">
                                                {{ __('Log Out') }}
                                            </button>
                                        @else
                                            <button onclick="window.location='{{ url('/login') }}'"
                                                class="dropdown-item">
                                                {{ __('Log In') }}
                                            </button>

                                            <button onclick="window.location='{{ url('/register') }}'"
                                                class="dropdown-item">
                                                {{ __('Sign Up') }}
                                            </button>
                                        @endif
                                    </x-slot>
                                </x-dropdown>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('frontend/js/homepage.js') }}"></script>

        {{-- New js --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script> --}}
    </body>
</div>
