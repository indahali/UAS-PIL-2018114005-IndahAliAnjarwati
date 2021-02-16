<?php

namespace App\Http\Controllers;
use App\Models\absens;
use Illuminate\Http\Request;


class absenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absens = absens::orderBy('id', 'desc')->get();
        return view('/absens/index', compact('absens'));
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
        $absens = new absens;
        $absens->waktu_absen = $request->waktu_absen;
        $absens->mahasiswa_id = $request->mahasiswa_id;
        $absens->matakuliah_id = $request->matakuliah_id;
        $absens->keterangan = $request->keterangan;

        $absens->save();

        return redirect('/absens');
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
        $abs = absens::where('id', $id)->first();
        return view('absens.edit', ['abs' => $abs]);
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
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required',
            'matakuliah_id' => 'required',
            'keterangan' => 'required'
        ]);

        absens::find($id)->update([
            'waktu_absen' => $request->waktu_absen,
            'mahasiswa_id' => $request->mahasiswa_id,
            'matakuliah_id' => $request->matakuliah_id,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/absens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        absens::find($id)->delete();
        return redirect('/absens');
    }
}