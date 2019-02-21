@extends ('layout.app')
@section('pageTitle', 'Blog')
@section ('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 m-tb-84" style="background-image: url({{asset('img/bg-02.jpg')}});">
        <h2 class="ltext-105 cl0 txt-center">
            Blog
        </h2>
    </section>

    <!-- Content page -->
    <section class="bg0 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-80">
                    <div class="p-r-45 p-l-20 p-r-0-lg">

                        @yield('blog')

                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-r-40 p-b-80">
                    <div>
                        <div class="bor17 of-hidden pos-relative">
                            <form class="" action="{{route('searchblog')}}" method="POST" role="search">
                            <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">
                            </form>
                            <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </div>

                        <div class="p-t-55">
                            <h4 class="mtext-112 cl2 p-b-20">
                                Archivio
                            </h4>

                            <ul>

                                @include('Contents.archive')

                            </ul>
                        </div>

                        <div class="p-t-65">
                            <h4 class="mtext-112 cl2 p-b-33">
                                Nuovi Prodotti
                            </h4>

                            <ul>
                                @include('Contents.suggeritiblog')
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
