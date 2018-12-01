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
   Modification d'une categorie
</h4>

<form action="/blog/cat/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Modifiez la catégorie</label>
            <input type="text" name="categorie" value="{{old('categorie', $modif->categorie)}}" class="form-control">
        </div>
        @can('isadmin')

        <div class="form-group">
            <label>Choisissez l'etat'</label>
            <select name="etat" value="{{old('etat')}}">
                @foreach ($etat as $item)
                <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                @endforeach
            </select>
        </div>
@endcan
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>
</form>

@stop