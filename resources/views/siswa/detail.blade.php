@extends('layouts.main')

@section('container')
    <h1>{{ $data->nama_siswa }}</h1>
    <table>
            <tr>
                <td class="fw-bold">NIM</td>
                <td class="fw-bold">:</td>
                <td>{{ $data->nim }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Jurusan</td>
                <td class="fw-bold">:</td>
                <td>{{ $data->jurusan }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Alamat</td>
                <td class="fw-bold">:</td>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <td class="fw-bold">Email</td>
                <td class="fw-bold">:</td>
                <td>{{ $data->email }}</td>
            </tr>
            <tr>
                <td class="fw-bold">No. Telp</td>
                <td class="fw-bold">:</td>
                <td>{{ $data->no_telp }}</td>
            </tr>
    </table>
    <a class="btn btn-primary my-3" href="/siswa">Back</a>
@endsection