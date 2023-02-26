@if ($paginator->hasPages())
<nav aria-label="Page navigation text-center">
    <ul class="pager pagination">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link bg-gray-400"><span aria-hidden="true">&laquo;</span></span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><span aria-hidden="true">&laquo;</span></a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link bg-gray-400">{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active my-active"><span class="page-link text-white">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><span aria-hidden="true">&raquo;</span></a></li>
        @else
            <li class="page-item disabled"><span class="page-link bg-gray-400"><span aria-hidden="true">&raquo;</span></span></li>
        @endif
    </ul>
</nav>
@endif 