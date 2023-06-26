<section class="block-gallery-things-to-do section" id="@field('section_id')" @hasfield('background_color') style="background-color: @field('background_color')" @endfield>
  @php
    $menus = get_terms([
    'taxonomy' => 'things_todo_category'
    ]);
  @endphp
  <div class="container">
   @group('gallery')
    @hassub('header')
      <h2 class="heading heading--2 ">
        @sub('header')
      </h2>
    @endsub
    @hassub('text')
      <p class="block-gallery-things-to-do__info intro"> @sub('text')</p>
    @endsub
   @endgroup
  </div>
  <div class="container">
    <div class="block-gallery-things-to-do__btn--container">
      <button type="button" class="btn block-gallery-things-to-do__btn--filter active filtr filtr-item" data-filter="all">all</button>
      @foreach ($menus as $menu)
        <button type="button" class="btn block-gallery-things-to-do__btn--filter filtr filtr-item" data-filter="{{ $menu->name }}">
          {!! $menu->name !!}
        </button>
      @endforeach
    </div>
    @php
      $menu = new WP_Query([
        'post_type' => 'gallery',
        'posts_per_page' => -1,
      ]);
    @endphp
    @if($menu->have_posts())
      <div class="filter-container block-gallery-things-to-do__item container">
        @while ($menu->have_posts())
          @php
            $menu->the_post();
            $text = get_field('overlay_text', get_the_ID());
            $button = get_field('overlay_button', get_the_ID());
          @endphp
          
          @if(get_the_terms(get_the_ID(), 'things_todo_category'))
            @foreach (get_the_terms(get_the_ID(), 'things_todo_category') as $cat)
              @php $termsSLug = $cat->name @endphp
            @endforeach
          

            <div class="filtr-item img-cont" data-category="{!! $termsSLug !!}">
              @if (has_post_thumbnail())
                <div class="block-gallery-things-to-do__item--image">
                  <span class="overlay-things">
                      <h2>@title</h2>
                      @if( $text) 
                        <p>{{ $text }}</p>
                      @endif
                      @if($button)
                        <a href="{{ $button['url'] }}" target="{{ $button['target'] == '_blank' ? '_blank' : '_self'}}">
                          {!! $button['title'] !!}
                        </a>
                      @endif
                  </span>
                  @thumbnail('square')
                </div>
              @endif
            </div>
          @endif

        @endwhile

          <!-- Message to added Categories tp display gallery -->
          @if(get_the_terms(get_the_ID(), 'things_todo_category') == null)
              <h2>Please add categories for gallery to display!</h2>
            @endif
          @php

          wp_reset_postdata();
        @endphp
      </div>
    @endif
  </div>
</section>