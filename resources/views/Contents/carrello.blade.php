@extends ('layout.app')
@section('pageTitle', 'Carrello')
@section ('content')
<div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{route('coza')}}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Carrello
			</span>
        </div>
    </div>
<form class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Prodotto</th>
                                <th class="column-2"></th>
                                <th class="column-3">Prezzo</th>
                                <th class="column-4">Quantità</th>
                                <th class="column-5">Totale</th>
                            </tr>
                            @if($prodotti)
                                @foreach($prodotti as $prodotto)
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1" value="{{$prodotto["id"]}}">
                                        <img src="{{asset('storage/'.$prodotto["immagine_path"])}}" alt="IMG">
                                    </div>
                                </td>
                                <td class="column-2">{{$prodotto["nome_prodotto"]}}</td>
                                <td class="column-3">€ {{$prodotto["prezzo"]}}</td>
                                <td class="column-4">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$prodotto["qty"]}}">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="column-5">€ {{$prodotto["prezzo"] * $prodotto["qty"]}}</td>
                            </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Applica Coupon
                            </div>
                        </div>

                        <button class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 js-cartupdate">
                            Aggiorna Carrello
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-15 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Resoconto Carrello
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
								<span class="stext-110 cl2">
									Totale
								</span>
                        </div>

                        <div class="size-209">
								<span class="mtext-110 cl2 js-price-total">
									@if($prezzo != 0)
                                        $ {{$prezzo}}
                                    @else
                                        $ {{0}}
                                    @endif
								</span>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="flex-col-l-m p-b-60 p-t-40 size-111">
                            <div class="size-111 respon6">
                                Indirizzo Spedizione:
                            </div>

                            <div class="size-116 respon6-next">
                                <div class="rs1-select2 bor8 bg0 size-116">
                                    <select class="js-select2" id="addreselect" name="time">
                                        <option>Seleziona Indirizzo</option>
                                        @if($indirizzi!=null)
                                        @foreach($indirizzi as $indirizzo)
                                        <option>{{$indirizzo->citta}}({{$indirizzo->provincia}}) ,Via {{$indirizzo->via}} {{$indirizzo->civico}}</option>
                                            @endforeach
                                            @endif
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-col-l-m p-b-30 p-t-40 size-111">
                            <div class="size-111 respon6">
                                Metodo di Pagamento:
                            </div>

                            <div class="size-116 respon6-next">
                                <div class="rs1-select2 bor8 bg0 size-116">
                                    <select class="js-select2" id="payselect" name="time">
                                        <option>Seleziona Pagamento</option>
                                        @if($payments!=null)
                                        @foreach($payments as $metodo)
                                        <option>***{{substr($metodo->numero, 12)}}</option>
                                            @endforeach
                                            @endif
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
								<span class="mtext-101 cl2">
									Totale:
								</span>
                        </div>

                        <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
                                    @if($prezzo != 0)
									$ {{$prezzo}}
                                        @else
                                        $ {{0}}
                                        @endif
								</span>
                        </div>
                    </div>

                    <div class="p-b-60">
                    <a href="#" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer js-effettua-pagamento">
                        Procedi al Pagamento
                    </a>
                    </div>

                    <div class="alert alert-danger print-error-msg" style="visibility: hidden">
                        <ul></ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
</html>
@endsection