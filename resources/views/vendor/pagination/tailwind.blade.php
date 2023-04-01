@if ($paginator->hasPages())


    <div class="container">
        <div class="row justify-content-center mb-4">

            <div class="col-12">
                <p class="text-center">
                    Mostrando desde el
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        a
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    de
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    resultados totales
                </p>
            </div>

            <div class="col-auto">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                    <!--First page----------------------------------------------------------------------------------------------------->
                    @if ($paginator->onFirstPage())
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <a class="btn btn-success disabled">{!! __('pagination.previous') !!}</a>
                        </div>
                    @else
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-success">{!! __('pagination.previous') !!}</a>
                        </div>
                    @endif
                    <!--End First page----------------------------------------------------------------------------------------------------->

                    <!--Previous page------------------------------------------------------------------------------------------------------>
                    @if ($paginator->onFirstPage())
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <a class="btn btn-success disabled">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    @else
                        <div class="btn-group me-2" role="group" aria-label="{{ __('pagination.previous') }}">
                            <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-success" rel="prev">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    @endif
                    <!--End previous page----------------------------------------------------------------------------------------------------->

                    



                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))

                            <div class="btn-group me-2" role="group" aria-label="Second group">

                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <a aria-current="page" class="btn btn-danger">{{ $page }}</a>
                                    @else
                                        <a class="btn btn-success" href="{{ $url }}" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a>
                                    @endif
                                @endforeach

                            </div>

                        @endif
                    @endforeach



                    <!--Next page----------------------------------------------------------------------------------------------------->
                    @if ($paginator->hasMorePages())
                        <div class="btn-group me-2" role="group" aria-label="{{ __('pagination.next') }}">
                            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-success">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    @else
                        <div class="btn-group me-2" role="group" aria-label="{{ __('pagination.next') }}">
                            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-success disabled">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    @endif


                    @if ($paginator->hasMorePages())
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-success">{!! __('pagination.next') !!}</a>
                        </div>
                    @else
                        <div class="btn-group" role="group" aria-label="Third group">
                            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-success disabled">{!! __('pagination.next') !!}</a>
                        </div>
                    @endif
                    <!--End next page----------------------------------------------------------------------------------------------------->
                    

                </div>
            </div>
        </div>
    </div>


    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
    
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">

            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">

                    

                    
                </span>
            </div>
        </div>
    </nav>

@endif
