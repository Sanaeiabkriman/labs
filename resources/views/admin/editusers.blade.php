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
    Modifier un utilisateur
</h4>

<form action="/user/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" value="{{old('name',$modif->name)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Mail</label>
            <input type="text" name="email" value="{{old('email',$modif->email)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" value="{{old('password',$modif->password)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Fonction</label>
            <input type="text" name="fonction" value="{{old('fonction',$modif->fonction)}}" class="form-control">
        </div>
        <div class="form-group">
                <label>Choisissez le role</label>
                <select name="role" value="{{old('role')}}">
                    @foreach ($role as $item)
                    <option value="{{$item->id}}">{{$item->role}}{{old($item->id)}}</option>
                    @endforeach
            </select>
            </div>
        <div class="form-group">
            <label>Photo</label>
            <input type="file" name="photo" value="{{old('photo',$modif->photo)}}" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Modifier</button>
    </div>

</form>

@stop