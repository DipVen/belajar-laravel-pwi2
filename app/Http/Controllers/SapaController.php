<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Muhammad Hasanuddin';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
