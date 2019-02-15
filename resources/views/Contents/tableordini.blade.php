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
    @if(count($ordini) > 0)
    @foreach($ordini as $ordine)
    <tr href=class="table_row">
        <td class="column-1">{{$ordine->ID}}</td>
        <td class="column-1">{{$ordine->prodotti}}</td>
        <td class="column-1">{{$ordine->sconto}}</td>
        <td class="column-1">{{$ordine->totale}}</td>
        <td class="column-1 p-b-10 p-t-10"><p>{{$ordine->citta}}, {{$ordine->provincia}} {{$ordine->cap}}</p><p>{{$ordine->via}} {{$ordine->civico}}</p></td>
        <td class="column-2 p-r-50 p-l-50 w-133"><i class="icon-header-item hov-cl1 cl2 zmdi zmdi-assignment-o p-l-30"></i></td>
    </tr>
    @endforeach
    @else
        <tr href=class="table_row">
            <td class="column-1"></td>
            <td class="column-1"></td>
            <td class="column-1"></td>
            <td class="column-1"></td>
            <td class="column-1 p-b-10 p-t-10"></td>
            <td class="column-2 p-r-50 p-l-50 w-133"><i class="icon-header-item hov-cl1 cl2 zmdi zmdi-assignment-o p-l-30"></i></td>
        </tr>
    @endif
    <tr class="table_head">

    </tr>
</table>