<?php 
session_start();

?>


<?php
//include security

require_once('../security/security.php');

//Include connection 
require_once("../include/whisky_Db.php");

//Create class object;
$db=new connect_product();

//echo $db->conn;

 ?>
 <?php  //==============PHP CODE TO VALIDATE LINKS AND BUTTONS=================


//====Validate see product detail button===

/*We first added string query in our form action ,action="index.php?id='.$id.'"

So we have this id from data base and we haeve excuted it in product_medium() function,

then we get that id from URL on submit.

if id we get from URL is equal to id in DB  of product we click on. so we direct user to
that page;
 */
 
 //get the id fro url when user click on see detail button (we passed id in form action)
	 if(isset($_POST['cart_detail'])){
		 
		// $_GET['id'];
		
		
	 global $db;
	  $result=$db->get_product_from_db();
 
     
	 
	 while($row=$result->fetch_assoc()){
		 $row['id'];//fetch all id from databse
		 if($row['id']==escape($_GET['id'])){
			 
			 header("location:brands/".$row['product_name']);
		 }
		 
	 }
	//create session to hold id of each product
	$_SESSION['product_id']=escape($_GET['id']);
 }
 
 //get id fro url when user click ancor element(we passed id in href)
 
 if(isset($_GET['id'])){
	 
	 //echo $_GET['id'];
	 
	  global $db;
	  $result=$db->get_product_from_db();
 
     
	 
	 while($row=$result->fetch_assoc()){
		 $row['id'];//fetch all id from databse
		 if($row['id']==escape($_GET['id'])){
			 
			 header("location:brands/".$row['product_name']);
		 }
		 
	 }
	 $_SESSION['product_id']=escape($_GET['id']);
 }
 
 
 
 ?>


 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
    <!-- Slick -->
    <link href="../setup/slick/slick/slick.css" rel="stylesheet">
	  <link href="../setup/slick/slick/slick-theme.css" rel="stylesheet">
	  
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

<!--Main--->
<main>
<div class="container-fluid">
<div class="row">
<!--Left Sidebar--->
<div class="col-md-2"></div>
<!--/Left Sidebar--->
<!--Right Sidebar--->

<div class="col-md-10">

<div class="row">
<?php 

require('whisky_function.php');
?>

<?php 
//create object of our function 
$result=$db->get_product_from_db();

while($row=$result->fetch_assoc()){
product_medium($row['product_image'],$row['product_name'],$row['product_desc'],
$row['actual_price'],$row['discount_price'],$row['delivery_price'],$row['id']);	
	
}



	
?>







</div>





</div>
<!--/right Sidebar--->
</div>
</div>

<!--Browsing Hx--->

<?php

require('../browsingHx/browsing.php');

 ?>

<!--Browsing Hx--->


</main>
<!--Main--->






<!--Footer--->
<footer></footer>
<!--footer--->
















    
	<!--Jquery--->
    <script src="../setup/jquery-3.4.1.min .js"></script>
    <!---Bootstrap--->
    <script src="../setup/bootstrap/js/bootstrap.min.js"></script>
	<!---Slick pluggin for image coursel--->
	 <script src="../setup/slick/slick/slick.js"></script>
	<script>
	$(document).ready(function(){
//HAEDER AUTO SEARCH INPUT.

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
/*Hide myseach div box When click outside*/	
	$('body').click(function(e){
	
	$("form #mysearch").hide();
})

//End of main search input data via ajax;	
	
	
		


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

});
	</script>
	
  </body>
</html>