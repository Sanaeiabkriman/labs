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
<h4 style="background-color:#3c8dbc; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;"><i class="flaticon-023-flask"></i>
    Editer un service
    <i class="flaticon-023-flask"></i>
</h4>

<form action="/services/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un titre</label>
            <input type="text" name="titre" value="{{old('titre', $modif->titre)}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un texte</label>
            <textarea class="form-control" type="file" name="texte" rows="3">{{old('texte',$modif->texte)}}</textarea>
        </div>
        <div class="form-group">
                <label>Choisissez l'icone</label>
                <select name="icone" value="{{old('icone')}}">
                    @foreach ($icone as $item)
                    <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                    @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>
</form>
<br>
@stop