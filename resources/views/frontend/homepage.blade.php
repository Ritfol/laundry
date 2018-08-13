<!--
Author: ROMED
-->


<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>The Quarters | Home</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Deterge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    {{--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);--}}
        {{--function hideURLbar(){ window.scrollTo(0,1); } </script>--}}
    <!-- //Meta-Tags -->
    @include('includes.front_end_header')
</head>
<body>
<!-- header -->

<div id="demo-1" data-zs-src='["images/4.jpg", "images/2.jpg", "images/1.jpg","images/3.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="w3-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4"></div>
                        <div class="col-md-4 col-sm-4">
                            <img src="{{ asset('/quarter logo.png') }}" style="width:300px; height:150px;" align="middle" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4"></div>
                    </div><br>
                    <div class="row">
                        <!--navigation-->
                        @include('includes.sitenav')
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//header-w3l-->
            <!--/banner-info-->
            <div class="agile-baner-info-w3ls">
                <h3>We Offer Quality Laundering at Good Prices <span></span></h3>
                <div class="clearfix"> </div>
                <!---<div class="bnr-agileits-w3layouts-btn">
                    <a href="#" class="button-w3layouts hvr-rectangle-out" data-toggle="modal" data-target="#myModal">Read more</a>
                </div>-->
            </div></div>
        <!--/banner-info-->
    </div>
</div>
</div>
<!--/banner-section-->
<br/><br/>

<!--About Us-->
<div class="contact-w3layouts" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h3 class="w3l_header w3_agileits_header two"><span>About</span> Us</h3>
                <p class="para-w3-agile">At Quarters Laundry, caring and satisfying our customers are our main priority. Equipped with a dedicated staff, your clothes are in good professional care.</p>
                <p class="para-w3-agile">We understand the lack of time and energy that people face due to busy schedules</p>
                <p class="para-w3-agile">Hence Quarters Laundry found convenient way to fix that, we call it "The Weekly Bundle".     </p>
                <p class="para-w3-agile">We observed that most people collect and wash clothes on a weekly basis, some as far as two weeks.</p>
                <p class="para-w3-agile">
                    With our very affordable Monthly Fee, we wash a customer's "Weekly Bundle" at least once per week for the entire month.
                    this is the best offer one can possibly get out of a laundry service.
                </p>
                <br/><br/>
                <h3 class="w3l_header w3_agileits_header two"><span>Pick Up</span>days</h3>
                <p class="para-w3-agile" align="center">Wednesdays and Saturdays</p>
                <br><br>
                <div class="jumbotron">

                    <h3 class="w3l_header w3_agileits_header two"><span>Become a Quarters Member!</span></h3><br>
                    <p style="text-align:center;">
                     	Sign up or Log In below for users who need a monthly subscription.
                     </p>
                     <br>
                     <p>
                     	For clients who need a quick one time service, please proceed to choose 
                     	the Express service.
                     </p>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

					<!-- pricing plans -->
			<div class="pricing">
				<div class="w3l-pricing-grids">
					<div class="agileits-pricing-grid first">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top">
								<h3>Standard</h3>
								<p>TZS<span style="color:white;">25,000</span>/Per month</p>
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom">
									<p><span>Pickup and Delivery<span></p>
									<p><span>Ironing</span></p>
									<p><span>Weekly bundle of clothes</span></p>  
									<br>
									<p><span>Once per Week</span></p>
								</div>
								<div class="buy-button">
									<a class="popup-with-zoom-anim" href="{{ route('login') }}">Subscribe Now</a>
								</div>
							</div>
						</div>
					</div>
				
					
					<div class="agileits-pricing-grid fourth">
						<div class="pricing_grid">
							<div class="wthree-pricing-info pricing-top yellow-top">
								<h3>Express</h3>
								<p>TZS<span style="color:white;">25,000</span>/Per 100 clothes</p>
							</div>
							<div class="pricing-bottom">
								<div class="pricing-bottom-bottom yellow-pricing-bottom-top">
									<p><span>Pickup and Delivery<span></p>
									<p><span>Ironing</span></p>
									<p><span>100 clothes</span></p>  
									<br>
									<p><span>Once per Week</span></p>
								</div>
								<div class="buy-button">
									<a class="popup-with-zoom-anim" href="{{ route('toExpress') }}">Order Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //pricing plans -->

