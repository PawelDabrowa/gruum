@php
  $layout = get_field('layout', 'option');
  $nav = $layout['nav_layout'];
@endphp

@if($nav == 'Side')
  <header id="side-slide" class="nav">
    <div class="cover"></div>
    @include('partials.nav-side-slide')
  </header>

@elseif($nav == 'Alpine')
  <header class="scroll-auto w-full bg-white z-50 md:bg-opacity-90 transition duration-300 ease-in-out " x-data="{ top: true }" @scroll.window="top = window.pageYOffset > 10 ? false : true" :class="{ 'bg-white shadow-lg' : !top }">
    <div class="max-w-6xl mx-auto px-5 sm:px-6">
        <div class="flex items-center justify-between h-16 md:h-20">
            <!-- Site branding -->
            <div class="flex-shrink-0 mr-4">
                <!-- Logo -->
                <a class="brand" href="{{ home_url('/') }}">
                   @hasoption('logo')
                    {!! wp_get_attachment_image(get_field('logo', 'option'), 'small') !!}
                   @else
                    <img src="@asset('images/icons/cooking.png')" />
                   @endoption
                </a>
            </div>
            @include('partials.navigation')
        </div>
    </div>
  </header>

@else
  <header class="header banner parked">
    <div id="site-header" class="header__wrapper">
      @include('partials.nav-drop')
    </div>
  </header>
@endif
