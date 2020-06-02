@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.album.save') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name" class="text-white">name</label>
                        <input type="text" class=" form-control @error('name') invalid @enderror" id="name" name="name" value="{{ old('name', ($album ? $album->name : '')) }}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $album ? $album->id : '' }}">
                      </div>
                      <div class="form-group col-6">
                          <label for="artist" class="text-white">artist</label>
                          <input type="text" class="form-control @error('artist') invalid @enderror" id="artist" name="artist" value="{{ old('artist', ($album ? $album->artist : '')) }}" class="">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="release_date" class="text-white">release date</label>
                        <input type="text" class="form-control @error('release_date') invalid @enderror" id="release_date" name="release_date" value="{{ old('release_date', ($album ? $album->release_date : '')) }}" placeholder="2020-04-12">
                      </div>
                      <div class="form-group col-6">
                        <label for="album_cover_url" class="text-white">album_cover_url</label>
                        <input type="text" class="form-control @error('album_cover_url') invalid @enderror" id="album_cover_url" name="album_cover_url" value="{{ old('album_cover_url', ($album ? $album->album_cover_url : '')) }}">
                      </div>
                </div>

                <button  type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>

    </div>

</div>
@endsection
