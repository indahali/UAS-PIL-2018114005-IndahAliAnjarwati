<?php

namespace App\Http\Controllers;
use App\Models\mahasiswas;
use Illuminate\Http\Request;


class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = mahasiswas::orderBy('id', 'desc')->get();
        return view('/mahasiswas/index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswas = new mahasiswas;
        $mahasiswas->nama_mahasiswa = $request->nama_mahasiswa;
        $mahasiswas->alamat = $request->alamat;
        $mahasiswas->no_tlp = $request->no_tlp;
        $mahasiswas->email = $request->email;

        $mahasiswas->save();

        return redirect('/mahasiswas');
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
        $mhs = mahasiswas::where('id', $id)->first();
        return view('mahasiswas/edit', ['mhs' => $mhs]);
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
            'nama_mahasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required'
        ]);

        mahasiswas::find($id)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email
        ]);

        return redirect('/mahasiswas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mahasiswas::find($id)->delete();
        return redirect('/mahasiswas');
    }
}