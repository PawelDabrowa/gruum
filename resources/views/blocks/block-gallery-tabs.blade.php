<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-gallery-tabs section">
  <div class="container">
    @hasfield('title')
      <h2 class="section-header heading--2">@field('title')</h2>
    @endfield
    @hasfield('content')
      <p class="gallery-copy">@field('content')</p>
    @endfield
    <div class="tabset"> <!-- Tabs -->
      
      @php
        // Tabs headings
        if( have_rows('gallery_tab') ):
          $tabNavButton = 0; @endphp
          
          @php 
          while( have_rows('gallery_tab') ) : the_row();
          $tabNavButton++;

              $tabtitle = get_sub_field('tab_title'); 
              
              if($tabNavButton == 1) : @endphp

                <input type="radio" name="tabset" id="tab-@php echo $tabNavButton @endphp" aria-controls="tpanel-@php echo $tabNavButton @endphp" checked="checked">
                <label for="tab-@php echo $tabNavButton @endphp">{!! $tabtitle !!}</label>
                
              @php else: @endphp

                <input type="radio" name="tabset" id="tab-@php echo $tabNavButton @endphp" aria-controls="tpanel-@php echo $tabNavButton @endphp">
                <label for="tab-@php echo $tabNavButton @endphp">{!! $tabtitle !!}</label>

              @php endif; 

          endwhile;
          @endphp

        @php 
        endif;
        
        // Tab Panels
        if( have_rows('gallery_tab') ):
          $tabPanel = 0; @endphp

          <div class="tab-panels">

            @php // Loop through rows.
              while( have_rows('gallery_tab') ) : the_row(); 
                $tabPanel++; @endphp

                <section id="tpanel-@php echo $tabPanel @endphp" class="tab-panel">

                  <div class="gallery-imgs">
                    @php $images = get_sub_field('the_gallery') @endphp
                    @foreach($images as $image )
                      <div class="gallery-img">
                        {!! wp_get_attachment_image($image, 'full') !!}
                      </div>
                    @endforeach
                  </div>
                  
                </section>

              @php endwhile; @endphp 
  
          </div>

        @php 
        endif; @endphp

    </div> <!-- end Tabs -->
  </div>
</section>
