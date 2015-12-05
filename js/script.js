//Smooth Scrolling
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

//AJAX for RSS Feed
$(document).ready(function(){
	$('#rssLoad').hide();
	$('#submitCollege').click(function(){
		$('#rssLoad').load('rssTransform.php');
		$('#rssLoad').fadeIn(4000);
	});
});