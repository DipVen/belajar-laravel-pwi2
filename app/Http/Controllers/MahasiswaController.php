<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Membuat array multidimensi berisi sekumpulan data mahasiswa
        $dataMahasiswa = [
            [
                'nama' => 'Muhammad Hasanuddin', 
                'nim' => '707082400037', 
                'jurusan' => 'TRM'
            ],
            [
                'nama' => 'Haidar Hakim', 
                'nim' => '707082400001', 
                'jurusan' => 'TRM'
            ],
            [
                'nama' => 'Dimas Nouval Aziz', 
                'nim' => '707082400050', 
                'jurusan' => 'TRM'
            ]
        ];
        
        return view('pages.mahasiswa', [
            'mahasiswa' => $dataMahasiswa,
        ]);
    }
}