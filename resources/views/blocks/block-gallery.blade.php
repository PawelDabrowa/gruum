@hasfields('gallery')
@set($images, get_field('gallery') )
<section class="block-gallery section">
  <h2 class="section-header heading heading--2">
    @hasfield('title')
      @field('title')
    @endfield('title')
  </h2>
  <p class="gallery-copy">
    @hasfield('content') 
      @field('content') 
    @endfield</p>
  <div class="gallery-imgs">
    @foreach($images as $image)
      <div class="gallery-img">
        @image($image, 'full')
      </div>
    @endforeach
  </div>
</section>
@endhasfields