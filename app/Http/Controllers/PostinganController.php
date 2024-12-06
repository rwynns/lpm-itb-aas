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
            "postingans" => Postingan::latest()->take(3)->get()
        ]);
    }

    public function detail($slug)
    {
        $postingan = Postingan::where('slug', $slug)->first();
        return view('berita', [
            "title" => $postingan->title, // Menggunakan judul postingan sebagai title
            "postingan" => $postingan
        ]);
    }
}
