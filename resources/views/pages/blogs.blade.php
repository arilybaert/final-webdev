@extends('layout')

@section('content')

<div class="row">
    <div class="col-12 o-blogResults">
        <span class="a-resultsText">Showing 1 of {{count($blogs)}} results</span>
    </div>
</div>

<div class="row o-links">

    @foreach ($blogs as $blog )
        <a href="{{ route('blog.show', $blog->id ) }}" class="col-12 col-md-4 col-lg-3 o-blogPosts">
            <article class="m-blogPosts">
                <img src="{{ $blog->image }}" alt="blog images" class="a-blogArt">
                <span class="a-blogTag">{{ $blog->tag }}</span>
                <span class="a-title">{{ $blog->title }}</span>
                <p class="a-synopsis">{{ $blog->intro }}</p>
            </article>
        </a>
    @endforeach
</div>

<div class="row">
<div class="col-12">
    {{ $blogs->links() }}

</div>
</div>

@endsection