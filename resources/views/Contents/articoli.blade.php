@extends ('Contents.blog')
@section('blog')

@foreach($blog as $blog)
    <!-- item blog -->
    <div class="p-b-63">
        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
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
                <a href="{{ route('dettaglioarticoli') }}" class="ltext-108 cl2 hov-cl1 trans-04">
                    {{$blog->nome}}
                </a>
            </h4>

            <p class="stext-117 cl6">
                    {{$blog->description}}
            </p>

            <div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">
                                                By {{$rowUtente[$blog->IDusers]->name}}
                                            </span>
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											StreetStyle, Fashion, Couple
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											8 Comments
										</span>
									</span>

                <a href="#" onclick="window.location='{{ route('dettaglioarticoli', ["id_articolo" => $blog->ID, "id_user" => $blog->IDusers]) }}'" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                    Continua a leggere

                    <i class="fa fa-long-arrow-right m-l-9"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach
@endsection