@extends('layout.main')

@section('title',"Home Page")

@section('content')
    <h1 class="text-center mb-5">Welcome To The Our Home Page</h1>

    @foreach ($post as $p)
    <h2><a href="/post/show/{{ $p->slug }}">{{ $p->title }} </h2></a>
    <hr class="mb-4">
    @endforeach
   
   
@endsection