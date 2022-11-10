<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\Pegawai;
use App\Models\Kebutuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KebutuhanC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagian = DB::table('bagians')->get();
        $pegawai = DB::table('pegawais')->get();
        $kebutuhan = DB::table('kebutuhans')
            // ->join('bagians', 'bagians.id_bagian', '=', 'pegawais.id_bagian')
            ->join('pegawais', 'pegawais.id_pegawai', '=', 'kebutuhans.id_pegawai')->get();
        // dd($kebutuhan);
        return view('rsud.kebutuhan', [
            'bagian' => $bagian,
            'pegawai' => $pegawai,
            'kebutuhan' => $kebutuhan,
            'title' => 'kebutuhan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $request->validate([
            'fotoVideo' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        // $imageName = time() . '_' . $request->file('fotoVideo')->getClientOriginalName();
        $imageName = time() . '.' . $request->fotoVideo->extension();

        // Public Folder
        $request->fotoVideo->move(public_path('fotoVideo'), $imageName);

        DB::table('kebutuhans')->insert([
            'id_pegawai' => $request->id_pegawai,
            'jns_kbthn_teknis' => $request->jns_kbthn_teknis,
            'kbthn_tentang' => $request->kbthn_tentang,
            'deskripsi_kbthn' => $request->deskripsi_kbthn,
            'fotoVideo' => $imageName,
        ]);
        return redirect('kebutuhan');
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
        $request->validate([
            'fotoVideo' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        // $imageName = time() . '_' . $request->file('fotoVideo')->getClientOriginalName();
        $imageName = time() . '.' . $request->fotoVideo->extension();

        // Public Folder
        $request->fotoVideo->move(public_path('fotoVideo'), $imageName);
        $data = array(
            'id_kebutuhan' => $request->id_kebutuhan,
            'id_pegawai' => $request->id_pegawai,
            'jns_kbthn_teknis' => $request->jns_kbthn_teknis,
            'kbthn_tentang' => $request->kbthn_tentang,
            'deskripsi_kbthn' => $request->deskripsi_kbthn,
            'fotoVideo' => $imageName,
        );
        // dd($data);
        DB::table('kebutuhans')->where('id_kebutuhan', '=', $request->post('id_kebutuhan'))->update($data);
        return redirect('kebutuhan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kebutuhans')->where('id_kebutuhan', '=', $id)->delete();
        return redirect('kebutuhan');
    }
}
