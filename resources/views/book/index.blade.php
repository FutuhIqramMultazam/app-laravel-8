@extends('layout.main')

@section('title',"Books")

@section('content')
    <h1 class="text-center">Daftar buku</h1>

    <div class="row justify-content-center text-center">
      <div class="col-md-6">
        <a href="/book/create" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i> Add Books <i class="fa-solid fa-book"></i></a>
      </div>
    </div>
    
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">
        <ul class="list-group">

          @foreach ($book as $b)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$b->judul }}
            <a href="/book/show/{{ $b->id }}" class="badge text-decoration-none text-bg-info rounded-pill">detail</a>
          </li>
          @endforeach

        </ul>
      </div>
    </div>

@endsection