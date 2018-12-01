<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Etat;
use Auth;
use App\User;
use App\Http\Requests\TagValidation;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag=Tag::all();
        $etat=Etat::all();
        return view ('admin/blog/tags', compact('tag', 'etat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TagValidation $request)
    {
        $user=Auth::user();
        $tag=new Tag;
        $tag->tag =$request->tag;
        if (Auth::user()->role_id==1){
            $tag->etat_id=$request->etat;
    }else{
        $tag->etat_id=1;
    }
        $tag->user_id=$user->id;
        $tag->save();
        return redirect('blog/tags');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=Tag::find($id);
        $etat=Etat::all();
        return view('admin/blog/edittags', compact('modif', 'etat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagValidation $request, $id)
    {
        $user=Auth::user();
        $modif=Tag::find($id);
        $modif->tag=$request->tag;
        if ($user->role_id==1){
            $modif->etat_id=$request->etat;
    }else{
        $modif->etat_id=1;
    }        
        $modif->user_id=$user->id;
        $modif->save();
        return redirect('blog/tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Tag::find($id);
        $del->delete();
        return redirect ('blog/tags');
    }
}
