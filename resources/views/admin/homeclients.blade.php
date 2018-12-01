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


<form action="/homeclient/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un nom</label>
            <input type="text" name="nom" value="{{old('nom')}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Choisissez une fonction</label>
            <input type="text" name="fonction" value="{{old('fonction')}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Choisissez une photo</label>
            <input type="file" name="photo" class="form-control">
        </div>


        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>



<table class="table table-condensed">
    <tbody>
        @foreach ($client as $item)
        <tr>
            <th style="width: 10px">{{$item->id}}</th>
            <th><img style=" height:60px; width:60px;" src={{Storage::url("public/images/thumbnails/".$item->photo)}}
                    alt="">
            </th>

            <th>{{$item->nom}}</th>
            <th>{{$item->fonction}}</th>
            <th style="width: 40px">
                <a href="/homeclient/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
            </th>
            <th style="width: 40px">
                <form action="/homeclient/delete/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-default">Del</button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
