<div>
    <section style="margin: 20px; padding: 32px; border: 1px solid black; border-radius: 8px;">
        <p class="h6">All Categories</p>
        <ol class="list-group list-group-numbered">
            @foreach($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">

                        <a href="{{route('blog-category',$category->slug)}}" class="link" target="_blank" rel="noopener noreferrer"> {{$category->title }}</a>

                    </div>

                </div>
            </li>
            @endforeach
        </ol>
    </section>
</div>