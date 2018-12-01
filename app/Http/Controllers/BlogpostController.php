<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Categorie;
use App\Image;
use App\Com;
use Storage;


class BlogpostController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $article=Article::find($id)/* ->with('tag')->get() */;
        $tag=Tag::all();
        $cat=Categorie::all();
        $comvalide=Com::where('etat_id',2)->orderBy('id','asc')->get();
        $comarticle=$comvalide->where('aticle_id',2);
        $comnonvalide=Com::where('etat_id',1)->orderBy('id','asc')->get();
        $insta=Image::inRandomOrder()->take(6)->get();
        return view (('/blog-post'), compact('article', 'tag','cat','insta','comvalide','comnonvalide','comarticle'));
    }
}