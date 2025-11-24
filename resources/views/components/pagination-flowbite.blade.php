@if ($paginator->hasPages())
<nav aria-label="Pagination Navigation" class="mt-5 mb-5">
  <ul class="inline-flex items-center gap-1 px-2 py-1 rounded-lg shadow-sm bg-white dark:bg-[#0b1220]">
    {{-- Previous --}}
    @if ($paginator->onFirstPage())
      <li><span class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-400 dark:text-gray-500 bg-transparent">‹</span></li>
    @else
      <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-600 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">‹</a></li>
    @endif

    {{-- Pages --}}
    @foreach ($elements as $element)
      @if (is_string($element))
        <li><span class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-500 dark:text-gray-400">{{ $element }}</span></li>
      @endif

      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <li><span aria-current="page" class="px-3 h-9 inline-flex items-center justify-center rounded-md bg-blue-600 text-white font-medium">{{ $page }}</span></li>
          @else
            <li><a href="{{ $url }}" class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-600 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">{{ $page }}</a></li>
          @endif
        @endforeach
      @endif
    @endforeach

    {{-- Next --}}
    @if ($paginator->hasMorePages())
      <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-600 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">›</a></li>
    @else
      <li><span class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-400 dark:text-gray-500">›</span></li>
    @endif
  </ul>
</nav>
@endif
