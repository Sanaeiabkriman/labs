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
    Création d'es images instagram
</h4>

<form action="/insta/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <label>Choisissez une image</label>
        <div class="form-group">
            <input type="file" name="images">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>
</form>

<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Les Images
        </h4>
        <table class="table table-condensed">
            <tbody>
                @foreach ($insta as $item)
                <tr>
                  <th style="width: 10px">{{$item->id}}</th>
                  <th><img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->images)}}></th>    
                    <th style="width: 40px">
                        <a href="/insta/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                    </th>
                    <th style="width: 40px">
                        <form action="/insta/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default">Del</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@stop
