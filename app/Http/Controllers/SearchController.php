<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Categorie;
use App\Article;
use App\Image;

use Session;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->search;
        $mestags=Tag::all();
        $art = Article::where('texte','LIKE','%'.$search.'%')->orWhere('titre','LIKE','%'.$search.'%')->get();
        $insta=Image::all();
        $cat=Categorie::where('etat_id',2)->orderBy('categorie','asc')->get();
        $tag=Tag::where('etat_id',1)->orderBy('tag','asc')->get();
        $count=1;
        if(count($art) > 0)
            return view('search', compact('art','insta','cat','tag','mestags','count'))->withDetails($art)->withQuery ( $search );
        else
            return view ('search', compact('art','insta','cat','tag','mestags','count'));
    }

}