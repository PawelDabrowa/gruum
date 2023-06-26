
<section class="block-our-services-single section">
  <div class="container">
    @hasfield('headline')
      <h2 class="section-header heading heading--2">@field('headline')</h2>
      <span class="headline-icon"><x-icon-reverse-line-arrow-left role="img" class="m-auto my-4"/></span>
    @endfield
    @hasfield('intro')
      <div class="intro_container">
       @field('intro')
      </div>
    @endfield
    <div class="services-center container flex-1 section-center">
      <!-- single service -->
      @fields('items')
      <article class="service">
        @hassub('icon')
        <div data-aos="zoom-in" class="icon">
          <img width="82" height="82" src="@sub('icon')" alt="icon">
        </div>
        @endsub
        @hassub('title')
          <h4>@sub('title')</h4>
        @endsub
        @hassub('content')
          <p>@sub('content')</p>
        @endsub
        @hassub('button_link')
          <a class="btn white-btn service-btn" target="@sub('button_link', 'target')" href="@sub('button_link', 'url')">@sub('button_link', 'title')</a>
        @endsub
      </article>
      @endfields
      <!-- end of single service -->
    </div>
  </div>
</section>