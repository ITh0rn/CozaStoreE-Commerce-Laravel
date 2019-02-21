@extends ('Contents.blog')
@section('pageTitle', $blog[0]->nome)
@section('blog')

<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-r-15 p-t-32 p-lr-0-lg">
        <a href="{{ route('coza') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{ route('blog') }}" class="stext-109 cl8 hov-cl1 trans-04">
            Blog
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            {{$blog[0]->nome}}
        </span>
    </div>
</div>


<!-- Content page -->
<section class="bg0 p-t-52 p-l-15 p-b-20">
    <div class="container">
        <div class="row">
            <div class="p-b-80">
                <div class="p-r-45 p-r-0-lg">
                    <!--  -->
                    <div class="wrap-pic-w how-pos5-parent">
                        <img src="{{asset('storage/'.$blog[0]->img_dir)}}" alt="IMG-BLOG">

                        <div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									{{  date('d', strtotime($blog[0]->data_inserimento)) }}
								</span>

                            <span class="stext-109 cl3 txt-center">
									{{  date('M Y', strtotime($blog[0]->data_inserimento)) }}
								</span>
                        </div>
                    </div>

                    <div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By {{$rowUtente[0]->name}}</span>
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									{{  date('d M, Y', strtotime($blog[0]->data_inserimento)) }}
								</span>

							</span>

                        <h4 class="ltext-109 cl2 p-b-28">
                            {{$blog[0]->nome}}
                        </h4>

                        <p class="stext-117 cl6 p-b-26">
                            {{$blog[0]->description}}
                        </p>
                    </div>

                    <h5 class="mtext-113 cl2 p-t-60">
                        Commenti
                    </h5>

                    <!-- - -->
                    <div class="p-b-30 m-t-60 m-lr-15-sm js-comments-blog" value="{{$blog[0]->id}}">
                        @include('Contents.commenti')
                    </div>

                    <!--  -->
                    <div class="p-t-40">
                        <h5 class="mtext-113 cl2 p-b-12">
                            Lascia un commento
                        </h5>

                        <form class="w-full">

                            <p class="stext-102 cl6 p-b-20">
                                Fai sapere agli altri utenti se ti è piaciuto l'articolo!
                            </p>

                            <div class="alert alert-danger print-error-msg-review" style="visibility: hidden">
                                <ul></ul>
                            </div>

                            <div class="flex-w flex-m p-t-20 p-b-23">
                                <span class="stext-102 cl3 m-r-16">
                                    Il tuo voto
                                </span>

                                <span class="wrap-rating fs-18 cl11 pointer js-addstarreview">
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <input class="dis-none" type="number" name="rating">
                                </span>
                            </div>

                            <div class="row p-b-25">
                                <div class="col-12 p-b-5">
                                    <label class="stext-102 cl3" for="review">La tua Recensione</label>
                                    <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                </div>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10 js-add-review" value="{{$blog[0]->id}}">
                                Invia
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection