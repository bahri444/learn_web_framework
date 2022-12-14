<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\To_do;
use Illuminate\Support\Facades\DB;

class To_doController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $to_do = DB::table('todo')->get();
        return view('to_do.index', compact('to_do'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('to_do.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required'
        ]);
        $to_do = new To_do();
        $to_do->judul = $request->judul;
        $to_do->save();
        return redirect()->route('to_do.index')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $to_do = To_do::findOrFail($id);
        return view('to_do.show', compact('to_do'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $to_do = To_do::findOrFail($id);
        return view('to_do.update', compact('to_do'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'judul' => 'required'
        ]);
        $to_do = To_do::findOrFail($id);
        $to_do->judul = $request->judul;
        $to_do->save();
        return redirect()->route('to_do.index')->with('succes', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $to_do = To_do::findOrFail($id);
        $to_do->delete();
        return redirect()->route('to_do.index')->with('success', 'data berhasil di hapus');
    }
}
