 @if($products)
         @foreach($products as $product)
            <ul class="header-cart-wrapitem w-full">
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img" value="{{$product["id"]}}">
                        <img src="{{asset('storage/'.$product["immagine_path"])}}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="{{route('dettaglio', ["nome_prodotto" => $product["nome_prodotto"], "id_prodotto" => $product["id"]])}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{$product["nome_prodotto"]}}
                        </a>

                        <span class="header-cart-item-info">
								Prezzo: € {{$product["prezzo"]}}
							</span>
                        <span class="header-cart-item-info">
								Numero pezzi: {{$product["qty"]}}
							</span>
                    </div>
                </li>
            </ul>
            @endforeach
             <div class="w-full">
                 <div class="header-cart-total w-full p-tb-40">
                     Totale: $ {{$prezzo}}
                 </div>
                 @auth
                 <div class="header-cart-buttons flex-w w-full">
                     <a href="{{ route('carrello', Auth::user()->name)}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                         Vedi Carrello
                     </a>
                 </div>
                 @endauth
                 @guest
                     <div class="header-cart-buttons flex-w w-full">
                         <a href="{{ route('carrello', 'Guest')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                             Vedi Carrello
                         </a>
                     </div>
                 @endguest
             </div>
            @endif
