<section class="block-slider-testimonials-1" @hasfield('section_id') id="@field('section_id')" @endfield @hasfield('background_image') style="background-image: url(@field('background_image'))" @endfield >
  <article class="block-slider-testimonials-1__inner">
    <div data-aos="zoom-in" data-aos-duration="1000">
      <div class="intro">
        @hasfield('title')
          <h2 class="heading heading--2">@field('title')</h2>
        @endfield
        @hasfield('introduction')
          <p>@field('introduction')</p>
        @endfield
      </div>

      <div class="slider-testimonials1">
        @fields('items')
          <div class="block-slider-testimonials-1__column">
            <div class="block-slider-testimonials-1__banner">
              @hassub('item')
                <div class="block-slider-testimonials-1__content">@sub('item')</div>
              @endsub
            </div>
          </div>
        @endfields
      </div>
    </div>
  </article>
  
</section>
