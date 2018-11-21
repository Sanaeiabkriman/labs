<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icone;
use App\Http\Requests\iconesValidation;

class IconeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icone=Icone::all();
        return view (('admin/services/icones'), compact('icone'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(iconesValidation $request)
    {
        $icone=new Icone;
        $icone->icone=$request->icone;
        $icone->nom=$request->nom;
        $icone->save();
        return redirect('/services/icones');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Icone::find($id);
        return view ('admin/services/editicone', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(iconesValidation $request, $id)
    {
        $modif=Icone::find($id);
        $modif->icone=$request->icone;
        $modif->nom=$request->nom;
        $modif->save();
        return redirect('/services/icones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Icone::find($id);
        $del->delete();
        return redirect ('/services/icones');
    }
}