<!-- agile_testimonials --
<div class="test">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="sub-tittle-agileits"><span>T</span>estimonials</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<div class="test-info-w3ls">
											<h4>Stella Franklin</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>	
									<div class="col-md-4 test-grid2">
								
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor.</p>
										<div class="test-info-w3ls">
											<h4>Tim Mathis</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>	
									<div class="col-md-4 test-grid2">
										
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<div class="test-info-w3ls">
											<h4>Patrick Jean</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>	
									<div class="col-md-4 test-grid2">
									
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<div class="test-info-w3ls">
											<h4>Helen Tompson</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>	
									<div class="col-md-4 test-grid2">
								
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>	
					</div>
				</div>	
		</div>
	</div>
</div>
<!-- agile_testimonials -->

<!--contact
				<div class="contact-w3layouts" id="contact">
					<div class="container">
						<h3 class="w3l_header w3_agileits_header two">Register <span>Below</span></h3>

						<div class="agile_wthree_inner_grids">
						<div class="col-md-3 "></div>

							<div class="col-md-6 mail-grid1-form ">

								<form action="confirmed.php"  autocomplete="off"  method="POST">
								 <h4>Please perform payment through TIGOPESA to +255 83388388</h4> <br/>
									<input type="text" name="name" placeholder="Full Name" required="" />
									<input type="text" name="phone" placeholder="Phone Number" required="" />

		<!-- Packages we provide service --<select name="package" required="" />

												  <option value="">Choose package</option>

													 <option value="person">Per Person</option>
													 <option value="infant">Babies/Infants</option>

												</select>

		<!-- Locations we provide service -- <select name="location" required="" >

												  <option value="">Choose location here</option>

													 <option value="Tegeta">Tegeta</option>
													 <option value="Sinza">Sinza(UDSM)</option>
												     <option value="Mbezi">Mbezi</option>
												     <option value="Mikocheni">Mikocheni</option>

												</select>

									<textarea name="message" placeholder="Please provide details of your area...." ></textarea>
									<input type="hidden" name="status" value="0">
									<input type="hidden" name="date" value="<?=(date("d/m/Y")); ?>">
								<input type="submit" value="Submit"/>

								</form>
							</div><div class="col-md-3 "></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--//contact-->




