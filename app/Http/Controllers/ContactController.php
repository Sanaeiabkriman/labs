<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\MessageContact;
use Illuminate\Support\Facades\Mail;
use Validator;
use Session;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:50',
            'email'=>'required|email|max:60',
            'sujet'=>'required|max:50',
            'msg'=>'required',
            ]);
            
        if ($validator->fails()) {
            return redirect('/#contacts')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $contact= New Contact;
        $contact->nom =$request->nom;
        $contact->email =$request->email;
        $contact->msg =$request->msg;
        $contact->sujet =$request->sujet;
        $contact->save();
        $mailable = new MessageContact($contact);
        Mail::to('iabkriman.sanae@gmail.com')->send($mailable);
        return redirect('/#contacts')->with('success','Votre message a bien été envoyé!');
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
