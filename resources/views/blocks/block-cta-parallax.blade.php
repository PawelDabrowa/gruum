@php
  $image = get_field('image');
  $size = 'large'; // (thumbnail, medium, large, full or custom size)
  $addButton = get_field('add_button');
@endphp

<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-cta-parallax">
  {!! wp_get_attachment_image( $image, $size ) !!}
  <div class="image-banner">
    <div class="section-title video-title">
      @hasfield('title')
        <h2 class="heading heading--2">
          @field('title')
        </h2>
      @endfield
    </div>
    @hasfield('text')
      <p class="video-text">@field('text')</p>
    @endfield
    @if($addButton == 'yes')
      <a href="@field('button_link', 'url')" target="@field('button_link', 'target')" class="btn">@field('button_link', 'title')</a>
    @endif
  </div>
</section>
