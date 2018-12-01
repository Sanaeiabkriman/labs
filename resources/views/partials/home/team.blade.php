

    <!-- Team Section -->
    <div class="team-section spad" id="team">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                    <h2>Get in <span>the Lab</span> and  meet the team</h2>
                </div>
                
                <div class="row">
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{Storage::url("public/images/thumbnails/".$users[0]->photo)}}" alt="">
                            <h2>{{$users[0]->name}}</h2>
                            <h3>{{$users[0]->fonction}}</h3>
                        </div>
                    </div>
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{Storage::url("public/images/thumbnails/".$center->photo)}}" alt="">
                            <h2>{{$center->name}}</h2>
                            <h3>{{$center->fonction}}</h3>
                        </div>
                    </div> 
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="{{Storage::url("public/images/thumbnails/".$users[1]->photo)}}" alt="">
                            <h2>{{$users[1]->name}}</h2>
                            <h3>{{$users[1]->fonction}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section end-->
    
    
       