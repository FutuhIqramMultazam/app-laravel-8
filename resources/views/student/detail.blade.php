@extends('layout.main')

@section('title',"Detail Student")

@section('content')
    <h1 class="text-center">Detail Student</h1>

    <div class="row justify-content-center">
      <div class="col-md-6 ">
        <div class="card mt-5">
          <div class="card-header">
            <span class="text-danger" >Nama mahasiswa</span> : {{ $student->nama }}
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-4">
              <p>NIM : {{ $student->nim }}</p>
              <p>email : {{ $student->email }}</p>
              <p>jurusan : {{ $student->jurusan }}</p>
            </blockquote>

            <hr>

            <a href="/student/{{ $student->id }}/edit" class="btn btn-warning"><i class="fa-solid fa-pen"></i> Edit</a>

            <form action="/student/{{ $student->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger "><i class="fa-solid fa-trash-can"></i> Delete</button>
            </form>

            <div class="d-block"></div>

            <a href="/student" class="btn btn-sm btn-danger mt-5"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
      </div>
    </div>
    

@endsection