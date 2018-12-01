<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Categorie;
use Auth;
use ImageIntervention;
use Storage;
use App\Etat;
use App\Http\Requests\ArticleValidation;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::with('tag')->get();
        $tag=Tag::all();
        $cat=Categorie::all();
        $etat=Etat::all();
        return view('admin/blog/articles', compact('article', 'tag','cat','etat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ArticleValidation $request)
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
        $article->textepreview= str_limit($request->texte,200);
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
    public function edit(Article $article,$id)
    {
        $modif=Article::find($id);
        $tag=Tag::all();
        $cat=Categorie::all();
        $etat=Etat::all();
        return view('admin/blog/editarticles', compact('modif','tag','cat','etat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleValidation $request, $id)
    {        
  
        $modif=Article::find($id);
        if ($request->image== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->image);
            Storage::delete('public/images/thumbnails/'.$modif->image);
            $img=$request->image;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(730,260);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $modif->image=$renom;
        }
        $modif->titre=$request->titre;
        $modif->texte=$request->texte;
        $modif->textepreview= str_limit($request->texte,200);
        $modif->categorie_id =$request->categorie;
        $modif->user_id=Auth::id();
        $modif->image=$renom;
        $modif->save();
        $modif->tag()->sync($request->tag);
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
        $del->tag()->detach();
        $del->categorie()->detach();
        Storage::delete('/public/images/thumbnails/'.$del->image);
        $del->delete();
        return redirect ('blog/article');
    }
    
    public function valider($id)
    {
        $val=Article::find($id);
        $val->etat_id=2;
        $val->save();
        return redirect()->back();

    }
    public function invalider($id)
    {
        $val=Article::find($id);
        $val->etat_id=1;
        $val->save();
        return redirect()->back();

    }
}
