@extends('layouts.main')

@section('container')
    <h1 class="text-primary">Dashboard</h1>
    <table class="table" style="width: 300px">
        <thead>
            <tr>
                <th class="text-primary text-center">Menu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="/siswa">Data Siswa</a></td>
            </tr>
        </tbody>
    </table>
@endsection