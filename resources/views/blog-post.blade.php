<!DOCTYPE html>
<html lang="en">

<head>
    <title>Labs - Design Studio</title>
    <meta charset="UTF-8">
    <meta name="description" content="Labs - Design Studio">
    <meta name="keywords" content="lab, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <!-- Favicon -->
    <link href="/storage/images/thumbnails/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
  
     --}}


    <!-- Header section -->
    <header class="header-section">
        <div class="logo">
            <img src="/storage/images/thumbnails/logo.png" alt=""><!-- Logo -->
        </div>
        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">
                <li><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li class="active"><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header section end -->


    <!-- Page header -->
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>Blog</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->


    <!-- page section -->
    <div class="page-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 blog-posts">
                    <!-- Single Post -->
                    <div class="single-post">
                        <div class="post-thumbnail">
                            <img src="{{Storage::url("public/images/thumbnails/".$article->image)}}" alt="">
                            <div class="post-date">
                                <h2>{{$article->created_at->format('D')}}</h2>
                                <h3>{{$article->created_at->format('M y')}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$article->titre}}</h2>
                            <div class="post-meta">
                                <a href="">{{$article->categorie->categorie}}</a>
                                <a href="">
                                    @foreach ($article->tag as $tags)
                                    {{$tags->tag}},
                                    @endforeach</a>
                                <a href="">{{count($comarticle)}} Comments</a>
                            </div>
                            <p>{{$article->texte}}</p>
                        </div>
                        <!-- Post Author -->
                        <div class="author">
                            <div class="avatar">
                                <img src="/storage/images/thumbnails/avatar/03.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h2>{{$article->user->name}}, <span>Author</span></h2>
                                <p>{{$article->user->bio}}. </p>
                            </div>
                        </div>
                        <!-- Post Comments -->
                        <div class="comments">
                            <h2>{{count($comarticle)}} Comments</h2>
                            @foreach ($article->com as $item)
                            @if($item->etat_id==2)
                            <ul class="comment-list">
                                <li>
                                    <div class="avatar">
                                        <img src="/storage/images/thumbnails/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3>{{$item->nom}}| {{$item->created_at->format('Dmy')}}</h3>
                                        <p>{{$item->texte}} </p>
                                    </div>
                                </li>
                            </ul>
                            @endif
                            @endforeach
                        </div>
                        <!-- Commert Form -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row" id="com">
                            <div class="col-md-9 comment-from">
                                <h2>Leave a comment</h2>
                                <form action="/commentaire/{{$article->id}}" method="post" class="form-class">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="nom" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" placeholder="Your email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input style="display:none" type="text" name="num" value={{$article->id}}
                                                placeholder="Subject">
                                            <textarea name="texte" placeholder="Message"></textarea>
                                            <button class="site-btn">send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar area -->
                <div class="col-md-4 col-sm-5 sidebar">
                    <!-- Single widget -->
                    <div class="widget-item">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <ul>
                                @foreach ($cat as $item)
                                @if($item->etat_id==2)
                                <li><a href="/catsearch/{{$item->id}}">{{$item->categorie}}</a></li>
                                @endif
                                @endforeach

                            </ul>
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
                            @foreach ($tag as $item)
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
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut
                                hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.
                                Sed lacinia turpis at ultricies vestibulum.</p>
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


    <!-- newsletter section -->
	@include('partials/service/newsletter')
    <!-- newsletter section end-->


    <!-- Footer section -->
    <footer class="footer-section">
        <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
    </footer>
    <!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->

    <script src="../../js/app.js"></script>
</body>

</html>
