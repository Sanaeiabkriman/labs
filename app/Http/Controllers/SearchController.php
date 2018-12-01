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
        $art = Article::/* with('commentaire')-> */where('texte','LIKE','%'.$search.'%')->orWhere('titre','LIKE','%'.$search.'%')->paginate(3);
        $insta=Image::all();
        $cat=Categorie::where('etat_id',1)->orderBy('categorie','asc')->get();
        $tag=Tag::where('etat_id',1)->orderBy('tag','asc')->get();
        $count=1;
        if(count($art) > 0)
            return view('search', compact('art','insta','cat','tag','mestags','count'))->withDetails($art)->withQuery ( $search );
        else
            return view ('search', compact('art','insta','cat','tag','mestags','count'))->with('success',"Aucun article n'a été trouvé!");
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
