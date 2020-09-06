
<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Avectime.com</title>

    <!-- Bootstrap -->
    <link href="setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/homepage.css" rel="stylesheet">

     <!-- slick -->
	  <link href="setup/slick/slick/slick.css" rel="stylesheet">
	   <link href="setup/slick/slick/slick-theme.css" rel="stylesheet">
	    
	 <!-- JQUI-->
	   <link type="text/css" rel="stylesheet" href="setup/jqueryui/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="setup/jqueryui/jquery-ui.structure.css">
<link type="text/css" rel="stylesheet" href="setup/jqueryui/jquery-ui.theme.css">
  
  <style>
  <!---Primary and second carousel--->
  .carousel{
	margin-top:-20px;
}
.carousel-caption{
	
	position:absolute;
	bottom:150px;
	left:5%;
	right:85%;
	width:40%;
	}
#carouselslide .item  {
  height: 450px;
}

#secondslide .item img{
	height:250px;
}
.carousel-control{
	width:4%;
	height:30%;
	margin-left:20px;
	margin-right:50px;
	margin-top:80px;
	color:black;
	background-color:white;
}
 <!---/Primary and second carousel--->
  </style>
  
  </head>
  <body >



 <!-- Header section -->
<header>
<?php 
require_once('header/very_small_screen.php');
require_once('header/small_medium_screen.php');
require_once('header/medium_screen.php');

//include user account page
require_once('my_account/my_account.php');
?>
</header>
<!-- /Header section -->



 
 <!-- main section -->

<main>
<!--First slider
<div class="carousel slide " data-interval=2000 data-ride="carousel"id="carouselslide" >
	<ol class="carousel-indicators">
	<li data-target="#carouselslide" data-slide-to="0" class="active"></li>
	<li data-target="#carouselslide" data-slide-to="1"></li>
	<li data-target="#carouselslide" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	<div class="item active">
	<div class="carousel-caption">
	<form method="post" action="">
	<p>Mobile Ready</p>
	<h1>Xiaomi Redmi Note 4</h1>
	<p>Redmi 8A dual comes wit all portrait mode and all scense detecrtion</p>
	<button type="submit" name="shopnow" class="btn btn-warning">Shop Now</button>
	</form>
	</div>
	<img class="img-responsive" src="index_images/zoom/z1.jpg" alt="Caption 1" />
	
	</div>
	<div class="item">
	<img class="img-responsive"  src="index_images/zoom/z2.jpg" alt="Caption 2" /><
	<div class="carousel-caption">
	<form method="post" action="">
	<p>Mobile Ready</p>
	<h1>Xiaomi Redmi Note 4</h1>
	<p>Redmi 8A dual comes wit all portrait mode and all scense detecrtion</p>
	<button type="submit" name="shopnow" class="btn btn-warning">Shop Now</button>
	</form>
	</div>
	</div>
	<div class="item">
	<img class="img-responsive"  src="index_images/zoom/z3.jpg" alt="Caption 3" />
	<div class="carousel-caption">
	<form method="post" action="">
	<p>Mobile Ready</p>
	<h1>Xiaomi Redmi Note 4</h1>
	<p>Redmi 8A dual comes wit all portrait mode and all scense detecrtion</p>
	<button type="submit" name="shopnow" class="btn btn-warning">Shop Now</button>
	</form>
	</div>
	</div>
	</div>
	<a  class="carousel-control left"href="#carouselslide" data-slide="prev">
	 <span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="carousel-control right" href="#carouselslide" data-slide="next">
	 <span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	
	</div>
<!-- /First slider -->

<!--Shop by Category 

<div class="container-fluid">
	
	
	<div class="row">
	
	<div class="col-xs-12  col-sm-6 col-md-4 col-lg-3 ">
	<div class="grid-frame" >
	<h3 class="text-center">Shop By Category</h3>
	<br>
	<div class="thumbnail">
	<div class="row">
	
	<div class="col-xs-6">
	<a href="#">
	Whisky
	<img src="index_images/p134.jpg" class="img-responsive " title="Explore More !">
	</a>
	</div>
	<div class="col-xs-6">
	<a href="#">
	Wine&amp;<small>Champagne</small>
	<img src="index_images/p141.jpg" class="img-responsive " title="Explore More !">
	</a>
	</div>
	<div class="col-xs-6">
	
	<a href="#">
	Vodka
	<img src="index_images/p142.jpg" class="img-responsive " title="Explore More !">
	</a>
	</div>
	<div class="col-xs-6">
	<h3><a href="#">Other Spirits</a></h2>
	</div>

	</div>
	</div>
	</div>
	</div>
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
	
	<div class="grid-frame">
	<h3 class="text-center">Avectime <br>Scotch Whisky</h3>
	<a href="#" class="thumbnail">
	<img src="index_images/p136.jpg" class="img-responsive " title="Shop Now !">
	<p class="text-center">Shop Now</p>
	</a>
	</div>
	</div>
	
	<div class="col-xs-12  col-sm-6 col-md-4 col-lg-3">
	<div class="grid-frame"  >
	<h3 class="text-center">Avectime <br>Champagne</h3>
	<a href="#" class="thumbnail">
	<img src="index_images/p134.jpg" class="img-responsive " title="Open Hapiness !">
	<p class="text-center">Open Happiness</p>
	</a>
	</div>
	</div>
	
	<div class="col-xs-12  col-sm-6 col-md-4 col-lg-3 ">
	<div class="grid-frame" >
	<h3 class="text-center">Sign in for the Best Expirience</h3>
	<button class="btn btn-lg btn-info btn-block" title="Try, it's free !">Sign in Securely</button>
	<p class="text-center">New Customer ? <a href="#">Start here.</a></p>
	
	
	</div>
	</div>
	
      </div>

	  </div>
