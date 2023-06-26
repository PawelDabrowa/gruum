<div class="container">
  <section class="block-grid-gallery-switch section">
    <article class="text-block">

      @if(get_field('headline'))
        <h2>{!! get_field('headline') !!}</h2>
        <span class="headline-icon"><x-icon-reverse-line-arrow-left role="img" class="m-auto my-4"/></span>
      @endif

      @if(get_field('content'))
        <div class="text-block__content">
          {!! get_field('content') !!}
        </div>
      @endif

    </article>

    <!-- Check rows exists. -->
    @php if( have_rows('gallery_grid') ):

        // Loop through rows.
        while( have_rows('gallery_grid') ) : the_row();

          
          $grid_row_layout = get_sub_field('grid_row_layout');

          $main_image = get_sub_field('main_image');
          $top_left_image = get_sub_field('top_left_image');
          $top_right_image = get_sub_field('top_right_image');
          $bottom_left_image = get_sub_field('bottom_left_image');
          $bottom_right_image = get_sub_field('bottom_right_image'); 
          $right_portrait_image = get_sub_field('right_portrait_image'); @endphp
          
          @if($grid_row_layout == 'main-left') 

          <div class="gallery-imgs {!! $grid_row_layout !!}">
            <div class="gallery-img" style="background-image: url({!! $main_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $top_left_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $top_right_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $bottom_left_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $bottom_right_image !!})"></div>
          </div>

          @elseif($grid_row_layout == 'main-center')

          <div class="gallery-imgs {!! $grid_row_layout !!}">
            <div class="gallery-img" style="background-image: url({!! $top_left_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $right_portrait_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $main_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $bottom_left_image !!})"></div>
          </div>

          @else

          <div class="gallery-imgs {!! $grid_row_layout !!}">
            <div class="gallery-img" style="background-image: url({!! $top_left_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $top_right_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $bottom_left_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $bottom_right_image !!})"></div>
            <div class="gallery-img" style="background-image: url({!! $main_image !!})"></div>
          </div>

          @endif
            
        @php
        // End loop.
        endwhile;

      // No value.
      else :
          // Do something...
      endif;
    @endphp

  </section>
</div>