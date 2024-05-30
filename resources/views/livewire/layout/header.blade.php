<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('frontend/images/Logo Title.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Search by Image</title>
</head>
<body>
    <div>
        <div class="container-fluid nav_top nav_top-header">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo-header">
                        <a href="{{ url('/dashboard') }}">
                            <img src="{{ asset('frontend/images/logo - temp.png') }}" alt="Logo" class="w-100">
                        </a>
                    </div>
                    <div class="col-1"></div>
                    <div class="search-header flex-grow-1 mx-3">
                        <form action="{{ URL::to('search-product-list') }}" method="POST" class="d-flex align-items-center">
                            {{ csrf_field() }}
                            <input type="text" class="form-control search-input-header" placeholder="Search products..." id="searchInput" name="keywords_submit" oninput="checkInput()">
                            <div class="suggestions text_p1" style="display: none;" id="suggestions"></div>
                            <button type="submit" class="btn_search-header" name="search_item">Search</button>
                            <input type="file" id="imageUpload" name="image" style="display: none;" accept="image/*">
                            <button type="button" class="btn btn-link p-0 ml-2" id="imageUploadButton" style="color:#080808;" >
                                <i class="fa fa-camera"></i>
                            </button>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <ul class="d-flex align-items-center mb-0 page_ul_li-header">
                            <li class="page_item-header">
                                <a href="{{ url('/dashboard') }}" class="nav-link-header">Home</a>
                            </li>
                            <div class="col-2"></div>
                            <li class="page_item-header">
                                <a href="{{ url('/product-list') }}" class="nav-link-header">Product</a>
                            </li>
                            <div class="col-2"></div>
                            <li class="page_item-header">
                                <a href="https://www.cheftalk.com/forums/" class="nav-link-header">Forum</a>
                            </li>
                            <div class="col-2"></div>
                            <li class="cart_item-header position-relative">
                                <a href="{{ url('/cart') }}" class="nav-link-header">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div class="cart-count-header">2</div>
                                </a>
                            </li>
                            <div class="col-1"></div>
                            <li class="user_item-header position-relative">
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <i alt="User Avatar" class="fa-solid fa-user cursor-pointer"></i>
                                    </x-slot>
                                    <x-slot name="content">
                                        @if (auth()->check())
                                            <div class="dropdown-menu-right-header">
                                                @if (auth()->user()->role === 'admin')
                                                    <button onclick="window.location='{{ url('/admin-dashboard') }}'" class="dropdown-item-header">
                                                        {{ __('Admin') }}
                                                    </button>
                                                @endif
                                                <button onclick="window.location='{{ url('/account') }}'" class="dropdown-item-header">
                                                    {{ __('Account') }}
                                                </button>
                                                <button wire:click="logout" class="dropdown-item-header">
                                                    {{ __('Log Out') }}
                                                </button>
                                            </div>
                                        @else
                                            <div class="dropdown-menu-right-header">
                                                <button onclick="window.location='{{ url('/login') }}'" class="dropdown-item-header no-wrap">
                                                    {{ __('Log In') }}
                                                </button>
                                                <button onclick="window.location='{{ url('/register') }}'" class="dropdown-item-header no-wrap">
                                                    {{ __('Sign Up') }}
                                                </button>
                                            </div>
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
        <script>
            function checkInput() {
                const searchInput = document.getElementById('searchInput');
                const searchButton = document.getElementById('searchButton');
        
                if (searchInput.value.trim() === '') {
                    searchButton.disabled = true;
                } else {
                    searchButton.disabled = false;
                }
            }
        
            // Run the checkInput function when the page loads to set the initial state
            document.addEventListener('DOMContentLoaded', checkInput);
        </script>
    </body>
</div>

        {{-- Phần hiển thị kết quả tìm kiếm --}}
        @if(session('result'))
            <div class="container mt-3">
                <h3>Best Match:</h3>
                <p>{{ session('result')['best_match'] }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="container mt-3">
                <h3>Error:</h3>
                <p>{{ session('error') }}</p>
            </div>
        @endif
    </div>

    <script>
        document.getElementById('imageUploadButton').addEventListener('click', function() {
            document.getElementById('imageUpload').click();
        });

        document.getElementById('imageUpload').addEventListener('change', function() {
            const formData = new FormData();
            formData.append('image', this.files[0]);

            fetch('{{ route("search-by-image") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Hiển thị kết quả tìm kiếm
                if (data.best_match) {
                    alert('Best Match: ' + data.best_match);
                } else if (data.error) {
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>

    <script src="{{ asset('frontend/js/homepage.js') }}"></script>
</body>
</html>
