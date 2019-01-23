@extends ('layout.app')
@section('pageTitle', 'Reso Gratuito')
@section ('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 m-tb-84" style="background-image: url({{asset('img/bg-01.jpg')}});">
        <h2 class="ltext-105 cl0 txt-center">
            Reso Gratuito
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-b-120">
        <div class="container">
            <div class="row p-b-30">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Come effettuare un reso
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Hai 100 giorni di tempo per restituire il tuo ordine gratuitamente!
                            Il rimborso avverrà entro 10 giorni lavorativi dal momento della consegna del reso al corriere.
                            Nel caso tu abbia pagato le spese per la spedizione standard e decida di rendere l'ordine per intero, queste ti verranno rimborsate.
                        </p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Restituisci un articolo
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            1. Accedi al tuo account, clicca su "I miei ordini" e sull'ordine che vuoi restituire interamente o parzialmente.<br/>
                            2. Clicca su "Restituisci l'articolo".<br/>
                            3. Spunta l'apposita casella per indicare quali articoli restituire. Nel caso volessi restituirli tutti, spunta tutte le caselle.<br/>
                            4. Scegli il motivo della restituzione.<br/>
                            5. Se hai pagato l'ordine in contrassegno, seleziona la modalità di rimborso che preferisci tra credito Zalando o bonifico bancario. Se hai pagato con carta di credito o PayPal il rimborso avverrà direttamente sulla stessa carta e sul conto utilizzati al momento dell'acquisto.<br/>
                            6. Nell'ultimo passaggio prenota il ritiro del reso. Clicca su "Programma il ritiro con UPS".<br/>
                            Verrai reindirizzato al sito di UPS e potrai scegliere data e orario per il tuo ritiro a domicilio. Ricorda di avere con te il codice tracking, cioè il codice che inizia per 1Z che trovi sull'etichetta di reso.
                            Inseriscilo al Punto 1 alla dicitura, "Se disponete dei numeri di ricerca per l'etichetta di reso inseriteli qui".
                            Ricorda di copiarlo senza spazi e in stampatello.
                            Il campo relativo al codice cliente UPS non dovrà essere compilato.<br/>

                            Nel caso del ritiro a domicilio, il corriere non ti rilascerà nessuna ricevuta.<br/>

                            Se per te è più comodo portare il reso in un centro UPS, seleziona l'opzione consegna ad un centro di raccolta e scegli quello più vicino a casa tua.<br/>

                            Inserisci gli articoli nel pacco, applica l'etichetta di reso sopra a quella di spedizione e consegna il tuo ordine.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Qualche domanda? Contattaci o vienici a trovare in uno dei nostri shop fisici
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
