@php $testimonial = get_field('testimonial_banner') @endphp
@group('testimonial_banner')
  <section class="block-single-testimonial-parallax @hassub('background_attachment') attachment-fixed @endsub"
    @hassub('background_image')
    style="background-image: url(@sub('background_image')); @hassub('image_height') height:@sub('image_height')px; @endsub"
    @endsub role="img">
    <div class="header-overlay" @hassub('overlay_color') style="background-color:@sub('overlay_color')" @endsub></div>
    <div class="container flex">
      @if($testimonial['testimonial_text'])
      <div class="quote"><img src="@asset('images/icons/quote2.png')" /></div>
      <h2 class="heading heading--1">
        @sub('testimonial_text')
      </h2>
      <div class="quote"><img src="@asset('images/icons/quote1.png')" /></div>
      @endif
    </div>
  </section>
@endgroup
