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
    Création de la partie about
</h4>

<form action="/homeabout/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un titre</label>
            <input type="text" name="titre" value="{{old('titre',$modif->titre)}}" class="form-control">
        </div>

        <div class="form-group">
                <label>Choisissez un texte 1</label>
                <textarea class="form-control" type="file" name="texte1" rows="3">{{old('texte1', $modif->texte1)}}</textarea>
            </div>
    
            <div class="form-group">
                <label>Choisissez un texte 2</label>
                <textarea class="form-control" type="file" name="texte2" rows="3">{{old('texte2',$modif->texte2)}}</textarea>
            </div>
    
            <div class="form-group">
                <label>Choisissez une video</label>
                <input type="text" name="video" value="{{old('video',$modif->video)}}" class="form-control">
            </div>
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
@stop