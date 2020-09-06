<?php 
//If User Confirm to DELETE Product from cart, direct to this page
session_start();
require_once("include/connection.php");

if(isset($_SESSION['cart_id'])){
	
$cart_id=$_SESSION['cart_id'];
$delete=$conn->prepare("DELETE FROM added_to_cart WHERE cart_id=? ")or die($conn->error);
 $delete->bind_param("s",$cart_id);
 $delete->execute();

if($delete){
	echo "<script>window.open('cart.php','_self');</script>";
	
}

}
?>