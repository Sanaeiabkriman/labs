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
    Création d'un tag
    <i class="flaticon-023-flask"></i>
</h4>

<form action="/blog/tags/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un tag</label>
            <input type="text" name="tag" value="{{old('tag', $modif->tag)}}" class="form-control">
        </div>
        @can('isadmin')
        <div class="form-group">
            <label>Choisissez l'état'</label>
            <select name="etat" value="{{old('etat')}}">
                @foreach ($etat as $item)
                <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                @endforeach
            </select>
        </div>
        @endcan
        <button type="submit" class="btn btn-default btn-block btn-sm">Modifier</button>
    </div>
</form>
<br>
@stop