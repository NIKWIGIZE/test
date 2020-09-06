<?php 
/*ADD TO CART*/
session_start();


?>
<?php 
//security first
require_once("../../security/security.php");
//include connection 
require_once("../../include/whisky_Db.php");

//Create class object;
$db=new connect_product();

//echo $db->conn;
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

  <div class="container-fluid">
  <div class="row " id="main_page">
  
  <!-- Product description-->
  <?php 
 
  include("chivas_function.php");
  //chivas_legal("images/zoom/z10.jpg","Product Name",24,20);
    
	
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
	 chivas_legal($row['product_image'],$row['product_name'],$row['actual_price'],$row['discount_price'],
	 $row['delivery_price'],$row['size'],$row['id']);  
	  
  }
  } 
  else{
	  if(isset($_SESSION['product_id'])){
  $result=$db->product();
  
  while($row=$result->fetch_assoc()){
	  
chivas_legal($row['product_image'],$row['product_name'],$row['actual_price'],
$row['discount_price'],$row['delivery_price'],$row['size'],$row['id']);	  
  }
  }
  }
  
  ?>
   
  <!--/Product Description-->
   
    <!--rightside bar-->
  <div class="col-md-2"><div id="rigtsidebar">Related Product </div></div>
   <!--rightside bar-->
  <hr> 
  </div>
  </div>
  
  
  
 
 
 
 
  <!--Ajax --->
   <div id="post_data"></div>
   <!-- Ajax Modal -->
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
		<!----JQZoom for image zoom effect---->
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

//Load page of image two with id=5 in database with ajax on click 

$("#image-size #image2").click(function(e){
	//alert('working');
	e.preventDefault();
	var cataloge='cl001';
	$.post('brand-size/chivas_legal/bs2.php #dimple_second_thumbnail',{cataloge},function(data){
		
		$("#post_data").html(data);
		$("#main_page").hide();
	})
})

//Load page of image three with id=6 in database with ajax on click 

$("#image-size #image3").click(function(e){
	//alert('working');
	e.preventDefault();
	var cataloge='cl002';
	$.post('brand-size/chivas_legal/bs3.php #dimple_second_thumbnail',{cataloge},function(data){
		
		$("#post_data").html(data);
		$("#main_page").hide();
	})
})


//Load page of image four with cataloge=cl003 in database with ajax on click 

$("#image-size #image4").click(function(e){
	//alert('working');
	e.preventDefault();
	var cataloge='cl003';
	$.post('brand-size/chivas_legal/bs4.php #thumbnail',{cataloge},function(data){
		
		$("#post_data").html(data);
		$("#main_page").hide();
	})
	
})

//Load page of image five with cataloge=cl004 in database with ajax on click 

$("#image-size #image5").click(function(e){
	//alert('working');
	e.preventDefault();
	var cataloge='cl004';
	$.post('brand-size/chivas_legal/bs5.php #thumbnail',{cataloge},function(data){
		
		$("#post_data").html(data);
		$("#main_page").hide();
	})
	
})


//GET SELECTED QUANTITY AND SHOW MODAL RESULT

$('#add').click(function(e){
   e.preventDefault();
		var select=$(".select").val();
		var product='chivas legal';
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
		












	

});
	</script>
 
	
  </body>
</html>