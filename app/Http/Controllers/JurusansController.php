<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusansController extends Controller
{
    //
    public function siapaAja(Jurusan $jurusan)
    {
        return view('student.siapaAja', compact('jurusan'));
    }

    public function index()
    {
        $jurusan = Jurusan::all();
        return view('student.list_jurusan', compact('jurusan'));
    }
}
