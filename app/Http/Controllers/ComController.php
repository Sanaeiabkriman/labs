<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Com;
use App\Article;
use App\Tag;
use App\Http\Requests\CommentaireValidation;
class ComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag=Tag::all();
        $comvalide=Com::where('etat_id',2)->orderBy('id','asc')->get();
        $comnonvalide=Com::where('etat_id',1)->orderBy('id','asc')->get();
        $coms=com::all();
        return view ('/admin/blog/commentaire', compact('tag','comvalide','comnonvalide','coms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CommentaireValidation $request, $id)
    {
        $article = Article::find($id);
        $commentaire = new Com;
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->texte = $request->texte;
        $commentaire->article_id=$article->id;
        $commentaire->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Com::find($id);
        $del->delete();
        return redirect()->back();
    }

    public function valider($id)
    {
        $val=com::find($id);
        $val->etat_id=2;
        $val->save();
        return redirect()->back();

    }
    public function invalider($id)
    {
        $val=com::find($id);
        $val->etat_id=1;
        $val->save();
        return redirect()->back();

    }
}
