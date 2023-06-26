<section class="block-image-button-links section">
  <div class="grid grid--4 container container--narrow">
    @hasfields('image_tiles')
      @fields('image_tiles')
        <div class="gallery-img">
          @hassub('tile_bg_image')
            <img src="@sub('tile_bg_image', 'url')" alt="@sub('tile_bg_image', 'title')" />
          @endsub
          <a href="@sub('tile_link_url')" @if(get_sub_field('external_link') == 'yes') target="_blank" @endif>
            <div class="link-overlay">
              <span>@sub('tile_headline')</span>
            </div>
          </a>
        </div>
      @endfields
    @endhasfields
  </div>
</section>