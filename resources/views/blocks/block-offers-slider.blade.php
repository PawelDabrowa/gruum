<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-offers-slider section">
  <div class="container">
    <article class="block-offers-slider__content">
      <h2 class="section-header">{!! get_field('headline') !!}</h2>

      @if(get_field('intro'))
        <div class="block-offers-slider__intro">
          {!! get_field('intro') !!}
        </div>
      @endif
    </article>

    @php
      $offers = get_terms([
        'taxonomy' => 'offer_category'
      ]);

      $offer = new WP_Query([
        'post_type' => 'offers',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ]);
    @endphp

    <article class="offer-block-slider">

      @if($offer->have_posts()) 

          @while ($offer->have_posts())
            @php
              $offer->the_post();
              $offertitle = get_field('offer_title', get_the_ID());
              $offer_subtitle = get_field('offer_subtitle', get_the_ID());
              $offer_type = get_field('offer_type', get_the_ID());
              $offersnip = get_field('offer_snippet', get_the_ID());
              $offerdesc = get_field('offer_description', get_the_ID());
              $offergallery = get_field('gallery', get_the_ID());
              $offerprice = get_field('offer_price', get_the_ID());
              $perpersonnight = get_field('per_person_night', get_the_ID());
              $readmorebuttontext = get_field('read_more_button_text', get_the_ID());
              $button_link = get_field('button_link', get_the_ID());
              $show_offer_price = get_field('show_offer_price', get_the_ID());
              $enable_read_more_popup = get_field('enable_read_more_popup', get_the_ID());
            @endphp

            <div class="block-offers-slider__tile">
              
              @php $url = wp_get_attachment_url( get_post_thumbnail_id($offer->ID) ); @endphp
              <div>
                <div class="block-offers-slider__image" style="background-image: url({!! $url !!})">
                  <div class="offer-overlay"></div>
                  <h3>{!! $offertitle !!}</h3>
                </div>
              </div>

              <div class="block-offers-slider__offer_content">
                <h4>{!! $offer_subtitle !!}</h4>
                @if($offer_type)
                  <h5>{!! $offer_type !!}</h5>
                @endif
                @if($show_offer_price == 'yes')
                  <div class="price"><span class="p-text">from</span>{!! $offerprice !!}<span class="pp-pn">{!! $perpersonnight !!}</span></div>
                @endif
                <div class="block-offers-slider__offer_snippet">
                  {!! $offersnip !!} 
                  @if($enable_read_more_popup == 'yes') 
                    <a class="modal-link" href="{!! the_permalink() !!}">{{ $readmorebuttontext ?: "Read more" }}</a>
                  @endif
                </div>
                <div class="btn-cont">
                  <a class="btn arrow" target="{!! $button_link['target'] !!}" href="{!! $button_link['url'] !!}">{!! $button_link['title'] !!}</a>
                </div>
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