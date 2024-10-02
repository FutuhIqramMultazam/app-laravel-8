<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }
    // 
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about', [
            "name" => "Futuh Iqram Multazam"
        ]);
    }

    public function book() {}

    public function detailBook(Book $book) {}

    public function video()
    {
        return view("video");
    }
}
