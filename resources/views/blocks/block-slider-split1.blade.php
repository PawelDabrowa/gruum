@php $galleryPosition = get_field('gallery_position') @endphp
<section id="@field('section_id')" class="block-slider-split-1 @field('section_bg_color') @if($galleryPosition) gallery-left @endif">
  <div class="grid grid__outer @field('section_layout_style')">

    @hasfield('static_content')
      <article class="text-block {{ ($galleryPosition) ? 'right' : 'left' }}">
        <div data-aos="fade-up" data-aos-duration="1000">
          @hasfield('static_content')
            @field('static_content')
          @endfield
          @if (get_field('button_type') == 'popup')
            <div class="block-slider-split-1__btns">
              @hasfield('button_popup_text'))
                <a href="" class="btn block-slider-split-1__btn @field('popup_class')">@field('button_popup_text')</a>
              @endfield
            </div>
          @else
            @hasfield('button_one_link')
              <div class="block-slider-split-1__btns">
                <a href="@field('button_one_link','url')" target="@field('button_one_link','target')" class="btn block-slider-split-1__btn">@field('button_one_link', 'title')</a>
                @hasfield('button_two_link')
                  <a href="@field('button_two_link','url')" target="@field('button_two_link','target')" class="btn block-slider-split-1__btn">@field('button_two_link','title')</a>
                @endfield
              </div>
            @endfield
          @endif
        </div>
      </article>
    @endfield

    <article class="block-slider">
      @php $images = get_field('gallery');@endphp
        @foreach($images as $image )
          <div class="block-slider-split-1__column" style="background-image: url({!! $image['url'] !!})" role="img">
            <div class="block-slider-split-1__banner"></div>
          </div>
        @endforeach
    </article>

  </div>
</section>
