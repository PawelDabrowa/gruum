@php 
  // $section_id = get_field('section_id');
  $mapPosition = get_field('map_position');
@endphp
<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-map-split-1">
  <article class="grid grid__outer {{ ($mapPosition) ? 'left' : 'right' }}">

      @if(get_field('google_map_iframe'))
        <div class="iframe-cont">
          {!! get_field('google_map_iframe') !!}
        </div>
      @endif

      @if(get_field('contact_form')) 
        <div class="form-block" data-aos="flip-up">
          @if(get_field('form_title')) 
            <h3>{!! get_field('form_title') !!}</h3>
          @endif
          {!! get_field('contact_form') !!}
        </div>
      @endif

  </article>
</section>