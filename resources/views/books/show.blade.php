@extends('layouts.master')

@section('content')

<a href="/books" class="btn btn-primary">Back</a>
<h1>{{$book->title}}</h1>
<div>{{$book->summary}}</div>
<hr>
<small>Written on {{$book->created_at}} </small>  
<hr>
<a href="/books/{{$book->id}}/edit" class="btn btn-primary">Edit</a>     
@endsection