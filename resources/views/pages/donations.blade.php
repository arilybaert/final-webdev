@extends('layout')


@section('content')
<div class="row o-dontations-page">
    <div class="col-6">
        <div class="row">
            <div class="col-12 a-donationsMsg__big">
                Thanks!
            </div>
            <div class="col-12 a-donationsMsg__small">
                <p class="a-donationsMsg_small">
                    Without you this wouldn’t be possible. This donations will be put to good use so we can keep providing you with quality music from all of over the world
                </p>
            </div>
            <div class="col-12 a-recentDonations">
                Recent Donations:
            </div>

            <div class="col-12 m-donations">
                <div class="row">
                    <div class="col-2 a-donationAmount">
                        $10
                    </div>
                    <div class="col-10 m-donationUserMsg">
                        <span class="a-donationUserMsg">Thank you for all those gorgeous minutes of listening!</span>
                        <span class="a-donationUser">By Willie Sommers</span>
                    </div>
                </div>
            </div>

            <div class="col-12 m-donations">
                <div class="row">
                    <div class="col-2 a-donationAmount">
                        $10
                    </div>
                    <div class="col-10 m-donationUserMsg">
                        <span class="a-donationUserMsg">Thank you for all those gorgeous minutes of listening!</span>
                        <span class="a-donationUser">By Willie Sommers</span>
                    </div>
                </div>
            </div>

            <div class="col-12 m-donations">
                <div class="row">
                    <div class="col-2 a-donationAmount">
                        $10
                    </div>
                    <div class="col-10 m-donationUserMsg">
                        <span class="a-donationUserMsg">Thank you for all those gorgeous minutes of listening!</span>
                        <span class="a-donationUser">By Willie Sommers</span>
                    </div>
                </div>
            </div>

            <div class="col-12 m-donations">
                <div class="row">
                    <div class="col-2 a-donationAmount">
                        $10
                    </div>
                    <div class="col-10 m-donationUserMsg">
                        <span class="a-donationUserMsg">Thank you for all those gorgeous minutes of listening!</span>
                        <span class="a-donationUser">By Willie Sommers</span>
                    </div>
                </div>
            </div>

            <div class="col-12 m-donations">
                <div class="row">
                    <div class="col-2 a-donationAmount">
                        $10
                    </div>
                    <div class="col-10 m-donationUserMsg">
                        <span class="a-donationUserMsg">Thank you for all those gorgeous minutes of listening!</span>
                        <span class="a-donationUser">By Willie Sommers</span>
                    </div>
                </div>
            </div>


            <div class="col-12 m-donations">
                <div class="row">
                    <div class="col-2 a-donationAmount">
                        $10
                    </div>
                    <div class="col-10 m-donationUserMsg">
                        <span class="a-donationUserMsg">Thank you for all those gorgeous minutes of listening!</span>
                        <span class="a-donationUser">By Willie Sommers</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-6 o-donationsForm">
        <div class="row">
            <div class="col-12">
                <h1>Want to support our cause?</h1>
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

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="show" name="show">
                        <label class="form-check-label text-white" for="show">Show on website</label>
                      </div>


                      <label for="amount" class="aformLlabel">Amount: <span id="demo" class="aformLlabel"></span></label>
                      <div class="slidecontainer">
                        <input type="range" min="1" max="1000" value="50" class="slider" name="amount" id="myRange">
                      </div>
                      

                    <button type="submit" class="btn btn-primary" id="a-Btngreen">Donate</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

@endsection