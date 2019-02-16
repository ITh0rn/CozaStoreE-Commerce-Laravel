@extends('Contents.blog')
@section('blog')

@foreach($rowUtente as $blog)
    <!-- item blog -->
    <div class="p-b-63">
        <a href="#" onclick="window.location='{{ route('dettaglioarticoli', ["id_articolo" => $blog->ID, "id_user" => $blog->IDusers]) }}'" class="hov-img0 how-pos5-parent">
            <img src="{{asset('img/'.$blog->img_dir)}}" alt="IMG-BLOG">

            <div class="flex-col-c-m size-123 bg9 how-pos5">
                <span class="ltext-107 cl2 txt-center">
                    {{  date('d', strtotime($blog->data_inserimento)) }}
                </span>

                <span class="stext-109 cl3 txt-center">
                    {{  date('M Y', strtotime($blog->data_inserimento)) }}
                </span>
            </div>
        </a>

        <div class="p-t-32">
            <h4 class="p-b-15">
                <button onclick="window.location='{{ route('dettaglioarticoli', ["id_articolo" => $blog->ID, "id_user" => $blog->IDusers]) }}'" class="ltext-108 cl2 hov-cl1 trans-04">
                    {{$blog->nome}}
                </button>
            </h4>

            <p class="stext-117 cl6">
                    {{$blog->description}}
            </p>

            <div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">
                                                By {{$blog->name}}
                                            </span>

											<span class="cl12 m-l-4 m-r-6">|</span>

                                            <span class="cl4">
                                                {{  date('d M, Y', strtotime($blog->data_inserimento)) }}
                                            </span>

                                            <span class="cl12 m-l-4 m-r-6">|</span>
                                        </span>

										<span>
											{{ $blog->num }} Commenti
										</span>
									</span>

                <button onclick="window.location='{{ route('dettaglioarticoli', ["id_articolo" => $blog->ID, "id_user" => $blog->IDusers]) }}'" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                    Continua a leggere
                </button>
            </div>
        </div>
    </div>
@endforeach
@endsection