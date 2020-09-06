<?php 
//require connection and security
require("../include/conn.php");
require("../security/security.php");
?>
<?php 

if(isset($_POST['amount'])||isset($_POST['currentIndex'])){
	
	$amount=escape($_POST['amount']);
	$ratedindex=escape($_POST['currentIndex']);
     $index=filter_var($ratedindex,FILTER_VALIDATE_INT);
//update quantity column of added_to_cart table;

$update=$conn->prepare("UPDATE added_to_cart SET quantity=? WHERE cart_id=?")or die($conn->error);
$update->bind_param('ii',$amount,$index);
$update->execute();

//if update is successiful, update also total price
	if($update){
	
	$sql=$conn->prepare("UPDATE added_to_cart SET total_price=product_price*?
	WHERE cart_id=? ")or die($conn->error);
	
  $sql->bind_param('si',$amount,$index);
  $sql->execute();  
	}
	
	
	

}

?>