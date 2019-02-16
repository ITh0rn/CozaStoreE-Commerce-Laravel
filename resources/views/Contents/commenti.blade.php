@foreach($comment as $commento)
    
    <div class="bor18 flex-w flex-t p-b-30 p-t-20 js-comment-div-start">
        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
            <img src="{{asset('img/avatar-01.jpg')}}" alt="AVATAR">
        </div>

        <div class="size-207">
            <div class="flex-w flex-sb-m p-b-17">
                <span class="mtext-107 cl2 p-r-20">
                    {{$commento->nome}}
                </span>

                <span class="fs-18 cl11 js-startcomment" value="{{$commento->stelle}}">
                    <i class="zmdi zmdi-star-outline"></i>
                    <i class="zmdi zmdi-star-outline"></i>
                    <i class="zmdi zmdi-star-outline"></i>
                    <i class="zmdi zmdi-star-outline"></i>
                    <i class="zmdi zmdi-star-outline"></i>
                </span>
            </div>

            <p class="stext-102 cl6">
                {{$commento->commento}}
            </p>
        </div>
    </div>

@endforeach

{{ $comment->links() }}