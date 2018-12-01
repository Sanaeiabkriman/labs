@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@can( 'isadmin')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{$article}}</h3>
  
                <p>Articles à valider</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/blog/article" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-red">
              <div class="inner">
                <h3>{{$commentaire}}</h3>
  
                <p>Commentaires à valider</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/commentaires" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
           
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- /.info-box -->
          <div class="small-box bg-green">
              <div class="inner">
                <h3>{{$tag}}</h3>
  
                <p>Tags à valider</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/blog/tags" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <!-- /.info-box -->
          <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{$categorie}}</h3>
  
                <p>Categories à valider</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/blog/cat" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- /.col -->
      </div>
      @endcan
@stop