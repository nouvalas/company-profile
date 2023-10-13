<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index()
    {
        $article = Article::all();

        return view('dashboard.article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.article.create');
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
            'judul_article' => 'required',
            'cover_article' => 'required|image|dimensions:ratio=1/1',
            'gambar_article' => 'required|image',
            'isi_article' => 'required'
        ], [
            'judul_article.required' => "Judul tidak boleh kosong",
            'cover_article.required' => "Cover tidak boleh kosong",
            'gambar_article.required' => "Gambar tidak boleh kosong",
            'isi_article.required' => "Isi Artikel tidak boleh kosong"
        ]);

        $input = $request->all();

        if ($image = $request->file('cover_article' )) {
            $destinationPath = 'image/article/';
            $imageName = "C" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['cover_article'] = $imageName;
        }

        if ($image = $request->file('gambar_article')) {
            $destinationPath = 'image/article/';
            $imageName = "G" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['gambar_article'] = $imageName;
        }




        Article::create($input);

        return redirect('/adminarticle')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $Article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $Article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $Article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('dashboard.article.edit', [
            'article' => $article
        ]);

        // return view('dashboard.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $Article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_article' => 'required',
            'cover_article' => 'image|dimensions:ratio=1/1',
            'gambar_article' => 'image',
            'isi_article' => 'required'
        ], [
            'judul_article.required' => "Judul tidak boleh kosong",
            'cover_article.dimensions' => "Rasio Cover harus 1/1",
            'isi_article.required' => "Isi Artikel tidak boleh kosong"
        ]);

        $input = $request->all();

        if ($image = $request->file('cover_article' )) {
            $destinationPath = 'image/article/';
            $imageName = "C" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['cover_article'] = $imageName;
        }else{
            unset($input['cover_article']);
        }

        if ($image = $request->file('gambar_article')) {
            $destinationPath = 'image/article/';
            $imageName = "G" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['gambar_article'] = $imageName;
        }else{
            unset($input['gambar_article']);
        }

        $article = Article::find($id);
        $article->update($input);

        return redirect('/adminarticle')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $Article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $article = Article::find($id);
        $article->delete();
        
        return redirect('/adminarticle')->with('message', 'Data Berhasil Dihapus');
    }
}
