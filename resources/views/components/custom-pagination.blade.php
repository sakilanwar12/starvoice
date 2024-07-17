@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center gap-2 justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="flex items-center justify-center h-9 w-9 text-sm font-medium text-gray-500 bg-gray-300  rounded-md cursor-pointer">
                <i class="fa-solid fa-chevron-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                class="flex items-center justify-center h-9 w-9 text-sm font-medium text-gray-500 bg-white  cursor-pointer  rounded-md">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        @endif

        {{-- Page Number Links --}}
        <div class="flex items-center gap-2">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span
                        class="flex items-center justify-center h-9 w-9 text-sm font-medium text-gray-500 bg-white  cursor-pointer  rounded-md">
                        {{ $element }}
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="flex items-center justify-center h-9 w-9 text-sm font-medium bg-gray-900 text-white   cursor-pointer  rounded-md">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                class="flex items-center justify-center h-9 w-9 text-sm font-medium text-gray-500 bg-white  cursor-pointer  rounded-md">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                class="flex items-center justify-center h-9 w-9 text-sm font-medium text-gray-500 bg-white  cursor-pointer  rounded-md">
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        @else
            <span
                class="flex items-center justify-center h-9 w-9 text-sm font-medium text-gray-500 bg-gray-300  cursor-pointer  rounded-md">
                <i class="fa-solid fa-chevron-right"></i>
            </span>
        @endif
    </nav>
@endif
