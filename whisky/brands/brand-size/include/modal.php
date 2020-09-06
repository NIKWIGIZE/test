

<!DOCTYPE html>
<?php
 
 //Include signin_user.php page
//include_once("signin_user.php");
session_start();
//include connection
require_once('conn.php');

//security first

require_once("security.php");
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Avectime.com</title>

    <!-- Bootstrap -->
    <link href="../../../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<! <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/style.css">
	<style>
	
	form #btn{
		
		border:1px solid black;
		color:black;
	}
	
	#signin  a:hover{
		
		color:orange;
	}
	
	.modal-success{
	display:flex;
	justify-content:center;
	align-items:center;
	z-index:101;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background-color:beige;
	
}
   </style>
  </head>
  <body>
 
 
 <?php
//if user click add to cart button, he sent product id into url , then we get it

if(isset($_GET['id'])){
	
	//Get the id sent in url after clicking add to cart button
	$_SESSION['brand']=escape($_GET['id']);

}
 ?>
 
  
 <?php
 
	

	if(isset($_POST['select'])||isset($_POST['product'])){
	
	 $selected=escape($_POST['select']);
		$quantity=(int)filter_var($selected,FILTER_SANITIZE_NUMBER_INT);
	
	     $product=escape($_POST['product']);
		 
		 $_SESSION['product']=escape($_POST['product']);
	
	if(isset($_SESSION['email'])){	
		

/*if user has already sign in. we insert immediatly our product
	info into added to cart table*/
	
	$email=escape($_SESSION['email']);
	
	
	//select user Name from account and insert it into added to cart table
	
	$select=$conn->prepare("SELECT * FROM user_account WHERE email=?")or die($conn->error);
	$select->bind_param('s',$email);
	$select->execute();
	
	//bind results
	$result=$select->get_result();
	while($row=$result->fetch_assoc()){
		
		$name=$row['name'];
	}
	//select products form whisky brand;
	$query=$conn->prepare("SELECT*FROM whisky_brands_size WHERE product_cataloge=? ")or die($conn->error);
    
	$query->bind_param("s",$product);
    $query->execute();
	//bind result
	
	$result=$query->get_result();
	
	while($row=$result->fetch_assoc()){
	
	$id= $row['id'];
	 $product_image= $row['product_image'];
	$product_name=$row['product_name'];
	$product_price= $row['discount_price'];
	$size=$row['size'];
	$product_cataloge= $row['product_cataloge'];
	
	
/*Before inserting products info into added_to_cart, 
check if product doesn,t already exist*/

$sql=$conn->prepare("SELECT *FROM added_to_cart WHERE product_catalogue=? AND name=? ")or die($conn->error);
$sql->bind_param('ss',$product_cataloge,$name);
$sql->execute();

//bind result
$result=$sql->get_result();
if($result->num_rows==1){
	echo "Hello  <span class='text-capitalize'>$name</span> ! This Product is Already In Your Cart.";
//header("location:".$product_name);
exit();
}	
else{
//Insert these info above into add to cart table
   
	
	$insert=$conn->prepare("INSERT INTO added_to_cart(name,email,product_image,product_name,product_size,product_price,product_catalogue,quantity,date_ordered)
	VALUES(?,?,?,?,?,?,?,?,NOW())")or die($conn->error);
	$insert->bind_param('sssssssi',$name,$email,$product_image,$product_name,$size,$product_price,$product_cataloge,$quantity);
	$insert->execute();
	
	if($insert){
		//echo "Hello <span class='text-capitalize'>$name</span>,Your product has been added to Cart Successifully ";
	$update=$conn->prepare("UPDATE added_to_cart SET total_price=product_price*quantity")or die($conn->error);
	$update->execute();
	if($update){
	
	echo "Hello <span class='text-capitalize'>$name</span> ! Your Product Has Been Added To Cart.";
	}
	

	
	}
}
}

	
	
}
else{
	
	
	echo "
	<script>window.open('forms/signin.php?q=$product','_self');</script>
	";
}
}
	
 ?>
 


 
 <script src="../../../setup/jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){


$("form").submit(function(e){
	e.preventDefault();
	var email=$("#email").val();
	var password=$("#pass").val();
   
	$.ajax({
		type:'post',
		url:'forms/signin_user.php',
		data:{email,password},
		success:function(data){
			
			//$("#modal").html(data);
			location.reload(data);
		}
		
	});
	
	
	
})



	
	
		
	});
	</script>
	
  </body>
</html>