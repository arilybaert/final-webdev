@extends('layout')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Email was sent</h1>
        <a href="{{ route('home', app()->getLocale()) }}">Go back home</a>
    </div>
</div>
@endsection
