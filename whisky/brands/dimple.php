<?php 
/*ADD TO CART*/
session_start();

?>
<?php 
//SECURITY FIRST
require_once("../../security/security.php");
//include connection 
require_once("../../include/whisky_Db.php");

//Create class object;
$db=new connect_product();

//echo $db->conn;
//Include second connection
require_once("../../include/conn.php");
?>



<!--Add to cart button of the thumbnails  main page--->
 <?php 
//Add product to cart when user click add to cart button

if(isset($_POST['mycart'])){
	
	$dimple_id=escape($_GET['id']);
	$id=filter_var($dimple_id,FILTER_VALIDATE_INT);
	header("location:brand-size/forms/signin.php?id=$id");
   
}

?>
<!--Add to cart button of the thumbnails  main page--->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/style.css" rel="stylesheet">
    <!-- Slick -->
    <link href="../../setup/slick/slick/slick.css" rel="stylesheet">
	  <link href="../../setup/slick/slick/slick-theme.css" rel="stylesheet">
	   <link href="../../setup/zoom-image/css/jquery.jqZoom.css" rel="stylesheet">

<style>
#modal{
	position:fixed;
	top:0;
	left:0;
	width:100%;
	z-index:100;
	
}
.modal-bg{
	position:fixed;
	background-color:rgba(0,0,0,.8);
	width:100%;
	height:100%;
	top:0;
	left:0;
	z-index:100;
	background-color:rgba(0,0,0,.8);
}

.modal-box{
	position:fixed;
	width:850px;
	left:20%;
	margin-top:200px;
	height:auto;
	padding:20px;
	background-color:white;
	z-index:1000;
	
}

.popover{
	
	width:400px;
}
.popover-content a:hover{
	color:orange;
}
.progress{
	
	margin-left:40px;
	margin-right:40px;
	
	
}
.progress .progress-bar{
	
	color:black;
}
.progress .progress-bar-warning{
	background-color:#f7bf17;!important;
}
.progressBar{
	margin-bottom:-45px;
}
.ratingBar span{
	position:relative;
	top:20px;
	
}

.ratingBar i{
	position:relative;
	top:-40px;
	left:340px;
}
</style>
	
  </head>
  <body>
  <!-- Header section -->
