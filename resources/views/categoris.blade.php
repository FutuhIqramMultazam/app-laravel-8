@extends('layout.main')

@section('title',"Detal categoris")

@section('content')

<h2 class="mb-5">Category : {{ $category->name }}</h2>

<h4 class="mb-4">Jadi yang menggunakan category {{ $category->name }} cuman ada mereka nih :</h4>

    @foreach ($category->post as $cp)
        <p>{{ $loop->iteration }}. {{ $cp->title }}</p> 
    @endforeach
    <hr class="mb-4">

    <a href="/" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
   
@endsection