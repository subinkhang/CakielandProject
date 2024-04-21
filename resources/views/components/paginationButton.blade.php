<head>
    <link href="{{ asset('frontend/css/paginationButton.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/productList.css') }}" rel="stylesheet">
</head>

@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <div class="hahatext"></div>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <div class="nexttext">&laquo</div>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><div class="activetext">{{ $page }}</div></li>
                        @elseif (($page == $paginator->currentPage() - 1 || $page == $paginator->currentPage() + 1) || $page == $paginator->lastPage())
                            <li><a class="hahatext" href="{{ $url }}">{{ $page }}</a></li>
                        @elseif ($page == $paginator->lastPage() - 1)
                            <li><div class="activetext"><i class="fa fa-ellipsis-h"></i></div></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <div class="nexttext">&raquo</div>
                    </a>
                </li>
            @else
                <li class="disabled">
                    <div class="hahatext"></div>
                </li>
            @endif
        </ul>
    </div>
    <!-- Pagination -->
@endif