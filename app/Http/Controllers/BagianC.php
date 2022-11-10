<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagian = DB::table('bagians')->get();
        return view('rsud.bagian', [
            'jabatan' => $bagian,
            'title' => 'jabatan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $validasi = $request->validate([
            'bagian' => 'required'
        ]);
        if ($validasi == true) {
            DB::table('bagians')->insert([
                'bagian' => $request->bagian
            ]);
            return redirect('bagian');
        }
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
            'bagian' => $request->post('bagian')
        );
        DB::table('bagians')->where('id_bagian', '=', $request->post('id_bagian'))->update($data);
        return redirect('bagian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bagians')->where('id_bagian', '=', $id)->delete();
        return redirect('bagian');
    }
}
