@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.topTenSong.save') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="name" class="text-white">name</label>
                        <input type="text" class=" form-control @error('name') invalid @enderror" id="name" name="name" value="{{ old('name', ($song ? $song->name : '')) }}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $song ? $song->id : '' }}">
                        <input type="hidden" class="form-control" id="album_id" name="album_id" value="{{ $song ? $song->album_id : '' }}">
                      </div>
                      <div class="form-group col-6">
                          <label for="artist" class="text-white">artist</label>
                          <input type="text" class="form-control @error('artist') invalid @enderror" id="artist" name="artist" value="{{ old('artist', ($song ? $song->album->artist : '')) }}" class="">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="album_name" class="text-white">album</label>
                        <input type="text" class="form-control @error('album_name') invalid @enderror" id="album_name" name="album_name" value="{{ old('album_name', ($song ? $song->album->name : '')) }}">
                      </div>
                      <div class="form-group col-6">
                        <label for="album_cover_url" class="text-white">album_cover_url</label>
                        <input type="text" class="form-control @error('album_cover_url') invalid @enderror" id="album_cover_url" name="album_cover_url" value="{{ old('album_cover_url', ($song ? $song->album->album_cover_url : '')) }}">
                      </div>
                </div>

                <button  type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>

    </div>

</div>
@endsection
