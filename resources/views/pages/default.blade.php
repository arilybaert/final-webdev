@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> {{$page->{"title_". app()->getLocale()} }}</h1>
        </div>
    </div>
    <div class="row">
        <p class="text-white font-italic">{{$page->{"intro_". app()->getLocale()} }}</p>
    </div>
    <div class="row">
        <p class="text-white">{!! $page->{"content_". app()->getLocale()} !!}</p>
    </div>
@endsection
