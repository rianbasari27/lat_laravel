<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        $judul = 'Home';
        return view('index')->with('title', $judul);
    }

    function siswa()
    {
        $judul = "Siswa";
        return view('siswa.index')->with('title', $judul);
    }

    function about()
    {
        $judul = 'About';
        return view('about')->with('title', $judul);
    }

    function contact()
    {
        $data = [
            "judul" => "Contact",
            "kontak" => [
                "email" => "rianbasari@gmail.com",
                "phone" => "082211221122",
                "alamat" => "Jl. Blablabla, Dasa, Sisisi"
            ]
        ];
        return view('contact')->with($data);
    }
}
