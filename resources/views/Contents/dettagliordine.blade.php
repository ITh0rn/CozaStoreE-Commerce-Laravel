<h5 class="mtext-108 cl2 p-b-25">
    Codice Ordine: {{$ordini[0]->IDorders}}
</h5>

<table class="table-profile p-t-30 m-b-30">
    <tr class="table_head">
        <th class="column-2 p-l-50">Immagine</th>
        <th class="column-2 p-l-50">Nome</th>
        <th class="column-2 p-l-50">Quantità</th>
        <th class="column-5">Prezzo</th>
    </tr>
        @foreach($ordini as $ordine)
            <tr class="table_row">
                <td class="column-2 p-l-50 p-t-25">
                    <div class="">
                        <img src="{{asset('storage/'.$ordine->img_dir)}}" class="w-50 h-75" alt="IMAGE">
                    </div>
                </td>
                <td class="column-2 p-l-50">{{$ordine->nome}}</td>
                <td class="column-2 p-l-50">{{$ordine->quantita}}</td>
                <td class="column-5">{{$ordine->price}} €</td>
            </tr>
        @endforeach
</table>

<div class="alert alert-danger print-error-msg-address" style="visibility: hidden">
    <ul></ul>
</div>
