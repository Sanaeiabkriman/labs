<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Etat;
use Auth;
use App\User;
use App\Http\Requests\CatValidation;
class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Categorie::all();
        $etat=Etat::all();
        return view('admin/blog/categories', compact('cats', 'etat'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CatValidation $request)
    {
        $user=Auth::user();
        $cats=new Categorie;
        $cats->categorie=$request->categorie;
        if ($user->role_id==1){
                $cats->etat_id=$request->etat;
        }else{
            $cats->etat_id=1;
        }
        $cats->user_id=$user->id;
        // dd($cats);
        $cats->save();
        return redirect('blog/cat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Categorie::find($id);
        $etat=Etat::all();
        return view ('admin/blog/editcategories', compact('modif','etat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatValidation $request, $id)
    {
        $user=Auth::user();
        $modif=Categorie::find($id);
        $modif->categorie=$request->categorie;
        if ($user->role_id==1){
            $modif->etat_id=$request->etat;
    }else{
        $modif->etat_id=1;
    }        
        $modif->user_id=$user->id;
        $modif->save();
        return redirect('blog/cat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Categorie::find($id);
        $del->delete();
        return redirect ('blog/cat');
    }
}
