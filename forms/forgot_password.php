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
	
	#forgot-pass .btn{
		border:1px solid black;
		color:black;
	}
	#forgot-pass a:hover{
		color:orange;
	}
   </style>
  </head>
  <body>
 
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-4 col-md-offset-4">
 <h3>Forgot Password</h3>
 <hr>
 <form id="forgot-pass"method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
 <div class="form-group">
 <label id="name">Name</label>
 <input type="text" name="name" value="" class="form-control" required 
 placeholder="The Name You Used to Create an Account" autocomplete="off">
 
 </div>
  <div class="form-group">
 <label id="email">Email Adress</label>
 <input type="email" name="email" value="" class="form-control" required 
 placeholder="The Email You Used to Create an Account"autocomplete="off">

 </div>
  <div class="form-group">
 <label id="phone">Phone Number:</label>
 <input type="text" name="phone" value="" class="form-control" required 
 placeholder="The Phone Number You Used to Create an Account" autocomplete="off">
 
 </div>
 <div class="form-group">
 <input type="submit" name="submit" value="Submit" class="btn btn-warning btn-block">
 </div>
 <p>Back to Sign In <a href="signin.php">Click Here.</a></p>
 </form>
 <div>
 
 </div>
 </div>
 </div>
 </div>
 
 <?php 
 
 
 
 
 
 //check if the name,email and password user  type into input is simillar to those from db
 //clue:is that is is the same as sign in form validation 
 if(isset($_POST['submit'])){
	 
	 $name=escape($_POST['name']);
	  $email=escape($_POST['email']);
	   $phone=escape($_POST['phone']);
	 
	 
	 $query=$conn->prepare("SELECT*FROM user_account WHERE name=? AND email=? AND phone=?")or die($conn->error);
       $query->bind_param('sss',$name,$email, $phone);
	    $query->execute();
		
		//bind result
		
		$result=$query->get_result();
		
		if($result->num_rows==1){
			
			//Store email that user type in input field into a session
			
			$_SESSION['user_email']=$email;
			
			//Then redirect user t create password file
			
			header("location:create_password.php");
		}
		else{
			
			//validate ,name,email, password individually
			
			$checkname=$conn->prepare("SELECT*FROM user_account WHERE name=?")or die($conn->error);
			$checkname->bind_param('s',$name);
			$checkname->execute();
			
			//bind result
			$result=$checkname->get_result();
			if($result->num_rows==0){
			echo "<script>alert('Your Name is not correct');</script>";
	      echo "<script>window.open('forgot_password.php','_self');</script>"; 	
				
			}
			
			//validate ,name,email, password individually
			
			$checkemail=$conn->prepare("SELECT*FROM user_account WHERE email=?")or die($conn->error);
			$checkemail->bind_param('s',$email);
			$checkemail->execute();
			
			//bind result
			$result=$checkemail->get_result();
			if($result->num_rows==0){
			echo "<script>alert('Your Email is not correct');</script>";
	      echo "<script>window.open('forgot_password.php','_self');</script>"; 	
				
			}
			//validate ,name,email, password individually
			
			$checkphone=$conn->prepare("SELECT*FROM user_account WHERE phone=?")or die($conn->error);
			$checkphone->bind_param('s',$phone);
			$checkphone->execute();
			
			//bind result
			$result=$checkphone->get_result();
			if($result->num_rows==0){
			echo "<script>alert('Your Phone Number is not correct');</script>";
	      echo "<script>window.open('forgot-password.php','_self');</script>"; 	
				
			}
			
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