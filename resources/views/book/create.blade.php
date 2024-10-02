@extends('layout.main')

@section('title',"Add Books")

@section('content')
    <h1 class="text-center">Add Books</h1>

    <div class="row justify-content-center mt-4">
      <div class="col-md-6  p-3">
       
        <form action="/book" method="post">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukan Judul Buku..." name="judul">
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" placeholder="Masukan penulis Buku..." name="penulis">
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" placeholder="Masukan penerbit Buku..." name="penerbit">
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" placeholder="Masukan harga Buku..." name="harga">
        </div>

        <div class="d-flex justify-content-between mt-5">
            <a href="/book" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</button>
        </div>
        </form>

      </div>
    </div>

@endsection