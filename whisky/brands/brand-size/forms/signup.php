
<!DOCTYPE html>
<?php
 
 //Include a File that insert user sign up  inputs into database
require_once("signup_user.php");



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
	
	#signup a:hover{
		color:orange;
	}
	#signup .btn{
		
		border:1px solid black;
		color:black;
	}
	.information {
		margin-top:30px;
	}
	.information p{
		margin:0px;
	}
   </style>
  </head>
  <body>


 <!---CREATE A SIGN IN FORM--->
 
 <div class="container">
 <div class="row" >
 <div class="col-md-4 col-md-offset-4">
 <div id="signup-form">
 
 
  <!---FORM--->
 <form id="signup">
 
 <h3>Create Account</h3>
 <hr>
 <div class="form-group">
 <label style="color:black;">User Name:</label>
 <input class="form-control"type="text" id="user_name" value="" placeholder="User Name"
 autocomplete="off" required >
 </div>
 <div class="form-group">
 <label style="color:black;">Email Address:</label>
 <input class="form-control"type="email" id="user_email" value="" placeholder="example@gmail.com"
  required >
 </div>
 
  <div class="form-group">
 <label style="color:black;">Phone Number:</label>
 <input class="form-control"type="text" id="user_phone" value="" placeholder="Phone Number"
 autocomplete="off" required >
 
 <span>You don't have Phone Number ? <a href="no_phone_number.php"> Click Here.</a></span>
 
 </div>
 
 <div class="form-group">
 <label style="color:black;">Password:</label>
 <input class="form-control"type="password" id="user_pass" value="" placeholder="At Least 8 Characters"
 autocomplete="off" required >
  <span ><i class="text-info ">i</i>&nbsp;Password Should be at Least 8 Characters.</span>
 </div>
 
  <div class="form-group">
 <label style="color:black;">Re-enter Password:</label>
 <input class="form-control"type="password" id="confirm_pass" value="" placeholder="Re-enter password"
 autocomplete="off" required >
 
 </div>
 

 
 
  <!---Privacy policy--->
  
  <div class="form-group">
  <label class="checkbox-inline">
  <input type="checkbox" required> I Accept the 
  <a href="terms_of_use.php">Terms of Use</a> &amp;
  <a href="privacy.php">Privacy Policy.</a>
  </label>
  </div>

 <div class="form-group">
<input class="btn btn-warning btn-block "type="submit" id="sign_up" value="Create Your Account">
 
 </div>
 
 
 </form>
 <!---/FORM--->
 
 
 
 <!---Don't Have An Account--->
 <div id="has_account"class="text-center small" style="color:#67428B;">
 Aready Have an Account ?<a href="signin.php"> Sign In Here.</a>
 </div>
 <!---/Don't Have An Account--->
 
 
 <div class="information small">
 <p class="text-center">The Above Informations You Provide, Is for the security of your
 Account. </p>
 <p class="text-center">Thank You For Creating an Account. <a href="signup_help"> See Details</a></p>
 </div>

 </div>
 
 </div>
 </div>
 </div>
 

 
 
   <!---Load Login(if user already have an account)page with jquery and Ajax--->
 <div id="sign_in"></div>
 <!---/Load Sign up page with jquery and Ajax--->
 <div id="ajax"></div>
 
 <script src="../../../setup/jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){

//Create ajax code for a user to create an account
$("#has_account a").click(function(e){
	e.preventDefault();
	
	$("#sign_in").load(this.href,function complete(response,status,xhr){
			
			if(status=='success')
				//alert("External content loaded successifully");
			$('#signup-form').hide();
			
			if(statusText=='error')
				alert("Error:"+xhr.status+":"+xhr.statusText);
		});
	
});

//Submit user input
$("form").submit(function(e){
	e.preventDefault();
	
	//Get sign up input values
var user_name=$("#user_name").val();
var user_email=$("#user_email").val();
var user_pass=$("#user_pass").val();
var user_phone=$("#user_phone").val();
var confirm_pass=$("#confirm_pass").val();

 $.post('signup_user.php',{user_name,user_email, user_phone,user_pass,confirm_pass},function(data){
		//U can assign in function any value name u want
		//alert(data);
		
	$("#ajax").html(data);
		
	});
	
	
	
});
	
	
	

	
	
		
	});
	</script>
 
 </body>
 </html>