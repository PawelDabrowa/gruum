<section id="@field('section_id')" class="section block-slider-tabs">
  <div class="container">
    @hasfield('label')
    <div class="heading heading--line" smooth-parallax="1" start-position-x="-0.1" end-position-x="0">
      @field('label')
    </div>
    @endfield
    <div class="tabs">
      @hasfields('rooms_name')
        @fields('rooms_name')
          <button class="tab btn carousel-btn">@sub('room_name')</button>
        @endfields
      @endhasfields
    </div>
    <div class="content">
      @fields('block')
      <div class="content-item carousel">
        <div class="images-inner">
          @set($images, get_sub_field('gallery') )
          <div class="slider-single">
            @foreach( $images as $image_id )
             @image( $image_id, 'full')
            @endforeach
          </div>
          <div class="slider-nav">
            @foreach( $images as $image_id )
            @image( $image_id, 'full')
            @endforeach
          </div>
        </div>
        <div class="content-inner">
          <div class="text-container">
            @hassub('header')
              <h2 class="heading heading--2">
                @sub('header')
              </h2>
            @endsub
            @hassub('subtitle')
              <p class="content-inner__subtitle">
                @sub('subtitle')
              </p>
            @endsub
            @hassub('description')
              <p class="content-description">
                @sub('description')
              </p>
            @endsub
          </div>
          @hassub('button_link')
            <div class="btn-wrapper">
                <a class="btn white-btn service-btn" target="@sub('button_link', 'target')" href="@sub('button_link', 'url')" style="background-color: @sub('background_button_color'); color: @sub('text_color'); @hassub('border_button_color') border: 2px solid @sub('border_button_color') @endsub">
                  @sub('button_link', 'title')
                </a>
            </div>
          @endsub
        </div>
      </div>
      @endfields
    </div>
  </div>
</section>

<script>
  const element = document.querySelector('.carousel'); 
  element.classList.add('active'); 
  const carouselBtn=document.querySelector('.carousel-btn'); 
  carouselBtn.classList.add('active');


  let tabs = document.querySelectorAll('.tab');
  let content = document.querySelectorAll('.content-item');
  for (let i = 0; i < tabs.length; i++) {            
      tabs[i].addEventListener('click', () => tabClick(i));
  }

  function tabClick(currentTab) {
      removeActive();
      tabs[currentTab].classList.add('active');
      content[currentTab].classList.add('active');
      console.log(currentTab);
  }

  function removeActive() {
      for (let i = 0; i < tabs.length; i++) {
          tabs[i].classList.remove('active');
          content[i].classList.remove('active');
      }
  }
</script>