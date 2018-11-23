<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use App\Mail\News;
use Illuminate\Support\Facades\Mail;
use Validator;
use Session;
class NewsletterController extends Controller
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
            'mail'=>'required|email|max:60',
            ]);
            
            if ($validator->fails()) {
                return redirect('/#newsletter')
                            ->withErrors($validator)
                            ->withInput();
            }
        
        $mail= new Newsletter;
        $mail->mail =$request->mail;
        $mail->save();
        $mailable = new News($mail);
        Mail::to('iabkriman.sanae@gmail.com')->send($mailable);
        return redirect('/#newsletter')->with('success','Vous recevrez bientôt notre newsletter !');
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
