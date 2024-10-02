@extends('layout.main')

@section('title',"Detail Book")

@section('content')
    <h1 class="text-center">Detail Book</h1>

    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <div class="card mt-5">
          <div class="card-header">
            <span class="text-danger" > Judul Buku</span> : {{ $book->judul }}
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-4">
              <p>{{ $book->penulis }}</p>
              <footer class="blockquote-footer mt-3">Penerbit : {{ $book->penerbit }} |<cite title="Source Title" class="text-success"> Harga : <i class="fa-solid fa-coins"></i> {{ $book->harga }}</cite></footer>
            </blockquote>

            <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen"></i> Edit</button>
            <button type="submit" class="btn btn-danger "><i class="fa-solid fa-trash-can"></i> Delete</button>

            <div class="d-block"></div>

            <a href="/book" class="btn btn-sm btn-danger mt-5"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
      </div>
    </div>
    

@endsection