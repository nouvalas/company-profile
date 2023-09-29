<?php

namespace App\Http\Controllers;

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
        return view('home.portofolio');
    }

    public function article() {
        return view('home.article');
    }

    public function faq() {
        return view('home.faq');
    }

}
