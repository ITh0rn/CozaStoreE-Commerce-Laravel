@extends ('layout.app')
@section('pageTitle', 'Shop')
@section ('content')

    <!-- Product -->
    <div class="bg0 m-t-107 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">

                    <div class="flex-c-m stext-106 size-104 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter-woman">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none js-text-color"></i>
                        Donna
                    </div>

                    <div class="flex-c-m stext-106 size-104 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter-man">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Uomo
                    </div>

                </div>


                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                    </div>
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <!---Aggiunta include--->
                </div>
            </div>

            <div class="row isotope-grid" id="product_div">
                @include('Contents.productlist')
            </div>

        </div>
    </div>

@endsection