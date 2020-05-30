<!-- newsletter.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Newsletter Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container o-newsletter">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p class="a-newsletter">{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p class="a-newsletter">{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
      <h2>{{$message}}</h2><br/>
      <a href="{{route('home', app()->getLocale())}}">Go home</a>

  </body>
</html>
