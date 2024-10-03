@extends('layout.main')

@section('title',"Siapa Aja sih")

@section('content')
<div class="row">
    <div class="col p-2 border border-2 border-danger rounded-3 bg-danger-subtle text-center">
        <h1>Daftar Orang Orang yang jurusan nya "<span class="text-danger">{{ $jurusan->jurusan }}</span>"</h1>
    </div>
</div>
    
    <div class="row justify-content-center mt-4">
      <div class="col-md-6">


        <ul class="list-group">

          @foreach ($jurusan->nama as $s)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$s->nama }}
            <a href="/nama/{{ $s->id }}" class="badge text-decoration-none text-bg-info rounded-pill">detail</a>
          </li>
          @endforeach

        </ul>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-6 text-center">
                <a href="/nama/{{ $s->id }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> back to detail</a>
            </div>
        </div>

      </div>
    </div>

@endsection