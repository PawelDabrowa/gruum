<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-wysiwyg @field('section_padding')">
  <div class="container">
    <article class="block-wysiwyg__content">
      @hasfield('content')
        <div class="block-wysiwyg__content">
         @field('content')
        </div>
      @endfield
    </article>
  </div>
</section>
