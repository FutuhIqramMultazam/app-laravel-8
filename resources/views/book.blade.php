@extends('layout.main')

@section('title',"Books")

@section('content')
    <h1 class="text-center">Daftar buku</h1>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <ul class="list-group">

          @foreach ($book as $b)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$b->judul }}
            <a href="/detailBook/{{ $b->slug }}" class="badge text-decoration-none text-bg-info rounded-pill">Detail</a>
          </li>
          @endforeach

        </ul>
      </div>
    </div>

@endsection