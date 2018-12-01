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
use App\Testimonial;
use App\Client;
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
        $testimo=Testimonial::all();
        $client=Client::all();
        $coord=Coordonnee::all();
        $users=User::inRandomOrder()->take(2)->get();
        $center=User::first();
        $icone=Icone::all();
        $serv=Service::paginate(9);
        $service=Service::inRandomOrder()->take(3)->get();
        return view (('welcome'), compact('intro', 'about', 'promo', 'coord', 'users', 'center','icone','serv','testimo','client','service'));


    }
}
 