<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Categorie;
use Auth;
use ImageIntervention;
use Storage;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::all();
        $tag=Tag::all();
        $cat=Categorie::all();
        return view('admin/blog/articles', compact('article', 'tag','cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $img=$request->file('image');
        $renom=time().$img->hashName();
        $img->store('/public/images/original');
        $resized=ImageIntervention::make($img)->resize(730,260);
        $resized->save();
        Storage::put('/public/images/thumbnails/'.$renom, $resized);
        $article=new Article;
        $article->titre=$request->titre;
        $article->texte=$request->texte;
        $article->categorie_id =$request->categorie;
        $article->user_id=Auth::id();
        $article->image=$renom;
        $article->save();
        foreach($request->tag as $item){
            $tagarticle=Tag::find($item);
            $article->tag()->attach($tagarticle);
            $article->save();
        }
        return redirect('blog/article');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Article::find($id);
        return view('admin/blog/editarticle', compact('modif'));
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
        $modif=Article::find($id);
        $modif->nom=$request->nom;
        $modif->save();
        return redirect('blog/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Article::find($id);
        $del->delete();
        return redirect ('blog/article');
    }
}
