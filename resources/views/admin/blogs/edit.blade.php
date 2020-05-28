@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.blogs.save') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="title_nl" class="text-white">title_nl</label>
                        <input type="text" class="form-control" id="title_nl" name="title_nl" value="{{ old('title_nl', ($blog ? $blog->title_nl : '')) }}">
                      </div>
                      <div class="form-group col-6">
                          <label for="title_en" class="text-white">title_en</label>
                          <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', ($blog ? $blog->title_en : '')) }}">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="tag_nl" class="text-white">tag_nl</label>
                        <input type="text" class="form-control" id="tag_nl" name="tag_nl" value="{{ old('tag_nl', ($blog ? $blog->tag_nl : '')) }}">
                      </div>
                      <div class="form-group col-6">
                        <label for="tag_en" class="text-white">tag_en</label>
                        <input type="text" class="form-control" id="tag_en" name="tag_en" value="{{ old('tag_en', ($blog ? $blog->tag_en : '')) }}">
                      </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="intro_nl" class="text-white">intro_nl</label>
                        <textarea class="form-control" id="intro_nl" rows="3" name="intro_nl" value="{{ old('intro_nl', ($blog ? $blog->intro_nl : '')) }}">{{ old('intro_nl', ($blog ? $blog->intro_nl : '')) }}</textarea>
                      </div>
                      <div class="form-group col-6">
                        <label for="intro_en" class="text-white">intro_en</label>
                        <textarea class="form-control" id="intro_en" rows="3" name="intro_en" value="{{ old('intro_en', ($blog ? $blog->intro_en : '')) }}">{{ old('intro_en', ($blog ? $blog->intro_en : '')) }}</textarea>
                      </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="content_nl" class="text-white">content_nl</label>
                        <textarea class="form-control" id="content_nl" rows="9" name="content_nl" value="{{ old('content_nl', ($blog ? $blog->content_nl : '')) }}">{{ old('content_nl', ($blog ? $blog->content_nl : '')) }}</textarea>
                      </div>

                      <div class="form-group col-6">
                        <label for="content_en" class="text-white">content_en</label>
                        <textarea class="form-control" id="content_en" rows="9" name="content_en" value="{{ old('content_en', ($blog ? $blog->content_en : '')) }}">{{ old('content_en', ($blog ? $blog->content_en : '')) }}</textarea>
                      </div>
                      <div class="form-group col-12">
                        <label for="image" class="text-white">image</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ old('image', ($blog ? $blog->image : '')) }}">
                      </div>
                </div>
                <button  type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    
    </div>

</div>
@endsection