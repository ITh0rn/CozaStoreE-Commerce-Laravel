<h5 class="mtext-108 cl2 p-b-25">
    Storico ordini:
</h5>

<table class="table-profile p-t-30">
    <tr class="table_head">
        <th class="column-1">N° Ordine</th>
        <th class="column-1">Prodotti</th>
        <th class="column-1">Sconto</th>
        <th class="column-1">Totale</th>
        <th class="column-2 p-l-50">Indirizzo</th>
        <th class="column-1">vedi di più</th>
    </tr>
    @foreach($ordini as $ordini)
    <tr href=class="table_row">
        <td class="column-1">{{$ordini->ID}}</td>
        <td class="column-1">{{$ordini->prodotti}}</td>
        <td class="column-1">{{$ordini->sconto}}</td>
        <td class="column-1">{{$ordini->totale}}</td>
        <td class="column-1 p-b-10 p-t-10"><p>{{$ordini->citta}}, {{$ordini->provincia}} {{$ordini->cap}}</p><p>{{$ordini->via}} {{$ordini->civico}}</p></td>
        <td class="column-2 p-r-50 p-l-50 w-133"><i class="icon-header-item hov-cl1 cl2 zmdi zmdi-assignment-o p-l-30"></i></td>
    </tr>
    @endforeach
    <tr class="table_head">

    </tr>
</table>