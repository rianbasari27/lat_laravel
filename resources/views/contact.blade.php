@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $judul }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi, unde!</p>
    <ul>
        <li>Email : {{ $kontak["email"] }}</li>
        <li>No. Telp : {{ $kontak["phone"] }}</li>
        <li>No. Telp : {{ $kontak["alamat"] }}</li>
    </ul>
@endsection