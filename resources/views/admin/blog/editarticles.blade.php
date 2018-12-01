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
<div class="tab-pane" id="settings">
    <form class="form-horizontal" action="/blog/article/update/{{$modif->id}}" method="post" enctype="multipart/form-data" role="form">
        @csrf
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Titre</label>
            <div class="col-sm-10">
                <input type="text" name="titre" value="{{old('titre', $modif->titre)}}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                <input type="file" name="image" id="exampleInputFile">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Texte</label>
            <div class="col-sm-10">
                <textarea type="text" name="texte" class="form-control">{{old('texte',$modif->texte)}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tags</label>
            @foreach ($tag as $item)
            <input type="checkbox" name="tag[]" value="{{$item->id}}"> {{$item->tag}}
            @endforeach
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <label for="inputSkills" class="col-sm-2 control-label">Categorie</label>
                <select name="categorie" value="{{old('categorie')}}">
                    @foreach ($cat as $item)
                    <option value="{{$item->id}}">{{$item->categorie}}{{old($item->id)}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-light">Submit</button>
            </div>
        </div>
    </form>
</div>
@stop
