@extends('layout.main')

@section('title',"Detail Book")

@section('content')
    <h1>Detail Book</h1>

    <div class="row">
      <div class="col-md-6">
        <div class="card mt-5">
          <div class="card-header">
            <span class="text-danger" >Judul Buku</span> : {{ $book->judul }}
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>{{ $book->penulis }}</p>
              <footer class="blockquote-footer mt-3">Penerbit : {{ $book->penerbit }} |<cite title="Source Title" class="text-success"> Harga : <i class="fa-solid fa-coins"></i> {{ $book->harga }}</cite></footer>
            </blockquote>

            <a href="/book" class="btn btn-danger mt-5"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
      </div>
    </div>
    

@endsection