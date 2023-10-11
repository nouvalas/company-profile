<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Portofolio;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function about() {
        return view('home.about');
    }

    public function portofolio() {


        $kategori = Kategori::all();
        $portofolio = Portofolio::all();
        return view('home.portofolio', compact('portofolio', 'kategori'));
    }

    public function article() {

        $article = Article::all();
        return view('home.article', compact('article'));
    }

    public function faq() {
        return view('home.faq');
    }

    public function detailarticle($id) {

        $article = Article::find($id);
        return view('home.detailarticle', [
            'article' => $article
        ]);
    }

    public function detailworkflow() {
        return view('home.detailworkflow');
    }

}
