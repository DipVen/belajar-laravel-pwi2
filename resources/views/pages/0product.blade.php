@extends('layouts.master')

@section('content')
<div class="container mt-4">

    <h3 class="border-bottom pb-3 mb-4">Daftar produk kami</h3>

    <button class="btn btn-primary mb-3">Tambah Data</button>

    <div class="card">
        <div class="card-header bg-light">
            Produk Kami
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Produk</th>
                        <th width="10%">Stok</th>
                        <th width="20%">Harga</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $item)
                    <tr>

                        <td>{{ $item['no'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                        <td>{{ $item['harga'] }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Delete</button>
                            <button class="btn btn-warning btn-sm text-white">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection