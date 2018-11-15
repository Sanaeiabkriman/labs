<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Client;
use App\Http\Requests\TestimoValidation;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimo= Testimonial::all();
        $client= Client::all();
        return view (('admin/hometestimo'), compact('testimo', 'client'));

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TestimoValidation $request)
    {
        $testimo= new Testimonial;
        $testimo->text= $request->text;
        $testimo->client_id=$request->client;
        $testimo->save();
        return redirect('hometestimonials');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Testimonial::find($id);
        $client=Client::all();
        return view ('admin/edittestimo', compact('modif','client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestimoValidation $request, $id)
    {
        $modif=Testimonial::find($id);
        $modif->text= $request->text;
        $modif->client_id= $request->client;
        $modif->save();
        return redirect('hometestimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Testimonial::find($id);
        $del->delete();
        return redirect ('hometestimonials');
    }
}
