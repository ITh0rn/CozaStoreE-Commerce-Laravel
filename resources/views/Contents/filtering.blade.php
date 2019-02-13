<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
    <div class="filter-col1 p-r-15 p-b-27">
        <div class="mtext-102 cl2 p-b-15">
            Categorie
        </div>

        <ul>
            @foreach($categorie as $categoria)
            <li class="p-b-6">
                <a href="#" class="filter-link stext-106 trans-04 js-scelta-categoria-filtering">
                    {{$categoria->nome_categoria}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="filter-col2 p-r-15 p-b-27 js-sub-categories-filtering">
        <div class="mtext-102 cl2 p-b-15">
            Sotto-Categoria
        </div>

        <ul>
        </ul>
    </div>

    <div class="filter-col3 p-r-15 p-b-27">
        <!--3o spazio-->
    </div>

    <div class="filter-col4 p-b-27">
        <!--4o spazio-->
    </div>
</div>