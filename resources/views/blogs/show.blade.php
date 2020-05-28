@extends('layout')

@section('content')
<div class="row">

    <div class="col-12 o-blogShow">
        <div class="row">
            <div class="col-12">
                <h1>{{ $blog->{"title_". app()->getLocale()} }}</h1>


            </div>
        </div>
        <div class="row ">
            <div class="col-8">
                <p class="a-blogSynopsis">

                    {{ $blog->{"intro_". app()->getLocale()} }}
                
                </p>
                <p class="a-blogContent">

                    {{ $blog->{"content_". app()->getLocale()} }}

                </p>
            </div>
            <div class="col-4 o-blogImgcontainer">
                <img src="{{ $blog->image }}" alt="blog post image" class="a-blogShowImg">
                <span class="a-blogTag">

                    {{ $blog->{"tag_". app()->getLocale()} }}

                </span>

            </div>
        </div>
    </div>
</div>
@endsection