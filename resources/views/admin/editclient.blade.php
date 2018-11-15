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
    Modification du client
</h4>

<form action="/homeclient/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Choisissez un nom</h3>
        </div>
        <div class="box-body">
            <input type="text" name="nom" value="{{old('nom',$modif->nom)}}" id="exampleInputFile">
        </div>

        <div class="box-header">
            <h3 class="box-title">Choisissez une fonction</h3>
        </div>
        <div class="box-body">
            <input type="text" name="fonction" value="{{old('fonction',$modif->fonction)}}" id="exampleInputFile">
        </div>

        <div class="box-header">
            <h3 class="box-title">Choisissez une image</h3>
        </div>
        <div class="box-body">
            <input type="file" name="photo" value="{{$modif->photo}}" id="exampleInputFile">
        </div>


        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>

@stop