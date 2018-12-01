<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->
	<link href="/storage/images/thumbnails/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    
@include('partials/blog/header')
<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                
                @foreach ($articletag as $item)
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src={{Storage::url("public/images/thumbnails/".$item->image)}} alt="">
                        <div class="post-date">
                            <h2>{{$item->created_at->format('d')}}</h2>
                            <h3>{{$item->created_at->format('m Y')}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$item->titre}}</h2>
                        <div class="post-meta">
                            <a href="">{{$item->categorie->categorie}}
                                @foreach ($item->tag as $itemtags)
                                {{$itemtags->tag}},
                                @endforeach
                            </a>

                            <a href="">{{$comval}} comments</a>
                        </div>
                        <p>{{$item->textepreview}}</p>
                        <a href="/blog-post/{{$item->id}}" class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="/search" method="post" class="search-form">
                        @csrf
                        <input type="text" name="search" placeholder="Search">
                        <button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                            @foreach ($cat as $item)
                            @if($item->etat_id==2)
                            <li><a href="/catsearch/{{$item->id}}">{{$item->categorie}}</a></li>
                            @endif
                            @endforeach

                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Instagram</h2>
                    @foreach ($insta as $item)
                    <ul class="instagram">
                        <li><img src={{Storage::url("public/images/thumbnails/".$item->images)}} alt=""></li>
                    </ul>
                    @endforeach
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                            @foreach ($tags as $item)
                            @if($item->etat_id==2)
                            <li>
                                <a href="/tagsearch/{{$item->id}}">{{$item->tag}}</a>
                            </li>
                            @endif
                            @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit
                            metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia
                            turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="/storage/images/thumbnails/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->







	<!--====== Javascripts & Jquery ======-->

	<script src="../../js/app.js"></script>
</body>
</html>

