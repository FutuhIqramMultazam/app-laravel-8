@extends('layout.main')

@section('title',"Home Page")

@section('content')
    <h1 class="text-center mb-5">Welcome To The Our Home Page</h1>

    @foreach ($post as $p)
    <a class="text-decoration-none" href="/post/show/{{ $p->slug }}">
        <div class="bg-success-subtle p-3 mb-5 border border-success rounded-4">
            <h2 class="pt-2 text-white">{{ $p->title }} </h2>
            <p class="pb-1">By : <span class="text-info">{{ $p->user->name }}</span> | Category : <span class="text-danger">{{ $p->category->name }}</span></p>
        </div>
    </a>
    @endforeach
   
   
@endsection