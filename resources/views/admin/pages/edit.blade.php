@extends('layouts.app')

@section('scripts')
<script>
    tinymce.init({
      selector: '#content_en',
      height: "480"

    });
</script>
<script>
    tinymce.init({
      selector: '#content_nl',
      height: "480"

    });
</script>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
       <h1 class="text-white">
           Edit page:
       </h1>
      </div>
        <div class="col-md-12">

            <form action="{{ route('admin.pages.edit', $page->id) }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$page->id}}">

                    <div class="form-row">
                        <div class="form-group col-6 ">
                            <label for="title_nl" class="text-white">Title NL</label>
                            <input value="{{ $page->title_nl }}" type="text" class="form-control" id="title_nl" placeholder="place title nl here" name="title_nl">
                          </div>
                          <div class="form-group col-6">
                              <label for="title_en" class="text-white">Title EN</label>
                              <input value="{{ $page->title_en }}" type="text" class="form-control" id="title_en" placeholder="place title en here" name="title_en">
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="active" class="text-white">Active</label>
                      <select class="form-control" id="active" name="active">
                        <option @if($page->active) selected @endif value="0">not visible</option>
                        <option @if($page->active) selected @endif value="1">visible</option>
                      </select>
                    </div>

                    <div class="form-group">
                        <label for="active" class="text-white">Active</label>
                        <select class="form-control" id="template" name="template">
                          <option @if($page->template) selected @endif value="default">default</option>
                        </select>
                      </div>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="intro_nl" class="text-white">Intro NL</label>
                            <textarea class="form-control" id="intro_nl" rows="5" name="intro_nl">{{ $page->intro_nl }}</textarea>
                          </div>
                          <div class="form-group col-6">
                            <label for="intro_en" class="text-white">Intro EN</label>
                            <textarea class="form-control" id="intro_en" rows="5" name="intro_en">{{ $page->intro_en }}</textarea>
                          </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="content_nl" class="text-white">Content NL</label>
                            <textarea class="form-control" id="content_nl" rows="5" name="content_nl">{{ $page->content_nl }}</textarea>
                          </div>
                          <div class="form-group col-6">
                            <label for="content_en" class="text-white">Content EN</label>
                            <textarea class="form-control" id="content_en" rows="5" name="content_en">{{$page->content_en}}</textarea>
                          </div>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
            </form>

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
