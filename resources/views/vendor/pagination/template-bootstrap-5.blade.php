
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation">
    <ul class="pagination float-end">
        @if ($paginator->onFirstPage())
            <li class="page-item page-prev disabled">
                <a class="page-link" tabindex="-1">{!! __('pagination.previous') !!}</a>
            </li>
        @else
            <li class="page-item page-prev">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
{{--                    {!! __('pagination.previous') !!}--}}
                    Prev
                </a>
            </li>
        @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach




            @if ($paginator->hasMorePages())
        <li class="page-item page-next">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
{{--                {!! __('pagination.next') !!}--}}
                Next
            </a>
        </li>
            @else
                <li class="page-item page-next" aria-disabled="true">
                    <a class="page-link">{!! __('pagination.next') !!}</a>
                </li>
            @endif
    </ul>
        </nav>

    @endif
