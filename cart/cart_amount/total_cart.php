<?php
//Display amount in cart of a user who sign into account;

if(isset($_SESSION['email'])){
	
	$email=$_SESSION['email'];
	
	$query=$conn->prepare("SELECT*FROM added_to_cart WHERE email=?") or die($conn->error);
	$query->bind_param('s',$email);
	$query->execute();
	
	//bind result;
	
	$result=$query->get_result();
	
	$total=$result->num_rows;	


 ?>

<li ><a href="cart/signin.php">Cart <span class="badge"><?php echo $total; ?></span></a></li>
<?php 
}else{
echo '<li ><a href="cart/signin.php">Cart <span class="badge">0</span></a></li>';	
	
} ?>