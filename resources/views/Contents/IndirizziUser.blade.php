<h5 class="mtext-108 cl2 p-b-25">
    I tuoi indirizzi di spedizione:
</h5>

<table class="table-profile p-t-30 m-b-30">
    <tr class="table_head">
        <th class="column-2 p-l-50">Città</th>
        <th class="column-2">Provincia</th>
        <th class="column-2">CAP</th>
        <th class="column-3">Via</th>
        <th class="column-5 txt-right">Civico</th>
        <th class="column-6 p-l-50">Elimina</th>
    </tr>
    @if($indirizzi!=null)
    @foreach($indirizzi as $indirizzi)
    <tr class="table_row">
        <td class="column-2 p-l-50">{{$indirizzi->citta}}</td>
        <td class="column-2">{{$indirizzi->provincia}}</td>
        <td class="column-2">{{$indirizzi->cap}}</td>
        <td class="column-3">{{$indirizzi->via}}</td>
        <td class="column-5">{{$indirizzi->civico}}</td>
        <td class="column-5"><i class="icon-header-item hov-cl1 cl2 zmdi zmdi-minus-circle js-remove-address" data="{{$indirizzi->ID}}"></i></td>
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
        Inserisci un nuovo indirizzo:
    </h5>
    <label class="stext-102 cl3" for="name">I campi contrassegnati con (*) sono obbligatori</label>

    <div class="row p-b-25 p-t-10">
        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Città*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-address-città" id="name" name="city" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Provincia*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-address-Provincia" list="Provincia-list" id="surname" name="province" type="text">
            <datalist id="Provincia-list">
                <option value="AQ">
                <option value="PE">
                <option value="CH">
                <option value="TE">
            </datalist>
            </input>
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">CAP*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-address-CAP" id="CAP" name="address" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">Via*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-address-email" id="email" name="address" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">Civico*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20 js-address-Civico" id="email" name="civic" type="text">
        </div>
    </div>

    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10 js-addAddress">
        Inserisci
    </button>
</form>