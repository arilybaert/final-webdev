@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <a href="{{ route('admin.donations.edit')}}" type="button" class="btn btn-primary">Create</a>
      </div>
        <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Actie</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($donations as $donation)
                    <tr>
                        <td>{{ $donation->firstname }}</td>
                        <td>{{ $donation->lastname }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td>
                            <a href="{{ route('admin.donations.edit', $donation->id)}}" type="button" class="btn btn-primary">Edit</a>
                            <a href="{{route('admin.donations.delete', $donation->id)}}" type="button" class="btn btn-danger">Delete</a>


                        </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
        </div>

<!-- Modal -->


    </div>
    <div class="row">
        <div class="col-12 o-admin-blogs">

            {{ $donations->links() }}

        </div>
    </div>
</div>
@endsection
