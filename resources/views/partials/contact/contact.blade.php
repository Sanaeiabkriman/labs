<!-- Contact section -->
@if ($errors->has('email') || $errors->has('sujet') || $errors->has('msg') || $errors->has('nom'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="contact-section spad fix" id="contacts">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            @foreach ($coord as $item)
            <div class="col-md-5 offset-md-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{!!$item->titre1!!}</h2>
                </div>
                <p>{{$item->texte}} </p>
                <h3 class="mt60">{{$item->titre2}}</h3>
                <p class="con-item">{{$item->adresse}} </p>
                <p class="con-item">{{$item->num}}</p>
                <p class="con-item">{{$item->mail}}</p>
            </div>
            @endforeach
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" method="post" action="/contactmail" id="con_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="nom" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="sujet" placeholder="Subject">
                            <textarea name="msg" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->
