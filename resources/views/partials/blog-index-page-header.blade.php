@php 
  $imgURL = wp_get_attachment_url( get_post_thumbnail_id(get_option( 'page_for_posts' )) );
  $blogTitle = get_the_title( get_option('page_for_posts', true) );
@endphp
@if(!is_single())
  <div class="block-banner-image blog-banner" style="background-image: url({!! $imgURL !!});">
    <div class="container">
      <div class="flex">
        <div>
          <h1 class="heading heading--1">{{ $blogTitle }}</h1>
        </div>
      </div>
      <div class="header-overlay"></div>
    </div>
  </div>
@endif
