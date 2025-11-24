@if ($paginator->hasPages())
<nav aria-label="Pagination Navigation" class="mt-5 mb-5">

  <ul class="inline-flex items-center gap-1 px-2 py-1 rounded-lg shadow-sm bg-[#0d0d0d] border border-[#1a1a1a] text-gray-300">

    {{-- Previous --}}
    @if ($paginator->onFirstPage())
      <li>
        <span class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-600 cursor-not-allowed">
          ‹
        </span>
      </li>
    @else
      <li>
        <a href="{{ $paginator->previousPageUrl() }}"
           class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-300 hover:bg-[#1c1c1c] hover:text-white transition">
          ‹
        </a>
      </li>
    @endif

    {{-- Pages --}}
    @foreach ($elements as $element)
      @if (is_string($element))
        <li>
          <span class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-500">
            {{ $element }}
          </span>
        </li>
      @endif

      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <li>
              <span class="px-3 h-9 inline-flex items-center justify-center rounded-md bg-blue-600 text-white font-medium shadow">
                {{ $page }}
              </span>
            </li>
          @else
            <li>
              <a href="{{ $url }}"
                 class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-300 hover:bg-[#1c1c1c] hover:text-white transition">
                {{ $page }}
              </a>
            </li>
          @endif
        @endforeach
      @endif
    @endforeach

    {{-- Next --}}
    @if ($paginator->hasMorePages())
      <li>
        <a href="{{ $paginator->nextPageUrl() }}"
           class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-300 hover:bg-[#1c1c1c] hover:text-white transition">
          ›
        </a>
      </li>
    @else
      <li>
        <span class="px-3 h-9 inline-flex items-center justify-center rounded-md text-gray-600 cursor-not-allowed">
          ›
        </span>
      </li>
    @endif

  </ul>

</nav>
@endif
