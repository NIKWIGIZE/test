<!DOCTYPE html>
<?php  
session_start();

require_once("../include/conn.php");
require_once("../security/security.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Avectime.com</title>

    <!-- Bootstrap -->
    <link href="../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<! <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
	 <!<link rel="stylesheet" href="css/style.css">
	<style>
	#create-pass .btn{
		border:1px solid black;
		color:black;
	}
   </style>
  </head>
  <body>
 
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-4 col-md-offset-4">
 <h3>Create New Password</h3>
 <hr>
 <form id="create-pass" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
 <div class="form-group">
 <label id="new_password">New Password</label>
 <input type="password" name="new_password" value="" class="form-control" required 
 placeholder="New Password" autocomplete="off">
 <span>Password Should Be 8 Characters Minimum.</span>
 </div>
  <div class="form-group">
 <label id="confirm_password">Confirm Password</label>
 <input type="password" name="confirm_password" value="" class="form-control" required 
 placeholder="Confirm password" autocomplete="off">

 </div>
 
 <div class="form-group">
 <input type="submit" name="submit" value="Create Password" class="btn btn-warning btn-block">
 </div>
 </form>
 <div>
 
 </div>
 </div>
 </div>
 </div>
 
 <?php 
 
 if(isset($_POST['submit'])){
 
 $user_email=$_SESSION['user_email'];
 
 $new_password=escape($_POST['new_password']);
  $confirm_password=escape($_POST['confirm_password']);
 
 //validate password
 
 if(strlen($new_password)<8){
	 
	 echo "<script>alert('Your Password Has to be 8 Characters Minimum');</script>";
	 echo "<script>window.open('create-password.php','_self');</script>";
     exit();
 }
 
 //check if new password is equal to confirm password;
 if($new_password!==$confirm_password){
	echo "<script>alert('Your password are not simillar');</script>";
	 echo "<script>window.open('create-password.php','_self');</script>"; 
	 exit();
 }
 
 if($new_password===$confirm_password){
 //update database
 $update=$conn->prepare("UPDATE  user_account SET password=?,re_password=? WHERE email=?")or die($conn->error);
   $update->bind_param('sss', $new_password,$confirm_password, $user_email);
   $update->execute();
   
   
if($update){
echo "<script>alert('Your new Password has been created successifully');</script>";
	 echo "<script>window.open('signin.php','_self');</script>";	
}

session_destroy();//will alow user to log in with new password.
 }
 }
 
 ?>
 
 
 
 
 
 
 
 <script src="../setup/jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){


		
	});
	</script>
	
  </body>
</html>