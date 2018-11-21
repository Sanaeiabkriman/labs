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
    Création d'un tag
</h4>

<form action="/blog/tags/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Choisissez un tag</label>
            <input type="text" name="tag" value="{{old('tag')}}" class="form-control">
        </div>

        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>
</form>

<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Les tags
        </h4>
        {{-- box de modif --}}
  
        <table class="table table-condensed">
            <tbody>
            @foreach ($tag as $item)
            <tr>
              <th style="width: 10px">{{$item->id}}</th>
              <th>{{$item->tag}}</th>
              <th style="width: 40px">
                    <a href="/blog/tags/edit/{{$item->id}}" type="submit" class="btn btn-default">Edit</a>
                </th>
              <th style="width: 40px">
                    <form action="/blog/tags/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
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