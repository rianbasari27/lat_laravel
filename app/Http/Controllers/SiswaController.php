<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::orderBy('created_at', 'desc')->paginate(5);
        return view('siswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FacadesSession::flash('nama_siswa', $request->nama_siswa);
        FacadesSession::flash('nim', $request->nim);
        FacadesSession::flash('jurusan', $request->jurusan);
        FacadesSession::flash('alamat', $request->alamat);
        FacadesSession::flash('email', $request->email);
        FacadesSession::flash('no_telp', $request->no_telp);

        $request->validate(
            [
                'nama_siswa' => 'required',
                'nim' => 'required|numeric',
                'jurusan' => 'required',
                'alamat' => 'required',
            ],
            [
                'nama_siswa.required' => 'Nama siswa wajib diisi!',
                'nim.required' => 'NIM wajib diisi!',
                'nim.numeric' => 'NIM harus diisi angka!',
                'jurusan.required' => 'Jurusan wajib diisi!',
                'alamat.required' => 'Alamat wajib diisi!'
            ]
        );

        $data = [
            'nama_siswa' => $request->input('nama_siswa'),
            'nim' => $request->input('nim'),
            'jurusan' => $request->input('jurusan'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp')
        ];
        Siswa::create($data);
        return redirect('/siswa')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::where('id', $id)->first();
        return view('siswa.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::where('id', $id)->first();
        return view('siswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_siswa' => 'required',
                'jurusan' => 'required',
                'alamat' => 'required',
            ],
            [
                'nama_siswa.required' => 'Nama siswa wajib diisi!',
                'jurusan.required' => 'Jurusan wajib diisi!',
                'alamat.required' => 'Alamat wajib diisi!'
            ]
        );

        $data = [
            'nama_siswa' => $request->input('nama_siswa'),
            'jurusan' => $request->input('jurusan'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp')
        ];
        Siswa::where('id', $id)->update($data);
        return redirect('/siswa')->with('success', 'Berhasil melakukan update data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::where('id', $id)->delete();
        return redirect('/siswa')->with('success', 'Data berhasil dihapus!');
    }
}
