<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use App\Icone;
Use Storage;
use ImageIntervention;
use App\Http\Requests\ProjetValidation;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projet=Projet::paginate(6);
        $icone=Icone::all();
        return view('admin/services/projet', compact('projet','icone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProjetValidation $request)
    {
        $img=$request->file('image');
        $renom=time().$img->hashName();
        $img->store('/public/images/original');
        $resized=ImageIntervention::make($img)->resize(350,260);
        $resized->save();
        Storage::put('/public/images/thumbnails/'.$renom, $resized);

        $serv=new Projet;
        $serv->titre=$request->titre;
        $serv->texte=$request->texte;
        $serv->icone_id=$request->icone;
        $serv->image=$renom;
        $serv->save();
        return redirect('projets');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Projet::find($id);
        $icone=Icone::all();
        return view ('admin/services/editprojet', compact('modif','icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjetValidation $request, $id)
    {
        $modif=Projet::find($id);
        if ($request->image== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->image);
            Storage::delete('public/images/thumbnails/'.$modif->image);
            $img=$request->image;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(350,260);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $modif->image=$renom;
        }
        $modif->titre=$request->titre;
        $modif->texte=$request->texte;
        $modif->icone_id=$request->icone;
        $modif->save();
        return redirect('projets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Projet::find($id);
        Storage::delete($del->image);
        $del->delete();
        return redirect ('projets');
    }
}
