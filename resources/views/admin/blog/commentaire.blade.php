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



<div class="box box-solid">
    <div class="box-body">
        {{-- Titre de page --}}
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Les commmentaires a valider
        </h4>
        {{-- box de modif --}}
        <br>

        <br>

        <table class="table table-condensed">
            <tbody>
                <tr style="background-color:#f7f7f7">
                    <th>Article</th>
                    <th>Nom</th>
                    <th>Mail</th>
                    <th>Message</th>
                    <th>Etat</th>
                    <th>Change</th>
                    <th>Change</th>


                </tr>
                @foreach ($comnonvalide as $item)
                <tr>
                    <th>{{$item->article_id}}</th>
                    <th>{{$item->nom}}</th>
                    <th>{{$item->email}}</th>
                    <th>{{$item->texte}}</th>
                    <th>{{$item->etat->nom}}</th>

                    <th style="width: 40px">
                        <form action="/validercom/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-block btn-default btn-xs">Valider</button>
                        </form>
                    </th>
                    <th style="width: 40px">
                        <form action="/invalidercom/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-block btn-default btn-xs">Invalider</button>
                        </form>
                    </th>
                    <th style="width: 40px">
                        <form action="/commentaires/delete/{{$item->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-default">Del</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <hr>
        <br>
        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
            Les commmentaires validés
        </h4>
        <br>
        <br>
        <table class="table table-condensed">
            <tbody>
                <tr style="background-color:#f7f7f7">
                    <th>Article</th>
                    <th>Nom</th>
                    <th>Mail</th>
                    <th>Message</th>
                    <th>Etat</th>
                    <th>Change</th>
                    <th>Change</th>
                </tr>

                @foreach ($comvalide as $item)
                <tr>
                    <th>{{$item->article_id}}</th>
                    <th>{{$item->nom}}</th>
                    <th>{{$item->email}}</th>
                    <th>{{$item->texte}}</th>
                    <th>{{$item->etat->nom}}</th>
                    <th style="width: 40px">
                            <form action="/validercom/{{$item->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block btn-default btn-xs">Valider</button>
                            </form>
                        </th>
                        <th style="width: 40px">
                            <form action="/invalidercom/{{$item->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block btn-default btn-xs">Invalider</button>
                            </form>
                        </th>
                        <th style="width: 40px">
                            <form action="/commentaires/delete/{{$item->id}}" method="POST">
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
