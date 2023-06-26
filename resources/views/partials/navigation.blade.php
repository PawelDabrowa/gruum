@if ($navigation)
<!-- Desktop navigation -->
<nav class="md:hidden lg:flex lg:flex-grow">
  <ul class="flex flex-grow justify-end flex-wrap items-center ">
    @foreach ($navigation as $item)
      <li
      @if ($item->children)
        class="relative group"
        x-data="{ open: false }"
        @mouseenter="open = true"
        @mouseleave="open = false"
      @endif
      >
        <a href="{{ $item->url }}" class="text-gray-600 hover:text-gray-900 px-3 lg:px-3 py-2 flex items-center transition-colors delay-200 md:text-sm border-2 border-transparent hover:border-2 hover:border-yellow-500 rounded-lg group-hover:border-2 group-hover:border-yellow-500 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}"
          @if ($item->children)
          href="#0"
          aria-haspopup="true"
          :aria-expanded="open"
          @focus="open = true"
          @focusout="open = false"
          @click.prevent
        @endif

          >
          {{ $item->label }}
          @if ($item->children)
          <svg class="w-3 h-3 fill-current text-gray-400 cursor-pointer ml-1 flex-shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.28 4.305L5.989 8.598 1.695 4.305A1 1 0 00.28 5.72l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z" />
        </svg>
          @endif
        </a>
        @if ($item->children)
          <ul
              class="origin-top-right absolute top-full left-0 w-60  bg-white py-2 ml-4 rounded shadow-lg"
              x-show="open"
              x-transition:enter="transition ease-out duration-200 transform"
              x-transition:enter-start="opacity-0 -translate-y-2"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-out duration-200"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
              x-cloak
          >
            @foreach ($item->children as $child)
              <li class="my-child-item py-2 {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
                <a href="{{ $child->url }}"
                  class="font-medium text-sm text-gray-600 hover:text-gray-900 flex py-2 px-5 leading-tight" @focus="open = true" @focusout="open = false"
                  >
                  {{ $child->label }}
                </a>
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach
  </ul>
</nav>

 <!-- Mobile menu -->
 <div class="flex lg:hidden" x-data="{ expanded: false }">

  <!-- Hamburger button -->
  <button
      class="hamburger"
      :class="{ 'active': expanded }"
      @click.stop="expanded = !expanded"
      aria-controls="mobile-nav"
      :aria-expanded="expanded"
  >
      <span class="sr-only">Menu</span>
      <svg class="w-6 h-6 fill-current text-gray-900" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <rect y="4" width="24" height="2" />
          <rect y="11" width="24" height="2" />
          <rect y="18" width="24" height="2" />
      </svg>
  </button>

  <!-- Mobile navigation -->
  <nav
      id="mobile-nav"
      class="absolute top-12 h-screen pb-16 z-20 left-0 w-full overflow-scroll bg-white"
      @click.away="expanded = false"
      @keydown.escape.window="expanded = false"
      x-show="expanded"
      x-transition:enter="transition ease-out duration-200 transform"
      x-transition:enter-start="opacity-0 -translate-y-2"
      x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-out duration-200"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      x-cloak
  >
        <ul class="py-5 -mx-5 px-5">
            @foreach ($navigation as $item)
            <li
            @if ($item->children)
            class="py-2 px-4 my-2 border-t border-b border-gray-200"
            @endif
            >
              @if ($item->children)
              <span class="flex text-gray-600 hover:text-gray-900 py-2">{{ $item->label }}</span>
              @else
              <a class="flex text-gray-600 hover:text-gray-900 py-2 text-3xl" href="{{ $item->url }}">{{ $item->label }}</a>
              @endif
              @if ($item->children)
              <ul class="pl-4">
                @foreach ($item->children as $child)
                <li>
                  <a class="text-sm flex font-medium text-gray-600 hover:text-gray-900 py-2" href="{{ $child->url }}">{{ $child->label }}</a>
              </li>
                @endforeach
          </ul>
        @endif
          </li>
      @endforeach
      </ul>
  </nav>
</div>
@endif
