
<!DOCTYPE html>
<?php
session_start();
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
	 <link rel="stylesheet" href="../style.css">
	<style>
	
	form #btn{
		border:1px solid black;
		color:black;
	}
	#signin a:hover{
		color:orange;
	}
	#signin h2{
		color:black;
	}
   </style>
  </head>
  <body>
 
 
 
 
 
 
 <div class="container">
 <div id="dialoge">
<?php 
/*Create php code so that if user click cart element and if he has
already sign in , direct to cart.php page .if not he has to sign in first*/ 

if(isset($_SESSION['email'])){
	
	
	//header("location:cart/cart.php");
	echo "<script>window.open('cart.php','_self')</script>";
	
}
else{
	
	//Display Sign in form , if he has not already sign in.

	?>
	<div class="row">
 <div class="col-md-4 col-md-offset-4">
 <form method="post" action="signin_user.php">
 <div >
 <h2>Sign In</h2>
 <hr>
 </div>
 
 <div class="form-group">
 <label style="color:black;">Email:</label>
 <input class="form-control"type="email" name="email" value="" placeholder="example@gmail.com"
 autocomplete="off" required />
 </div>
 
 <div class="form-group">
 <label style="color:black;">Password:</label>
 <input class="form-control"type="password" name="pass" value="" placeholder="password"
 autocomplete="off" required />
 </div>
 
 <div class="small" style="color:black;">Forgot Password?<a href="forgot_pass.php">Click Here</a></div>
 <br>
 <div class="form-group">
<input id="btn"class="btn btn-warning btn-block "type="submit" name="sign_in" value="Sign In">
 
 </div>
 </form>
 <div id="create_account"class="text-center small" style="color:#67428B;">
 Don't Have an Account ?<a href="signup.php">Create One</a>
 </div>

 </div>
 </div>
 </div>
 </div>
 	


<?php
} //close else statment	
?>
 

 
 
 <script src="../setup/jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){



$("form").submit(function(e){
	e.preventDefault();
	var email=$("#email").val();
	var pass=$("#pass").val();
	
	$.post("signin_user.php",{email,pass},function(data){
		
		$("#post_data").html(data);
		$("#signin").hide();
	});




	
	
		
	});
	</script>
	
	
	
  </body>
</html>