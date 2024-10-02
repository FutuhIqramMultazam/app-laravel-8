@extends('layout.main')

@section('title',"Edit Books")

@section('content')
    <h1 class="text-center">Edit Books</h1>

    <div class="row justify-content-center mt-4">
      <div class="col-md-6  p-3">
       
        <form action="/book/update/{{ $book->slug }}" method="post">
            @method('patch')
            @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror " id="judul" placeholder="Masukan judul Buku..." name="judul"  value="{{ $book->judul }}">
            @error('judul') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Masukan penulis Buku..." name="penulis" value="{{  $book->penulis }}">
            @error('penulis') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">penerbit</label>
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" placeholder="Masukan penerbit Buku..." name="penerbit" value="{{  $book->penerbit }}">
            @error('penerbit') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukan harga Buku..." name="harga" value="{{  $book->harga }}">
            @error('harga') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="d-flex justify-content-between mt-5">
            <a href="/book/show/{{ $book->slug }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</button>
        </div>
        </form>

      </div>
    </div>

@endsection