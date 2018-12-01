<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Storage;
use ImageIntervention;
use App\Http\Requests\UserValidation;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $roles=Role::all();
        return view('admin/users', compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UserValidation $request)
    {
        $img=$request->file('photo');
        $renom=time().$img->hashName();
        $img->store('/public/images/original');
        $resized=ImageIntervention::make($img)->resize(360,448);
        $resized->save();
        Storage::put('/public/images/thumbnails/'.$renom, $resized);

        $users= new User;
        $users->name= $request->name;
        $users->email= $request->email;
        $users->password= bcrypt($request->password);
        $users->role_id=$request->role;
        $users->photo= $renom;
        $users->bio= $request->bio;
        $users->fonction= $request->fonction;
        $users->save();
        return redirect('user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modif=User::find($id);
        $role=Role::all();
        return view ('admin/editusers', compact('modif','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserValidation $request, $id)
    {
        $modif=User::find($id);
        if ($request->photo== null){   
        }else{      
            Storage::delete('public/images/original/'.$modif->photo);
            Storage::delete('public/images/thumbnails/'.$modif->photo);
            $img=$request->photo;
            $renom=time().$img->hashName();
            $img->store('/public/images/original/');
            $resized=ImageIntervention::make($img)->resize(360,448);
            $resized->save();
            Storage::put('/public/images/thumbnails/'.$renom, $resized);
            $modif->photo=$renom;
        }
        $modif->name=$request->name;
        $modif->email=$request->email;
        $modif->password=bcrypt($request->password);
        $modif->role_id=$request->role;
        $modif->bio= $request->bio;
        $modif->fonction= $request->fonction;
        $modif->save();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=User::find($id);
        Storage::delete($del->photo);
        $del->delete();
        return redirect ('user');
    }
}
