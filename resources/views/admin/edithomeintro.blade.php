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
    Modification de l'intro
</h4>

<form action="/homeintro/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Choisissez un titre</h3>
        </div>
        <div class="box-body">
            <input type="text" name="texte" value="{{old('texte',$modif->texte)}}" id="exampleInputFile">
        </div>

        <div class="box-header">
            <h3 class="box-title">Choisissez une image 1</h3>
        </div>
        <div class="box-body">
            <input type="file" name="bg1" value="{{$modif->bg1}}" id="exampleInputFile">
        </div>

        <div class="box-header">
            <h3 class="box-title">Choisissez une image 2</h3>
        </div>
        <div class="box-body">
            <input type="file" name="bg2" value="{{$modif->bg2}}" id="exampleInputFile">
        </div>
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>

@stop