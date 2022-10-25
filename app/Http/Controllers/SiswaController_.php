<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        // $data = Siswa::all();
        $data = Siswa::orderBy('nim', 'asc')->paginate(5);
        return view('siswa.index')->with('data', $data);
    }

    // function siswa()
    // {
    //     $data = Siswa::all();
    //     return view('siswa.index')->with('data', $data);
    // }

    function detail($id)
    {
        // return "<h1>Saya siswa dari Controller. NIM : $nim</h1>";
        $data = Siswa::where('nim', $id)->first();
        return view('siswa.detail')->with('data', $data);
    }
}
