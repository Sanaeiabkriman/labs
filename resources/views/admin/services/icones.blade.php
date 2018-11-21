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
    Création d'une nouvelle icone
</h4>

<form action="/services/icones/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <div class="col-xs-4">
                    <label>Nom de l'icone</label>
                <input type="text" name="nom" value="{{old('nom')}}" class="form-control">
                    <label>Non de la class</label>
                <input type="text" name="icone" value="{{old('icone')}}" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>
</form>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Textes et vidéo
        </h4>
        {{-- box de modif --}}
        <div class="row">
        @foreach ($icone as $item)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-muted"><i class="{{$item->icone}}"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-number">{{$item->nom}}</span>
                        <span class="info-box-number">{{$item->icone}}</span>
                    </div>
                </div>
                <a href="/services/icones/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                <form action="/services/icones/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
                    @csrf
                    <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

@stop
