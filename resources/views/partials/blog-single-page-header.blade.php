@php 
  $postID = get_the_ID();
  $imgURL = wp_get_attachment_url( get_post_thumbnail_id($postID), 'thumbnail' );
@endphp
@if(is_single())
  <div class="block-banner-image single-blog-banner" style="background-image: url({!! $imgURL !!});">
    <div class="container">
      <div class="flex">
        <div>
          <h1 class="heading heading--1">@php the_title(); @endphp</h1>
        </div>
      </div>
      <div class="header-overlay"></div>
    </div>
  </div>
@endif