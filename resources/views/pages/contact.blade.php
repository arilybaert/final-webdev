@extends('layout')

@section('content')
<h1>Contact US Form</h1>
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif
{!! Form::open(['route'=>'contactus.store']) !!}
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>
{!! Form::close() !!}
    {{-- <div class="row">
        <div class="col-12 o-contactForm">
            <h1>{{__('Do you want to get in touch with us?')}}</h1>
            <p class="a-contactInfo">{{__('Fill in this form and we will get back to you in no time')}}!</p>
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname" class="aformLlabel">{{__('Firstname')}}:</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="John">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastname" class="aformLlabel">{{__('Lastname')}}:</label>
                    <input type="text" class="form-control" placeholder="Doe">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="aformLlabel">{{__('Email')}}:</label>
                  <input type="email" class="form-control" placeholder="john.doe@email.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="aformLlabel">{{__('Message')}}:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                <button type="submit" class="btn btn-primary" id="a-Btngreen">{{__('Send')}}</button>
              </form>
        </div>
    </div> --}}
@endsection
