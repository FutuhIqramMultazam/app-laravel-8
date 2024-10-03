@extends('layout.main')

@section('title',"Name")

@section('content')
<div class="row justify-content-center">

    <h1 class="text-center">List Jurusan</h1>
    
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">

        <ul class="list-group">

          @foreach ($jurusan as $s)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$s->jurusan }}
            {{-- <a href="/jurusan/nama/{{ $s->slug }}" class="badge text-decoration-none text-bg-info rounded-pill">lihat siapa saja yang jurusan nya ini?</a> --}}
          </li>
          @endforeach

        </ul>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-6 text-center">
                <a href="/nama" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> back to names list</a>
            </div>
        </div>

      </div>
    </div>

@endsection