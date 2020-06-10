@extends('layout')

@section('content')
<div class="row">

    <div class="col-12 col-md-8">
        <div class="row">
            <div class="col-12">
                <h1>{{ $about->{"title_". app()->getLocale()} }}</h1>
                <p class="a-missionStatement">{{ $about->{"content_".app()->getLocale()} }} </p>

            </div>

            <div class="col-12 o-hq">
                <div class="col-6">
                    <h1>{{__('Headquarters')}}</h1>
                    <div class="m-hqCard">
                        <img src="https://bit.ly/3d5kTnU" alt="spotify hq" class="a-hqImg">
                        <div class="m-hq-info">
                            <span class="a-hqTitle a-hqText">{{__('Sweden')}}</span>
                            <span class="a-hqAdress a-hqText">{{__('Stockholm')}}</span>
                            <span class="a-hqCity a-hqText">19 Regeringsgatan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <h1 class="a-platformTitle">{{__('Supported platforms')}}</h1>
        <div class="row">
            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/globe.png') }}" alt="web icon" class="a-platform-icon">
                    <span>{{__('Web')}}</span>
                </div>
            </div>

            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/phone.png') }}" alt="web icon" class="a-platform-icon">
                    <span>{{__('Mobile')}}</span>
                </div>
            </div>

            <div class="col-12 m-platformCard">
                <div class="m-cardContent">
                    <img src="{{ asset('images/icons/notebook-computer.png') }}" alt="web icon" class="a-platform-icon">
                    <span>{{__('Computer')}}</span>
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
