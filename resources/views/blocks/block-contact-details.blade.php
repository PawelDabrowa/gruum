<section @hasfield('section_id') id="@field('section_id')" @endfield class="block-contact-details" @hasfield('background_color') style="background-color: @field('background_color')" @endfield>
  <div class="container grid grid__outer grid-top">

    <article class="cta-block" @hasfield('background_color') style="border: 1px solid @field('background_color')" @endfield>
      @hasfield('phone_block_title')
        <h4>@field('phone_block_title')</h4>
      @endfield

      @hasfield('phone_block_content')
        <p>@field('phone_block_content')</p>
      @endfield

      @hasfield('phone_block_telephone')
        <p class="phone"><i class="fa fa-phone"></i><a href="tel:@field('phone_block_telephone')"">@field('phone_block_telephone')</a></p>
      @endfield

      @hasfield('phone_block_email')
        <p class="email"><i class="fa fa-envelope"></i><a href="mailto:@field('phone_block_email')"">@field('phone_block_email')</a></p>
      @endfield
    </article>

    <article class="cta-block" @hasfield('background_color') style="border: 1px solid @field('background_color')" @endfield>
      @hasfield('address_block_title')
        <h4>@field('address_block_title')</h4>
      @endfield

      @hasfield('address_block_content') 
        <p>@field('address_block_content')</p>
      @endfield
    </article>

    <article class="cta-block" @hasfield('background_color') style="border: 1px solid @field('background_color')" @endfield>
      @hasfield('book_online_block_title')
        <h4>@field('book_online_block_title')</h4>
      @endfield

      @hasfield('book_online_block_content')
        <p>@field('book_online_block_content')</p>
      @endfield

      @hasfield('button_link')
        <div class="block-contact-details__btns">
          <a href="@field('button_link', 'url')" target="@field('button_link', 'target')" class="btn block-contact-details__btn">@field('button_link', 'title')</a>
        </div>
      @endfield
    
    </article>

  </div>
</section>