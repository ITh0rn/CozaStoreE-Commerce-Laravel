<h5 class="mtext-108 cl2 p-b-25" xmlns="http://www.w3.org/1999/html">
    Le tue opzioni di pagamento:
</h5>

<table class="table-profile p-t-30 m-b-30">
    <tr class="table_head">
        <th class="column-2 p-l-50">Nome</th>
        <th class="column-2">Cognome</th>
        <th class="column-3">Numero carta</th>
        <th class="column-4">Scadenza</th>
        <th class="column-5">Circuito</th>
        <th class="column-6 p-l-50">Elimina</th>
    </tr>
    @if(count($pagamento) > 0)
    @foreach($pagamento as $pagamento)
    <tr class="table_row">
        <td class="column-2 p-l-50">{{$pagamento->nome}}</td>
        <td class="column-2">{{$pagamento->cognome}}</td>
        <td class="column-3">***{{substr($pagamento->numero, 12)}}</td>
        <td class="column-4">{{$pagamento->scadenza}}</td>
        <td class="column-5">{{$pagamento->circuito}}</td>
        <td class="column-5"><i class="icon-header-item hov-cl1 cl2 zmdi zmdi-minus-circle js-remove-payment" data="{{$pagamento->ID}}"></i></td>
    </tr>
    @endforeach
    @else
        <tr class="table_row">
            <td class="column-2 p-l-50"> </td>
            <td class="column-2"> </td>
            <td class="column-2"> </td>
            <td class="column-3"> </td>
            <td class="column-5"> </td>
            <th class="column-5"> </th>
        </tr>
    @endif

</table>

<div class="alert alert-danger print-error-msg-address" style="visibility: hidden">
    <ul></ul>
</div>


<form class="w-full p-t-41">
    <h5 class="mtext-108 cl2 p-b-7">
        Inserisci una carta:
    </h5>
    <label class="stext-102 cl3" for="name">I campi contrassegnati con (*) sono obbligatori</label>

    <div class="row p-b-25 p-t-10">
        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Nome*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-nome" id="name" name="nome" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3 " for="name">Cognome*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-cognome" id="name" name="cognome" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3 " for="name">Numero carta*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-numero" id="name" name="numero" type="text">
        </div>

        <div class="col-sm-6 p-b-5 ">
            <label class="stext-102 cl3" for="email">Scadenza*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-scadenza" id="email" name="scadenza" type="text">
        </div>

        <div class="col-sm-6 p-b-5 ">
            <label class="stext-102 cl3" for="email">Circuito*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-circuito" list="Carte-list" id="email" name="cvv" type="text">
            <datalist id="Carte-list">
                <option value="Visa">
                <option value="MasterCard">
                <option value="American Express">
                <option value="China UnionPay">
            </datalist>
            </input>
        </div>

        <div class="col-sm-6 p-b-5 ">
            <label class="stext-102 cl3" for="email">Cvv*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-cvv" id="email" name="scadenza" type="text">
        </div>

    </div>

    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10 js-aggiungicarta">
        Inserisci
    </button>
</form>