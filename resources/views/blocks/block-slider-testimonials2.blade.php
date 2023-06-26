@php $section_id = get_field('section_id'); @endphp

<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-slider-testimonials2 block-slider-testimonials2-wrap">
  <article class="block-slider-testimonials2-wrap__inner">
    @hasfield('title')
      <h2>@field('title')</h2>
    @endfield
    @hasfield('intro')
      <p class="intro">@field('intro')</p>
    @endfield
    <div class="block-slider-testimonials2__column slider-testimonials2">
      @hasfields('slides')
        @fields('slides')
          <div class="block-slider-testimonials2__banner">
            @hassub('slide_content')
              <div class="block-slider-testimonials2__content">
                <span class="block-slider-testimonials2__content--text">
                  <p>@sub('slide_content')</p>
                </span>
                <div class="block-slider-testimonials2__bottom">
                  <p class="block-slider-testimonials2__name">@sub('name')</p>
                  <p class="block-slider-testimonials2__place">@sub('location')</p>
                </div>
              </div>
            @endsub
          </div>
        @endfields
      @endhasfields
    </div>
  </article>
</section>
