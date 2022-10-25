@extends('layouts.main')

@section('container')
<h1 class="mb-3">Tambah Data Siswa</h1>
<a href="/siswa" class="btn btn-warning mb-3">&#11013; Back</a>
<div class="row">
    <div class="col-md-4">
        <form method="post" action="/siswa">
            @csrf
            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama siswa</label>
                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="{{ Session::get('nama_siswa') }}">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" id="nim" value="{{ Session::get('nim') }}">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ Session::get('jurusan') }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ Session::get('alamat') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ Session::get('email') }}">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{ Session::get('no_telp') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-outline-danger">Clear</button>
        </form>
    </div>
</div>
@endsection