@extends ('layout.app')
@section('pageTitle', 'FAQs')
@section ('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 m-tb-84" style="background-image: url({{asset('img/bg-01.jpg')}});">
        <h2 class="ltext-105 cl0 txt-center">
            FAQs
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-b-120">
        <div class="container">
            <div class="row p-b-30">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Ciao, come possiamo aiutarti?
                        </h3>

                        <ul>
                            <li class="p-b-10">
                                <a href="https://www.17track.net/it" class="mtext-107 cl7 hov-cl1 trans-04">
                                    Come posso tracciare il mio ordine?
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ route('resogratuito') }}" class="mtext-107 cl7 hov-cl1 trans-04">
                                    Come posso effettuare un reso?
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ route('spedizione') }}" class="mtext-107 cl7 hov-cl1 trans-04">
                                    Quando arriva il mio ordine?
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
