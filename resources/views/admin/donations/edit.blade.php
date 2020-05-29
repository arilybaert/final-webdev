@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('admin.donations.save') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="firstname" class="text-white">firstname</label>
                        <input type="text" class=" form-control @error('title_nl') invalid @enderror" id="firstname" name="firstname" value="{{ old('firstname', ($donation ? $donation->firstname : '')) }}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $donation ? $donation->id : '' }}">
                      </div>
                      <div class="form-group col-6">
                          <label for="lastname" class="text-white">lastname</label>
                          <input type="text" class="form-control @error('lastname') invalid @enderror" id="lastname" name="lastname" value="{{ old('lastname', ($donation ? $donation->lastname : '')) }}" class="">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="amount" class="text-white">amount</label>
                        <input type="text" class="form-control @error('amount') invalid @enderror" id="amount" name="amount" value="{{ old('amount', ($donation ? $donation->amount : '')) }}">
                      </div>
                      <div class="form-group col-6">
                        <label for="currency" class="text-white">currency</label>
                        <input type="text" class="form-control @error('currency') invalid @enderror" id="currency" name="currency" value="{{ old('currency', ($donation ? $donation->currency : '')) }}">
                      </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="email" class="text-white">email</label>
                        <input type="text" class="form-control @error('email') invalid @enderror" id="email" name="email" value="{{ old('email', ($donation ? $donation->email : '')) }}">
                      </div>
                      <div class="form-group col-12">
                        <label for="msg" class="text-white">msg</label>
                        <textarea class="form-control @error('msg') invalid @enderror" id="msg" rows="3" name="msg" value="{{ old('msg', ($donation ? $donation->msg : '')) }}">{{ old('msg', ($donation ? $donation->msg : '')) }}</textarea>
                      </div>
                </div>
                <div class="form-row">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input @error('show') invalid @enderror" id="show" name="show" {{ $donation->show == "on" ? 'checked' : ''}}>
                        <label class="form-check-label text-white" for="show">{{__('Show on website')}}</label>
                      </div>
                </div>

                <button  type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>

    </div>

</div>
@endsection
