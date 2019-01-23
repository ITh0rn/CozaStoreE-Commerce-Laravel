@extends ('layout.app')
@section('pageTitle', 'Profilo')
@section ('content')

    <section class="bg0 p-t-80 p-b-60">
            <div class="container">
                <div class="flex-row p-t-80">
                    <div class="side-menu p-r-60">
                        <div class="">
                            <div class="cl2 trans-04">
                                <i class="zmdi zmdi-account-circle p-r-50 p-b-10" style="font-size: 100px"></i>
                            </div>
                            <a class="mtext-101 cl6 bor3 m-tb-5">{{Auth::user()->name}}</a>
                        </div>
                        <div class="p-t-40">

                            <h4 class="mtext-112 cl2 p-b-33">
                                Profilo
                            </h4>

                            <ul>
                                <li class="">
                                    <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        Modifica Dati
                                    </a>
                                </li>

                                <li class="bor18">
                                    <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        I Miei Ordini
                                    </a>
                                </li>

                                <li class="bor18">
                                    <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        Indirizzi
                                    </a>
                                </li>

                                <li class="bor18">
                                    <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        Opzioni Di Pagamento
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-l-40 p-l-40 m-t-15">
                        <table class="table-profile p-t-30">
                            <tr class="table_head">
                                <th class="column-1">N° Ordine</th>
                                <th class="column-2"></th>
                                <th class="column-3">Prodotti</th>
                                <th class="column-4">Sconto</th>
                                <th class="column-5">Totale</th>
                            </tr>
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="how-itemcart1">
                                                <!--<img alt="IMG">-->
                                            </div>
                                        </td>
                                        <td class="column-2"></td>
                                        <td class="column-3"></td>
                                        <td class="column-4">
                                        </td>
                                        <td class="column-5"></td>
                                    </tr>
                        </table>
                    </div>
                </div>
            </div>
    </section>

@endsection