@if($products)
    @foreach($products as $product)
        <ul class="header-wish-wrapitem w-full">
            <li class="header-wish-item flex-t m-b-12">
                <div class="header-wish-item-img" value="{{$product->id}}">
                    <img src="{{asset('storage/'.$product->img_dir)}}" alt="IMG">
                </div>

                <div class="header-wish-item-txt p-t-8">
                    <a href="{{route('dettaglio', ["nome_prodotto" => $product->nome, "id_prodotto" => $product->id])}}" class="header-wish-item-name m-b-18 hov-cl1 trans-04">
                        {{$product->nome}}
                    </a>
                </div>
            </li>
        </ul>
    @endforeach
    <div class="w-full">
        <div class="header-cart-total w-full p-tb-40">
        </div>
    </div>
@endif
