@foreach($sliders as $slider)
<div class="item-slick1" style="background-image: url({{asset('storage/'.$slider->img_dir)}})">
    <div class="container h-full">
        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
            <div class= data-delay="0">
                <span class="ltext-101 cl2 respon2">
                    {{$slider->titolo}}
                </span>
            </div>

            <div class= data-delay="0">
                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                    {{$slider->sottotitolo}}
                </h2>
            </div>

            <div class= data-delay="0">
                <a href="{{ route($slider->route) }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Acquista
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach