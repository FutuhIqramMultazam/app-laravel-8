@extends('layout.main')

@section('title',"Edit Students")

@section('content')
    <h1 class="text-center">Edit Students</h1>

    <div class="row justify-content-center mt-4">
      <div class="col-md-6  p-3">
       
        <form action="/student/{{ $student->id }}" method="post">
            @method('patch')
            @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukan nama Buku..." name="nama"  value="{{ $student->nama }}">
            @error('nama') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">nim</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukan nim Buku..." name="nim" value="{{  $student->nim }}">
            @error('nim') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email Buku..." name="email" value="{{  $student->email }}">
            @error('email') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan jurusan Buku..." name="jurusan" value="{{  $student->jurusan }}">
            @error('jurusan') <div class="invalid-feedback">{{ $message  }}</div> @enderror
        </div>

        <div class="d-flex justify-content-between mt-5">
            <a href="/student" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</button>
        </div>
        </form>

      </div>
    </div>

@endsection