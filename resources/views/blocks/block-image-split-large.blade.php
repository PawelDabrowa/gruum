@if(get_field('page_link') == 'yes') 
  <a id="{!! get_field('page_link_id') !!}"></a>
@endif

@if(get_field('text_position') == 'left') 
  <section @hasfield('section_id') id="@field('section_id')" @endfield class="block-image-split-large @field('section_bg_color') section-flip">
    <div class="grid grid__outer">
      @if(get_field('static_content')) 
        <article class="text-block left">
          <div data-aos="fade-right" data-aos-duration="1000">
            <h2 class="heading heading--2">{!! get_field('headline') !!}</h2>
            {{-- <img class="headline-icon" src="@asset('images/svg/reverse-line-arrow-left.svg')" alt="" /> --}}
            {!! get_field('static_content') !!}
            @if (get_field('button_type') == 'popup')
              <div class="block-image-split-large__btns">
                @if(get_field('button_popup_text'))
                  <a href="" class="btn block-image-split-large__btn {!! get_field('popup_class') !!}">{!! get_field('button_popup_text') !!}</a>
                @endif
              </div>
            @else
            
              @php 
                $button_one_link = get_field('button_one_link');
                $button_two_link = get_field('button_two_link'); 
              @endphp

              @if($button_one_link || $button_two_link)
                <div class="block-image-split-large__btns">
                  @if($button_one_link)
                    <a class="btn arrow block-image-split-large__btn" target="{!! $button_one_link['target'] !!}" href="{!! $button_one_link['url'] !!}">{!! $button_one_link['title'] !!}</a>
                  @endif
                  @if($button_two_link)
                    <a class="btn arrow block-image-split-large__btn" target="{!! $button_two_link['target'] !!}" href="{!! $button_two_link['url'] !!}">{!! $button_two_link['title'] !!}</a>
                  @endif
                </div>
              @endif

            @endif
          </div>
        </article>
      @endif

      @if(get_field('image'))
        <article>
          <div class="block-image-split-large__column" style="background-image: url({!! get_field('image') !!})" role="img">
            <div class="block-image-split-large__banner"></div>
          </div>
        </article>
      @endif

    </div>
  </section>
@else
  <section @hasfield('section_id') id="@field('section_id')" @endfield class="block-image-split-large @field('section_bg_color') section-flip">
    <div class="grid grid__outer">
      @if(get_field('image'))
        <article>
          <div class="block-image-split-large__column" style="background-image: url({!! get_field('image') !!})" role="img">
            <div class="block-image-split-large__banner"></div>
          </div>
        </article>
      @endif

      @if(get_field('static_content')) 
        <article class="text-block right">
          <div data-aos="fade-left" data-aos-duration="1000">
            <h2>{!! get_field('headline') !!}</h2>
            {{-- <img class="headline-icon" src="@asset('images/svg/reverse-line-arrow-left.svg')" alt="" /> --}}
            {!! get_field('static_content') !!}
            @if (get_field('button_type') == 'popup')
              <div class="block-image-split-large__btns">
                @if(get_field('button_popup_text'))
                  <a href="" class="btn block-image-split-large__btn {!! get_field('popup_class') !!}">{!! get_field('button_popup_text') !!}</a>
                @endif
              </div>
            @else

              @php 
                $button_one_link = get_field('button_one_link');
                $button_two_link = get_field('button_two_link'); 
              @endphp

              @if($button_one_link || $button_two_link)
                <div class="block-image-split-large__btns">
                  @if($button_one_link)
                    <a class="btn arrow block-image-split-large__btn" target="{!! $button_one_link['target'] !!}" href="{!! $button_one_link['url'] !!}">{!! $button_one_link['title'] !!}</a>
                  @endif
                  @if($button_two_link)
                    <a class="btn arrow block-image-split-large__btn" target="{!! $button_two_link['target'] !!}" href="{!! $button_two_link['url'] !!}">{!! $button_two_link['title'] !!}</a>
                  @endif
                </div>
              @endif

            @endif
          </div>
        </article>
      @endif
    </div>
  </section>
@endif
