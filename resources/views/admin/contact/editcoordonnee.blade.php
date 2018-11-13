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
    Modification de la partie promo
</h4>

<form action="/contact/coordonnee/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un titre1</label>
            <input type="text" name="titre1" value="{{old('titre1',$modif->titre1)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un texte</label>
            <textarea class="form-control" type="file" name="texte" rows="3">{{old('texte',$modif->texte)}}</textarea>
        </div>
        <div class="form-group">
            <label>Choisissez un titre2</label>
            <input type="text" name="titre2" value="{{old('titre2',$modif->titre2)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez une adresse</label>
            <input type="text" name="adresse" value="{{old('adresse',$modif->adresse)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un numero</label>
            <input type="text" name="num" value="{{old('num',$modif->num)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un mail</label>
            <input type="text" name="mail" value="{{old('mail',$modif->mail)}}" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>

@stop