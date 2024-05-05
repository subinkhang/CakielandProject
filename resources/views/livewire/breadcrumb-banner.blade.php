<link rel="stylesheet" href="{{asset('frontend/css/livewire/breadcrumb-banner.css')}}">
<div>
    <div class="contanier-fluid bg-breadcrub my-3" style="background-image: url('{{'/frontend/images/pr-detail/banner.png'}}');">
        <div class="col-12 text-center">
            <h2>{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{ ucwords(str_replace('-', ' ', last(explode('/', url()->current())))) }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
