@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <a href="{{ route('admin.albums.edit')}}" type="button" class="btn btn-primary">Create</a>
        </div>
        <div class="col-6">
            <a href="{{ route('admin.topTenSong.edit')}}" type="button" class="btn btn-primary">Create</a>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Actie</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albums as $album)
                    <tr>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->artist }}</td>
                        <td>{{ $album->release_date }}</td>
                        <td>
                            <a href="{{ route('admin.albums.edit', $album->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="{{route('admin.albums.delete', $album->id)}}" type="button" class="btn btn-danger">Delete</a>


                        </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Album</th>
                    <th scope="col">Actie</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topTenSongs as $topTenSong)
                    <tr>
                        <td>{{ $topTenSong->name }}</td>
                        <td>{{ $topTenSong->album->artist}}</td>
                        <td>{{ $topTenSong->album->name}}</td>
                        <td>
                            <a href="{{ route('admin.topTenSong.edit', $topTenSong->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="{{route('admin.topTenSong.delete', $topTenSong->id)}}" type="button" class="btn btn-danger">Delete</a>


                        </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6 o-admin-blogs">

            {{ $albums->links() }}

        </div>
        <div class="col-6 o-admin-blogs">

            {{ $topTenSongs->links() }}

        </div>
    </div>
</div>
@endsection
