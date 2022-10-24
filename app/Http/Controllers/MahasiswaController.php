<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mhs = ['saepul bahri', 'adam nizar', 'gilang pratama', 'murizal'];
        return view('admin.mahasiswa')->with('mahasiswa', $mhs);
    }

    public function cobaFacade()
    {
        echo Str::snake('SedangBelajarLaravelDiSemesterLima'); //snake adalah defaultnya
        echo '<br>';
        echo Str::kebab('SedangBelajarLaravelDiSemesterLima'); //kebab adalah defaultnya
    }
}
