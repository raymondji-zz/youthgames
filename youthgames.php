<?php /* Template Name: Youth Games */ ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Youth Games</title>

		<link href='http://fonts.googleapis.com/css?family=Lato:300|Ubuntu:400,500' rel='stylesheet' type='text/css'>

		<link href="/wp-content/themes/customizr/normalize.css" rel="stylesheet" type="text/css" media="screen">

		<link href="/wp-content/themes/customizr/mystyle.css" rel="stylesheet" type="text/css" media="screen">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!--jQuery-->
		<script type="text/javascript" src="/wp-content/themes/customizr/scripts/jquery.js"></script>
 
		<script type="text/javascript">
		   
    		// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
		
			$( document ).ready(function() {
					var herobottom = $('#hero').offset().top + $('#hero').height();

					// on scroll, 
					$(window).on('scroll',function(){

					    // we round here to reduce a little workload
					    stop = Math.round($(window).scrollTop());
					    if (stop > herobottom) {
					        $('.nav').addClass('past-main');
					    } else {
					        $('.nav').removeClass('past-main');
					   }

					});
					 });
		</script>

		<script>
						$(function() {
						  $('a[href*=#]:not([href=#])').click(function() {
						    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

						      var target = $(this.hash);
						      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						      if (target.length) {
						        $('html,body').animate({
						          scrollTop: target.offset().top
						        }, 1000);
						        return false;
						      }
						    }
						  });
						});
		</script>
   	 	<!--end jQuery-->
	</head>


	<!--BODY CONTENT-->
	<!--BODY CONTENT-->
	<!--BODY CONTENT-->
	<!--BODY CONTENT-->
	<!--BODY CONTENT-->
	<body>
			<header>
				<navbar class = "nav"> 
					<div class ="container">
						<a href="#reg-info"><p>register now</p></a>
						<a href="http://www.markhamyouthcouncil.com" target="_blank">
							<img src="/wp-content/themes/customizr/images/myc-logo.jpg" class ="logo" alt="markham youth council logo">
							<p>myc &larrhk;</p>
						</a>
						<div id ="optional-cta"><a href="#challenge"><p>tell me more</p></a></div><!--end optional-cta-->
					</div><!--end container-->
				</navbar><!--end nav-->

				<div id="hero" >
					<div class="container">
					<h1> The 2014 Youth Games </h1>
					<hr>
					</div><!--end container-->
				</div><!--end hero-->

			</header>

			<div class="info">
				<div class="container">
					<a id ="challenge"></a>
					<h2> &lrhar; The Ultimate <br> Challenge &rlhar; </h2>
					<ul>
						<li>
							<h4>Physically</h4>
							<p>Triumph over heart-pumping tests. Race through an obstacle course. Finesse through the skill challenges.</p>
							</li>
						<li>
							<h4>Mentally</h4>
							<p>Memorize and improvise. Answer: is the cat alive or dead? Navigate your way through dastardly puzzles.</p>
							</li>
						<li>
							<h4>Competitively</h4>
							<p>Two against all. Represent your district against dozens of teams in the ultimate youth competition.</p>
						</li>
					</ul>
				</div><!--end container-->
			</div><!--end info-->

			<div class="banner">
				<img src="/wp-content/themes/customizr/images/markham.jpg"/ alt="bird's eye view of markham">
			</div><!--end banner-->


			<div class="details">
				<div class ="container">
					<ul>
						<li>Saturday, May 10</li>
						<li>Centennial Community Centre</li>
						<li>Fun, Fitness and Charity</li>
					</ul>
				</div><!--end container-->
			</div><!--end details-->
			
			<div class="banner">
				<img src ="/wp-content/themes/customizr/images/training2.jpg" alt="inside of a gym"/>
			</div><!--end banner-->

			<div class="info">
				<div class ="container">

				<style type="text/css"> 
 
				 span{height:40px; width:40px; display:block; position:relative;} 

				.demoSpanC{border-radius:20px;-webkit-border-radius:20px;-moz-border-radius:20px; height:24px; width:24px; display:block; border:8px #333 double;}

				</style>
				<span class="demoSpanC">
				</span>
					<h2>COMPETE FOR GLORY</h2>
					<p>In the Youth Games, winner takes all. Compete tooth-and-nail and claim your prize of $300 in cash and hard-fought victory. Register today and raise a minimum of $50 with your partner to compete. Off the field, your glory continues - all proceeds from the event will benefit the Markham-Stouffville Hospital Foundation.
					</p>
				</div><!--end container-->
			</div><!--end info-->

			<div class="banner">
				<img src="/wp-content/themes/customizr/images/track.jpg" alt="outdoor running track"/>
			</div><!--end banner-->

			<div class="info">
				<div class="container">
				<style type="text/css"> 
 
				 span{height:40px; width:40px; display:block; position:relative;} 

				.demoSpanA{width:40px; height:40px; display:block;}

				.demoSpanA:before{content:''; height:20px; width:24px; display:block; border:3px #333 solid; border-top:0; position:absolute; top:15px; left:5px;}

				.demoSpanA:after{content:''; height:12px; width:10px; display:block; position:absolute; top:25px; left:15px; background:#333;}

				.demoSpanB:before{content:''; height:12px; width:5px; display:block; position:absolute; top:3px; left:28px; background:#333;}

				.demoSpanB:after{content:''; height:24px; width:23px; border-top:5px #333 solid; border-right:5px #333 solid; position:absolute; top:4px; left:6px; transform:scale(1,0.8) rotate(-45deg);-webkit-transform:scale(1,0.8) rotate(-45deg);-moz-transform:scale(1,0.8) rotate(-45deg);-o-transform:scale(1,0.8) rotate(-45deg);-ms-transform:scale(1,0.8) rotate(-45deg);}

				  </style>
				<span class="demoSpanA">
				<span class="demoSpanB">
				</span>
				</span>
				<h2>HELP BUILD OUR COMMUNITY</h2>
					<p>
					Originally designed to serve 110,000 people, the Markham Stouffville Hospital is now serving a population of over 330,000. To continue providing care and support for our growing community, the Markham Stouffville Hospital is building for the future. This year, they hope to finish their six-year expansion campaign. <a href="http://www.mshf.on.ca/expansion-campaign/about-the-expansion" target="_none"><strong>Help them finish strong.</strong></a>
					</p>
				</div><!--end container-->
			</div><!--end info-->

			<div class="banner">
				<img src="/wp-content/themes/customizr/images/msh1.jpg" alt="markham stouffville hospital"/>
			</div><!--end banner-->

			<div class="info">
				<div class="container">
				<h2>Fundraising Tiers</h2>
					<div>
					<!--CSS ICON-->
					<style type="text/css"> 
 
					 span{height:40px; width:40px; display:block; position:relative;} 

					.demoSpanX{width:36px; height:36px; border:#333 solid; border-width:0 0 4px 4px;}

					.demoSpanX:before{content:''; height:4px; width:18px; display:block; background:#333; position:absolute; top:24px; left:0; transform:rotate(-55deg);-webkit-transform:rotate(-55deg);-moz-transform:rotate(-55deg);-o-transform:rotate(-55deg);-ms-transform:rotate(-55deg); box-shadow:15px 10px 0 #333;-webkit-box-shadow:15px 10px 0 #333;-moz-box-shadow:15px 10px 0 #333;}

					.demoSpanX:after{content:''; height:4px; width:13px; display:block; background:#333; position:absolute; top:21px; left:11px; transform:rotate(39deg);-webkit-transform:rotate(39deg);-moz-transform:rotate(39deg);-o-transform:rotate(39deg);-ms-transform:rotate(39deg);}

					.demoSpanY:before{content:''; height:0; width:0; display:block; border:10px solid transparent; border-right-width:0; border-top-color:#333; position:absolute; top:8px; left:25px;}

					</style>
					<span class="demoSpanX">
					<span class="demoSpanY">
					</span>
					</span>
					</div>
					<!--END CSS ICON-->
					<a id ="reg-info"></a>
					<ul class ="fundraising">
						<li>
						<!--CSS ICON-->
						<style type="text/css"> 
						 span{height:40px; width:40px; display:block; position:relative;} 

						.demoSpan1{width:40px; height:40px;}

						.demoSpan1:before{content:''; height:8px; width:8px; background:#333; border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px; display:block; position:absolute; top:5px; left:16px; box-shadow:0 12px 0 #333, 0 24px 0 #333;-webkit-box-shadow:0 12px 0 #333, 0 24px 0 #333;-moz-box-shadow:0 12px 0 #333, 0 24px 0 #333; }

						</style>
						<span class="demoSpan1">
						</span>
						<!--END CSS ICON-->
						<h4>$50</h4>
						Basic Survival Kit
						</li>

						<li>
						<!--CSS ICON-->
						<style type="text/css"> 
						 span{height:40px; width:40px; display:block; position:relative;} 

						.demoSpan2{width:40px; height:40px;}

						.demoSpan2:before{content:''; height:6px; width:40px; background:#333; border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px; display:block; position:absolute; top:5px; left:0; box-shadow:0 12px #333, 0 24px #333;-webkit-box-shadow:0 12px #333, 0 24px #333;-moz-box-shadow:0 12px #333, 0 24px #333;}

						</style>
						<span class="demoSpan2">
						</span>
						<!--END CSS ICON-->
						<h4>$100</h4>
						Standard Survival Kit
						</li>
						<br>
						<li>
						<!--CSS ICON-->
						<style type="text/css"> 
 
						 span{height:40px; width:40px; display:block; position:relative;} 

						.demoSpan3{width:26px; height:40px; border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px; overflow:hidden;}

						.demoSpan3:before{content:''; height:12px; width:12px; background:#333; display:block; position:absolute; top:0; left:0px; box-shadow:14px 0 #333, 0 14px #333, 14px 14px #333, 0 28px #333, 14px 28px #333;-webkit-box-shadow:14px 0 #333, 0 14px #333, 14px 14px #333, 0 28px #333, 14px 28px #333;-moz-box-shadow:14px 0 #333, 0 14px #333, 14px 14px #333, 0 28px #333, 14px 28px #333;}

						</style>
						<span class="demoSpan3">
						</span>
						<!--END CSS ICON-->
						<h4>$130</h4>
						Advanced Survival Kit
						</li>

						<li>
						<!--CSS ICON-->
						<style type="text/css"> 
						 span{height:40px; width:40px; display:block; position:relative;} 
						.demoSpan4{width:40px; height:40px; border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px; overflow:hidden;}
						.demoSpan4:before{content:''; height:12px; width:12px; background:#333; display:block; position:absolute; top:0; left:0px; box-shadow:14px 0 #333, 28px 0 #333, 0 14px #333, 14px 14px #333, 28px 14px #333, 0 28px #333, 14px 28px #333, 28px 28px #333;-webkit-box-shadow:14px 0 #333, 28px 0 #333, 0 14px #333, 14px 14px #333, 28px 14px #333, 0 28px #333, 14px 28px #333, 28px 28px #333;-moz-box-shadow:14px 0 #333, 28px 0 #333, 0 14px #333, 14px 14px #333, 28px 14px #333, 0 28px #333, 14px 28px #333, 28px 28px #333;}
						</style>
						<span class="demoSpan4">
						</span>
						<!--END CSS ICON-->
						<h4>$200</h4>
						Champion Survival Kit
						</li>
					</ul><!--end fundraising-->

					<div class ="registration">
						<iframe src="https://docs.google.com/forms/d/1rYKq4r1J0H6NhHUtBf1VYNRr4SOmuqn_f6iM1PPf2r8/viewform?embedded=true" width="100%" height="500px" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
						<a href="https://drive.google.com/folderview?id=0B9EpdaWA31H8T05ydW11TXI4QTA&usp=sharing" target="_none">&rdsh; Download forms</a>
					</div><!--end registration-->
				</div><!--end container-->
			</div><!--end info-->

			<footer>
				<div class="container">
					<h5> Markham Youth Council 2014 &bull; Design by R. Ji</h5>
				</div><!--end container-->
			</footer>
	</body>
</html>