
    <!-- Contact section -->
    @if ($errors->any())
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
                    <div class="col-md-5 offset-md-1 contact-info col-push">
                        <div class="section-title left">
                            <h2>Contact us</h2>
                        </div>
                        <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                        <h3 class="mt60">Main Office</h3>
                        <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                        <p class="con-item">0034 37483 2445 322</p>
                        <p class="con-item">hello@company.com</p>
                    </div>
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
    
    