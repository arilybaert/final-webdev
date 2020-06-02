@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12 o-contactForm">
            <h1>{{__('Do you want to get in touch with us?')}}</h1>
            <p class="a-contactInfo">{{__('Fill in this form and we will get back to you in no time')}}!</p>
            <form method="POST" action="">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname" class="aformLlabel">{{__('Firstname')}}:</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="John" name="firstname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastname" class="aformLlabel">{{__('Lastname')}}:</label>
                    <input type="text" class="form-control" placeholder="Doe" name="lastname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="aformLlabel">{{__('Email')}}:</label>
                  <input type="email" class="form-control" placeholder="john.doe@email.com" name="email">
                </div>

                <div class="form-group">
                    <label for="subject" class="aformLlabel">{{__('Subject')}}:</label>
                    <input type="text" class="form-control" placeholder="title" name="subject">
                    <label for="exampleFormControlTextarea1" class="aformLlabel">{{__('Message')}}:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                  </div>

                <button type="submit" class="btn btn-primary" id="a-Btngreen">{{__('Send')}}</button>
              </form>
        </div>
    </div>
@endsection
