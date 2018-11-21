<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepromo;
use App\Homeintro;
use App\Homeabout;
use App\Coordonnee;
use App\Service;
use App\Icone;
use App\User;
use Storage;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro=Homeintro::all();
        $about=Homeabout::all();
        $promo=Homepromo::all();
        $coord=Coordonnee::all();
        $users=User::inRandomOrder()->take(2)->get();
        $center=User::first();
        $icone=Icone::all();
        $serv=Service::paginate(9);
        return view (('welcome'), compact('intro', 'about', 'promo', 'coord', 'users', 'center','icone','serv'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
