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
    Modification de l'intro
</h4>

<form action="/admin/homeintro/create" method="post" enctype="multipart/form-data" role="form">
    @csrf
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Choisissez un titre</h3>
        </div>
        <div class="box-body">
            <input type="text" name="texte" value="{{old('texte')}}" id="exampleInputFile">
        </div>

        <div class="box-header">
            <h3 class="box-title">Choisissez une image 1</h3>
        </div>
        <div class="box-body">
            <input type="file" name="bg1" id="exampleInputFile">
        </div>

        <div class="box-header">
            <h3 class="box-title">Choisissez une image 2</h3>
        </div>
        <div class="box-body">
            <input type="file" name="bg2" id="exampleInputFile">
        </div>
        <button type="submit" class="btn btn-default btn-block btn-sm">Ajouter</button>
    </div>

</form>
<br>

<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Images et texte
        </h4>
        {{-- box de modif --}}
        <div class="media">
            <div class="media-body">
                <div class="clearfix">

                    @foreach ($intro as $item)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <p>{{$item->texte}}</p>
                            <img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->bg1)}}
                                alt="">
                            <img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->bg2)}}
                                alt="">
                            <!-- /.info-box-content -->
                            <a href="/edithomeintro/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                            <form action="/admin/homeintro/delete/{{$item->id}}" method="POST" style="padding: 7px 10px; margin-top: 0;">
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
