<div id="modal-ready">
  <div class="hide-modal">
    @php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) @endphp

    <section class="block-banner-image" style="background-image: url({!! $backgroundImg[0] !!})" role="img">
      <div class="container flex">
        <div class="header-overlay"></div>
        <h1 class="heading heading--1">@php the_title(); @endphp</h1>
      </div>
    </section>
  </div>

  @php $buttonLink = get_field('button_link') @endphp

  <div class="modal-container">
    <article @php post_class() @endphp>
      <div class="entry-content grid">
        <div class="rm-gallery">

          @php 
            $images = get_field('gallery');
            if( $images ): 
            $c=0;
          @endphp

              <!-- boostrap slider -->
              <div id="offer-slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @foreach( $images as $image )
                      <div class="carousel-item {!! ($c == 0) ? ' active' : '' !!}">
                          <img class="d-block w-100" src="{!! esc_url($image['url']) !!}" alt="{!! esc_attr($image['alt']) !!}" />
                      </div>
                      @php $c++ @endphp
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#offer-slider" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#offer-slider" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden"></span>
                </button>
              </div>
              <!-- end bootstrap slider -->

          @else
            <div class="post-thumb">
              {!! the_post_thumbnail() !!}
            </div>
          @endif

        </div>

        <div class="rm-info">
          <h1 class="entry-title">{!! the_title() !!}</h1>
          <h4>{!!get_field('offer_subtitle')!!}</h4>
          {!!get_field('offer_descritpion')!!}

          @if($buttonLink)
            <div class="block-rooms__btns">
              <a href="{!! $buttonLink['url'] !!}" target="{{ $buttonLink['target'] }}" class="btn block-rooms-1__btn">{{ $buttonLink['title'] }}</a>
            </div>
          @endif
          
        </div>
      </div>
    </article>
  </div>
</div>