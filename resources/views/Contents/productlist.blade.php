@foreach($product as $product)
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-pic hov-img0">
                <img src="{{asset('storage/'.$product->img_dir)}}" alt="IMAGE">
                <button value="{{$product->id}}" href="#" onclick="window.location='{{ route('dettaglio', ["nome_prodotto" => $product->nome, "id_prodotto" => $product->id, 'id_subcat' => $product->id_subcategoria,'gender' => $product->gender])}}'" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                    Dettagli
                </button>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="{{route('dettaglio', ["nome_prodotto" => $product->nome, "id_prodotto" => $product->id, 'id_subcat' => $product->id_subcategoria, 'gender' => $product->gender])}}, route()" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        {{$product->nome}}
                    </a>

                    <span class="stext-105 cl3">
                        {{'€'.$product->price}}
                    </span>
                </div>

                <div class="block2-txt-child2 flex-r p-t-3">
                    <a value='{{$product->id}}' class="btn-addwish-b2 dis-block pos-relative js-addwish-b2" id="btnwish">
                        <img class="icon-heart1 dis-block trans-04" src="{{asset('img/icons/icon-heart-01.png')}}" alt="ICON">
                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('img/icons/icon-heart-02.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endforeach


