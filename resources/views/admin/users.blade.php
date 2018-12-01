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

@can('isadmin')
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
@endcan

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Les utilisateurs
        </h4>
        {{-- box de modif --}}

        <table class="table table-condensed">
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <th style="width: 10px">{{$item->id}}</th>
                    <th><img style=" height:60px; width:60px;" src={{Storage::url("public/images/thumbnails/".$item->photo)}}
                            alt="">
                    </th>
                    <th>{{$item->name}}</th>
                    <th>{{$item->role->role}}</th>
                    <th>{{$item->email}}</th>
                    {{-- <th>{{$item->password}}</th> --}}
                    <th>{{$item->fonction}}</th>
                    <th>{{$item->bio}}</th>
                    @can('isadmin')
                    <th style="width: 40px">
                        <a href="/user/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                    </th>
                    <th style="width: 40px">
                        <form action="/user/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default">Del</button>
                        </form>
                    </th>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
