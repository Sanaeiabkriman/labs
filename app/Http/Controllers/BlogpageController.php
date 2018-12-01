<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleController;
use App\Article;
use App\Tag;
use App\Categorie;
use App\Image;
use App\Com;
use Auth;
use Storage;

class BlogpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::with('tag')->paginate(3);
        $tag=Tag::all();
        $cat=Categorie::all();
        $commentaire=Com::where('etat_id', 2)->count();
        $insta=Image::inRandomOrder()->take(6)->get();
        return view (('/blog'), compact('article', 'tag','cat','insta','commentaire'));
    }

}
