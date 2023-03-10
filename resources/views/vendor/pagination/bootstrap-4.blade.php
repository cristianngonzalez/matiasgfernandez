@if ($paginator->hasPages())

    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-auto">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <div class="btn-group me-2" role="group" aria-label="@lang('pagination.previous')">
                            <a type="button" class="btn btn-primary disabled">&lsaquo;</a>
                        </div>
                    @else
                        <div class="btn-group me-2 disabled" role="group" aria-label="@lang('pagination.previous')">
                            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-primary">&lsaquo;</a>
                        </div>
                    @endif

                    

                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary">5</button>
                        <button type="button" class="btn btn-secondary">6</button>
                        <button type="button" class="btn btn-secondary">7</button>
                    </div>

                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-info">8</button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <nav>
        <ul class="pagination">
            

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

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
