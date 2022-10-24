@extends('layouts.main')

@section('container')
    <h1>Data Siswa</h1>
    <table class="table">
        <thead>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No. Telepon</th>
            <th></th>
        </thead>
        <?php $i = 1; ?>
        @foreach ($data as $item)
            <tbody>
                <td><?= $i; ?></td>
                <td>{{ $item->nama_siswa }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->no_telp }}</td>
                <td><a class="btn btn-sm btn-secondary" href="{{ url('/siswa/'.$item->nim) }}">Detail</a></td>
            </tbody>
            <?php $i++; ?>
        @endforeach
    </table>
    {{ $data->links() }}
@endsection