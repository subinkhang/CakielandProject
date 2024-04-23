<head>
    <link href="{{ asset('frontend/css/paginationButton.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/productList.css') }}" rel="stylesheet">
</head>

@if ($paginator->hasPages())
    <!-- Pagination -->
    <div class="pull-right pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li><a href="{{ $paginator->previousPageUrl() }}" class="nexttext">&laquo</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach (range(1, $paginator->lastPage()) as $page)
                @if ($page >= $paginator->currentPage() - 2 && $page <= $paginator->currentPage() + 2)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $paginator->url($page) }}" class="unactivetext">{{ $page }}</a></li>
                    @endif
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" class="nexttext">&raquo</a></li>
            @endif
        </ul>
    </div>
    <!-- Pagination -->
@endif