
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>The Quarters | Services </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->
    <!-- Custom-Stylesheet-Links -->
    <!-- Bootstrap-CSS --> <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Font-awesome-CSS --> <link href="{{ asset('/css/font-awesome.css ') }}" rel="stylesheet">
    <!-- Index-Page-CSS --><link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Font awesome CDN--> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //Custom-Stylesheet-Links -->
    <!--web-fonts-->
    <!-- Logo-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
    <!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">
    <!--//web-fonts-->
    <!--//fonts-->
    <!-- js -->
</head>
<body>
<!-- header -->
<div id="demo-1" data-zs-src='["images/2.jpg", "images/2.jpg", "images/1.jpg","images/3.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="w3-header-bottom">
                <div class="container">
                    <!---	<h1><a href="index.html"><span class="letter">D</span>eterge<span class="square"></span></a></h1>	--->
                    <!------------	<h1><a href="index.php">The Quarters</a></h1>----------------->
                    <img src="{{ asset('/quarter logo.png') }}" style="width:300px; height:150px;" alt="">
                    <!----	<div class="header-w3-top">
                            <div class="agileinfo-phone">
                            <div class="phone-wthree-left">

                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                <p>Want a Launder...? <span>call us now!</span></p>
                            </div>
                             <h2> +255 711111111</h2>
                            </div>
                        </div>------>

                    <!----------------navigation---------------->
                    @include('includes.sitenav')


                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//header-w3l-->
        </div>
    </div>
</div>
<!--/banner-section-->
<!-- services -->
<div class="services">
    <div class="container">
        <div class="w3_agile_services_grids">
            <h4 class="tittles-w3agileits"><span>S</span>ervices</h4>
            <div class="row">
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid">
                        <div class="hover06 column">
                            <div>
                                <figure><img src="{{ asset('/images/a1.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="agile_services_grid_pos">
                            <i class="fa fa-spinner" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h4>Wash Iron Fold</h4>
                    <p class="para-w3-agile">After carefully washing clothes to a maximum clean state, they are ironed accordingly, then folded ready for packaging and delivery. The only thing a customer is left to do will be wearing.</p>
                </div>
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid">
                        <div class="hover06 column">
                            <div>
                                <figure><img src="{{ asset('/images/alpha2.jpg') }}" alt=" " class="img-responsive"  /></figure>
                            </div>
                        </div>
                        <div class="agile_services_grid_pos">
                            <i class="fa fa-shirtsinbulk i1" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h4>Baby-safe Laundry</h4>
                    <p class="para-w3-agile">We pay close attention to details, especially when it comes to baby clothes. Using non bio-detergent which are free from chemicals that could trigger reactions on baby's sensitive skin.</p>
                </div>
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid">
                        <div class="hover06 column">
                            <div>
                                <figure><img src="{{ asset('/images/a3.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="agile_services_grid_pos">
                            <i class="fa fa-users i1" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h4>Alteration & Repairs</h4>
                    <p class="para-w3-agile">From simple repairs such as button fixing to complex re-styling and couture quality fitting for clothing. Our goal is to return clothes in the best condition.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid">
                        <div class="hover06 column">
                            <div>
                                <figure><img src="{{ asset('/images/a4.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="agile_services_grid_pos">
                            <i class="fa fa-magic" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h4>Household Fabrics</h4>
                    <p class="para-w3-agile">Table and bed fabrics will receive same care and attention to details as clothes do, but even better. With special techniques to remove stains and restore them to previous conditions.</p>
                </div>
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid">
                        <div class="hover06 column">
                            <div>
                                <figure><img src="{{ asset('/images/bucket.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="agile_services_grid_pos">
                            <i class="fa fa-gift" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h4>Pick up and delivery</h4>
                    <p class="para-w3-agile">As of recent, areas that will qualify for this service are Mbezi beach, Tegeta, Mikocheni, Sinza and Mlimani city area.</p>
                </div>
                <div class="col-md-4 w3_agile_services_grid">
                    <div class="agile_services_grid">
                        <div class="hover06 column">
                            <div>
                                <figure><img src="{{ asset('/images/pickup.jpg') }}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="agile_services_grid_pos">
                            <i class="	fa fa-automobile" aria-hidden="true"></i>
                        </div>
                    </div>
                    <h4>Pick up days</h4>
                    <p class="para-w3-agile">Saturday & Wednesdays Only</p>
                </div>


            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- services
<div class="services-w3-agileits w3agileits-ref">
		<div class="col-md-6  services-info services-info-bg">
			<h6>Customer who Sign Up for Weekly Service <span>Get $20 Off </span></h6>
			<p class="para-w3-agile">The first day dry cleaning order!</p>
					 <form action="#" method="post">
							<input type="email" class="text" required="" />
							<input type="submit" value="Go" />
				     </form>
					 <div class="clearfix"> </div>
		</div>
	<div class="col-md-6 services-left">
			<h3 class="sub-tittle-agileits">Our <span>B</span>est <span>S</span>ervices</h3>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-shirtsinbulk i1" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Dry Cleaning</h5>
					<p>Lorem ipsum dolor sit amet </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-shopping-basket i2" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Pressing</h5>
					<p>Lorem ipsum dolor sit amet </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-magic i3" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Laundry</h5>
					<p>Lorem ipsum dolor sit amet </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-paper-plane-o i4" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Pickup & Delivery</h5>
					<p>Lorem ipsum dolor sit amet </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
<!--//services-->
<!--footer -->
@include('includes.sitefooter')
<!--//footer-->
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body login-page "><!-- login-page -->
                <div class="login-top sign-top">
                    <div class="agileits-login">
                        <h5>Login</h5>
                        <form action="#" method="post">
                            <input type="email" class="email" name="Email" placeholder="Email" required=""/>
                            <input type="password" class="password" name="Password" placeholder="Password" required=""/>
                            <div class="wthree-text">
                                <ul>
                                    <li>
                                        <label class="anim">
                                            <input type="checkbox" class="checkbox">
                                            <span> Remember me ?</span>
                                        </label>
                                    </li>
                                    <li> <a href="#">Forgot password?</a> </li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="w3ls-submit">
                                <input type="submit" value="LOGIN">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- //login-page -->
    </div>
</div>
<!-- //modal -->
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body login-page "><!-- login-page -->
                <div class="login-top sign-top">
                    <div class="agileits-login">
                        <h5>Register</h5>
                        <form action="#" method="post">
                            <input type="text" name="Username" placeholder="Username" required=""/>
                            <input type="email"  name="Email" placeholder="Email" required=""/>
                            <input type="password" name="Password" placeholder="Password" required=""/>
                            <div class="wthree-text">
                                <ul>
                                    <li>
                                        <label class="anim">
                                            <input type="checkbox" class="checkbox">
                                            <span> I accept the terms of use</span>
                                        </label>
                                    </li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="w3ls-submit">
                                <input type="submit" value="Register">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- //login-page -->
    </div>
</div>
<!-- //modal -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
<script src="{{ asset('/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>