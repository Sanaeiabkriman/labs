<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Icone;
use App\Http\Requests\ServiceValidation;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serv=Service::paginate(6);
        $icone=Icone::all();
        return view('admin/services/serv', compact('serv','icone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ServiceValidation $request)
    {
        $serv=new Service;
        $serv->titre=$request->titre;
        $serv->texte=$request->texte;
        $serv->icone_id=$request->icone;
        $serv->save();
        return redirect('servicesadmin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Service::find($id);
        $icone=Icone::all();
        return view ('admin/services/editserv', compact('modif','icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceValidation $request, $id)
    {
        $modif=Service::find($id);
        $modif->titre=$request->titre;
        $modif->texte=$request->texte;
        $modif->icone_id=$request->icone;
        $modif->save();
        return redirect('servicesadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Service::find($id);
        $del->delete();
        return redirect ('servicesadmin');
    }
}
