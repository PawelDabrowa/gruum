@set($section_id, get_field('section_id'))
@set($section_bottom, get_field('images_bottom'))
<section id="{{ $section_id ? $section_id : $block->block->id }}" class="block-image-3x-split">
  <div class="block-image-3x-split-h__wrapper" @hasfield('background_color')
    style="background-color: @field('background_color')" @endfield>
    <div class="container grid grid__outer @hasfield('switch_images') isSwitched @endfield">
      <div class="block-image-3x-split-h__content @hasfield('switch_images') isSwitched @endfield" data-aos="fade"
        data-aos-duration="2000">
        @hasfield('label')
        <h3 class="heding heading--line" @hasfield('header_text_color')
          style="color: @field('header_text_color')" @endfield smooth-parallax="1" start-position-x="-0.1"
          end-position-x="0">
            @field('label')
        </h3>
        @endfield
        @hasfield('header_bottom')
        <div class="heading heading--2" @hasfield('header_text_color')
          style="color: @field('header_text_color');" @endfield data-aos="fade">
          @field('header_bottom')
        </div>
        <span class="emblem"></span>
        @endfield
        @hasfield('sub_header_bottom')
        <p class="block-image-3x-split-h__content-title" @hasfield('header_text_color')
          style="color: @field('header_text_color');" @endfield data-aos="fade">
          @field('sub_header_bottom')
        </p>
        @endfield
        <article @if(get_field('text_column')=='two' ) style=" column-width: 210px;" @endif>
          @hasfield('text_bottom')
          <p class="block-image-3x-split-h__col" @hasfield('text_color') style="color: @field('text_colo');"
            @endfield>
            @field('text_bottom')
          </p>
          @endfield
        </article>
        @fields('button')
          @hassub('button_link')
            <a class="btn" target="@sub('button_link', 'target')" href="@sub('button_link', 'url')" style="color: @sub('button_font_color'); background-color: @sub('button_background_color'); @hassub('button_border_color') border: 2px solid @sub('button_border_color') @endsub";>@sub('button_link', 'title')
            </a>
          @endsub
        @endfields
        @fields('button_1')
          @hassub('button_link')
            <a class="btn" target="@sub('button_link', 'target')" href="@sub('button_link', 'url')" style="color: @sub('button_font_color'); background-color: @sub('button_background_color'); @hassub('button_border_color') border: 2px solid @sub('button_border_color') @endsub";>@sub('button_link', 'title')
            </a>
          @endsub
        @endfields
      </div>
      <div class="block-image-3x-split-h__inner">
        <div class="block-image-3x-split-h__top-images">

          @set($bottom_image_position, get_field('bottom_image_position'))
          @set($top_image_position, get_field('top_image_position'))
          @set($imageID, $section_bottom['image_1'])
     
          @if($imageID)
            @image($imageID, 'full', [
              'class' => 'block-image-3x-split-h__top-images--top',
              'smooth-parallax' => '1',
              'start-position-y' => '0.3',
              'end-position-y' => '0'
              ])
          @endif

          <div class="block-image-3x-split-h__top-images--{!! $top_image_position['horizontal_position'] !!} {!! $top_image_position['vertical_position'] !!}" smooth-parallax="1" start-position-y="1"
            end-position-y="0.2">
              @set($image2, $section_bottom['image_2'])
              @image($image2, 'full', [
                'class' => 'block-image-3x-split-h__top-images--left_inner'
                ])
          </div>

          @set($image3, $section_bottom['image_3'])
          @set($horizontal_position, $bottom_image_position['horizontal_position'])
          @set($vertical_position, $bottom_image_position['vertical_position'])
          
          @if($image3)
            <div class="block-image-3x-split-h__top-images--bottom-{!! $horizontal_position !!} {!! $vertical_position !!}" smooth-parallax="1" start-position-y="-0.4" end-position-y="0">
                @image($image3, 'full', [
                  'class' => 'block-image-3x-split-h__top-images--bottom{!! $horizontal_position !!}_inner',
                  'smooth-parallax' => '1',
                  'start-position-y' => '-0.1',
                  'end-position-y' => '0'
                ])
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>