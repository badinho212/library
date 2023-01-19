@extends('layouts.master')

@section('content')
	<div class="col-md-12">
		<br><br>
	<form method="POST" action="{{ route('books.store') }}" class="form-horizontal form-label-left">
        @csrf
        <!-- error message display -->
         @include('partials.admin.message')
        <!-- /error message display -->
		<div class="form-group row ">

			<label class="control-label col-md-2 col-sm-2 ">Title</label>
			<div class="col-md-10 col-sm-10 ">
			<input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required  autocomplete="title" placeholder="Title" autofocus>
			</div>
	            @error('title')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
		</div>
		<div class="form-group row ">
			<label class="control-label col-md-2 col-sm-2 ">Summary <span class="required">*</span></label>
			<div class="col-md-10 col-sm-10 ">
			<textarea id="summernote" type="text" class="form-control @error('summary') is-invalid @enderror" name="summary" value="{{ old('summary') }}" required placeholder="summary text" ></textarea>
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