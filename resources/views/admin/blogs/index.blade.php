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
                            <a href="{{route('admin.blogs.delete', $blog->id)}}" type="button" class="btn btn-danger">Delete</a>
                            
                        </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
    
<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}

    </div>
    <div class="row">
        <div class="col-12 o-admin-blogs">

            {{ $blogs->links() }}
        
        </div>
    </div>
</div>
@endsection