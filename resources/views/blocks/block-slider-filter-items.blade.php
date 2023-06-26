@php
  $section_id = get_field('section_id');
  $brand = get_field('brand');
  $ouritems = get_field('item', 'option');
@endphp

<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-slider-filter-items-wrap @field('section_padding')">
  <div class="menu-cont">
    <button class="all active" data-filter="all">All</button> <button class="light" data-filter="light">Light Roast</button> <button class="moderate" data-filter="moderate">Moderate Roast</button> <button class="heavy" data-filter="heavy">Heavy Roast</button> <button class="decaf" data-filter="decaf">Decaf</button>
  </div>
  @if($ouritems)
    <div class="block-slider-filter-items coffee-slider items-slider">
      @if($brand == 'azzuro')
        @foreach($ouritems as $ouritem)
          @if($ouritem['brand'] == 'azzuro')
            <div class="tile {!! $ouritem['item_type'] !!} {!! $ouritem['brand'] !!}">
              <div class="ouritem">
                <article class="outer-wrap">
                  <div class="inner-wrap">
                    <div class="read-more-block">
                      <div class="img-cont">
                        <img src="{!! $ouritem['item_image'] !!}" alt="item image">
                      </div>
                      <h4>{!! $ouritem['title'] !!}</h4>
                      <p>{!! $ouritem['content'] !!}</p>
                    </div>
                  </div>
                </article>
                <div class="btn-cont">
                  <a class="read-more-btn">Read more</a>
                  @php $link = $ouritem['the_button']; @endphp
                  @if($link)
                    <a class="btn" target="{!! $link['target'] !!}" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
                  @endif
                </div>
              </div>
            </div>
          @endif
        @endforeach
      @elseif($brand == 'julius')
        @foreach($ouritems as $ouritem)
          @if($ouritem['brand'] == 'julius')
            <div class="tile {!! $ouritem['item_type'] !!} {!! $ouritem['brand'] !!}">
              <div class="ouritem">
                <article class="outer-wrap">
                  <div class="inner-wrap">
                    <div class="read-more-block">
                      <div class="img-cont">
                        <img src="{!! $ouritem['item_image'] !!}" alt="item image">
                      </div>
                      <h4>{!! $ouritem['title'] !!}</h4>
                      <p>{!! $ouritem['content'] !!}</p>
                    </div>
                  </div>
                </article>
                <div class="btn-cont">
                  <a class="read-more-btn">Read more</a>
                  @php $link = $ouritem['the_button']; @endphp
                  @if($link)
                    <a class="btn" target="{!! $link['target'] !!}" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
                  @endif
                </div>
              </div>
            </div>
          @endif
        @endforeach
      @else
        @foreach($ouritems as $ouritem)
          <div class="tile {!! $ouritem['item_type'] !!} {!! $ouritem['brand'] !!}">
            <div class="ouritem">
              <article class="outer-wrap">
                <div class="inner-wrap">
                  <div class="read-more-block">
                    <div class="img-cont">
                      <img src="{!! $ouritem['item_image'] !!}" alt="item image">
                    </div>
                    <h4>{!! $ouritem['title'] !!}</h4>
                    <p>{!! $ouritem['content'] !!}</p>
                  </div>
                </div>
              </article>
              <div class="btn-cont">
                <a class="read-more-btn">Read more</a>
                @php $link = $ouritem['the_button']; @endphp
                @if($link)
                  <a class="btn" target="{!! $link['target'] !!}" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  @endif
</section>