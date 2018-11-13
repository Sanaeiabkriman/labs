<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{url('css/app.css')}}">

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
    @include('./partials/home/intro')
    @include('./partials/home/cards-section')
    @include('./partials/home/about')
    @include('./partials/home/testimonials')
    @include('./partials/home/services')
	@include('./partials/home/team')
    @include('./partials/home/promotion')
    @include('./partials/contact/contact')
    @include('./partials/home/footer')
        
    <!--====== Javascripts & Jquery ======-->
	<script src="../../js/app.js"></script>
</body>
</html>
        
           