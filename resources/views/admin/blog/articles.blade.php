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

<div class="col-md-9">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs p-2">
            <li class="active p-1 px-2"> <a href="#activity" data-toggle="tab" aria-expanded="true"> Validations </a></li>
            <li class="p-1 px-2"><a href="#timeline" data-toggle="tab" aria-expanded="false">Articles</a></li>
            <li class="p-1 px-2"><a href="#settings" data-toggle="tab" aria-expanded="false"> Ajouter un article </a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="activity">
                    <div class="box box-solid">
                            <div class="box-body">
                                {{-- Titre de page --}}
                                <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                                    Les Validation d'articles
                                </h4>
                                {{-- box de modif --}}
                                @can('isadmin')
                                <table class="table table-condensed">
                                    <tbody>
                                    @foreach ($article as $item)
                                    <tr>
                                      <th style="width: 10px">{{$item->id}}</th>
                                      <th>{{$item->user->name}}</th>
                                      <th>{{$item->created_at->format('D d M Y')}}</th>
                                      <th>{{$item->titre}}</th>
                                      <th>{{$item->etat->nom}}</th>
                                      <th style="width: 40px">
                                        <form action="/validerarticle/{{$item->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-default btn-xs">Valider</button>
                                        </form>                                        
                                    </th>
                                    <th style="width: 40px">
                                            <form action="/invaliderarticle/{{$item->id}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-block btn-default btn-xs">Invalider</button>
                                            </form>                                        
                                        </th>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                @endcan
                            </div>
                        </div>
               
            </div>
            {{-- ---------------------------------------------------------------------------------------------- --}}

                    <div class="tab-pane" id="timeline">
                        @foreach ($article as $item)
                        @can('ismine', $item)
                            
                            <div class="post">
                                <p href="#">{{$item->titre}}</p>
                                {{-- <img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->image)}}> --}}
                                <div class="user-block">
                                    Auteur: <span>{{$item->user->name}}</span>
                                    <br>
                                    Date: <span>{{$item->created_at->format('D d M Y')}}</span>
                                    <br>
                                    {{-- Tags: @foreach ($item->tag as $tags)
                                    <span>{{$tags->tag}}</span>,
                                    @endforeach
                                    <br>
                                    Categorie: <span>{{$item->categorie->categorie}}</span>
                                    <br> --}}
                                    {{-- <br> --}}
                                    <p>{{$item->textepreview}}</p>
                                </div>
                                <a href="/blog/article/edit/{{$item->id}}" type="submit" class="btn btn-block btn-default btn-xs">Editer</a>
                                <form action="/blog/article/delete/{{$item->id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-default btn-xs">supprimer</button>
                                </form>
                            </div>
                            <!-- /.post -->
                        @endcan
                        @endforeach
                    </div>

            {{-- ------------------------------------------------------------------------------------------------------- --}}
            
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="/blog/article/create" method="post" enctype="multipart/form-data"
                    role="form">
                    @csrf
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Titre</label>
                        <div class="col-sm-10">
                            <input type="text" name="titre" value="{{old('titre')}}" class="form-control">
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
                            <textarea type="text" name="texte" class="form-control">{{old('texte')}}</textarea>
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
            <!-- /.tab-pane -->
            
            
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
    
</div>

@stop
