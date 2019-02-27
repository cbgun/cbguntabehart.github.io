<!DOCTYPE html>
<html lang="en">
<head>
<title>ASIAPARTINDOTECH | About :: asiapartindotech</title>   
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Solar Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Required-js -->

<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->
</head>
<body>
<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html"><span>ASIAPARTS </span>INDOTECH</a></h1>
				</div>
				<div class="w3ls-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<?php include"topheader.php";?>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <?php include"menuheader.php";?>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
	</header>
	<!-- //header -->
	<!-- top-header and slider -->
	<div class="w3-slider">	
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/1.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>THE POWER OF SUN AT YOUR HOUSE</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy. </p>
				</div>
			</li>
			<li>
				<img src="images/2.jpg" alt="" />
				  <div class="slide-desc">
					<h3>MAKE THE SUN WORK FOR YOU </h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				</div>
			</li>
			<li>
				<img src="images/3.jpg" alt="" />
				<div class="slide-desc">
					<h3>AFFORDABLE POWER SOLUTIONS</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. </p>
				</div>
			</li>
			<li>
				<img src="images/4.jpg" alt="" />
				<div class="slide-desc">
					<h3>MAKE THE SUN WORK FOR YOU </h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				</div>
			</li>
		</ul>
	</div>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- Specialize-section -->
			<section class="w3-about text-center">
				<div class="container">
					<h2 class="w3ls_head">Wel<span>come</span></h2>
					<p class="para">Lorem Ipsum is simply dummy text <span> type setting industry</span> esse cillum dolore eu 
					fugiat nulla pariatur. Excepteur sint occaecat.</p>
					<div class="col-md-4 w3l-abt-grid">
						<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
							<a href="#" class="hi-icon icon1"><i class="fa fa-cog" aria-hidden="true"></i></a>
						</div>
						<h4>Information Center</h4>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					</div>
					<div class="col-md-4 w3l-abt-grid">
						<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
							<a href="#" class="hi-icon icon2"><i class="fa fa-sun-o" aria-hidden="true"></i></a>
						</div>
						<h4>Commercial Solar</h4>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some, by injected humour.</p>
					</div>
					<div class="col-md-4 w3l-abt-grid">
						<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
							<a href="#" class="hi-icon icon3"><i class="fa fa-gift" aria-hidden="true"></i></i></a>
						</div>
						<h4>Special Offers</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of Latin literature from 45 BC, making.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>
	<!-- //Specialize-section -->
	<!--clients-->
			<div class="w3layouts-clients">
				<div class="container">
					<h3>Gain energy <span>independence</span></h3>
					<p>There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority Have Suffered In Some, By Injected Humour.Contrary To Popular Belief, Lorem Ipsum Is Not Simply Random Text. It Has Roots In A Piece Of Latin Literature From 45 BC, Making.</p>
				</div>
			</div>
	<!--//clients-->
		<!--advantage-->
				<div class="what-w3ls">
					<div class="container">
						<h3 class="w3ls_head">What <span>We Do</span></h3>
						<div class="what-grids">
							<div class="col-md-6 what-grid">
							<div class="list-img">
								<img src="images/5.jpg" class="img-responsive" alt=""/>
								<div class="textbox"></div>
								</div>
							</div>
							<div class="col-md-6 what-grid1">
								<div class="what-top">
									<div class="what-left">
										<i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Rainwater Harvesting</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="what-top1">
									<div class="what-left">
										<i class="glyphicon glyphicon-flash" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Home Energy Saving</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="what-top1">
									<div class="what-left">
										<i class="glyphicon glyphicon-fire" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Wind Power</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam </p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
			<!--advantage-->
	<!--stats-->
		<div class="stats" id="stats">
			<div class="container">
				<div class="stats-info">
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1200' data-delay='.5' data-increment="1">1200</div>
						<h4 class="stats-info">Followers</h4>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3000' data-delay='.5' data-increment="1">3000</div>
						<h4 class="stats-info">Support</h4>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9000' data-delay='.5' data-increment="10">9000</div>
						<h4 class="stats-info">Clients</h4>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='169' data-delay='.5' data-increment="1">169</div>
						<h4 class="stats-info">Awards</h4>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--//stats-->
	<div class="agileinfo-work-top">
		<div class="container">
			<div class="w3-agileits-rides-heading">
				<h3 class="w3ls_head">Our Recent <span>Works</span></h3>
			</div>
			
			<div class="agileits-w3layouts-rides-grids">
				<div class="col-sm-4 rides-grid">
					<div class="agileinfo-work">
					<div class="list-img">
						<img src="images/g1.jpg" class="img-responsive" alt="">
						<div class="textbox"></div>
						</div>
						<h4>Nullam tristique</h4>
						<p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Nullam tristique faucibus pharetra.</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Pellentesque auctor</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 rides-grid">
					<div class="agileinfo-work">
					<div class="list-img">
						<img src="images/g2.jpg" class="img-responsive" alt="">
						<div class="textbox"></div>
						</div>
						<h4>Euismod lectus </h4>
						<p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus .</p>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Nullam tristique faucibus pharetra.</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Pellentesque auctor</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 rides-grid">
					<div class="agileinfo-work">
					<div class="list-img">
						<img src="images/g3.jpg" class="img-responsive" alt="">
						<div class="textbox"></div>
					</div>
						<h4>Curabitur non </h4>
						<p>Pellentesque auctor euismod lectus a pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus .</p>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Nullam tristique faucibus pharetra.</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Pellentesque auctor</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- footer -->
	<div class="footer-top">
		<div class="container">
			<div class="col-md-3 w3ls-footer-top">
				<h3>QUICK <span>LINKS</span></h3>
					<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="products.html">Products</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
			</div>
			<div class="col-md-4 wthree-footer-top">
				<h3>ADD<span>RESS</span></h3>
					<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 7th Street, Melbourne City, Australia.</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +080 264 995
</li>
				</ul>
			</div>
			
			<div class="col-md-5 w3l-footer-top">
				<h3>NEWS<span>LETTER</span></h3>
				<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit reprehenderit qui in ea.</p>

					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<input type="submit" class="submit"  value="">
					</form>
			</div>
				<div class="clearfix"></div>
			<div class="footer-w3layouts">
				<div class="agile-copy">
					<p>© 2017 Solar Panel. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>

<!-- //footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
</body>
</html>