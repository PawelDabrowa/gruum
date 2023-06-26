<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-image-wysiwyg @field('section_padding')">
  <div class="container">
    <article class="block-image-wysiwyg__content">

      @hasfield('section_title')
        <h2>@field('section_title')</h2>
      @endfield

      @hasfield('image')
          {{-- @image('image') --}}
          @php 
            $img = get_field('image');
            // dd($img);
          @endphp
          <img src="{!! $img['url'] !!}" alt="{!! $img['alt'] !!}">
      @endfield

      @hasfield('content')
        <div class="block-image-wysiwyg__content">
          @field('content')

          @php 
            $addButton = get_field('add_button');
            $buttonType = get_field('button_type');
          @endphp
          
          @if($addButton == 'yes')
            <div class="block-image-wysiwyg__btns">
              @if($buttonType == 'popup')
                <a href="" class="btn block-image-wysiwyg__btn @field('popup_class')">@field('popup_button_text')</a>
              @else
              @hasfield('button_link')
                <a href="@field('button_link','url')" target="@field('button_link','target')" class="btn block-image-wysiwyg__btn">@field('button_link','title')</a>
              @endfield
              @endif
            </div>
          @endif
        </div>
      @endfield

    </article>
  </div>
</section>
