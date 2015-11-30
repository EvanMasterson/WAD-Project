<!DOCTYPE html>
<html>

	<head>
		
	
		<title>Find a Future</title>
		<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/scroller.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/gmaps.js"></script>
		<script type = "text/javascript" href = "js/Scroll.js" > </script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		
		<script>
		  $(function() {
		    $( "#accordion" ).accordion();
		  });
		</script>
	</head>
	<body>
		<div class="navbar-static-top navbar-inverse" id="home">
		<div class="container padding" >
			<div class="navbar-brand">
			Find-a-Future
		    </div>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				Menu
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="#locator">Locator</a></li>
					<li><a href="#collegeList">College List</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="cbp-fbscroller" class="cbp-fbscroller">
	<nav>
		<!-- <a href="#img1" class="cbp-fbcurrent">Section 1</a>
		<a href="#img2">Section 2</a> -->


	</nav>
	<section id="img1"></section>
	<section id="content1">
		<div class="container" id="locator">
		<div class="row">
			<div class="col-md-3" id="search">
				<div id="menu">
					<form>
						<h4> Add a College Here!</h4>
						<br>
						Name of College: <br>
						<input type="text" name="cName">
						<br>
						<br>
						Address: <br>
						<input type="text" name="address">
						<br>
						<br>
						Postcode: <br>
						<input type="text" name="postcode">
						<br>
						<br>
						Type: <br>
						<input type="text" name="type">
						<br>
						<br>
						Phone Number: <br>
						<input type="text" name="pNumber">
						<br>
						<br>
						<input type="submit" name="submit">
						<br>
					</form>
					
				</div>
			</div>
			<div class="col-md-6" id="map">
					<script rel="javascript" href="js/gmaps.js" ></script>
					MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP MAP 
			</div>
			<div class="col-md-3" id="rss">
				EED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED RSS FEED
			</div> 
		</div>
	</div>
	</section>
	<section id="img2"></section>
	<section id="content2">
		<div class="container" id="collegeList">
		<?php include ("xmlTransform.php");?>
		</div>
	</section>
	<section id="img3"></section>
	<section id="content3">
		<div class="container padding" id="contact">
		<form role="form" action="contact.php" method="post" id="contactForm">
			<div class="form-group">
				<h1>CONTACT FORM</h1>
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="message" id="message" placeholder="Your message here"></textarea>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>	
	</section>

	
	<section id="content4">
		<div class="panel-footer" id="footer">
			<div class="container">
				<footer class="text-center">Find-a-Future<br/>
						<a href="#home">Back to Top</a><br />
						<a href="#locator">Locator</a><br/>
						<a href="#collegeList">College List</a><br/>
						<a href="#contact">Contact</a>
				</footer>
			</div>
		</div>	
	</section>
</div>

	
		
		
	
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
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
	
		/*global GMaps*/
		var map;
    	$(document).ready(function(){
	      map = new GMaps({
	        div: "#map",
	        lat: -12.043333,
	        lng: -77.028333
	      });
	    });
    
		
	
	</script>
	</body>
</html>