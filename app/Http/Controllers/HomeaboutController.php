<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeabout;
use App\Http\Requests\HomeaboutValidation;
class HomeaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=Homeabout::all();
        return view (('admin/homeabout'), compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(HomeaboutValidation $request)
    {
        $about= new Homeabout;
        $about->titre= $request->titre;
        $about->texte1= $request->texte1;
        $about->texte2=$request->texte2;
        $about->video=$request->video;
        $about->save();
        return redirect('homeabout');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Homeabout::find($id);
        return view ('admin/edithomeabout', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeaboutValidation $request, $id)
    {
        $modif=Homeabout::find($id);
        $modif->titre=$request->titre;
        $modif->texte1=$request->texte1;
        $modif->texte2=$request->texte2;
        $modif->video=$request->video;
        $modif->save();
        return redirect ('homeabout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del= Homeabout::find($id);
        $del->delete();
        return redirect ('homeabout');
    }
}