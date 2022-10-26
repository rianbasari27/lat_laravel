@extends('layouts.main')

@section('container')
    <h1>Data Siswa</h1>
    <a href="/siswa/create" class="btn btn-primary my-2">Tambah Siswa</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($data as $item)
        <tbody>
            <tr>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama_siswa }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->no_telp }}</td>
                <td>
                    <a class="btn btn-sm btn-secondary" href="{{ url('/siswa/'.$item->id) }}">Detail</a> 
                    <a class="btn btn-sm btn-warning" href="{{ url('/siswa/'.$item->id.'/edit') }}">Edit</a>
                    <form action="{{ '/siswa/'.$item->id }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection