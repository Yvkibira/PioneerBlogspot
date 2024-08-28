<div>
  @if (session('error'))
  <div class="alert alert-success">
    {{ session('error') }}
  </div>
  @endif
  <section>
    <div class="container">
      <div class="row">
        @foreach($posts as $post)
        <div class="col">
          <div class="card border m-2">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p>
                @foreach ($post->categories as $category)
              <div class="categories">
                <a class="btn btn-outline-danger" href="{{route('blog-category',$category->slug)}}" class="link-info ">{{$category->title}}</a>
              </div>

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
      </div>
    </div>
  </section>
</div>