<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etat;
use App\Http\Requests\EtatValidation;

class EtatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etats=Etat::all();
        return view('admin/blog/etats', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(EtatValidation $request)
    {
        $etats=new Etat;
        $etats->nom =$request->nom;
        $etats->save();
        return redirect('blog/etats');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Etat::find($id);
        return view('admin/blog/editetat', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EtatValidation $request, $id)
    {
        $modif=Etat::find($id);
        $modif->nom=$request->nom;
        $modif->save();
        return redirect('blog/etats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Etat::find($id);
        $del->delete();
        return redirect ('blog/etats');
    }
}
