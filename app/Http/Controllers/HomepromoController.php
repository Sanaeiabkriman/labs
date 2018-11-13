<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepromo;
use App\Http\Requests\HomepromoValidation;
class HomepromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo= Homepromo::all();
        return view (('admin/homepromo'), compact('promo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(HomepromoValidation  $request)
    {
        $promo= new Homepromo;
        $promo->titre= $request->titre;
        $promo->description= $request->description;
        $promo->save();
        return redirect('homepromo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Homepromo::find($id);
        return view ('admin/edithomepromo', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomepromoValidation  $request, $id)
    {
        $modif=Homepromo::find($id);
        $modif->titre= $request->titre;
        $modif->description= $request->description;
        $modif->save();
        return redirect('homepromo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Homepromo::find($id);
        $del->delete();
        return redirect ('homepromo');
    }
}
