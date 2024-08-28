@extends('layouts.app')
@section('title', 'Blog - ' . $post->title)
@section('headContent')
<meta name="keywords" content="{{ implode(', ', $post['keywords']) }}">
<meta name="description" content="{{$post->shortBody()}}" />
<meta name="robots" content="index, follow">
<meta property="og:title" content="{{$post->title}}">
<meta property="og:site_name" content="Pioneerblogspot">
<meta property="og:url" content="https://www.pioneerblogspot.co.ke/{{$post->slug}}">
<meta property="og:description" content="{{$post->shortBody()}}">
<meta property="og:type" content="article">
<article itemscope itemtype="http://schema.org/Article">
    <meta itemprop="headline" content="{{$post->headline}}">
    <meta itemprop="dateCreated" content="{{$post->formatDateToIso8601($post->created_at)}}">
    <meta itemprop="datePublished" content="{{$post->formatDateToIso8601($post->published_at)}}">
    <meta itemprop="dateModified" content="{{$post->formatDateToIso8601($post->updated_at)}}">
    <meta itemprop="url" content="https://www.pioneerblogspot.co.ke/{{$post->slug}}">
    <meta itemprop="keywords" content="{{ implode(', ', $post['keywords']) }}">
    <meta itemprop="description" content="{{$post->shortBody()}}">
    <meta itemprop="inLanguage" content="en">
    <meta itemprop="alternativeHeadline" content="{{$post->alternativeHeadline}}">
    <meta itemprop="about" content="{{ implode(', ', $post['keywords']) }}">
</article>
@endsection
@section('content')

<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title" style="text-transform: capitalize;">{{ $post->title }}</h5>
                        <p class="card-text"><small class="text-muted">Published on {{ $post->published_at->format('F j, Y') }}</small></p>
                        <p class="card-text">{!!html_entity_decode( $post->body)!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

@endsection