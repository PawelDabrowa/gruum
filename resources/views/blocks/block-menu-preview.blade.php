@php
  $menu = get_field('menu_preview');
  $restaurant_image = $menu['restaurant_image'];
  $bar_image = $menu['bar_image'];
  $fish_image = $menu['fish_image'];
  $kids_menu_image = $menu['kids_menu_image'];
  $size = 'menu_preview'; // (thumbnail, medium, large, full or custom size)
  $attachment_title = get_the_title($attach_id);
@endphp
<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-menu-preview section">
  <span class="bg-big-fish rellax" data-rellax-speed="2" data-rellax-percentage=".9" data-rellax-zindex="5"><img src="@asset('images/icons/big-fish-bg.png')"/></span>
  <div class="container @if(!$kids_menu_image) narrow @endif">
    <div class="block-menu-preview__heading">
      @if (get_field('label'))
      <h3 class="heading heading--3 ">{!! get_field('label') !!}</h3>
      @endif
      @if (get_field('main_title'))
      <h2 class="heading--2">
        {!! get_field('main_title') !!}
      </h2>
      @endif
    </div>
    <div class="grid block-menu-preview__grid @if($kids_menu_image) grid4 @endif wptest">
      {{-- Restaurant section --}}
      <article class="block-menu-preview__article">
        <div class="block-menu-preview__article--main-img">
          {!! wp_get_attachment_image( $restaurant_image, $size, $attachment_title ) !!}
          <div class="block-menu-preview__article-info">
            <span class="block-menu-preview__article-info--img">
                  <img class="img" src="{!! $menu['restaurant_icon'] !!}" alt="Icon meal">
              </span>
          </div>
        </div>

        <h3>{!! $menu['restaurant_subtitle'] !!}</h3>
        <p>{!! $menu['restaurant_text'] !!}</p>
        <div class="block-menu-preview__article--btn">
          <a class="btn" href="{!! $menu['restaurant_button_url'] !!}" target="_blank">
              {!! $menu['restaurant_button_text'] !!}
            </a>
          @if($menu['restaurant_button_text_2'])
          <a class="btn btn_right" href="{!! $menu['restaurant_button_url_2'] !!}" target="_blank">
              {!! $menu['restaurant_button_text_2'] !!}
                </a>
          @endif
          <div>
      </article>
      {{-- Whiskey section --}}
      <article class="block-menu-preview__article">
        <div class="block-menu-preview__article--main-img">
          {!! wp_get_attachment_image( $bar_image, $size, $attachment_title ) !!}
          <div class="block-menu-preview__article-info">
            <span class="block-menu-preview__article-info--img">
                <img class="img" src="{!! $menu['bar_icon'] !!}" alt="Icon">
            </span>
          </div>
        </div>

        <h3>{!! $menu['bar_subtitle'] !!}</h3>
        <p>{!! $menu['bar_text'] !!}</p>
        <div class="block-menu-preview__article--btn">
          <a class="btn" href="{!! $menu['bar_button_url'] !!}" target="_blank">
            {!! $menu['bar_button_text'] !!}
          </a>
          @if($menu['bar_button_text_2'])
          <a class="btn btn_right" href="{!! $menu['bar_button_url_2'] !!}" target="_blank">
            {!! $menu['bar_button_text_2'] !!}
              </a>
          @endif
          <div>
      </article>
      {{-- Fish & chips section --}}
      <article class="block-menu-preview__article">
        <div class="block-menu-preview__article--main-img">
          {!! wp_get_attachment_image( $fish_image, $size, $attachment_title ) !!}
          <div class="block-menu-preview__article-info">
            <span class="block-menu-preview__article-info--img">
                <img class="img" src="{!! $menu['fish_icon'] !!}" alt="Icon fish">
            </span>
          </div>
        </div>

        <h3>{!! $menu['fish_subtitle'] !!}</h3>
        <p>{!! $menu['fish_text'] !!}</p>
        <div class="block-menu-preview__article--btn">
          <a class="btn" href="{!! $menu['fish_and_chips_button_url'] !!}" target="_blank">
            {!! $menu['fish_button_text'] !!}
          </a>
          @if($menu['fish_button_text_2'])
          <a class="btn btn_right" href="{!! $menu['fish_and_chips_button_url_2'] !!}" target="_blank">
            {!! $menu['fish_button_text_2'] !!}
              </a>
          @endif
      </article>
      @if($kids_menu_image)
      {{-- Kids menu section --}}
      <article class="block-menu-preview__article">
        <div class="block-menu-preview__article--main-img">
          {!! wp_get_attachment_image( $kids_menu_image, $size, $attachment_title ) !!}
          <div class="block-menu-preview__article-info">
            <span class="block-menu-preview__article-info--img">
                <img class="img" src="{!! $menu['kids_menu_icon'] !!}" alt="Icon fish">
            </span>
          </div>
        </div>

        <h3>{!! $menu['kids_menu_subtitle'] !!}</h3>
        <p>{!! $menu['kids_menu_text'] !!}</p>
        <div class="block-menu-preview__article--btn">
          <a class="btn" href="{!! $menu['kids_menu_button_url'] !!}" target="_blank">
            {!! $menu['kids_menu_button_text'] !!}
          </a>
          @if($menu['kids_menu_button_text_2'])
          <a class="btn btn_right" href="{!! $menu['kids_menu_button_url_2'] !!}" target="_blank">
            {!! $menu['kids_menu_button_text_2'] !!}
              </a>
          @endif
      </article>
      @endif
    </div>
  </div>
</section>