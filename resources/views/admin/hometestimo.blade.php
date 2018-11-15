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
    Création d'un client
</h4>

<form action="/hometestimonials/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Tapez le temoignage</label>
            <input type="text" name="text" value="{{old('text')}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Choisissez le client</label>
            <select name="client" value="{{old('client')}}">
                @foreach ($client as $item)
                <option value="{{$item->id}}">{{$item->nom}}{{old($item->id)}}</option>
                @endforeach
        </select>
        </div>
    
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Temoignages
        </h4>
        {{-- box de modif --}}
        <div class="media">
            <div class="media-body">
                <div class="clearfix">

                    @foreach ($testimo as $item)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <p>{{$item->text}}</p>
                            {{-- <p>{{$item->client->nom}}</p> --}}
                     
                            <!-- /.info-box-content -->
                            <a href="/hometestimonials/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                            <form action="/hometestimonials/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
                                @csrf
                                <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                            </form>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

@stop