<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
			<div class="row">
					@foreach ($service as $item)

                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{$item->icone->icone}}"></i>
                        </div>
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->texte}}</p>
                    </div>
                </div>
				@endforeach
            </div>
        </div>
    </div>


    <!-- card section end-->
