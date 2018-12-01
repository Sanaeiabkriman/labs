	<!-- services card section-->
	<div class="services-card-section spad" id="projet">
            <div class="container">
                <div class="row">
                    <!-- Single Card -->
                    @foreach ($projet as $item)
                    <div class="col-md-4 col-sm-6">
                        
                        <div class="sv-card">
                            <div class="card-img">
                                <img src="{{Storage::url("public/images/thumbnails/".$item->image)}}" alt="">
                            </div>
                            <div class="card-text">
                                <h2>{{$item->titre}}</h2>
                                <p>{{$item->texte}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
               
                </div>
            </div>
        </div>
        <!-- services card section end-->