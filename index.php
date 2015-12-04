<!DOCTYPE html>
<html>

	<head>
		
	
		<title>Find a Future</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/scroller.css" />
		<!-- For Maps -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0f_37S0OieQsnrm646prpK6JL2FlUvac"></script>
		<script type="text/javascript" src="js/gmaps.js"></script>
		<!-- For Image scroll -->
		<script type = "text/javascript" href = "js/Scroll.js" > </script> 
		<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
  <!--		<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
  <!--		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
		<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>-->
		
		<!--Map Markers-->
		<script type="text/javascript" src="js/mapMarkers.js"></script>
	
		
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
		<section id="img1">
			<div class="container padding" id="img1MOB">
				
			</div>
		</section> 
		<div id="locator">
			
			<section id="content1">
				<div class="container" id="map" onload="mapMarkers()"></div>
			</section>
			
			<section id="content2">
				<div class="menuContainer padding" id="menu">
					<form role="form" action="colleges.php" method="post" id="collegeForm">
						<div class="form-group">
							<h1>Add a College Here!</h1>
							<label for="name">Name of College:</label>
							<input type="text" class="form-control" name="cName" placeholder="College Name" />
						</div>
						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" class="form-control" name="address" placeholder="College Address here"/>
						</div>
						<div class="form-group">
							<label for="postcode">Postcode: </label>
							<input type="text" class="form-control" name="postcode" placeholder="College Postcode here"/>
						</div>
						<div class="form-group">
							<label for="type">Type: </label>
							<input type="text" class="form-control" name="type" placeholder="Univeristy/College/Other"/>
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number: </label>
							<input type="text" class="form-control" name="pNumber" placeholder="College Phone number here"/>
						</div>
						<button type="submit" class="btn btn-default" id="submitCollege">Add College!</button>
					</form>
				</div>
			</section>
			
			<section id="content3">
				<div class="container padding" id="rss">
					<h2>RSS Feed</h2>
					<div class="glyphicon glyphicon-arrow-down"></div>
					<div id="rssLoad"></div>
				</div>
			</section>
		</div>
	
	<section id="img2">
		<div class="container padding" id="img2MOB">
			
		</div>
	</section>
	<section id="content4">
		<div class= "container" id="collegeList">
		 <?php include ("xmlTransform.php");?>
		</div>
	</section>
	<section id="img3">
		<div class="container padding" id="img3MOB">
			
		</div>
	</section>
	<section id="content5">
		<div class="container padding" id="contact">
		<form role="form" action="contact.php" method="post" id="contactForm">
			<div class="form-group">
				<h2>Contact Form</h2>
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="example@example.com" required/>
			</div>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Your name here"/>
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" name="contact_message" id="contact_message" placeholder="Your message here"></textarea>
			</div>
			<input type="submit" class="btn btn-default" id="submitContactForm"/>
		</form>
		<p id="formMessage"></p>
	</div>	
	</section>

	
	<section id="content6">
		<div class="panel-footer" id="footer">
			<div class="container padding">
				<div class="row">
				<footer class="text-center" id="FAFFooter">Find-a-Future<br/>
						<div class="col-md-3"><a href="#home" id="homeStyle" >Back to Top</a></div>
						<div class="col-md-3"><a href="#locator" id="locationStyle" >Locator</a></div>
						<div class="col-md-3"><a href="#collegeList" id="cListStyle" >College List</a></div>
						<div class="col-md-3"><a href="#contact" id="contactStyle" >Contact</a></div>
				</footer>
				</div>
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
	
		//AJAX for Contact Form
		$(document).ready(function() {
		  $("#submitContactForm").click(function(e) {
		      e.preventDefault();
		
		    var dataToSend = $("#contactForm").serializeArray();
		    $.ajax({                
		        url: "contact.php", 
		        type: "POST",
		        data: dataToSend,     
		        cache: false,
		        success: function(){
		         $("#formMessage").html("<h1>Contact Query successfully submitted, we will be in contact soon !</h1>").fadeIn(5000).fadeOut(7000);
		         document.getElementById('contactForm').reset();
		        },
		        error: function(){
		        	alert("An Error occured while trying to send the message, Sorry !");
		        }
		    });
		    return false;
		  });
		  
		  //jQuery for contact form submit button
		  $('#submitContactForm').bind('mouseover',function(){
		  	var colour  = $(this).css("background-color");
		  	var text_colour = $(this).css('color');
		  	$(this).css('background', 'grey');
		  	$(this).css('color', 'red');
		  	$(this).bind('mouseout', function(){
		  	$(this).css('background', colour);
		  	$(this).css('color', text_colour);
		  	});
		  });
		});
		
		//AJAX for Add College Form
		$(document).ready(function() {
		  $("#submitCollege").click(function(e) {
		      e.preventDefault();
		
		    var dataToSend = $("#collegeForm").serializeArray();
		    $.ajax({                
		        url: "colleges.php", 
		        type: "POST",
		        data: dataToSend,     
		        cache: false,
		        success:function(){
		        document.getElementById('collegeForm').reset();
		        $('#collegeList').load('xmlTransform.php');
		        }
		    });
		    return false;
		  });
		});
		
		$(document).ready(function(){
			$('#rssLoad').hide();
			$('#submitCollege').click(function(){
				$('#rssLoad').load('rssTransform.php');
				$('#rssLoad').fadeIn(4000);
			});
		});
		

	 </script>
	</body>
</html>