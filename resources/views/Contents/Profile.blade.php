@extends ('layout.app')
@section('pageTitle', 'Profilo')
@section ('content')

    <section class="bg0 p-t-80 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <div class="col-md-4 col-lg-3 p-b-80">
                            <div class="side-menu">
                                <div class="p-t-40">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection