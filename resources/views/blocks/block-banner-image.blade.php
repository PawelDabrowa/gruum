<section class="block-banner-image" @hasfield('background_image') style="background-image: url(@field('background_image')" @endfield role="img">
  <div class="container">
    <div class="flex">
      <div>
        @hasfield('header_title')
          <span class="label label--white">
              @field('header_title')
          </span>
        @endfield
        
        @hasfield('h1_title')
          <h1 class="heading heading--1">
            @field('h1_title')
          </h1>
        @endfield
        
        @hasfield('subtitle')
          <p>@field('subtitle')</p>
        @endfield

        @hasfield('button_link')
          <a href="@field('button_link','url')" target="@field('button_link','target')" class="btn" @if(get_field('button_background_color') && get_field('button_font_color')) style="background-color:{{ get_field('button_background_color') }}; color:{{ get_field('button_font_color') }};" @endif>
            @field('button_link','title')
          </a>
        @endfield
      </div>
    </div>
    <div class='header-overlay'></div>
  </div>
</section>
