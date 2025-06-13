@if ($paginator->hasPages())
    <div class="d-flex align-items-center">
        <div>
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} Entries
            <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
        </div>
        <div class="ms-auto">
            <nav aria-label="Page navigation" class="pagination-style-4">
                <ul class="pagination mb-0">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled"><a class="page-link">Prev</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Prev</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
                        @endif

                        {{-- Page Numbers --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active"><a class="page-link">{{ $page }}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="page-item disabled"><a class="page-link">Next</a></li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
@endif
