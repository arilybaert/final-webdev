@extends('layout')

@section('content')
<div class="row">

    <div class="col-12 o-blogShow">
        <div class="row">
            <div class="col-12">
                <h1>{{ $blog->title  }}</h1>

            </div>
        </div>
        <div class="row ">
            <div class="col-8">
                <p class="a-blogSynopsis">

                    {{ $blog->intro }}
                
                </p>
                <p class="a-blogContent">

                    {{ $blog->content }}

                </p>
            </div>
            <div class="col-4 o-blogImgcontainer">
                <img src="{{ $blog->image }}" alt="blog post image" class="a-blogShowImg">
                <span class="a-blogTag">

                    {{ $blog->tag }}

                </span>

            </div>
        </div>
    </div>
</div>
@endsection