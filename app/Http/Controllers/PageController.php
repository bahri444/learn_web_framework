<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function index()
    // {
    //     return "halaman home";
    // }
    // public function tampil()
    // {
    //     return "data mahasiswa";
    // }
    public function dosens()
    {
        return view('admin.dosens');
    }
    public function dosens2()
    {
        $dos = ['nama dosen 1', 'nama dosen 2', 'nama dosen 3', 'nama dosen 4'];
        return view('admin.dosens2')->with('dosens2', $dos);
    }
    // public function mahasiswa()
    // {
    //     return view('admin/mahasiswa');
    // }
    // public function galery()
    // {
    //     return view('admin/galery');
    // }
}
