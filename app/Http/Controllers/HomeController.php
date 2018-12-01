<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Com;
use App\Tag;
use App\Categorie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::where('etat_id', '1')->count();
        $tag=Tag::where('etat_id', '1')->count();
        $commentaire=Com::where('etat_id', '1')->count();
        $categorie=Categorie::where('etat_id', '1')->count();

        return view('home',compact('article','tag','commentaire','categorie'));
    }
}
