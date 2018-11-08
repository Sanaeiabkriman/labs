	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="/storage/images/thumbnails/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="/storage/images/thumbnails/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="home">Home</a></li>
				<li><a href="services">Services</a></li>
				<li><a href="blog">Blog</a></li>
				<li><a href="contact">Contact</a></li>
				<li><a href="elements">Elements</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Intro Section -->
	@foreach ($intro as $item)
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="/storage/images/thumbnails/big-logo.png" alt="">
				<p>Get your freebie template now!{{$item->texte}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg={{Storage::url("public/images/thumbnails/".$item->bg1)}}></div>
			<div class="item  hero-item" data-bg={{Storage::url("public/images/thumbnails/".$item->bg2)}}></div>
		</div>
	</div>
	@endforeach
	<!-- Intro Section -->


	






