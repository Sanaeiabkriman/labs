<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeintro;
use Storage;
use ImageIntervention;
use App\Http\Requests\HomeintroValidation;

class HomeintroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro=Homeintro::all();
        return view (('admin/homeintro'), compact('intro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(HomeintroValidation $request)
    {
        $img1=$request->file('bg1');
        $renom1=time().$img1->hashName();
        $img1->store('/public/images/original');
        $resized1=ImageIntervention::make($img1)->resize(1600,900);
        $resized1->save();
        Storage::put('/public/images/thumbnails/'.$renom1, $resized1);

        $img2=$request->file('bg2');
        $renom2=time().$img2->hashName();
        $img2->store('/public/images/original');
        $resized2=ImageIntervention::make($img2)->resize(1600,900);
        $resized2->save();
        Storage::put('/public/images/thumbnails/'.$renom2, $resized2);

        $intro= new Homeintro;
        $intro->bg1= $renom1;
        $intro->bg2= $renom2;
        $intro->texte= $request->texte;
        $intro->save();
        return redirect('homeintro');
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
        $modif=Homeintro::find($id);
        return view ('admin/edithomeintro', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeintroValidation $request, $id)
    {
        $modif=Homeintro::find($id);
        if ($request->bg1== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->bg1);
            Storage::delete('public/images/thumbnails/'.$modif->bg1);
            $img1=$request->bg1;
            $renom1=time().$img1->hashName();
            $img1->store('/public/images/original/');
            $resized1=ImageIntervention::make($img1)->resize(1600,900);
            $resized1->save();
            Storage::put('/public/images/thumbnails/'.$renom1, $resized1);
            $modif->bg1=$renom1;
        }

        if ($request->bg2== null){
        }else{      
            Storage::delete('public/images/original/'.$modif->bg2);
            Storage::delete('public/images/thumbnails/'.$modif->bg2);
            $img2=$request->bg2;
            $renom2=time().$img2->hashName();
            $img2->store('/public/images/original/');
            $resized2=ImageIntervention::make($img2)->resize(1600,900);
            $resized2->save();
            Storage::put('/public/images/thumbnails/'.$renom2, $resized2);
            $modif->bg2=$renom2;
        }
        $modif->texte= $request->texte;
        $modif->save();
        return redirect('homeintro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Homeintro::find($id);
        Storage::delete($del->bg1);
        Storage::delete($del->bg2);
        $del->delete();
        return redirect ('homeintro');
    }
}
