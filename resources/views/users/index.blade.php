@extends('layouts.master')

@section('content')
    <h5 class="mt-4">List of Books</h5>
    <div class="col-md-12 col-sm-6  ">
  <div class="x_panel">
    <div class="x_content">

      @if($users->count() > 0)
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account Created On</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)

          <tr>
            <th scope="row">{{$user->id}}</th>
            <td><a href="users/{{$user->id}}">{{$user->name}}</a></td>
            <td>{!! $user->email !!}</td>
            <td>{{$user->created_at}}</td>
            <td><form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="x" />
                </form>
                <button></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
          
      @else
      <div class="text-center">No Post found</div>
      @endif
    </div>
  </div>
</div>
@endsection