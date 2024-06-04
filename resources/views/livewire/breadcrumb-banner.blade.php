<link rel="stylesheet" href="{{asset('frontend/css/livewire/breadcrumb-banner.css')}}">
<div>
    @php
        $url = url()->current();
        $isProductDetail = Str::contains($url, 'product-detail');
        $isSubCategory = Str::contains($url, 'sub-category');
        $categories = [
            4 => 'Dry ingredients',
            5 => 'Wet ingredients',
            6 => 'Baking tools',
            1 => 'Cooking utensils',
            2 => 'Bar tool',
            3 => 'Bar ingredients'
        ];
        $subCategories = [
            1 => 'Stainless steel tools',
            2 => 'Kitchen knife set',
            3 => 'Coffee foam maker',
            4 => 'Measuring cup',
            5 => 'Tea',
            6 => 'Syrup',
            7 => 'Flour',
            8 => 'Yeast',
            9 => 'Milk',
            10 => 'Whipping cream',
            11 => 'Cake mold',
            12 => 'Electric mixer'
        ];
        $subCategoryId = intval(last(explode('sub-category', $url)));
        $categoryName = $categories[floor(($subCategoryId - 1) / 2) + 1] ?? 'Category';
        $subCategoryName = $subCategories[$subCategoryId] ?? 'SubCategory';
    @endphp

    @if ($isProductDetail)
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
    @elseif ($isSubCategory)
        <div class="contanier-fluid bg-breadcrub my-3" style="background-image: url('{{'/frontend/images/pr-detail/banner.png'}}');">
            <div class="col-12 text-center">
                <h2>{{ $subCategoryName }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/category/' . floor(($subCategoryId - 1) / 2) + 1) }}">{{ $categoryName }}</a></li>
                        <li class="breadcrumb-item active">{{ $subCategoryName }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    @else
        <div class="contanier-fluid bg-breadcrub my-3" style="background-image: url('{{'/frontend/images/pr-detail/banner.png'}}');">
            <div class="col-12 text-center">
                <h2>{{ ucwords(str_replace('-', ' ', last(explode('/', $url)))) }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ ucwords(str_replace('-', ' ', last(explode('/', $url)))) }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    @endif
</div>
