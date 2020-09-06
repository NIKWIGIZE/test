
<!DOCTYPE html>
<?php 

require_once("signin_user.php");

/*check signin_user to see where we set our session */
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Avectime.com</title>

    <!-- Bootstrap -->
    <link href="../../../../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<! <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
	 <!<link rel="stylesheet" href="css/style.css">
	<style>
	#signin_form .btn{
		border:1px solid black;
		color:black;
	}
	#signin_form a:hover{
		color:orange;
	}
   </style>
  </head>
  <body>
 
 
 <!--Create sign up form --->
 
 <div class="container">
 <div class="container-fluid">
 <div class="row">
 <div class="col-md-4 col-md-offset-4">
 <h3>Sign In</h3>
 <hr/>
 <form id="signin_form">
  <div class="form-group">
 <label for="email">Email Adress:</label>
 <input class="form-control" type="email" id="user_email" value=""placeholder="example@gmail.com" autocomplete="off" required/>
 </div>
  <div class="form-group">
 <label for="password">Password:</label>
 <input class="form-control" type="password" id="user_password" value=""placeholder="Password" autocomplete="off" required/>
 </div>
 <p>Forgot Password ?<a href="forgot_password.php"> Recover</a></p>
 <div class="form-group">
<button type="submit" name="signin" class="btn btn-warning btn-block">Sign In</button>
 </div>
 <p>Don't Have Account ? <a href="signup.php">Create One</a></p>
 </form>
 
 </div>
 </div>
 </div>
 </div>

 
 <div id="signin_success"></div>
 
 
 
 
 
 <script src="../../../../setup/jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){

//Submit data using ajax
  $("#signin_form").submit(function(e){
  e.preventDefault();
  //get sign in  values
  
 var  user_email=$("#user_email").val();
 var  user_password=$("#user_password").val();
  
  
  $.post('signin_user.php',{user_email,user_password},function(data){
	  
	  $("#signin_success").html(data);
  })
  })
		
	});
	</script>
	
  </body>
</html>