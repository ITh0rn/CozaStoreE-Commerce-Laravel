@foreach($data as $blog)
<li class="p-b-7">
    <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
        <span>
            {{ $blog->mese }} {{ $blog->anno }}
        </span>
            ({{ $blog->num }})
        <span>

        </span>
    </a>
</li>
@endforeach
