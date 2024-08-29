@extends('layouts.app') @section('title', 'Blog - ' . $post->title)
@section('headContent') @if ($post->active == true)
<x-google-tags />
@endif
<meta name="keywords" content="{{ implode(', ', $post['keywords']) }}" />
<meta name="description" content="{{$post->shortBody()}}" />
<meta name="robots" content="index, follow" />
<meta property="og:title" content="{{$post->title}}" />
<meta property="og:site_name" content="Pioneerblogspot" />
<meta
  property="og:url"
  content="https://www.pioneerblogspot.co.ke/{{$post->slug}}"
/>
<meta property="og:description" content="{{$post->shortBody()}}" />
<meta property="og:type" content="article" />
<article itemscope itemtype="http://schema.org/Article">
  <meta itemprop="headline" content="{{$post->headline}}" />
  <meta
    itemprop="dateCreated"
    content="{{$post->formatDateToIso8601($post->created_at)}}"
  />
  <meta
    itemprop="datePublished"
    content="{{$post->formatDateToIso8601($post->published_at)}}"
  />
  <meta
    itemprop="dateModified"
    content="{{$post->formatDateToIso8601($post->updated_at)}}"
  />
  <meta
    itemprop="url"
    content="https://www.pioneerblogspot.co.ke/{{$post->slug}}"
  />
  <meta itemprop="keywords" content="{{ implode(', ', $post['keywords']) }}" />
  <meta itemprop="description" content="{{$post->shortBody()}}" />
  <meta itemprop="inLanguage" content="en" />
  <meta
    itemprop="alternativeHeadline"
    content="{{$post->alternativeHeadline}}"
  />
  <meta itemprop="about" content="{{ implode(', ', $post['keywords']) }}" />
</article>
@endsection @section('content')
<style>
  .col-left,
  .col-right {
    width: 160px;
  }

  .col-center {
    flex: 1;
  }

  /* Media query for screens smaller than 1200px */
  @media (max-width: 1199.98px) {
    .col-left,
    .col-right {
      display: none;
    }

    .col-center {
      width: 100%;
    }
  }
</style>
<article class="row gap-1">
  <div class="col-left">
    <script
      async
      src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2705647526062186"
      crossorigin="anonymous"
    ></script>
    <!-- vertical -->
    <ins
      class="adsbygoogle"
      style="display: inline-block; width: 160px; height: 600px"
      data-ad-client="ca-pub-2705647526062186"
      data-ad-slot="1710327054"
    ></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <div class="col-center">
    <div class="card">
      <img
        src="{{ asset('storage/' . $post->thumbnail) }}"
        class="card-img-top"
        alt="{{ $post->title }}"
      />
      <div class="card-body">
        <h5 class="card-title" style="text-transform: capitalize">
          {{ $post->title }}
        </h5>
        <p class="card-text">
          <small class="text-muted"
            >Published on {{ $post->published_at->format('F j, Y') }}</small
          >
        </p>
        <p class="card-text">{!!html_entity_decode( $post->body)!!}</p>
      </div>
    </div>
  </div>
  <div class="col-right">
    <script
      async
      src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2705647526062186"
      crossorigin="anonymous"
    ></script>
    <!-- vertical -->
    <ins
      class="adsbygoogle"
      style="display: inline-block; width: 160px; height: 600px"
      data-ad-client="ca-pub-2705647526062186"
      data-ad-slot="1710327054"
    ></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
</article>

@endsection