<header>
<?php 
require_once('header/very_small_screen.php');
require_once('header/small_medium_screen.php');
require_once('header/medium_screen.php');
?>
</header>
<!-- /Header section -->
<!-- Main section -->
   <main>
   <!-- Product Informations -->
  <div class="container-fluid">
  <div class="row" id="main">
  <?php 
  require_once("dimple_function.php");
 // dimple("images/zoom/z1.jpg","Produt Name",24,20,0,"300ml");
  ?>
  
  <?php
  /*Open the page when user autosearch the page or 
	when user click see product details in whisky.php page*/
	  if(isset($_GET['q'])){
		  
		$search_query= filter_var(escape($_GET['q']),FILTER_SANITIZE_STRING);
		  
		  $query=$conn->prepare("SELECT*FROM whisky_brands WHERE product_name=?")or die($conn->error);
	      $query->bind_param('s',$search_query);
	      $query->execute();
		  //bind result
		  $result=$query->get_result();
		   while($row=$result->fetch_assoc()){
	 dimple($row['product_image'],$row['product_name'],$row['actual_price'],$row['discount_price'],
	 $row['delivery_price'],$row['size'],$row['id']);  
	  
  }
	  }
	  
	else{
		if(isset($_SESSION['product_id'])){
  $result=$db->product();
  
  while($row=$result->fetch_assoc()){
	 dimple($row['product_image'],$row['product_name'],$row['actual_price'],$row['discount_price'],
	 $row['delivery_price'],$row['size'],$row['id']);  
	  
  }
  }
		
	}  
  
  
  
  
  ?>
  
   <!--/Product Description-->
   
    <!--rightside bar-->
  <div class="col-md-2"><div id="rigtsidebar">Related Product </div></div>
   <!--rightside bar-->
   
  </div>
  
  </div>
   <!-- /Product Informations -->
   </main>
  <hr>
  
  <main>
   <!-- Ajax -->
  <div id="thumbnail"></div>
  <!-- Ajax Modal -->
  
  <!--product review -->
  <?php 
  //include review.php page
  
  require('productReview/review.php');
  require('productReview/reviewComment.php')
  ?>
   <!--/product review -->
  </main>
 <!-- /Main section -->
  
 

  
 
  <div id="modal" style="display:none;">
   <div class="modal-bg"></div>
   <div class="modal-box">
   </div>
   </div>
  <!-- / Ajax Modal -->
  <script src="../../setup/jquery-3.4.1.min .js"></script>
    
    <script src="../../setup/bootstrap/js/bootstrap.min.js"></script>
	 <script src="../../setup/slick/slick/slick.js"></script>
	 	<! <script src="zoom/jquery.magnifier.js"></script>
	 <script src="../../setup/zoom-image/js/jquery.jqZoom.js"></script>
	<script>
	$(document).ready(function(){
	

	//ZOOM MAIN IMAGE ON HOVER
$(function(){

  $(".mainImage img").jqZoom({

    selectorWidth: 40,
    selectorHeight: 40,
    viewerWidth: 800,
    viewerHeight: 500

 

  });

})

//Hide product description when hvering over main image(ie:when zooming)	
	
$(".mainImage").mouseover(function(){
	
	//alert("Working");
	$("#desciption,#rigtsidebar").hide();
})	
$(".mainImage").mouseout(function(){
	
	//alert("Working");
	$("#desciption,#rigtsidebar").show();
})		


/*NAVIGATE THROUGH THUMBNAILS	*/

//Load second image  thumbnail of dimple where id=1 in database 	
	
	$("#image-size #image2").click(function(e){
		
		e.preventDefault();
		//alert("Working");
		
		var cataloge='di001';//database id of product we want to load
		$.post('brand-size/dimple/bs2.php #dimple_second_thumbnail',{cataloge},function(data){
			
			$("#thumbnail").html(data);
			$("#main").hide();
			
			})
	})

  
//Load third image  thumbnail of dimple where id=2 in database 	
	
	$("#image-size #image3").click(function(e){
		//alert("working");
		e.preventDefault();
		
		
		var cataloge="di002";;//database id of product we want to load
		$.post('brand-size/dimple/bs3.php #dimple_thumbnail',{cataloge},function(data){
			
			$("#thumbnail").html(data);
			$("#main").hide();
			
			})
		
	})


//Load the fourth image thumbnail page , when click fourth image

$('#image-size #image4').click(function(e){
	
	e.preventDefault();
	
	var cataloge='di003';
	
	$.post('brand-size/dimple/bs4.php #dimple_thumbnail',{cataloge},function(data){
		
		$("#thumbnail").html(data);
		$("#main").hide();
	})
	
})






//GET SELECTED QUANTITY AND SHOW MODAL RESULT

$('#add').click(function(e){
   e.preventDefault();
		var select=$(".select").val();
		var product='dimple';
	//alert(select);
	
	$.post('include/modal.php ',{select,product},function(data){
		//location.reload(data);
		$("#modal .modal-box").html(data);
	    $("#modal").fadeIn();
	})

});

//dismiss modal on click

$(".modal-bg").click(function(){
	
	$("#modal").fadeOut();
})	
		

//call popover when hove over star rating

$(".star").popover({
	
	trigger:'click',
	content:
	' <div class="row"> <div class="col-xs-12"><h4>4.00 Out Of 5</h4> <div class="star">'+
    '<div class="greyStar"></div> <div class="filledStar"style="width:60%;"></div></div>'+
'<p>&nbsp;&nbsp;|&nbsp;(1000) Ratings</p></div> </div>'+
	'<div class="row"><div class="col-md-12 ratingBar">'+
	'<div class="progressBar"><span>5 star</span>'+
	'<div class="progress"><div class="progress-bar progress-bar-warning" style="width:60%;">'+ 
	'60%</div></div>'+
	'<i>71%</i></div>'+
	
	'<div class="progressBar"><span>4 star</span>'+
	'<div class="progress"><div class="progress-bar progress-bar-warning" style="width:15%;">'+ 
	'15%</div></div>'+
	'<i>15%</i></div>'+
	
	'<div class="progressBar"><span>3 star</span>'+
	'<div class="progress"><div class="progress-bar progress-bar-warning" style="width:20%;">'+ 
	'20%</div></div>'+
	'<i>5%</i></div>'+
	
	'<div class="progressBar"><span>2 star</span>'+
	'<div class="progress"><div class="progress-bar progress-bar-warning" style="width:10%;">'+ 
	'10%</div></div>'+
	'<i>2%</i></div>'+
	
	'<div class="progressBar"><span>1 star</span>'+
	'<div class="progress"><div class="progress-bar progress-bar-warning" style="width:30%;">'+ 
	'30%</div></div>'+
	'<i>6%</i></div>'+
	
	'</div><div class="col-md-12"><br><br><a href="productReview/allReview.php">See All Customer Review</a></div></div>',
	html:true,
	placement:'bottom'
});	
	






	

});
	</script>
	
  </body>
</html>