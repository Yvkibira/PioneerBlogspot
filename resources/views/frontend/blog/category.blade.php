@extends('layouts.app')
@section('title', 'Blog Category')
@section('content')
<section>
    <div class="row">
        <div class="container" style="display: flex;flex-wrap: wrap;justify-content: center;align-items: center;">
            @foreach($postCategory as $post)
            <div class="col-4" style="min-width: 300px;">
                <div class="card border m-2">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>
                            @foreach ($post->categories as $category)
                            <a href="{{route('blog-category',$category->slug)}}" class="link-info ">{{$category->title}}</a>
                            @endforeach
                        </p>
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">By {{$post->user->name}}, Published on {{$post->getFormattedDate()}}</p>
                        <p class="card-text">{{$post->shortBody()}}</p>
                        <a href="{{ route('blog', $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{$postCategory->links()}}
</section>
@endsection