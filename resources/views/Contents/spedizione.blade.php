@extends ('layout.app')
@section('pageTitle', 'Spedizione')
@section ('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 m-tb-84" style="background-image: url({{asset('img/bg-01.jpg')}});">
        <h2 class="ltext-105 cl0 txt-center">
            Spedizione
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-b-120">
        <div class="container">
            <div class="row p-b-30">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Tempi Di Spedizione
                        </h3>

                        <br class="stext-113 cl6 p-b-26">
                            La consegna avviene tra 3 e 6 giorni lavorativi, da calcolare dal momento in cui il pacco lascia il nostro magazzino (fine settimana e giorni festivi esclusi):</br>
                        </br>
                            - 3 giorni per il Nord;</br>
                        </br>
                            - 3/4 giorni per il Centro;</br>
                        </br>
                            - 4/6 per il Sud e le Isole.</br>
                        </br>
                            Quando il pacco sarà spedito dai nostri magazzini, riceverai un'email di conferma spedizione nella quale troverai un link su cui cliccare e seguire la consegna che avviene tra le 9.00 e le 18.00, dal lunedì al venerdì.
                            È possibile che gli orari cambino a seconda della zona.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
