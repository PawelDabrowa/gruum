@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="search-message-wrap">
      @include('partials.page-header')

      @if (! have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
      @endif

      @while(have_posts()) @php(the_post())
        @include('partials.content-search')
      @endwhile

      {!! get_the_posts_navigation() !!}
    </div>
  </div>
@endsection
