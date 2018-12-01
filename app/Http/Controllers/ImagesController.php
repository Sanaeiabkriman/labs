<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use ImageIntervention;
use Storage;
class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insta=Image::all();
        return view ('/admin/blog/insta', compact('insta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $img=$request->file('images');
        $renom=time().$img->hashName();
        $img->store('/public/images/original');
        $resized=ImageIntervention::make($img)->resize(109,108);
        $resized->save();
        Storage::put('/public/images/thumbnails/'.$renom, $resized);

        $insta=new Image;
        $insta->images=$request->images;
        $insta->images=$renom;
        $insta->save();
        return redirect('/insta');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Image::find($id);
        return view('admin/blog/editinsta', compact('modif'));
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
        $modif=Image::find($id);
        if ($request->images== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->images);
            Storage::delete('public/images/thumbnails/'.$modif->images);
            $img=$request->images;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(109,108);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $modif->images=$renom;
        }

        $modif->images=$renom;
        $modif->save();
        return redirect('/insta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Image::find($id);
        Storage::delete('/public/images/thumbnails/'.$del->images);
        $del->delete();
        return redirect ('/insta');
    }
}
