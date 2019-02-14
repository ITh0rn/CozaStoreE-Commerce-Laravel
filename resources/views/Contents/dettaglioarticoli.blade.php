@extends ('Contents.blog')
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
                        <img src="{{asset('img/'.$blog[0]->img_dir)}}" alt="IMG-BLOG">

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
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

							</span>

                        <h4 class="ltext-109 cl2 p-b-28">
                            {{$blog[0]->nome}}
                        </h4>

                        <p class="stext-117 cl6 p-b-26">
                            {{$blog[0]->description}}
                        </p>
                    </div>

                    <!-- - -->
                    <div class="bor18 p-b-30 m-t-60 m-lr-15-sm">
                        @include('Contents.commenti')
                    </div>

                    <!--  -->
                    <div class="p-t-40">
                        <h5 class="mtext-113 cl2 p-b-12">
                            Lascia un commento
                        </h5>

                        <p class="stext-107 cl6 p-b-40">
                            La tua email non sarà pubblicata.
                        </p>

                        <form>
                            <div class="bor19 m-b-20">
                                <textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Comment..."></textarea><!-- id="text" -->
                            </div>

                            <div class="size-218 m-b-20">
                                <span class="stext-111 cl2 plh3 size-116 p-lr-18">
                                    Il tuo voto
                                </span>

                                <span class="wrap-rating fs-18 cl11 pointer">
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                    <input class="dis-none" type="number" name="rating">
                                </span>
                            </div>

                            <button class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04"><!-- id="pubblicaReview" -->
                                Pubblica Commento
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection