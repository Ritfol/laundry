<div class="footer w3layouts">
    <div class="container">
        <div class="footer-row w3layouts-agile">
            <div class="col-md-3 footer-grids w3l-agileits">
                <!---<h6><a href="index.html"><span class="f-letter">D</span>eterge<span class="f-square"></span></a></h6>
                <h6><a href="index.html">The Quarters</h6>---->
                <img src="{{ asset('public/quarter logo.png') }}" style="width:300px; height:150px;" alt="">
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
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/QuartersLaundry" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/quarterslaundry/?hl=en"  target="_blank"><i class="fa fa-instagram"></i></a></li>

                    </ul>
                </div>
                <div class="bottons-agileits-w3layouts">
                    <!----<a class="btn1-w3-agileits" href="#myModal2" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>.
						<a class="btn1-w3-agileits" href="login.php" ><i class="fa fa-sign-in" ></i>Login</a>.
					<!---	<a class="btn2-w3-agileits" href="#myModal3" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Register</a>---->
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

<!-- copy-right -->
<div class="copyright-wthree">
    <div class="container">
        <ul class="b-nav">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="{{ route('about') }}" >About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('tender_services') }}">Tender Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <p>&copy; <?php echo date("Y");?> Morier Group Ltd. All Rights Reserved</p>
    </div>
</div>
<!-- //copy-right -->