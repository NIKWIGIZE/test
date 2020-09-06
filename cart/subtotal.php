<?php 

//include connection
require('../include/conn.php');
?>

<?php 
//When user click select all, 

if(isset($_POST['email'])){
	
	$email=$_POST['email'];
	
	$select=$conn->prepare("SELECT SUM(total_price)AS total FROM added_to_cart WHERE email=?")or die($conn->error);
	$select->bind_param('s',$email);
	$select->execute();
	
	//bind result
	
	$result=$select->get_result();
	while($row=$result->fetch_assoc()){
		
    echo "$".$row['total'].".00";
	
	} 
	}
?>

