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
    Modifier l'icone
</h4>

<form action="/services/icones/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
            <div class="form-group">
                <div class="col-xs-4">
                        <label>Nom de l'icone</label>
                    <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" class="form-control">
                        <label>Non de la class</label>
                    <input type="text" name="icone" value="{{old('icone',$modif->icone)}}" class="form-control">
                </div>
            </div>
    
            <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
        </div>

</form>
<br>

@stop