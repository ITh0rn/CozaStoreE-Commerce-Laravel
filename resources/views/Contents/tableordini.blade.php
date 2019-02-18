
<h5 class="mtext-108 cl2 p-b-25">
    Storico ordini:
</h5>

<table class="table-profile p-t-30 m-b-30">
    <tr class="table_head">
        <th class="column-2 p-l-50">Codice</th>
        <th class="column-2">Prodotti</th>
        <th class="column-3">Totale</th>
        <th class="column-6 pl-50">vedi di più</th>
    </tr>
    @if(count($ordini) > 0)
    @foreach($ordini as $ordine)
            <tr class="table_row">
                <td class="column-2 p-l-50">#{{$ordine->ID}}</td>
                <td class="column-2">visualizza</td>
                <td class="column-3">{{$ordine->totale}}</td>
                <td class="column-5"><i class="icon-header-item hov-cl1 cl2 zmdi zmdi-assignment-o p-l-30"></i></td>
            </tr>
    @endforeach
    @else
        <tr class="table_row">
            <td class="column-2"></td>
            <td class="column-2"></td>
            <td class="column-2"></td>
            <td class="column-3"></td>
            <td class="column-5"></td>
            <td class="column-5"></td>
        </tr>
    @endif
</table>