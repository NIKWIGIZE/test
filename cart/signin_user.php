<?php 
session_start();

//include connection

require_once('include/connection.php');

?>

<?php 
//Get use inputs from signin.php signin form

$email=$password="";

if(isset($_POST['sign_in'])){

 $email=escape($_POST['email']);
 $password=escape($_POST['pass']);


//Create a Statment to Check if the selected password and email row exist

$select_user=$conn->prepare("SELECT * FROM user_account WHERE email=? AND password=?")or die($conn->error);	
$select_user->bind_param('ss',$email,$password);
$select_user->execute();

//get results
$result=$select_user->get_result();
if($result->num_rows==1){
	
	//If sign in is success grab that email into session
	$_SESSION['email']=$email;
	//select all from add to cart table where email= the one used to sign in
 header("location:cart.php");

}
else{
	//check if email does not exist
	$checkEmail=$conn->prepare("SELECT * FROM user_account WHERE email=? ")or die($conn->error);	
$checkEmail->bind_param('s',$email);
$checkEmail->execute();
//Check if the selected email row  does not already exist()

$result=$checkEmail->get_result();
if($result->num_rows==0){
	 echo "
	<div class='alert alert-danger text-center'>
	<button class='close close-alert' data-dismiss='alert'>&chi;</button>
	<p>Incorect Email,Try Again.</p>
	<div>
	
	<script>
	 $('.close-alert').click(function(){
	 
	 $('.alert').hide();
	 
 })
	
	</script>
	";
}	

	//check if Password does not exist
	$checkPassword=$conn->prepare("SELECT * FROM user_account WHERE password=? ")or die($conn->error);	
$checkPassword->bind_param('s',$password);
$checkPassword->execute();
//Check if theselected  password row does not already exist()

$result=$checkPassword->get_result();
if($result->num_rows==0){
	 echo "
	<div class='alert alert-danger text-center'>
	<span class='close close-alert' data-dismiss='alert'>&chi;</span>
	<p>Incorect Password,Try Again.</p>
	<div>
	
	<script>
	 $('.close-alert').click(function(){
	 $('.alert').hide();
	 
 })
	
	</script>
	";
	 
	 
	 //echo "<script>alert('Incorect Password,Try Again');</script>";
	  //echo "<script>window.open('signin.php','_self');</script>";
	  //exit();
}	
	
	
}
	
	
	
	
}

//Create function to validate user inputs

function escape($data){
	
	$data=htmlspecialchars($data);
	$data=trim($data);
	$data=stripslashes($data);
	return $data;
	
}

?>

<!---Load Sign in page with jquery and Ajax--->
 <div id="loginsucess"></div>
 <!---/Load Sign in page with jquery and Ajax--->

<script src="jquery-3.4.1.min .js"></script>
  <script src="ajax.js"></script>
    <script>
	$(document).ready(function(){




$("#loginsucess").load('<?php  echo $header;?>',function complete(response,status,xhr){
			
			if(status=='success')
				//alert("External content loaded successifully");
			$('.container').hide().css({'background-color':'beige'});
			
			if(statusText=='error')
				alert("Error:"+xhr.status+":"+xhr.statusText);
		});
		
		
/*
$.post('<?php  echo $header;?>',function(response){
	
window.location.href=response.redirecturl;	
})
*/
 
		
	});
	</script>