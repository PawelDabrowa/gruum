@php
  $layoutGroup = get_field('layout', 'option');
  $blogLayout = $layoutGroup['blog_layout'];
@endphp

@extends('layouts.app')

@section('content')
  @include('partials.blog-index-page-header')

  <div class="container blog--main @if($blogLayout  == 'Tiles') tiles--container @else blog--container  @endif">
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'sage') !!}
      </x-alert>
      {!! get_search_form(false) !!}
    @endif

    @if($blogLayout  == 'Tiles')
      <div class="tiles-layout grid">
    @else
      <div class="default-blog">
    @endif

      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}

  </div>
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
