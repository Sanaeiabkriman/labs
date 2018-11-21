@extends('adminlte::page')

@section('title', 'AdminLTE')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h4 style="background-color:#3c8dbc; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
    Création d'un nouvel utilisateur
</h4>

<form action="/user/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Mail</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Fonction</label>
            <input type="text" name="fonction" value="{{old('fonction')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez une bio</label>
            <textarea class="form-control" type="file" name="bio" rows="3">{{old('bio')}}</textarea>
        </div>
        <div class="form-group">
                <label>Choisissez le role</label>
                <select name="role" value="{{old('role')}}">
                    @foreach ($roles as $item)
                    <option value="{{$item->id}}">{{$item->role}}{{old($item->id)}}</option>
                    @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo" value="{{old('photo')}}" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Utilisateurs
        </h4>
        {{-- box de modif --}}
        <div class="media">
            <div class="media-body">
                <div class="clearfix">

                    @foreach ($users as $item)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <p>{{$item->name}}</p>
                            <p>{{$item->email}}</p>
                            <p>{{$item->password}}</p>
                            <p>{{$item->fonction}}</p>

                            <img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->photo)}}
                                alt="">

                            <!-- /.info-box-content -->
                            <a href="/user/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                            <form action="/user/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
                                @csrf
                                <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                            </form>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

@stop