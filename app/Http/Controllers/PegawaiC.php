<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagian = DB::table('bagians')->get();
        $pegawai = DB::table('pegawais')->join('bagians', 'bagians.id_bagian', '=', 'pegawais.id_bagian')->get();
        return view('rsud.pegawai', [
            'bagian' => $bagian,
            'pegawai' => $pegawai,
            'title' => 'pegwai'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        DB::table('pegawais')->insert([
            'id_bagian' => $request->id_bagian,
            'nama' => $request->nama,
            'kontak_wa' => $request->kontak_wa,
        ]);
        return redirect('pegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = array(
            'id_pegawai' => $request->id_pegawai,
            'id_bagian' => $request->id_bagian,
            'nama' => $request->nama,
            'kontak_wa' => $request->kontak_wa,
        );
        DB::table('pegawais')->where('id_pegawai', '=', $request->post('id_pegawai'))->update($data);
        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pegawais')->where('id_pegawai', '=', $id)->delete();
        return redirect('pegawai');
    }
}
