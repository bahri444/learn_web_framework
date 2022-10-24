<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function galery()
    {
        $gambar = ['foto 1', 'foto 2', 'foto 3', 'foto 4'];
        return view('admin.galery')->with('emet', $gambar);
    }
}