<!-- /Shop by Category  -->


<!-- Second slider

<section id="top-sale">
	<div class="container-fluid" id="secondcarousel">
	<h2>Top Sale</h2>
	<hr>
	<!-- second carousel -->
	 <!-- First Image Carousel
	<div class="carousel slide "  data-interval="false" data-ride="carousel"id="secondslide" >
	
	<div class="carousel-inner">
	<div class="item active">
	<div class="row">
	<div class="col-xs-2">
	
	<img class="img-responsive" src="index_images/p132.jpg" alt="Caption 1" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive" src="index_images/p133.jpg" alt="Caption 1" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive" src="index_images/p134.jpg" alt="Caption 1" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive" src="index_images/p135.jpg" alt="Caption 1" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive" src="index_images/p136.jpg" alt="Caption 1" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive" src="index_images/p137.jpg" alt="Caption 1" />
	</div>
	</div>
	</div>
	<div class="item">
	<div class="row">
	<div class="col-xs-2">
	<img class="img-responsive"  src="index_images/p138.jpg" alt="Caption 2" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive"  src="index_images/p146.jpg" alt="Caption 2" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive"  src="index_images/p140.jpg" alt="Caption 2" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive"  src="index_images/p141.jpg" alt="Caption 2" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive"  src="index_images/p142.jpg" alt="Caption 2" />
	</div>
	<div class="col-xs-2">
	<img class="img-responsive"  src="index_images/p145.jpg" alt="Caption 2" />
	</div>
	</div>
	</div>
	
	
	</div>
	<div  class="carousel-control left"data-target="#secondslide" data-slide="prev">
	 <span class="glyphicon glyphicon-chevron-left"></span>
	</div>
	<div class="carousel-control right" data-target="#secondslide" data-slide="next">
	 <span class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<!-- second carousel -->
	</div>
	</div>
	</section>

<!-- /Second slider -->
</main>

<!-- /main section -->
<footer></footer>















 
         
          
 
    <script src="setup/jquery-3.4.1.min .js"></script>
     <!--Bootstrap-- -->
    <script src="setup/bootstrap/js/bootstrap.min.js"></script>
	 <!--Slick-- -->
	 <script src="setup/slick/slick/slick.js"></script>
	  <!--JQUI-- -->
		  <script src="setup/jqueryui/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){

/*First slide*/
$(".slider-one")
.not(".slick-initialized")
.slick({
	
	autoplay:true,
	autoplaySpeed:3000,
	dots:true,
    prevArrow:".site-slider .slider-btn .prev",
    nextArrow:".site-slider .slider-btn .next",		
});	

 /*Second Slider*/
$(".slider-two")
.not(".slick-initialized")
.slick({
	

	autoplaySpeed:3000,
    prevArrow:".site-slider-two .slider-btn .prev",
    nextArrow:".site-slider-two .slider-btn .next",	
    slidesToShow:5,	
	slidesToscroll:1
});	

	

$("#image1").on({
	
		mouseover:function(){
		
		$(".btn-span1").addClass("slider-text");
	},
	mouseout:function(){
		
         $(".btn-span1").removeClass("slider-text");
	}
	
});
	
	
/*Post main search input data via ajax;*/
	
	//Very small screen ajax  auto search code
	$('#form-xs').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-xs').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});

//Small to medium screen main auto search ajax codes
	
	$('#form-sm').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-sm').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});
	
	//medium  device screen main search ajax codes
	
	$('#form-md').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-md').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});

/*Hide myseach div box When click outside*/	
	$('body').click(function(e){
	
	$('form #mysearch').hide();
	//if(!$(e.target).closest("#mysearch").length){$("#mysearch").hide()}
})


//End of main search input data via ajax;
	

/*If user click to my account in  header element, display 
user account page using jqui dialog.
Jqui set up are in index.php page 
*/

$('#account').click(function(){
	
	//alert('working');
	
	$("#myaccount").dialog({
title:'My Account',		
closeOnEscape:false,
modal:true,
autoOpen:true,
draggable:false,
width:'auto',
height:'auto',

		
	});
})


	
		

	
	
	
	
	
	
	
	

});
	</script>
	
  </body>
</html>