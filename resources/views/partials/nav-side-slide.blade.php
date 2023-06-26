{{-- <h1>Side Nav</h1> --}}

@if (has_nav_menu('primary_navigation'))

  <button class="hamburger hamburger--spin menu-btn" type="button">
      <span class="hamburger-box">
          <span class="hamburger-inner"></span>
      </span>
  </button>

  <nav class="nav-slide">
      <div class="logo-cont">
          <div class="nav-brand-logo">
            <a class="mob-home-btn" href="/">@if(get_field('logo', 'option')){!! wp_get_attachment_image(get_field('logo', 'option', 'icon')) !!} @endif</a>
          </div>
          <div class="nav-company-name">@if(get_field('company_name', 'option')){!! get_field('company_name', 'option') !!} @endif</div>
      </div>
      <div class="nav-cont">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
          <div class="nav-phone-cta">
            <a href="tel:{{ get_field('telephone', 'option') }}"><span class="icon"><x-icon-phone-filled class="w-5 h-5" /></span> {!! get_field('telephone', 'option') !!}</a>
          </div>
      </div>
  </nav>

  <div class="brand-logo">
    <a class="nav-home-btn" href="/">@if(get_field('logo', 'option')){!! wp_get_attachment_image(get_field('logo', 'option', 'icon')) !!} @endif</a>
    <div class="company-name">@if(get_field('company_name', 'option')){!! get_field('company_name', 'option') !!} @endif</div>
  </div>

  <div class="header-cta-section">
      <div class="header-phone">
          @if(get_field('telephone', 'option')) 
            <a href="tel:{{ get_field('telephone', 'option') }}"><x-icon-phone-filled class="w-5 h-5" /> <span>{!! get_field('telephone', 'option') !!}</span></a>
          @endif
      </div>
      <div class="header-social">
          @if(get_field('logo', 'option'))
              <a href="{{ get_field('facebook_url', 'option') }}" target="_blank"><x-icon-facebook class="w-3 h-3" /></a>
          @endif
          @if(get_field('instagram_url', 'option'))
              <a href="{{ get_field('instagram_url', 'option') }}" target="_blank"><x-icon-instagram class="w-3 h-3" /></a>
          @endif
          @if(get_field('twitter_url', 'option'))
              <a href="{{ get_field('twitter_url', 'option') }}" target="_blank"><x-icon-twitter class="w-3 h-3" /></a>
          @endif       
      </div>
      <div class="header-btn-cont">
          <a class="btn book-btn" target="_blank" href="{{ get_field('book_a_room_url', 'option') }}"><span class="book-btn-text">Book Now</span><x-icon-calender-filled class="w-4 h-4" /></a>
      </div>
  </div>

@endif
