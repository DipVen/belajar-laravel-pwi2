@extends('layouts.master')

@section('content')
<div class="container mt-3">
		<h1>Selamat Datang di Halaman About</h1>
        <div class="card mt-3">
            <div class="card-body border">
                Selamat datang {{ $nama }}, dari kelas {{ $kelas }} dengan nim {{ $nim }}
            </div>
        </div>
	</div>

@endsection