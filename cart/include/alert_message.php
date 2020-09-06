<?php
//Display error message , if updated column= yes(ie: we updated that column);
if(isset($_SESSION['email'])){
$added_to_cart=$_SESSION['email'];

$updated='yes';

$seslet=$conn->prepare("SELECT*FROM added_to_cart WHERE email=? AND  updated=?")or die($conn->error);
$seslet->bind_param('ss',$added_to_cart,$updated);
$seslet->execute();

//bind result
$result=$seslet->get_result();

if($result->num_rows>0){
	
	$numR=$result->num_rows;
	
		?>

		<div class="alert" style="border:1px solid black; box-shadow:1px 1px 3px red;">
		<span class="close" data-dismiss="alert">&chi;</span>
		<h3>
		<span class="glyphicon glyphicon-warning-sign  text-warning"></span>
		Important Messages About Items In Your Cart:
		</h3>
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $numR; ?> 
		Item(s) In Your Cart Has Changed Price.</h4>
		
		<ul>
		<?php
		while($row=$result->fetch_assoc()){
			
		$productName=$row['product_name'];
		
		$new_price=$row['product_price'];
		$product_cataloge=$row['product_catalogue'];
		
		?>
		<li><a href="../search_files/<?php echo $productName; ?>.php" class="text-capitalize"><?php echo $productName;?> 
		(IE:Summary On product Description That Has 
		changed price or others)</a> Has(increased or decreased) 
		
		(Price or Delivery Price) From <span class="text-danger">
		()
		</span> 
		to <span class="text-danger">
		<?php echo "$".$new_price; ?>
		</span></li>
		<?php } ?>
		</ul> 
		<p>Items In Your Shopping Cart Reflect The Most Recent Price
		Displayed On Their Product Details Pages.</p>
		</div>	
	
<?php
			
}

}
