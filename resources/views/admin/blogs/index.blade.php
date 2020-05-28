@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Title NL</th>
                    <th scope="col">Title EN</th>
                    <th scope="col">Tag NL</th>
                    <th scope="col">Tag EN</th>
                    <th scope="col">Actie</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title_nl }}</td>
                        <td>{{ $blog->title_en }}</td>
                        <td>{{ $blog->tag_nl }}</td>
                        <td>{{ $blog->tag_en }}</td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
    
    </div>
    <div class="row">
        <div class="col-12 o-admin-blogs">

            {{ $blogs->links() }}
        
        </div>
    </div>
</div>
@endsection