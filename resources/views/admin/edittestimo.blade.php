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
    Modifier le temoignage
</h4>

<form action="/hometestimonials/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Tapez le temoignage</label>
            <input type="text" name="text" value="{{old('text',$modif->text )}}" class="form-control">
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

@stop