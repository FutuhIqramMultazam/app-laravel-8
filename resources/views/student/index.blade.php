@extends('layout.main')

@section('title',"Students")

@section('content')
    <h1 class="text-center">Daftar Mahasiswa</h1>

    <div class="row justify-content-center text-center">
      <div class="col-md-6">
        <a href="/student/create" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i> Add Studetns <i class="fa-solid fa-user"></i></a>
      </div>
    </div>
    
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong> {{ session('status') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <ul class="list-group">

          @foreach ($student as $s)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$s->nama }}
            <a href="/student/{{ $s->id }}" class="badge text-decoration-none text-bg-info rounded-pill">detail</a>
          </li>
          @endforeach

        </ul>
      </div>
    </div>

@endsection