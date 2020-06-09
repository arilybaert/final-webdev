@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <a href="{{ route('admin.pages.create')}}" type="button" class="btn btn-warning">Create</a>
      </div>
        <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Intro</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->title_nl }}</td>
                        <td>{{ $page->title_en }}</td>
                        <td>{{ Str::limit($page->intro_nl,50) }}</td>
                        <td>{{ Str::limit($page->intro_en,50) }}</td>
                        <td>
                            <a href="{{ route('admin.pages.edit', $page->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.pages.delete', $page->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$page->id}}">
                                <button class="btn-danger">Delete</button>
                            </form>
                            {{-- <a href="{{route('admin.blogs.delete', $blog->id)}}" type="button" class="btn btn-danger">Delete</a> --}}


                        </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
        </div>

<!-- Modal -->


    </div>
    {{-- <div class="row">
        <div class="col-12 o-admin-blogs">

            {{ $blogs->links() }}

        </div>
    </div> --}}
</div>
@endsection
