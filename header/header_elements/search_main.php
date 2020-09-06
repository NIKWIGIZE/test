

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bigrwanda.com</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="search.css" rel="stylesheet">
   
     <!-- slick -->
	  <link href="slick/slick/slick.css" rel="stylesheet">
	   <link href="slick/slick/slick-theme.css" rel="stylesheet">
	    
		<style>
		
		#mysearch{
			
			background-color:transparent;
			width:200px;
			position:absolute;
			top:55px;
			left:275px;
			z-index:40000;
			border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

		}
		#mysearch #component{
			
			padding-left:20px;
			padding-top:5px;
			background-color:white;
			
		}
		@media (max-width: 768px){
	
		#mysearch{
			position:absolute;
			top:85px;
			left:20px;

		}
}
	@media(min-width:768px) and (max-width:992px){
	
		#mysearch{
			
			position:absolute;
			top:45px;
			left:235px;

		}
}		
@media(min-width:1000px){
	
		#mysearch{
			
			position:absolute;
			top:44px;
			left:300px;

		}
}
		</style>
	 
  </head>
  <body >


<?php

require_once('connection.php');

 ?>
 
 
 
 <div class="container " >
 <div id="mysearch">
 <?php 

 //get input data
 
 
 if(isset($_POST['search'])){
	 
	$component= escape($_POST['search']);
	
	
	//select all data from main_search
	
	$select=$conn->prepare("SELECT component FROM main_search WHERE component LIKE
	CONCAT('%',?,'%')") or die($conn->error);
	
	$select->bind_param('s',$component);
	$select->execute();
	
	//bind result
	
	$result=$select->get_result();
	

	while($row=$result->fetch_assoc()){
		
		echo "<div id='component'>{$row['component']}</div>";
	 
		
	}
	
 }
 else{
	 //echo "No record Was Found";
 }


 ?>
 </div>
  </div>
 
 
 <?php 
 //function for security
 
 function escape($data){
	 
	 $data=htmlspecialchars($data);
	 $data=stripslashes($data);
	 $data=trim($data);
	 return $data;
 }
 
 ?>
 
    <script src="jquery-3.4.1.min .js"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
	 <script src="slick/slick/slick.js"></script>
	  <script src="js/main.js"></script>
	<script>
	$(document).ready(function(){



	
	
	
});
 </body>
</html>