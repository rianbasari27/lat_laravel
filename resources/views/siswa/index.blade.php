@extends('layouts.main')

@section('container')
    <h1>Data Siswa</h1>
    <a href="/siswa/create" class="btn btn-primary my-2">Tambah Siswa</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Siswa</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th></th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        @foreach ($data as $item)
        <tbody>
            <tr>
                <td><?= $i; ?></td>
                <td>{{ $item->nama_siswa }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->no_telp }}</td>
                <td><a class="btn btn-sm btn-secondary" href="{{ url('/siswa/'.$item->nim) }}">Detail</a></td>
            </tr>
        </tbody>
        <?php $i++; ?>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection