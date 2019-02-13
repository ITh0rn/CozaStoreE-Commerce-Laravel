<h5 class="mtext-108 cl2 p-b-25">
    I tuoi indirizzi di spedizione:
</h5>

<table class="table-profile p-t-30">
    <tr class="table_head">
        <th class="column-1">Città</th>
        <th class="column-2">Provincia</th>
        <th class="column-3">CAP</th>
        <th class="column-4">Via</th>
        <th class="column-5">Civico</th>
    </tr>
    @if($indirizzi!=null)
    @foreach($indirizzi as $indirizzi)
    <tr class="table_row">
        <td class="column-1">{{$indirizzi->citta}}</td>
        <td class="column-2">{{$indirizzi->provincia}}</td>
        <td class="column-3">{{$indirizzi->cap}}</td>
        <td class="column-4">{{$indirizzi->via}}</td>
        <td class="column-5">{{$indirizzi->civico}}</td>
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

<form class="w-full p-t-41">
    <h5 class="mtext-108 cl2 p-b-7">
        Inserisci un nuovo indirizzo:
    </h5>
    <label class="stext-102 cl3" for="name">I campi contrassegnati con (*) sono obbligatori</label>

    <div class="row p-b-25 p-t-10">
        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Città*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" name="city" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">Provincia*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" name="province" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="name">CAP*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" name="cap" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">Via*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" name="address" type="text">
        </div>

        <div class="col-sm-6 p-b-5">
            <label class="stext-102 cl3" for="email">Civico*</label>
            <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" name="civic" type="text">
        </div>
    </div>

    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
        Inserisci
    </button>
</form>