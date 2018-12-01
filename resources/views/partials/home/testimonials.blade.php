    
        <!-- Testimonial section -->
        <div class="testimonial-section pb100" id="testimo">
                <div class="test-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-4">
                            <div class="section-title left">
                                <h2>What our clients say</h2>
                            </div>
                            <div class="owl-carousel" id="testimonial-slide">
                                    @foreach ($testimo as $item)
                                <!-- single testimonial -->
                                
                                <div class="testimonial">
                                    <span>‘​‌‘​‌</span>
                                    <p>{{$item->text}}</p>

                                    <div class="client-info">
                                        <div class="avatar">
                                            <img src="{{Storage::url("public/images/thumbnails/".$item->client->photo)}}" alt="">
                                        </div>
                                        <div class="client-name">
                                            <h2>{{$item->client->nom}}</h2>
                                            <p>{{$item->client->fonction}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial section end-->
        
