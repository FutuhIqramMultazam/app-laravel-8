@extends('layout.main')

@section('title',"Detal Posts")

@section('content')

    <h2 >Title : {{ $post->title }} </h2>
    <p>Slug : {{ $post->slug }}</p>
    <p>Category_id : {{ $post->category_id}}</p>
    <p>Body : {{ $post->body}}</p>
    <hr>
    <h3>Dari tabel category </h3>
    <p> category name : <a href="/categoris/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p> category slug: {{ $post->category->slug }}</p>
    <hr class="mb-4">

    <a href="/" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
   
@endsection