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
            <li class="active p-1 px-2"> <a href="#activity" data-toggle="tab" aria-expanded="true"> Articles </a></li>
            <li class="p-1 px-2"><a href="#settings" data-toggle="tab" aria-expanded="false"> Ajouter un article </a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <!-- Post -->
                @foreach ($article as $item)
                    
                <div class="post">
                    <div class="user-block">
                        <img style=" height:150px;width:auto;" src={{Storage::url("public/images/thumbnails/".$item->image)}}
                        alt="">
                        <p href="#">{{$item->titre}}</p>
                        <p>{{$item->texte}}</p>
                        <p>{{$item->user->name}}</p>
                        
                    </div>
                </div>
                <!-- /.post -->
                @endforeach
                {{-- @foreach ($article->tag as $item)
                    <p>{{$item->tag}}</p>
                @endforeach --}}
            </div>
            {{-- ---------------------------------------------------------- ----------------------- --}}
            <!-- /.tab-pane -->

            <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="/blog/article/create" method="post" enctype="multipart/form-data"
                    role="form">
                    @csrf
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Titre</label>
                        <div class="col-sm-10">
                            <input type="text" name="titre" value="{{old('titre')}}"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Texte</label>
                        <div class="col-sm-10">
                                <input type="text" name="texte" value="{{old('texte')}}"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tags</label>
                        @foreach ($tag as $item)
                        <input type="checkbox" name="tag[]" value="{{old('tag[]')}}"> {{$item->tag}}
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
