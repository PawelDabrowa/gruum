@php 
  $layout = get_field('cta_layout'); 
@endphp

<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-rooms-slider section" @hasfield('background_color') style="background-color: @field('background_color')" @endfield>
  <div class="container">
    <article class="block-rooms-slider__content">
      @hasfield('headline')
        <h2 class="section-header">@field('headline')</h2>
      @endfield
      <span class="headline-icon"><x-icon-reverse-line-arrow-left role="img" class="m-auto my-4"/></span>

      @hasfield('intro')
        <div class="block-rooms-slider__intro">
          @field('intro')
        </div>
      @endfield
    </article>

    @php
      $rooms = get_terms([
        'taxonomy' => 'room_category'
      ]);

      $room = new WP_Query([
        'post_type' => 'rooms',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ]);
    @endphp

    <article class="rooms-slider">

      @if($room->have_posts()) 

          @while ($room->have_posts())
            @php
              $room->the_post();
              $roomtitle = get_field('room_title', get_the_ID());
              $readmorebuttontext = get_field('read_more_button_text', get_the_ID());
              $roomprice = get_field('room_price', get_the_ID());
              $link = get_field('button_link', get_the_ID());
              $roomsnip = get_field('room_snippet', get_the_ID());
              $roomdesc = get_field('room_description', get_the_ID());
              $roomgallery = get_field('gallery', get_the_ID());
              $openPost = get_field('open_post', get_the_ID());
            @endphp

            <div class="block-rooms-slider__tile {{ $layout }}-btn-option" @hasfield('tile_border_color') style="border: 1px solid @field('tile_border_color')" @endfield>
              
              <div class="block-rooms-slider__image">
                {!! the_post_thumbnail() !!}
              </div>

              <div class="block-rooms-slider__room_content">
                <h3>{!! $roomtitle !!}</h3>
                <div class="block-rooms-slider__room_snippet">{!! $roomsnip !!}</div>
                @if($layout == 'read')
                  {{-- <div class="btn-wrapper"><a class="btn read-more view-post">{{ $readmorebuttontext ?: "Read more" }}</a></div> --}}
                  <div class="btn-wrapper"><a class="basic-btn read-more @if($openPost) modal-link @endif" href="{!! the_permalink() !!}">{{ $readmorebuttontext ?: "Read more" }}</a></div>
                @elseif($link)
                  <div class="grid btn-wrapper"><div class="price"><span>from</span>{!! $roomprice !!}</div><a class="basic-btn" target="{!! $link['target'] !!}" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a></div>
                @endif
              </div>
            
            </div>

          @endwhile
          @php
            wp_reset_postdata();
          @endphp

      @endif

    </article>
  </div>
</section>