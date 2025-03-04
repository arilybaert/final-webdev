@extends('layout')


@section('content')
<div class="row o-dontations-page">


    <div class="col-12 col-md-6 o-donationsForm">
        <div class="row">
            <div class="col-12">
                <h1>{{__('Want to support our cause?')}}</h1>
                <form action="{{route('donations.payment', app()->getLocale())}}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="firstname" class="aformLlabel">{{__('Firstname')}}:</label>
                        <input type="text" class="form-control @error('firstname') invalid @enderror" id="inputEmail4" placeholder="John" name="firstname">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lastname" class="aformLlabel">{{__('Lastname')}}:</label>
                        <input type="text" class="form-control @error('lastname') invalid @enderror" placeholder="Doe" name="lastname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="aformLlabel">{{__('Email')}}:</label>
                      <input type="email" class="form-control @error('email') invalid @enderror" placeholder="john.doe@email.com" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="aformLlabel">{{__('Message')}}:</label>
                        <textarea class="form-control @error('msg') invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                      </div>

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input @error('show') invalid @enderror" id="show" name="show">
                        <label class="form-check-label text-white" for="show">{{__('Show on website')}}</label>
                      </div>


                      <label for="amount" class="aformLlabel">{{__('Amount')}}: <span id="demo" class="aformLlabel"></span></label>
                      <div class="slidecontainer">
                        <input type="range" min="1" max="1000" value="50" class="slider @error('amount') invalid @enderror" name="amount" id="myRange" name="amount">
                      </div>


                    <button type="submit" class="btn btn-primary" id="a-Btngreen">{{__('Donate')}}</button>
                  </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="row">
            <div class="col-12 a-donationsMsg__big">
                {{__('Thanks')}}!
            </div>
            <div class="col-12 a-donationsMsg__small">
                <p class="a-donationsMsg_small">
                   {{__('Without you this wouldn’t be possible. This donations will be put to good use so we can keep providing you with quality music from all of over the world')}}
                </p>
            </div>
            <div class="col-12 a-recentDonations">
                {{__('Recent Donations')}}:
            </div>

            @foreach ($donations as $donation)
                @if ($donation->show === "on")
                    <div class="col-12 m-donations">
                        <div class="row">
                            <div class="col-2 a-donationAmount">
                            {{$donation->amount}} {{$donation->currency}}
                            </div>
                            <div class="col-10 m-donationUserMsg">
                                <span class="a-donationUserMsg">{{$donation->msg}}</span>
                                <span class="a-donationUser">By {{$donation->firstname}} {{$donation->lastname}}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach


            <div class="col-12">
                {{ $donations->links() }}

            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

@endsection
