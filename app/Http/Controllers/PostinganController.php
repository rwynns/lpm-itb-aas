<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postingan;

class PostinganController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "postingans" => Postingan::all()
        ]);
    }

    public function detail($slug)
    {
        return view('berita', [
            "title" => "Detail",
            "postingan" => Postingan::where('slug', $slug)->first()
        ]);
    }
}
