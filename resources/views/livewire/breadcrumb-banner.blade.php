<link rel="stylesheet" href="{{asset('frontend/css/livewire/breadcrumb-banner.css')}}">
<div>
    @if (Str::contains(url()->current(), 'product-detail'))
        <div class="contanier-fluid bg-breadcrub my-3" style="background-image: url('{{'/frontend/images/pr-detail/banner.png'}}');">
            <div class="col-12 text-center">
                <h2>{{ $productName }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/product-list') }}">Product List</a></li>
                        <li class="breadcrumb-item active">{{ $productName }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    @else
        <div class="contanier-fluid bg-breadcrub my-3" style="background-image: url('{{'/frontend/images/pr-detail/banner.png'}}');">
            <div class="col-12 text-center">
                <h2>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    @endif
</div>
