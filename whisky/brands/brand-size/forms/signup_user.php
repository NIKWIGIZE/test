<?php
//=======COMPLETE SIGN UP FORM VALIDATION WITH PHP ;===================
?>

<?php
//First include connection file
session_start();
require_once('../include/conn.php');
require_once("../include/security.php");
?>  


<?php 

$userName=$userEmail=$userPassword=$userPhone="";
$userNameError=$userEmailError=$userPasswordError=$userPhoneError="";
	
//Get data posted by jquery using ajax in signup.php
if(isset($_POST['user_name'])||isset($_POST['user_email'])||isset($_POST['user_pass'])
	||isset($_POST['confirm_pass'])||isset($_POST['user_phone'])){


	//Validate user input
	
	
	#=====USERNAME======#
	if(empty($_POST['user_name'])){
		
		//$userNameError="This Field Can NNot Be Blank";
		echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>User Name is Required.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
	}
	else{
	$userName=escape($_POST['user_name']);
	}
	#=====/USERNAME======#
	
	
	#=====USER EMAIL ======#
	if(empty($_POST['user_email'])){
		//$userEmailError="This Field Can Not Be Blank";
        echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Email is Required.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();	
	}
	else{
	$userEmail=escape($_POST['user_email']);
	
	//Filter validate Email( check if e-mail address is well-formed)
    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
		//Code to generate a message if success or error
      //$userEmailError = "Invalid email format";
	  echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Invalid Email,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
	  	 	
    }
	  if (!filter_var($userEmail, FILTER_SANITIZE_EMAIL)) {
		//Code to generate a message if success or error
      //$userEmailError = "Invalid email format";
	  echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Invalid Email,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
	  	 	
    }
	//Check if email already exist
	
	$checkEmail=$conn->prepare("SELECT * FROM user_account WHERE email=?")or die($conn->error);
    $checkEmail->bind_param('s',$userEmail);
	$checkEmail->execute();
	
	//Bind result
	$result=$checkEmail->get_result();
	if($result->num_rows==1){

    //Code to generate a message if success or error
		echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Email Already Exist,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
		
	}
	
	}
	
	#=====/USER EMAIL ======#
	
	#=====PHONE NUMBER ======#
	if(empty($_POST['user_phone'])){
		
        echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Phone Number is Required,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();		
	}
	else{
	$userPhone=escape($_POST['user_phone']);
   if(strlen($userPhone)<10){
	echo '<script>alert("Phone Number is Not conmplete);</script>';
		echo '<script>window.open("signup.php","_self");</script>';	
          exit();	   
	   
   }	
    }
	//Check if phone number already exist
	
	$checkPhone=$conn->prepare("SELECT * FROM user_account WHERE phone=?")or die($conn->error);
    $checkPhone->bind_param('s',$userPhone);
	$checkPhone->execute();
	
	//Bind result
	$result=$checkPhone->get_result();
	if($result->num_rows==1){

    //Code to generate a message if success or error
		echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Phone Number Already Exist,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
		
	}
	#=====/PHONE NUMBER======#
	
	#=====USER PASSWORD ======#
	if(empty($_POST['user_pass'])){
		//$userPasswordError="This Field Can Not Be Blank";
      echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Password is Required.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();		
	}
	else{
		
		$userPassword=escape($_POST['user_pass']);
	//Validate user password
	if(strlen($userPassword)<8){
		//Code to generate a message if success or error
		//$userPasswordError="Password Should be Above 8 Characters";
		echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Password Should be Above 8 Characters</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
	   
	}
	
	//Check if user email if already present in our database
	$checkPassword=$conn->prepare("SELECT * FROM user_account WHERE password=?")or die($conn->error);
	$checkPassword->bind_param('s',$userPassword);
	$checkPassword->execute();
	
	//Bind results
	$result=$checkPassword->get_result();
	
	if($result->num_rows==1){
		
		//Code to generate a message if success or error
		
		//$userPasswordError="Password Already Exist,Please Try Again";
		echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Password Already Exist,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();
	 
	}
	
	}
	#=====/USER PASSWORD ======#
	
	//#=====CONFIRM PASSWORD ======#
	$confirmPass=escape($_POST['confirm_pass']);
	if($userPassword!==$confirmPass){
		
	echo "<div class='alert alert-danger text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Your Password did not Match,Try Again.</p>
		</div>
		<script>
		$('.close').click(function(){
			
			$('.alert').hide();
		})
		
		</script>";
		
		exit();	
		
	}
	
	
	
	#=====PREPARE STATMENT TO INSERT DATA INTO DATABASE ======#
	
	
	$insert=$conn->prepare('INSERT INTO user_account(name,email,phone,password,re_password)
	VALUES(?,?,?,?,?)')OR die($conn->error);
	$insert->bind_param('sssss',$userName, $userEmail,$userPhone,$userPassword,$confirmPass);
    $insert->execute();
	
	if($insert){
	
	//Code to generate a message if success or error
	echo  "<div class='alert alert-success text-center'>
		<button class='close' data-dismiss='alert'>&chi;</button>
		<p>Congratulation $userName ,Your Account Has Been Created</p>
		<p> Back To <a href='signin.php'> Sign In </a></p>
		</div>
		<div id='ajax'></div>
		<script>
		$('.close').click(function(){
			$('.alert').hide('fade');
			
		});
		$('.alert a,.close').click(function(e){
			e.preventDefault();
			$('.container,.alert').hide();
			$('#ajax').load('signin.php');
			
		});
		</script>
		";	
	}
	else{
		
		echo "<script>alert('Failure to create an Account, Try Again')</script>";
	    echo "<script>window.open('signup.php','_self')</script>";
	}
	
	
	
	}
	#=====/PREPARE STATMENT TO INSERT DATA INTO DATABASE ======#

	
?>






<script src="jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){


     


	
	
	
	
	
	
		
	});
	</script>