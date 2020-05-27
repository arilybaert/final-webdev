@extends('layout')

@section('content')
    <div class="row">
        <div class="col-12 o-contactForm">
            <h1>Do you want to get in touch with us?</h1>
            <p class="a-contactInfo">Fill in this form and we will get back to you in no time!</p>
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname" class="aformLlabel">Firstname:</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="John">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastname" class="aformLlabel">Lastname:</label>
                    <input type="text" class="form-control" placeholder="Doe">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="aformLlabel">Email:</label>
                  <input type="email" class="form-control" placeholder="john.doe@email.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="aformLlabel">Message:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                <button type="submit" class="btn btn-primary" id="a-Btngreen">Send</button>
              </form>
        </div>
    </div>
@endsection