@extends('layouts.app')

@section('content')

@include('partials.blog-single-page-header')

  <div class="container single">
    <section class="section">
      <div class="grid">

        @while(have_posts()) @php the_post() @endphp
          @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
        @endwhile
        
        <div class="sidebar-cont">
          <h3>Latest Posts</h3>
  
          @php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'orderby' => 'post_date',
              'order' => 'DESC',
            );
            $blog_posts = new WP_Query($args)
          @endphp
  
            @if( $blog_posts->have_posts() )
  
              @while( $blog_posts->have_posts() )
  
                {{ $blog_posts->the_post() }}
  
                <article>
                  <a href="{{ the_permalink() }}">
                    @if( has_post_thumbnail() )
                      {{ the_post_thumbnail( 'browa-blog', array( 'class' => 'img-thumb')) }}
                    @endif
                  </a>
                  <h4><a href="{{ the_permalink() }}">{{ the_title() }}</a></h4>
                </article>
  
              @endwhile
  
              @php wp_reset_postdata() @endphp
  
            @else
                <p>Nothing to display.</p>
            @endif
        </div>

      </div>
    </section>
  </div>

@endsection
