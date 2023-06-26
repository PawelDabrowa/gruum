<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-image-split-repeater @field('section_padding')">
  @hasfields('steps')
    @fields('steps')
      @php $addButton = get_sub_field('add_button') @endphp

      @if( get_row_index() % 2 == 0 )
        <div class="grid">
          <article class='block-image-split-repeater__picture'>
            <div class='block-image-split-repeater__container'>
              <img src="@sub('image', 'url')" alt="@sub('image', 'alt')">
            </div>
          </article>
          <article class='block-image-split-repeater__info'>
            <div class="block-image-split-repeater__title">
              <h2 class="heading heading--2">@sub('title')</h2>
            </div>
            <div class="block-image-split-repeater__text">@sub('content')</div>
            @if($addButton == 'yes')
              <a href="@sub('button_link', 'url')" target="@sub('button_link', 'target')" class='btn'>@sub('button_link', 'title')</a>
            @endif
          </article>
        </div>
        @else 
        <div class="grid">
          <article class='block-image-split-repeater__info'>
            <div class="block-image-split-repeater__title">
              <h2 class="heading heading--2">@sub('title')</h2>
            </div>
            <div class="block-image-split-repeater__text">@sub('content')</div>
            @if($addButton == 'yes')
              <a href="@sub('button_link', 'url')" target="@sub('button_link', 'target')" class='btn'>@sub('button_link', 'title')</a>
            @endif
          </article>
          <article class='block-image-split-repeater__picture'>
            <div class='block-image-split-repeater__container'>
              <img src="@sub('image', 'url')" alt="@sub('image', 'alt')">
            </div>
          </article>
        </div>
      @endif 
    @endfields
  @endhasfields
</section>
