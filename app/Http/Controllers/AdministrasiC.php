<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use App\Models\Kebutuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrasiC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kbthn = DB::table('kebutuhans')->get();
        $adm = DB::table('administrasis')
            ->join('kebutuhans', 'kebutuhans.id_kebutuhan', '=', 'administrasis.id_kebutuhan')->get();
        // dd($adm);
        return view('rsud.administrasi', [
            'kbthn' => $kbthn,
            'adm' => $adm,
            'title' => 'administrasi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        DB::table('administrasis')->insert([
            'id_kebutuhan' => $request->id_kebutuhan,
            'urgenci' => $request->urgenci,
            'kategori' => $request->kategori,
            'progres' => $request->progres,
            'pic' => $request->pic,
        ]);
        return redirect('administrasi');
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
            'id_adm' => $request->id_adm,
            'id_kebutuhan' => $request->id_kebutuhan,
            'urgenci' => $request->urgenci,
            'kategori' => $request->kategori,
            'progres' => $request->progres,
            'pic' => $request->pic,
        );
        DB::table('administrasis')->where('id_adm', '=', $request->post('id_adm'))->update($data);
        return redirect('administrasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('administrasis')->where('id_adm', '=', $id)->delete();
        return redirect('administrasi');
    }
}
