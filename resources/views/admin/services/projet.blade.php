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
    Création d'un service
    <i class="flaticon-023-flask"></i>
</h4>

<form action="/projets/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un titre</label>
            <input type="text" name="titre" value="{{old('titre')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Choisissez un texte</label>
            <textarea class="form-control" type="file" name="texte" rows="3">{{old('texte')}}</textarea>
        </div>
        <div class="form-group">
                <label>Choisissez l'icone</label>
                <select name="icone" value="{{old('icone')}}">
                    @foreach ($icone as $item)
                    <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Choisissez une photo</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
        <div class="box-body">
            {{-- Titre de page --}}
            <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                Les Projets
            </h4>
            {{-- box de modif --}}
            <div class="row">
            @foreach ($projet as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        
                        <span class="info-box-icon bg-muted"><i class="{{$item->icone->icone}}"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-number">{{$item->titre}}</span>
                            <span class="info-box-number">{{$item->texte}}</span>
                        </div>
                    </div>
                    <img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->image)}}
                    alt="">
                    <a href="/projets/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                    <form action="/services/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
                        @csrf
                        <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                    </form>
                </div>
                @endforeach
            </div>
            {{$projet->links()}}
        </div>
    </div>

@stop