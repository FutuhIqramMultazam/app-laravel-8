@extends('layout.main')

@section('title',"Name")

@section('content')
<div class="row justify-content-center">

    <h1 class="text-center">List Names</h1>

    <div class="row justify-content-center text-center">
        <div class="col-md-6 ">
          <a href="/nama/create" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i> Add Names <i class="fa-solid fa-user"></i></a>
          <a href="/jurusan" class="btn btn-info mt-3"><i class="fa-solid fa-eye"></i> Show List Jurusan <i class="fa-solid fa-graduation-cap"></i></a>
        </div>
      </div>
    
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">

        <ul class="list-group">

          @foreach ($nama as $s)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$s->nama }}
            <a href="/nama/{{ $s->id }}" class="badge text-decoration-none text-bg-info rounded-pill">detail</a>
          </li>
          @endforeach

        </ul>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-6 text-center">
                <a href="/student" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> back to studnes list</a>
            </div>
        </div>

      </div>
    </div>

@endsection