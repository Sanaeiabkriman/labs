<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Categorie;
use App\Article;
use App\Image;
use App\Com;
use Session;
class SearchCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request, $id)
    {
        $cate = Categorie::all();
        $article=Article::all();
        $insta=Image::all();
        $cat = Categorie::get();
        $tag = Tag::all();
        // $com=Com::find($id);
        // $commentaire=Com::where('etat_id', '2')->count();
        $count=1;
        $articlecat=Article::where('categorie_id',$id)->get();
        return view ('catsearch',compact('tag','cate','article','insta','articlecat','count'));
    }

}
