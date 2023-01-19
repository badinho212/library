@extends('layouts.master')

@section('content')

<a href="/users" class="btn btn-primary">Go Back!</a>
<div><b>Name:</b> {{$user->name}}</div>
<div><b>Email:</b> {{$user->email}}</div>
<hr>
<small>Account create on: {{$user->created_at}} </small>  
<hr>
<a href="/users/{{$user->id}}/edit" class="btn btn-primary">Edit</a>     
@endsection