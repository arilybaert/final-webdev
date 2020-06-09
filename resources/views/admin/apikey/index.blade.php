@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <a href="{{ route('admin.apikey.edit')}}" type="button" class="btn btn-primary">Create</a>
      </div>
        <div class="col-md-12">
            <form action="{{ route('admin.apikey.save') }}" method="POST">
                @csrf

                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Mailchimp API KEY</th>
                        <th scope="col">Mailchimp List ID</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($keys as $key)
                        <tr>
                            <td>
                                <input type="text" class=" form-control @error('newschimp_api_key') invalid @enderror" id="newschimp_api_key" name="newschimp_api_key[]" value="{{ old('newschimp_api_key', ($key ? $key->newschimp_api_key : '')) }}">
                                <input type="hidden" class="form-control" id="id" name="id[]" value="{{ $key ? $key->id : '' }}">
                            </td>
                            <td>
                                <input type="text" class=" form-control @error('newschimp_list_id') invalid @enderror" id="newschimp_list_id" name="newschimp_list_id[]" value="{{ old('newschimp_list_id', ($key ? $key->newschimp_list_id : '')) }}">
                            </td>
                            <td>
                                <div class="form-group">
                                    <select class="form-control" id="active" name="active[]">
                                      <option value="0" @if ($key->active != 1) selected @endif>No</option>
                                      <option value="1" @if ($key->active == 1) selected @endif>Yes</option>
                                    </select>
                                  </div>

                            </td>
                            <td>
                                <a href="{{route('admin.apikey.delete', $key->id)}}" type="button" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                      @endforeach

                    </tbody>
                </table>
                <button type="submit" class="btn btn-warning">Save</button>
            </form>

        </div>

    </div>

</div>
@endsection
