@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <script>
                tinymce.init({
                    selector: 'textarea',
                    skin: "oxide-dark",
                    content_css: "dark",
                    plugins: "lists",
                    toolbar: "undo redo | styleselect | bold italic | link image | alignleft aligncenter alignright justify | bullist numlist outdent indent"
                });
            </script>
            <form action="{{ route('admin.privacy.save') }}" method="POST">
                @csrf



                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="content_nl" class="text-white">Privacy Policy NL</label>
                        <textarea class="form-control @error('content_nl') invalid @enderror" id="content_nl" rows="9" name="content_nl" value="{{ old('content_nl', ($privacy ? $privacy->content_nl : '')) }}">{{ old('content_nl', ($privacy ? $privacy->content_nl : '')) }}</textarea>
                      </div>

                      <div class="form-group col-6">
                        <label for="content_en" class="text-white">Privacy Policy ENG</label>
                        <textarea class="form-control @error('content_en') invalid @enderror" id="content_en" rows="9" name="content_en" value="{{ old('content_en', ($privacy ? $privacy->content_en : '')) }}">{{ old('content_en', ($privacy ? $privacy->content_en : '')) }}</textarea>
                      </div>

                </div>
                <button  type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>

    </div>

</div>
@endsection
