<!DOCTYPE html>
<?php
session_start();
require_once('include/connection.php');
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Avectime.com</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	 <!<link rel="stylesheet" href="css/style.css">
	 <style>
	 
	 form #change_pass_btn{
		 border:1px solid black;
		 color:black;
	 }
	 
	 </style>
	 </head>
     <body>
  
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <h2 >Change Password</h2>
  <hr>
  <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
  
  <div class="form-group">
  <label id="old_password">Old Password:</label>
  <input type="password" name="Opassward" value="" class="form-control" required
  placeholder="Your old password"/>
  </div>
  
  <div class="form-group">
  <label id="new_password">New Password:</label>
  <input type="password" name="Npassward" value="" class="form-control" required 
  placeholder="Your new password"/>
  <p>Password has to be 8 characters minimum</p>
  </div>
  
  <div class="form-group">
  <label id="confirm_password">Confirm Password:</label>
  <input type="password" name="Cpassward" value="" class="form-control" required 
  placeholder="Confirm password"/>
  </div>
  <div class="form-group">
  
  <input id="change_pass_btn"type="submit" name="change" value="Change Password" 
  class="btn btn-warning btn-block"/>
  </div>
  </form>
  <div>
  </div>
  </div>
  
  <?php
 /*Remember that user is given a option to change password after sign in*/ 
  
  
//Get Password from database

$email=$_SESSION['email'];//session grab email user used to sign in

$query=$conn->prepare("SELECT*FROM signupuser WHERE email=?")or die($conn->error);
$query->bind_param('s',$email);
$query->execute();

//bind result

$result=$query->get_result();

while($row=$result->fetch_assoc()){
	//Fetch password from database to compare it to the one user will type as old 
	$password=$row['password'];
}

if(isset($_POST['change'])){
	
	$opassword=escape($_POST['Opassward']);
	 $npassword=escape($_POST['Npassward']);
	 $cpassword=escape($_POST['Cpassward']);
	
	//validate oldpassword input
	
	if(empty($opassword)){
		
	echo "
		<script>alert('Your Old password is required.');</script>
		<script>window.open('change_password.php','_self');</script>
		";
		exit();	
	}
	else{
		
		//check if old password user type is the same as the one in database
		if($opassword!==$password){
		
		echo "
		<script>alert('Your Old password is incorect.');</script>
		<script>window.open('change_password.php','_self');</script>
		";
		exit();
	}
		
	}
	
	//Validate new password
	
	if(empty($npassword)){
	echo "
		<script>alert('New password field is required');</script>
		<script>window.open('change_password.php','_self');</script>
		";
		exit();	
		
	}
	else{
	
	//Password has to be 8 character minimum
	
	if(strlen($npassword)<8){
	echo "<script>alert('Password has to be 8 characters minimum.');</script>
		<script>window.open('change_password.php','_self');</script>
		";
		exit();		
		
	}	
	}
	
	//check if confirm password is the same as new password 
	
	if($npassword!==$cpassword){
		
		echo "<script>alert('Confirm Password is not the same as New password .');</script>
		<script>window.open('change_password.php','_self');</script>
		";
		exit();	
	}
	
	//Update table
	
	$update=$conn->prepare("UPDATE signupuser SET password=? , re_password=? WHERE email=?")or die($conn->error);
	$update->bind_param('sss',$npassword,$cpassword,$email);
	$update->execute();
	
	if($update){
	echo "<script>alert('Your password has been updated successifully .');</script>
		<script>window.open('change_password.php','_self');</script>
		";	
		
	}
}


  ?>
  
  <?php 
  //Function to validate inputs
  
  function escape($data){
	  
	  $data=htmlspecialchars($data);
	  $data=trim($data);
	  $data=stripslashes($data);
	  return $data;
  }
  
  
  ?>
  
  
  
	<script src="jquery-3.4.1.min .js"></script>
  
    <script>
	$(document).ready(function(){
		
		
    });
	</script>
	
  </body>
</html>