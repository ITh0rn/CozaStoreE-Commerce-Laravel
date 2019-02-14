<h5 class="mtext-108 cl2 p-b-25">
    Le tue opzioni di pagamento:
</h5>

<table class="table-profile p-t-30">
    <tr class="table_head">
        <th class="column-1">Nome</th>
        <th class="column-2">Cognome</th>
        <th class="column-3">Numero carta</th>
        <th class="column-4">Scadenza</th>
        <th class="column-5">Cvv</th>
    </tr>
    @if($pagamento!=null)
    @foreach($pagamento as $pagamento)
    <tr class="table_row">
        <td class="column-1">{{$pagamento->nome}}</td>
        <td class="column-2">{{$pagamento->cognome}}</td>
        <td class="column-3">{{$pagamento->numero}}</td>
        <td class="column-4">{{$pagamento->scadenza}}</td>
        <td class="column-5">{{$pagamento->cvv}}</td>
    </tr>
    @endforeach
    @else
        <tr class="table_row">
            <td class="column-1"> </td>
            <td class="column-2"> </td>
            <td class="column-3"> </td>
            <td class="column-4"> </td>
            <td class="column-5"> </td>
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
            <label class="stext-102 cl3" for="email">Cvv*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-aggiungicarta-cvv" id="email" name="cvv" type="text">
        </div>
    </div>

    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10 js-aggiungicarta">
        Inserisci
    </button>
</form>