{{-- @set($heading, $data['heading'])
@set($text, $data['text'])
@set($poster, $data['poster'])
@set($videoSource, $data['video_source'])
@set($video, $data['video'])
@set($videoURL, $data['video_url'])
<section class="block-banner-video1">
  <div class="hero">
    @if($heading)
      <h1 class="heading heading--1">{{ $heading }}</h1>
    @endif
    @if($text)
      <p>{{ $text }}</p>
    @endif
    <video class="hero__bg" autoplay muted loop playsinline preload="auto" @if($poster) poster="{{ $poster }}"@endif>
      @if($videoSource == 'url')
        <source src="{{ $videoURL }}" type="video/mp4">
        Sorry, you browser does not support embedded videos
      @else
        <source src="{{ $video }}" type="video/mp4">
        Sorry, you browser does not support embedded videos
      @endif
    </video>
  </div>
</section> --}}