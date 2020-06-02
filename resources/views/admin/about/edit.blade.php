@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.about.save') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="title_left_nl" class="text-white">title_left_nl</label>
                        <input type="text" class=" form-control @error('title_left_nl') invalid @enderror" id="title_left_nl" name="title_left_nl" value="{{ old('title_left_nl', ($about ? $about->title_left_nl : '')) }}">

                      </div>
                      <div class="form-group col-6">
                          <label for="title_left_en" class="text-white">title_left_en</label>
                          <input type="text" class="form-control @error('title_left_en') invalid @enderror" id="title_left_en" name="title_left_en" value="{{ old('title_left_en', ($about ? $about->title_left_en : '')) }}" class="">
                        </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="content_left_nl" class="text-white">content_left_nl</label>
                        <textarea class="form-control @error('content_left_nl') invalid @enderror" id="content_left_nl" rows="9" name="content_left_nl" value="{{ old('content_left_nl', ($about ? $about->content_left_nl : '')) }}">{{ old('content_left_nl', ($about ? $about->content_left_nl : '')) }}</textarea>
                      </div>

                      <div class="form-group col-6">
                        <label for="content_left_en" class="text-white">content_left_en</label>
                        <textarea class="form-control @error('content_left_en') invalid @enderror" id="content_left_en" rows="9" name="content_left_en" value="{{ old('content_left_en', ($about ? $about->content_left_en : '')) }}">{{ old('content_left_en', ($about ? $about->content_left_en : '')) }}</textarea>
                      </div>

                </div>
                <button  type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>

    </div>

</div>
@endsection
