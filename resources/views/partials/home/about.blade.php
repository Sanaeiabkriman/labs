		<!-- About contant -->
		<div class="about-contant">
                <div class="container">
                @foreach ($about as $item)
                    <div class="section-title">
                        <h2>{!!$item->titre!!}</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{$item->texte1}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{$item->texte2}}</p>
                        </div>
                    </div>
                    <div class="text-center mt60">
                        <a href="" class="site-btn">Browse</a>
                    </div>
                    <!-- popup video -->
                    <div class="intro-video">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <img src="/storage/images/thumbnails/video.jpg" alt="">
                                <a href="{{$item->video}}" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- About section end -->
    
