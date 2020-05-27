@extends('layout')

@section('content')

    <div class="row">
        <div class="col-12 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-12">
                    <h1>Latest Release</h1>
                </div>
            </div> 
            
            <div class="row">
                @foreach ( $newReleases as $newRelease )
                    <div class="col-12 col-md-6 col-lg-3 o-homeCard">
                        <img src="{{$newRelease->album_cover_url }}" alt="album cover" class="a-albumHomeImage">
                        <span class="a-albumTextHome">{{ $newRelease->name }}</span>
                        <span class="a-artistTextHome">{{ $newRelease->artist }}</span>
                    </div>
                @endforeach
                

            </div>
            <div class="row">
                <div class="col-12">
                    <h1>Future Classics</h1>
                </div>
            </div> 
            
            <div class="row">
                @foreach ( $futureClassics as $futureClassic )
                    <div class="col-12 col-md-6 col-lg-3 o-homeCard">
                    <img src="{{$futureClassic->album_cover_url }}" alt="album cover" class="a-albumHomeImage">
                    <span class="a-albumTextHome">{{ $futureClassic->name }}</span>
                    <span class="a-artistTextHome">{{ $futureClassic->artist }}</span>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <h1>Classics</h1>
                </div>
            </div> 
            
            <div class="row">
                @foreach ( $classics as $classic )
                    <div class="col-12 col-md-6 col-lg-3 o-homeCard">
                    <img src="{{$classic->album_cover_url }}" alt="album cover" class="a-albumHomeImage">
                    <span class="a-albumTextHome">{{ $classic->name }}</span>
                    <span class="a-artistTextHome">{{ $classic->artist }}</span>
                    </div>
                @endforeach
            </div>
            
        </div>

        
        <div class="col-12 col-md-4 col-lg-3 o-songSection">
            <h1>Top 10 Singles</h1>

            @foreach ($topTenSongs as $topTenSong)

                <div class="row o-singles">
                    <div class="col-4">
                        <img src="{{$topTenSong->album->album_cover_url}}" alt="" class="a-albumTop">
                    </div>
                    <div class="col-8 m-singles">
                        <span class="a-albumTextSingle">{{$topTenSong->name}}</span>
                        <span class="a-artistTextSingle">{{$topTenSong->album->artist}}</span>

                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
