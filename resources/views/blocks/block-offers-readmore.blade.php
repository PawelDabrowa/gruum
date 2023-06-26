<section class="block-offers-readmore section" @hasfield('background_color') style="background-color: @field('background_color'); @endfield ">
  <div class="container">
    <div class="block-offers-readmore__heading">
      @if (get_field('main_title'))
      <h2 class="heading heading--2">
        {!! get_field('main_title') !!}
      </h2>
      @endif
      @if (get_field('intro_text'))
      <p class="block-offers-readmore__main-text">
        {!! get_field('intro_text') !!}
      </p>
      @endif
    </div>
    <div class="grid block-offers-readmore__grid">
      @hasfields('offers')
        @fields('offers')
          <article class="block-offers-readmore__article">
            <div class="block-offers-readmore__article--main-img">
              <h3 class="project-info" 
                @php
                  $overlayBgColor = get_sub_field('overlay_background_color');
                  $overlayTextColor = get_sub_field('overlay_text_color');
                @endphp 
                @if($overlayBgColor || $overlayTextColor) style="@endif @if($overlayBgColor)background-color: @sub('overlay_background_color');@endif @if($overlayTextColor)color: @sub('overlay_text_color');@endif">@sub('overlay_text')
              </h3>
              <img src="@sub('image')" alt="offer image">
            </div>
            @hassub('title')
              <h3>@sub('title')</h3>
            @endsub
            <div class="block-offers-readmore__article--text accordion__item accordion__item--activ">@sub('text')</div>
            @hassub('button_link')
              <div class="block-offers-readmore__article--buttons">
                @php $readmorebutton = get_sub_field('read_more_button') @endphp
                @if($readmorebutton) 
                  <p class="accordion__item--summary">read more</p>
                @else 
                  <p class="accordion__item--summary empty"></p>
                @endif
                @hassub('button_link')
                  <a class="btn btn--blue" href="@sub('button_link','url')" target="@sub('button_link','target')">@sub('button_link','title')</a>
                @endsub
              </div>
            @endsub
          </article>
        @endfields
      @endhasfields
    </div>
  </div>
</section>

<script>
  jQuery(document).ready(function() {
    let buttonR = document.querySelectorAll('.accordion__item--summary');
    let text = document.querySelectorAll('.accordion__item--activ');
    for (let i = 0; i < buttonR.length; i++) {            
      buttonR[i].addEventListener('click', () => tabClick(i));
    }

    function tabClick(currentTab) {
      
      text[currentTab].classList.toggle('active');

        if (text[currentTab].classList.contains('active')) {
          buttonR[currentTab].innerHTML = "Read Less";
        } else {
          buttonR[currentTab].innerHTML = "Read More";
        }
    }
  });
</script>