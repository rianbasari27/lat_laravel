@extends('layouts.main')

@section('container')
<h1 class="mb-3">Edit Data Siswa</h1>
<div class="row">
    <div class="col-md-4">
        <form method="post" action="{{ '/siswa/'.$data->id }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_siswa" class="form-label">Nama siswa</label>
                <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="{{ $data->nama_siswa }}">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim" id="nim" value="{{ $data->nim }}" readonly disabled>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{ $data->jurusan }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <textarea name="alamat" id="alamat" class="form-control">{{ $data->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{ $data->no_telp }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/siswa" class="btn btn-outline-warning">Back</a>
        </form>
    </div>
</div>
@endsection