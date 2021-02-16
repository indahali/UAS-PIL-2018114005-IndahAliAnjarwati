<?php

namespace App\Http\Controllers;
use App\Models\matakuliahs;
use Illuminate\Http\Request;


class matakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliahs = matakuliahs::orderBy('id', 'desc')->get();
        return view('/matakuliahs/index', compact('matakuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliahs = new matakuliahs;
        $matakuliahs->nama_matakuliah = $request->nama_matakuliah;
        $matakuliahs->sks = $request->sks;

        $matakuliahs->save();

        return redirect('/matakuliahs');
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
        $matkul = matakuliahs::where('id', $id)->first();
        return view('matakuliahs/edit', ['matkul' => $matkul]);
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
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required'
        ]);

        matakuliahs::find($id)->update([
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks
        ]);

        return redirect('/matakuliahs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        matakuliahs::find($id)->delete();
        return redirect('/matakuliahs');
    }
}