<!-- about
	<div class="about-w3layouts">
		<div class="col-md-6 col-sm-6 gallery-gridsa">
		</div>
		<div class="col-md-6 col-sm-6 gallery-grids2 right-w3ls-gridsa">
			<h3>The best <span>C</span>leaning <span>s</span>ervice with <span>D</span>eterge</h3>
			<div class="banner-grids-agileits">
				<div class="grids-inner-wthree">
					<div class="grids-right-wthree">
						<i class="fa fa-tint i1" aria-hidden="true"></i>
					</div>
					<div class="grids-left-wthree">
						<p>We use products which are</p> <span>Eco Friendly</span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grids-inner-wthree">
					<div class="grids-right-wthree">
						<i class="fa fa-spinner i2" aria-hidden="true"></i>
					</div>
					<div class="grids-left-wthree">
						<p>Get clean your clothes with</p> <span>Best Equipments</span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grids-inner-wthree">
					<div class="grids-right-wthree">
						<i class="fa fa-check-square-o i3" aria-hidden="true"></i>
					</div>
					<div class="grids-left-wthree">
						<p>Be sure your dress gets</p> <span>Right Treatment</span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="about-mid-w3-agileits">
			<div class="col-md-6 col-sm-6 gallery-grids2">
				<h3 class="sub-tittle-agileits">Let us handle your dry <span>c</span>leaning & <span>l</span>aundry</h3>
				<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc,interdum sed aliquet quis.Donec nunc nunc,interdum sed aliquet quis.</p>
				<a href="#" class="button-w3layouts hvr-rectangle-out" data-toggle="modal" data-target="#myModal">Read more</a>
			</div>
			<div class="col-md-6 col-sm-6 gallery-gridsa2">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 col-sm-6 gallery-gridsa1">
			</div>
			<div class="col-md-6 col-sm-6 gallery-grids2">
				<h3 class="sub-tittle-agileits"><span>W</span>ash ,<span>D</span>ry & <span>F</span>old</h3>
				<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar tellus sed mauvehicula tempor. In hac habitasse platea dictumst. Donec nunc nunc,interdum sed aliquet quis.</p>
				<p class="para-w3-agile">conditum vitae enim. Quisque molestie consectetur urna quis scelerisque. Morbi at lectus sapien. Donec fgiat arcu in mi placerat ullamcorper.</p>
				<a href="#" class="button-w3layouts hvr-rectangle-out" data-toggle="modal" data-target="#myModal">Read more</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- //about -->
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span>D</span>eterge</h4>
                <img src="{{ asset('/images/1.jpg') }}" alt=" " class="img-responsive">
                <h3 class="sub-tittle-agileits">About Our Favorite <span>Laundromat</span> Company</h3>
                <p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus justo in felis tristique mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in dapibus odio, cursus sollicitudin leo. Sed eu velit diam. Nam vitae tincidunt nisi.Vestibulum egestas justo quis enim varius condimentum.</p>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- services
<div class="services-w3-agileits w3agileits-ref">
		<div class="col-md-6  services-info">
			<h6>Customer who Sign Up for Weekly Service <span>Get $20 Off </span></h6>
			<p class="para-w3-agile">The first day dry cleaning order!</p>
					 <form action="#" method="post">
							<input type="email" class="text" required="" />
							<input type="submit" value="Go" />
				     </form>
					 <div class="clearfix"></div>
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


<!-- agile_testimonials
<div class="test">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="sub-tittle-agileits"><span>T</span>estimonials</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<div class="test-info-w3ls">
											<h4>Stella Franklin</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="images/t1.jpg" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor.</p>
										<div class="test-info-w3ls">
											<h4>Tim Mathis</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="images/t2.jpg" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<div class="test-info-w3ls">
											<h4>Patrick Jean</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="images/t3.jpg" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
										<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<div class="test-info-w3ls">
											<h4>Helen Tompson</h4>
											<span>Lorem Ipsum</span>
										</div>
									</div>
									<div class="col-md-4 test-grid2">
										<img src="images/t4.jpg" alt="" class="img-r">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
					</div>
				</div>
		</div>
	</div>
</div>
<!-- agile_testimonials -->
<!--footer -->
@include('includes.sitefooter')
<!--//footer-->


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
                        <h5>Login</h5>
                        <form action="#" method="post">

                            <input type="email"  name="Email" placeholder="Email" required=""/>
                            <input type="password" name="Password" placeholder="Password" required=""/>

                            <div class="w3ls-submit">
                                <input type="submit" value="Login">
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
<script type="text/javascript" src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.zoomslider.min.js') }}"></script>
<!-- requried-jsfiles-for owl -->
<script src="{{ asset('/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo2").owlCarousel({
            items : 1,
            lazyLoad : false,
            autoPlay : true,
            navigation : false,
            navigationText : false,
            pagination : true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('/js/move-top.js') }}"></script>
<script type="text/javascript" src=""></script>
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
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->

<!-- for pricing -->
<!-- Pricing-Popup-Box-JavaScript -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
		});
																						
	});
	</script>
<!-- //Pricing-Popup-Box-JavaScript -->
</body>
</html>