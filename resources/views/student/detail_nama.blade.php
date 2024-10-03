@extends('layout.main')

@section('title',"Detail Student")

@section('content')
    <h1 class="text-center mb-5">Detail Name</h1>

<div class="row justify-content-center">
    <div class="col-md-6 rounded-4 border-3 border p-4 border-danger-subtle">

        <h4 class="text-bg-success p-1 rounded-2 d-inline">Jurusan : {{ $nama->jurusan->jurusan}}</h4>
<ul>
    <li>Nama : {{ $nama->nama}}</li>
    <li>nik : {{ $nama->nik}}</li>
    <li>Usia : {{ $nama->usia}}</li>
    <li>Jenis Kelamin : {{ $nama->jenis_kelamin}}</li>
</ul>

<p>coba liat siapa aja yang jurusan nya <a href="/jurusan/nama/{{ $nama->jurusan->slug }}">{{{ $nama->jurusan->jurusan}}}</a></p>

<div class="d-block my-5"></div>

<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <a href="/nama" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> back</a>
    </div>
</div>

    </div>
</div>  

@endsection