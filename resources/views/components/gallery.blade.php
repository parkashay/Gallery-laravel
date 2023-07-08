<div id="main">

    @if (isset($images))
        @foreach ($images as $image)
            <article class="thumb">
                <a href="{{ asset('uploads/' . $image->image) }}" class="image">
                    <img src="{{ asset('uploads/' . $image->image) }}" alt="" />
                </a>
                <h2>{{ $image->title }}</h2>
                <p>{{ $image->description }}</p>
            </article>
        @endforeach
    @endif

</div>
