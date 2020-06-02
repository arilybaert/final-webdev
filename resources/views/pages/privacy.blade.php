@extends('layout')

@section('content')
<div class="row">
    <div class="col-12 o-privacy">

    {!! $privacy->{"content_". app()->getLocale()} !!}
    <h1><a href="{{ route('contact', app()->getLocale()) }}">Click here to contact us!</a></h1>
        </p>
    </div>
</div>

@endsection

<script>

</script>
