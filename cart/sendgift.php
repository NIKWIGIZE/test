<?php 
//Include connection and security
require("include/connection.php");
require("../security/security.php");
?>

<?php

//check if  send gift check box is clicked

if(isset($_POST['productId'])||isset($_POST['update'])){
	
	echo $productId=escape($_POST['productId']);
	echo $is_gift=escape($_POST['update']);
	
//update gift collumn in added_to_cart table 

$query=$conn->prepare("UPDATE added_to_cart SET gift=? WHERE cart_id=?") or die($conn->error);	
$query->bind_param('si',$is_gift,$productId);	
$query->execute();	
}



 ?>