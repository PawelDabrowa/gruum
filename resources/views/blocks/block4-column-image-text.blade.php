
<section class="block-4-column-image-text">
  @if ($items)
  <div class="grid wrapper">
    @foreach($items as $item)
    <article class='article'>
      <span class='article-icon'>
        @image($item['icon'], 'icon')
      </span>
      <h4 class='article-title'> {{ $item['title'] }}</h4>
      <p class='article-text'>{{ $item['content'] }}</p>
    </article>
    @endforeach
  </div>
  @endif
</section>
