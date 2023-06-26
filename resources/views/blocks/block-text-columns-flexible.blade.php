<section class="block-text-columns-flexible @field('section_padding')">
  <div class="container">
    <article @hasfield('number_columns') class="@field('number_columns')" @endfield>
      @field('text')
    </article>
  </div>
</section>
