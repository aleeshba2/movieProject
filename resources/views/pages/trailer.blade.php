@extends('layout')

@section('content')

@foreach($trailers as $trail)
<video width="320" height="240" controls>
    <source src="{{ asset(public.trailers->trailer1") }}" >
    Your browser does not support the video tag.


</video>
<p>{{ $trail->title }}</p>
@endsection