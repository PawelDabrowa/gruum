{{-- 
<section class="block-banner-slider-1 block-slider">
  @hasfields('slides')
    @fields('slides')
      <div class="block-banner-slider-1__column" @hassub('slide_image') style="background-image: url(@sub('slide_image', 'url'))" @endsub role="img">
        <div class="block-banner-slider-1__banner">
          @hassub('slide_title')
            <h1 class="heading heading--1">@sub('slide_title')</h1>
          @endsub
          @hassub('slide_content')
            <p class="block-banner-slider-1__content">@sub('slide_content')</p>
          @endsub
          @hassub('button_one_link')
            <div class="block-banner-slider-1__btns">
              <a href="@sub('button_one_link', 'url')" target="@sub('button_one_link', 'target')" class="btn block-banner-slider-1__btn">@sub('button_one_link', 'title')</a>
              @hassub('button_two_link')
                <a href="@sub('button_two_link', 'url')" target="@sub('button_two_link', 'target')" class="btn block-banner-slider-1__btn">@sub('button_two_link', 'title')</a>
              @endsub
            </div>
          @endsub
        </div>
      </div>
    @endfields
  @endhasfields
</section> --}}