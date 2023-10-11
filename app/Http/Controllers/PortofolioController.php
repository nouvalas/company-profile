<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index()
    {
        $portofolio = Portofolio::all();

        return view('dashboard.portofolio.index', compact('portofolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('dashboard.portofolio.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_portofolio' => 'required',
            'kategori_id' => 'required',
            'gambar_portofolio' => 'required'
        ], [
            'judul_portofolio.required' => "Judul tidak boleh kosong",
            'kategori_id.required' => "Kategori tidak boleh kosong",
            'gambar_portofolio.required' => "Gambar tidak boleh kosong"
        ]);

        $input = $request->all();

        Portofolio::create($input);

        return redirect('/adminportofolio')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $portofolio = Portofolio::find($id);
        return view('dashboard.portofolio.edit', [
            'portofolio' => $portofolio,
            'kategori' => $kategori
        ]);

        // return view('dashboard.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_portofolio' => 'required',
            'kategori_id' => 'required',
            'gambar_portofolio' => 'required'
        ], [
            'judul_portofolio.required' => "Judul tidak boleh kosong",
            'kategori_id.required' => "Kategori tidak boleh kosong",
            'gambar_portofolio.required' => "Gambar tidak boleh kosong"
        ]);

        $portofolio = Portofolio::find($id);
        $portofolio->update($request->all());

        return redirect('/adminportofolio')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $portofolio = Portofolio::find($id);
        $portofolio->delete();
        
        return redirect('/adminportofolio')->with('message', 'Data Berhasil Dihapus');
    }
}
