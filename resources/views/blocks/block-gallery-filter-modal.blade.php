<div class="container">
  <section @hasfield('section_id') id="@field('section_id')" @endfield class="block-gallery-filter-modal section">
  
    @if(get_field('headline', 'option'))
      <h2>{!! get_field('headline', 'option') !!}</h2>
      <span class="headline-icon"><x-icon-reverse-line-arrow-left role="img" class="m-auto my-4"/></span>
    @endif
  
    @php 
      if( have_rows('gallery', 'option') ): @endphp
  
        <div class="button-container">
          <button type="button" class="gallery-btn filtr filtr-item active" data-filter="all">All</button>
          <button type="button" class="gallery-btn filtr filtr-item" data-filter="rooms">Rooms</button>
          <button type="button" class="gallery-btn filtr filtr-item" data-filter="eat">Eat</button>
          <button type="button" class="gallery-btn filtr filtr-item" data-filter="drink">Drink</button>
          <button type="button" class="gallery-btn filtr filtr-item" data-filter="events">Events</button>
        </div>
        <div class="gallery-container filter-container">
  
          @php
          // Loop through rows.
          while( have_rows('gallery', 'option') ) : the_row(); 
  
            $image = get_sub_field('image', 'option');
            // echo $image['url'];
            // echo $image['alt'];
            $imagelabel = get_sub_field('image_label', 'option');
            @endphp
  
            <div 
              class="filtr-item the-image pop" 
              label="{!! $imagelabel !!}" 
              data-category="{!! $imagelabel !!}"
              data-src="{!! $image['url'] !!}"
              style="background-image: url({!! $image['url'] !!});
            "></div>
  
          @php
          endwhile; // End loop.
          @endphp
  
        </div>
  
      @php 
      endif;
    @endphp
  </section>
</div>

@include('partials.modal-gallery')
  