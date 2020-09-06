<?php 
session_start();
require_once('../include/conn.php');
require_once("../include/security.php");


if(isset($_GET['q'])){
	
	$_SESSION['product']=$_GET['q'];
}



if(isset($_POST['user_email'])||isset($_POST['user_password'])){
	
	
	$email= escape($_POST['user_email']);
	$password=escape($_POST['user_password']);
	
	$query=$conn->prepare("SELECT*FROM user_account WHERE email=? AND password=?")or die($conn->error);
	$query->bind_param('ss',$email,$password);
	$query->execute();
	
	//bind result
	$result=$query->get_result();
	
	if($result->num_rows==1){
		
		$_SESSION['email']=$email;
		
		if(isset($_SESSION['product'])){
			$product=$_SESSION['product'];
		echo "<script>window.open('../../../search_files/".$product.".php','_self');</script>";
	    }
	}
	else{
		
		//Validate email and password individually
		
		$checkemail=$conn->prepare("SELECT*FROM user_account WHERE email=?")or die($conn->error);
		$checkemail->bind_param('s',$email);
		$checkemail->execute();
		
		$result=$checkemail->get_result();
		
		if($result->num_rows==0){
			
			echo "
			<div class='alert alert-danger'>
			<span class='close' data-dismiss='alert'>&chi;</span>
			<p><i>Oops</i> Email is incorect</p>
			</div>
			";
		}
		
		
		$checkpassword=$conn->prepare("SELECT*FROM user_account WHERE password=?")or die($conn->error);
		$checkpassword->bind_param('s',$password);
		$checkpassword->execute();
		
		$result=$checkpassword->get_result();
		
		if($result->num_rows==0){
			
			echo "
			<div class='alert alert-danger'>
			<span class='close' data-dismiss='alert'>&chi;</span>
			<p><i>Oops</i> Password  is incorect</p>
			</div>
			";
		}
	}
}

?>