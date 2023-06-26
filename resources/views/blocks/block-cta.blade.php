<section class="block-cta section @field('section_bg_color')">
  <article class="container cta flex" data-aos="zoom-in"" data-aos-duration="1000">

      @hasfield('title')
        <h3 class="heading heading--2">
          @field('title')
        </h3>
      @endfield

      @hasfield('content')
        <p class="block-cta__content">
          @field('content')
        </p>
      @endfield

      @hasfield('button_link')
        <a href="@field('button_link', 'url')" target="@field('button_link', 'target')" class="btn">@field('button_link', 'title')</a>
      @endfield

  </article>
</section>