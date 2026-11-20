@extends('layouts.master')

@section('content')
    <h1>Daftar Mahasiswa</h1>
    <ul>
        @foreach ($mahasiswa as $mhs)
            <li>
                <b>Nama:</b> {{ $mhs['nama'] }} <br>
                <b>NIM:</b> {{ $mhs['nim'] }} <br>
                <b>Jurusan:</b> {{ $mhs['jurusan'] }}
            </li>
            <hr>
        @endforeach
    </ul>
@endsection