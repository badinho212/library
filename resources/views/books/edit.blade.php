@extends('layouts.master')
@section('content')
	<div class="col-sm-8">
		<br><br>
	<form method="POST" action="{{ route('books.update', $book->id) }}" class="form-horizontal form-label-left">
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

			<label class="control-label col-md-2 col-sm-2 ">Title</label>
			<div class="col-md-10 col-sm-10 ">
			<input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $book->title }}" required  autocomplete="title" placeholder="Title" autofocus>
			</div>
	            @error('title')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		</div>
		<br>
		<div class="form-group row ">
			<label class="control-label col-md-2 col-sm-2 ">Summary</label>
			<div class="col-md-10 col-sm-10 ">
			<textarea id="summary" type="text" class="form-control @error('summary') is-invalid @enderror" name="summary" value="{{$book->summary}}" required autocomplete="summary"  placeholder="summary text" ></textarea>
			</div>
                @error('summary')
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