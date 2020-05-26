@extends('layout')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="row">
            <div class="col-12">
                <h1>Our Mission</h1>
                <p class="a-missionStatement">Our mission is to bring good music available to everyone. We at Spotify think that music has the ability to bringe joy and happiness to those who want to. It can set or change any mood if you’ll let it. Music had brought people together since a long time and we plan on keeping it that way. </p>

            </div>

            <div class="col-12 o-hq">
                <div class="col-6">
                    <h1>Headquarters</h1>
                    <div class="m-hqCard">
                        <img src="https://bit.ly/3d5kTnU" alt="spotify hq" class="a-hqImg">
                        <div class="m-hq-info">
                            <span class="a-hqTitle a-hqText">Sweden</span>
                            <span class="a-hqAdress a-hqText">Stockholm</span>
                            <span class="a-hqCity a-hqText">19 Regeringsgatan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-4">
        <h1 class="a-platformTitle">Supported platforms</h1>
        <div class="row">
            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/globe.png') }}" alt="web icon" class="a-platform-icon">
                    <span>Web</span>
                </div>
            </div>

            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/phone.png') }}" alt="web icon" class="a-platform-icon">
                    <span>Mobile</span>
                </div>
            </div>

            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/notebook-computer.png') }}" alt="web icon" class="a-platform-icon">
                    <span>Computer</span>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/phone.png') }}" alt="web icon" class="a-platform-icon">
                    <span>Mobile</span>
                </div>
            </div>
            <div class="col-12"></div>
            <div class="col-12"></div>
        </div> --}}
    </div>



    
</div>
@endsection