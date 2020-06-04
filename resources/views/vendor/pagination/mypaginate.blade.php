<style>

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #00a1ff;
    border-color: green;
}


</style>

<div class="row">
<nav class="navigation">
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
    @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
    </ul>
</nav>
</div>
