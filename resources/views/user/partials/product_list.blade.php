@foreach ($list_product as $key => $list_product_user)
    @php 
        $escapedBrand = preg_replace('/[^A-Za-z0-9]/', '-', $list_product_user->brand); 
    @endphp
    <div class="col-4 product-item {{$escapedBrand}}">
        <div class="pr-i3" data-brand="{{ $list_product_user->brand }}">
            <a href="{{ URL::to('product-detail/' . $list_product_user->id) }}">
                <img src="{{ asset('public/backend/upload/' . $list_product_user->thumbnail) }}" alt="" class="w-100 productList_image">
                <div class="text-hidden">{{ asset($list_product_user->thumbnail) }}</div>
            </a>
            <span class="btn_add"><i class="fa-solid fa-circle-plus" onclick="addToCart(this)"></i></span>
            <div class="container_information">
                <a href="#" class="pr-i2-name">{{ strlen($list_product_user->name) > 30 ? substr($list_product_user->name, 0, 30).'...' : $list_product_user->name }}</a>
                <ul class="pr-i2-rating d-flex">
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <div class="text_product">
                    {{ strlen($list_product_user->description) > 115 ? substr($list_product_user->description, 0, 115).'...' : $list_product_user->description }}
                </div>
                <div class="pr-i2-id" style="display: none;">
                    {{ $list_product_user->id }}
                </div>
                <div class="row productList_price">
                    <div class="col-6">
                        <p class="old-price">{{$list_product_user->fake_price}}</p>
                    </div>
                    <div class="col-6 text-end">
                        <p class="new-price">{{ $list_product_user->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
