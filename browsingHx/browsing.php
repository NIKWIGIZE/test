<!DOCTYPE html>
<?php 
//include connection

require('../include/conn.php');


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
	   <!-- Jqscript.net -->
	   <link href="../setup/zoom-image/css/jquery.jqZoom.css" rel="stylesheet">
	    <!-- JQUI-->
	  
	  <style>
	  .carousel .carousel-control{
		  margin:auto;
		  height:50px;
		  width:50px;
		  border:1px solid grey;
		  color:black;
		  margin-left:-20px;
		  background-color:#e2e2e2;
		  opacity:1;
		  text-shadow:0 1px 2px;
	  }
	  .carousel .carousel-control:hover{
		  opacity:0.6;
	  }
	   .carousel .carousel-control:focus{
		 box-shadow: 2px 2px 2px orange;
	   }
	  .carousel .carousel-inner{
		  margin-left:80px;
		  margin-right:80px;
	  }
	  .signin {
		  margin-top:100px;
	  }
	   .signin .btn-warning{
		   border:1px solid black;
		   color:black;
	   }
	  
	   .signin p{
		   padding-top:10px;
	   }
	   .signin p a:hover{
		   color:orange;
	   }
	   .brwose a{
		   color:blue;
	   }
	   .brwose a:hover{
		   color:orange;
		   
	   }
	  
	   hr{
		   border:1px solid #e2e2e2;
	   }
	    .page1, .page2{
			 position:relative;
		   top:1px;
		}
	   .page1{
		  
		   left:80%; 
	   }
	   .page2{
		  
		   left:70%;  
	   }
	  </style>
  </head>
  <body>
  
 <div class="container">
 <hr class="hr">
 <div class="row">
 <div class="col-xs-9 brwose">
 <h3>Your Browsing History 
 <a  class="small"href="#">View Or Edit Your Browsing History 
 &rsaquo;</a> </h3>
 <div class="carousel slide" data-interval="false" data-ride="carousel" id="carouselindicator">
 <div class="carousel-inner">
  <div class="item active" >
 <div class="row">
 <?php 
 require('browsing_function.php');

 
 //select all from added to cart table
 if(isset($_SESSION['email'])){
	
	 $added_to_cart=$_SESSION['email'];
	 
	 $select=$conn->prepare("SELECT*FROM added_to_cart WHERE email=? LIMIT 5")or die($conn->error);
	 $select->bind_param('s',$added_to_cart);
       $select->execute();
	   
	   //bind result
	  $result= $select->get_result();

     if ($result->num_rows>0){
		  echo "<div class='page1'>Page 1 of 2</div>";
		 while($row=$result->fetch_assoc()){
			browsing_history($row['product_image'],$row['product_name'],$row['product_catalogue']); 
			
		 }
	 }	  
	   
 }
 
 ?>
 
 </div>
 </div>
 
   <div class="item ">
 <div class="row">
 <?php
 //select all from added to cart table
 if(isset($_SESSION['email'])){
	 
	 $added_to_cart=$_SESSION['email'];
	 
	 $select=$conn->prepare("SELECT*FROM added_to_cart WHERE email=? LIMIT 5 OFFSET 5")or die($conn->error);
	 $select->bind_param('s',$added_to_cart);
       $select->execute();
	   
	   //bind result
	  $result= $select->get_result();

     if ($result->num_rows>0){
		 echo  "<div class='page2'>Page 2  of 2 | <a href='#'>Back to Page 1</a></div>";
		 while($row=$result->fetch_assoc()){
			browsing_history($row['product_image'],$row['product_name'],$row['product_catalogue']); 
			
		 }
       }
	   
 }
 
 ?>
 </div>
 </div>
 </div>
 
 <a href="#carouselindicator" class="carousel-control left" data-slide="prev">
 <span style="font-size:40px; padding-top:-10px;" >&lsaquo;</span>
 </a>
 <a href="#carouselindicator" class="carousel-control right" data-slide="next">
 <span style="font-size:40px; padding-top:-10px;">&rsaquo;</span>
 </a>
 
 </div>
 
 </div>
 <div class="col-xs-3">
 <div class="signin">
 <h6 class="text-center">Sign In For Better Experience</h6>
 <a href="../forms/signin.php" class="btn btn-warning btn-block"> Sign In</a>
 <p class="small text-center">New Customer? <a href="../forms/signup.php">Start Here</a></p>
 </a>
 </div>
 </div>
 </div>
 <hr class="hr">
</div>

 
 
 
    <script src="../setup/jquery-3.4.1.min .js"></script>
    <!-- bootstrap-->
    <script src="../setup/bootstrap/js/bootstrap.min.js"></script>
	
	
	 <script>
 $(document).ready(function(){
	 
	
	 
 })
 </script>
  </body>
</html>