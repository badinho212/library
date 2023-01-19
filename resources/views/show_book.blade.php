@extends('layouts.app')
@section('content')
<br>
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

	<div class="row gx-4 gx-lg-5 align-items-center my-5">
		<small>Uploaded On {{$book->created_at}} </small>  
		<hr>
		<b>Book Title:</b> <div>{{$book->title}}</div><br>
		<b>Summary:</b> <div>{{$book->summary}}</div>		
	</div>
		<form method="POST" action="{{ route('homes.store') }}" class="form-horizontal form-label-left">
        @csrf
        <!-- error message display -->
         @include('partials.admin.message')
        <!-- /error message display -->
		<div class="form-group row ">
			<label class="control-label col-md-2 col-sm-2 ">Write your opinion: <span class="required"></span></label>
			<div class="col-md-10 col-sm-10 ">
			<textarea id="summernote" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" required placeholder="comment text" ></textarea>
			</div>
                @error('comment')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <input id="bookId" type="hidden" class="form-control @error('bookId') is-invalid @enderror" name="bookId" value="{{ $book->id }}" required  autocomplete="bookId" placeholder="Title" autofocus>
		</div>
		<br>

		<div class="form-group">
			<div class="col-md-9 col-sm-9  offset-md-2">
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
    </form>
     {{-- @include('users.comments', ['post_id' => $book->id]) --}}
@endsection