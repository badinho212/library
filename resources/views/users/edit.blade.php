@extends('layouts.master')
@section('content')
	<div class="col-sm-8">
		<br><br>
	<form method="POST" action="{{ route('users.update', $user->id) }}" class="form-horizontal form-label-left">
        @csrf
        @method('PATCH')

        @if ( Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
        @endif
        @if ( Session::get('error'))
            <div class="alert alert-danger">
                {{ Session::get('error')}}
            </div>
        @endif    

		<div class="form-group row ">

			<label class="control-label col-md-2 col-sm-2 ">Name</label>
			<div class="col-md-10 col-sm-10 ">
			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required  autocomplete="name" placeholder="name" autofocus>
			</div>
	            @error('name')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		</div>
		<br>
		<div class="form-group row ">
			<label class="control-label col-md-2 col-sm-2 ">Email</label>
			<div class="col-md-10 col-sm-10 ">
			<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required  placeholder="email text" ></input>
			</div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
		</div>
		<br>

		<div class="form-group">
			<div class="col-md-9 col-sm-9  offset-md-2">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
        </form>

    </div>							    
@endsection