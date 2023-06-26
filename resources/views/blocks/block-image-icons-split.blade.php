<section class="{{ $block->classes }} block-image-icons-split section">
  <div class="container grid grid__outer">
    <div class="block-image-icons-split_content">
      @hasfield('title')
        <h2 class="heading heading--2">
          @field('title')
        </h2>
      @endfield
      @hasfield('introduction')
        <p class="block-image-icons-split__content-paragraph">
         @field('introduction')
        </p>
      @endfield
      @hasfield('title_first_row')
        <div class="block-image-icons-split__content-item">
          <span>
            <x-icon-camera class="w-12 h-12" />
          </span>
          <div class="u-display-flex u-flex-direction-col">
            <span class="block-image-icons-split__content-item-label">
              @hasfield('title_first_row')
                @field('title_first_row')
              @endfield
            </span>
            <p>
             @hasfield('subtitle_first_row')
              @field('subtitle_first_row')
             @endfield
            </p>
          </div>  
        </div>
      @endfield
      @hasfield('title_second_row')
        <div class="block-image-icons-split__content-item">
          <span>
            <x-icon-camera class="w-12 h-12" />
          </span>
          <div class="u-display-flex u-flex-direction-col">
            @hasfield('title_second_row')
            <span class="block-image-icons-split__content-item-label">
              @field('title_second_row')
            </span>
            @endfield
            @hasfield('subtitle_second_row')
              <p>
                @field('subtitle_second_row')
              </p>
            @endfield
          </div>  
        </div>
      @endfield
      @hasfield('button_link')
        <a href="@field('button_link', 'url')" target="@field('button_link', 'target')" class="btn">
          @field('button_link', 'title')
        </a>
      @endfield
    </div>
    @hasfield('image')
       {{-- @image( 'image', 'large' ) --}}
      @php 
        $id = get_field('image');
        $img = wp_get_attachment_image( $id, 'large');
        echo $img;
      @endphp
    @endfield
  </div>
</section>