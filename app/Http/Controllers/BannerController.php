<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Hyperlink;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::all();

        return view('dashboard.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hyperlink = Hyperlink::all();
        return view('dashboard.banner.create', compact('hyperlink'));
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
            'gambar_banner' => 'required|image',
            'hyperlink_id' => 'required'
            
        ], [
            'gambar_banner.required' => "Gambar tidak boleh kosong",
            'hyperlink_id.required' => "Hyperlink tidak boleh kosong"
        ]);

        $input = $request->all();

        if ($image = $request->file('gambar_banner')) {
            $destinationPath = 'image/banner/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['gambar_banner'] = $imageName;
        }


        Banner::create($input);

        return redirect('/adminbanner')->with('message', 'Data Berhasil Ditambahkan');
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
        $hyperlink = Hyperlink::all();
        $banner = Banner::find($id);
        return view('dashboard.banner.edit', [
            'banner' => $banner,
            'hyperlink' => $hyperlink
        ]);
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
            'gambar_banner' => 'image',
            'hyperlink_id' => 'required'
        ],[
            'hyperlink_id.required' => "Hyperlink tidak boleh kosong"
        ]);

        $input = $request->all();

        if ($image = $request->file('gambar_banner')) {
            $destinationPath = 'image/banner/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['gambar_banner'] = $imageName;
        } else{
            unset($input['gambar_banner']);
        }


        $banner = Banner::find($id);
        $banner->update($input);

        return redirect('/adminbanner')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        
        return redirect('/adminbanner')->with('message', 'Data Berhasil Dihapus');
    }
}
