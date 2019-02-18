@foreach($news as $new)
<li class="flex-w flex-t p-b-30">
    <a href="#" onclick="window.location='{{ route('dettaglio', ["nome_prodotto" => $new->nome, "id_prodotto" => $new->id])}}'" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
        <img src="{{asset('storage/'.$new->img_dir)}}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20" alt="PRODUCT">
    </a>

    <div class="size-215 flex-col-t p-t-8">
        <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
            {{$new->nome}}
        </a>

        <span class="stext-116 cl6 p-t-20">
            {{'€'.$new->price}}
        </span>
    </div>
</li>
@endforeach