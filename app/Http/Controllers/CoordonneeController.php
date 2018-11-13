<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordonnee;
use App\Http\Requests\CoordonneesValidation;
class CoordonneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coord=Coordonnee::all();
        return view (('admin/contact/coordonnee'), compact('coord'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CoordonneesValidation $request)
    {
        $coord=new Coordonnee;
        $coord->titre1=$request->titre1;
        $coord->texte=$request->texte;
        $coord->titre2=$request->titre2;
        $coord->adresse=$request->adresse;
        $coord->num=$request->num;
        $coord->mail=$request->mail;
        $coord->save();
        return redirect('/contact/coordonnee');

    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Coordonnee::find($id);
        return view('admin/contact/editcoordonnee', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoordonneesValidation $request, $id)
    {
        $modif=Coordonnee::find($id);
        $modif->titre1=$request->titre1;
        $modif->texte=$request->texte;
        $modif->titre2=$request->titre2;
        $modif->adresse=$request->adresse;
        $modif->num=$request->num;
        $modif->mail=$request->mail;
        $modif->save();
        return redirect('/contact/coordonnee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Coordonnee::find($id);
        $del->delete();
        return redirect ('/contact/coordonnee');
    }
}
