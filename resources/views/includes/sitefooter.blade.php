    <div class="footer w3layouts">
        <div class="container">
            <div class="footer-row w3layouts-agile">
                <div class="col-md-3 footer-grids w3l-agileits">
                    <!---<h6><a href="index.html"><span class="f-letter">D</span>eterge<span class="f-square"></span></a></h6>
                    <h6><a href="index.html">The Quarters</h6>---->
                            <img src="{{ asset('/quarter logo.png') }}" style="width:300px; height:150px;" alt="">
                </div>
                <div class="col-md-3 footer-grids w3l-agileits">
                    <!---<h3>Address</h3>
                    <p>3745 Noriega St,</p>
                    <p>San Francisco,</p>
                    <p>CA 94122, USA.</p>--->
                </div>
                <div class="col-md-3 footer-grids w3l-agileits">
                    <h3>Connect with us</h3>
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/QuartersLaundry" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/quarterslaundry/?hl=en"  target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                    
                        </ul>
                    </div>
                    <div class="bottons-agileits-w3layouts">
                        @if(auth()->guard('customer')->check())
                            <a class="btn1-w3-agileits" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                        @elseif(auth()->guard('tender')->check())
                            <a class="btn1-w3-agileits" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                        @elseif(auth()->guard('admin')->check())
                            <a class="btn1-w3-agileits" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                        @else
                        <a class="btn1-w3-agileits" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>.
                        <a class="btn2-w3-agileits" href="{{ route('signup') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sign up</a>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 footer-grids w3l-agileits">    
                    <h3>Questions....?</h3>
                        <p>+255 745 464 893</p>
                        <p>+255 746 429 940</p>
                  
                        <p>info@quarterslaundry.com</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    @if(auth()->guard('customer')->check())
                        <a class="btn1-w3-agileits" href="{{ route('customer_logout') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                    @elseif(auth()->guard('tender')->check())
                        <a class="btn1-w3-agileits" href="{{ route('tender_logout') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                    @elseif(auth()->guard('admin')->check())
                        <a class="btn1-w3-agileits" href="{{ route('admin_logout') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <!-- copy-right -->
        <div class="copyright-wthree">
            <div class="container">
                <ul class="b-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php" >About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="tender-service.php">Tender Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <p>&copy; <?php echo date("Y");?> Morier Group Ltd. All Rights Reserved</p>
            </div>
        </div>
<!-- //copy-right -->