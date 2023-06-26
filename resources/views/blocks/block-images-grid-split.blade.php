@php $textPosition = get_field('text_position') @endphp
<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-images-grid-split section" @hasfield('background_color') style="background-color: @field('background_color')" @endfield>
  <div class="container grid grid__outer @if($textPosition) text-left @endif">

    <article class="gallery-cont">
      <div class="gallery-imgs">
        <div class="gallery-img" style="background-image: url(@field('top_left_image'))"></div>
        <div class="gallery-img" style="background-image: url(@field('top_right_image'))"></div>
        <div class="gallery-img" style="background-image: url(@field('bottom_left_image'))"></div>
        <div class="gallery-img" style="background-image: url(@field('bottom_right_image'))"></div>
      </div>
    </article>

    @hasfield('static_content')
      <article class="text-block">
        <div data-aos="fade-right" data-aos-duration="1000">
          <div class="heading heading--2">
            @field('header')
            @hasfield('divider_image')
              <span class="headline-icon"><img class="my-4" src="@field('divider_image')" alt=""></span>
            @endfield
          </div>
          
          @field('static_content')

          @hasfield('button_one')
            <div class="the__btns">
              <a href="@field('button_one', 'url')" target="@field('button_one', 'target')" class="btn">@field('button_one', 'title')</a>
              @hasfield('button_two')
                <a href="@field('button_two', 'url')" target="@field('button_two', 'target')" class="btn">@field('button_two', 'title')</a>
              @endfield
            </div>
          @endfield

        </div>
      </article>
    @endfield

  </div>
</section>
