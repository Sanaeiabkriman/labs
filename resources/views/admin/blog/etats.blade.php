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
    Création d'un nouvel etat
</h4>

<form action="/blog/etats/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Nouvel etat</label>
            <input type="text" name="nom" value="{{old('nom')}}" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Etats
        </h4>
        {{-- box de modif --}}
        <div class="media">
            <div class="media-body">
                <div class="clearfix">

                    @foreach ($etats as $item)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <p>{{$item->nom}}</p>
                     
                            <!-- /.info-box-content -->
                            <a href="/blog/etats/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                            <form action="/blog/etats/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
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