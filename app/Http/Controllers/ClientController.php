<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\ClientValidation;
use ImageIntervention;
use Storage;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client=Client::all();
        return view (('admin/homeclients'), compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ClientValidation $request)
    {
        $img=$request->file('photo');
        $renom=time().$img->hashName();
        $img->store('/public/images/original');
        $resized=ImageIntervention::make($img)->resize(60,60);
        $resized->save();
        Storage::put('/public/images/thumbnails/'.$renom, $resized);

        $client= new Client;
        $client->nom= $request->nom;
        $client->fonction= $request->fonction;
        $client->photo= $renom;
        $client->save();
        return redirect('homeclient');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Client::find($id);
        return view ('admin/editclient', compact('modif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientValidation $request, $id)
    {
        $modif=Client::find($id);
        if ($request->photo== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->photo);
            Storage::delete('public/images/thumbnails/'.$modif->photo);
            $img=$request->photo;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(60,60);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $modif->photo=$renom;
        }
        $modif->nom= $request->nom;
        $modif->fonction= $request->fonction;
        $modif->save();
        return redirect('homeclient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Client::find($id);
        Storage::delete($del->photo);
        $del->delete();
        return redirect ('homeclient');
    }
}
