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
    Création de la partie contact section coordonnées
</h4>

<form action="/contact/coordonnee/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un titre1</label>
            <input type="text" name="titre1" value="{{old('titre1')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un texte</label>
            <textarea class="form-control" type="file" name="texte" rows="3">{{old('texte')}}</textarea>
        </div>
        <div class="form-group">
            <label>Choisissez un titre2</label>
            <input type="text" name="titre2" value="{{old('titre2')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez une adresse</label>
            <input type="text" name="adresse" value="{{old('adresse')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un numero</label>
            <input type="text" name="num" value="{{old('num')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un mail</label>
            <input type="text" name="mail" value="{{old('mail')}}" class="form-control">
        </div>

    
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Textes et vidéo
        </h4>
        {{-- box de modif --}}
        @foreach ($coord as $item)
        <div class="media">
            <div class="media-body">
                <div class="clearfix">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <p>{{$item->titre1}}</p>
                            <p>{{$item->texte}}</p>
                            <p>{{$item->titre2}}</p>
                            <p>{{$item->adresse}}</p>
                            <p>{{$item->num}}</p>
                            <p>{{$item->mail}}</p>

                            <!-- /.info-box-content -->
                            <a href="/contact/coordonnee/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                            <form action="/contact/coordonnee/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
                                @csrf
                                <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop