@if ($errors->has('mail')) 
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('bravo'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
    <!-- newsletter section -->
	<div class="newsletter-section spad" id="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="col-md-9">
                        <!-- newsletter form -->
                        <form class="form-class" method="post" action="/newsletter" id="con_form">
                            @csrf
                        <input type="text" name="mail" placeholder="Your e-mail here">
                            <button class="site-btn btn-2">Newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter section end-->