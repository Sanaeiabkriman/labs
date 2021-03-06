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

<form action="/role/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="form-group">
            <label>Editer le role</label>
            <input type="text" name="role" value="{{old('role',$modif->role )}}" class="form-control">
        </div>
    
    
        <button type="submit" class="btn btn-default btn-block btn-sm">Modifier</button>
    </div>

</form>
<br>

@stop