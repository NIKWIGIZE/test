<?php 

session_start();
?>
<?php

require_once("include/connection.php");
//require_once("../include/whisky_Db.php");

//Create class object;


//$db=new connect_product();

//echo $db->conn;

 ?>
 
 <?php 
 //remove product from cart
 
 if(isset($_POST['remove'])){
 $_SESSION['cart_id']= $_GET['id'];

 echo '
 <script>
  confim=confirm("Are you sure, You want to remove this product from cart?");	 
 if(confim==true){
	window.open("delete.php","_self");
 }
 else{
	 window.open("cart.php","_self"); 
 }
 
 </script>
 ';
 
 
 
  
 }
 
 ?>
 
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
    <!-- Slick -->
    <link href="../setup/slick/slick.css" rel="stylesheet">
	  <link href="../setup/slick/slick-theme.css" rel="stylesheet">
	  
  </head>
  <body>
 <!-- Header section -->
<header>
<?php 
require_once('header/very_small_screen.php');
require_once('header/small_medium_screen.php');
require_once('header/medium_screen.php');
?>
</header>
<!-- /Header section -->

<!--Main--->
<div class="container-fluid">

<div class="row " >

<div class="col-md-1  recomended-for-u">Recommended for you</div>
<div class="col-md-8  product-desc">
<div class="row">
<div class="col-md-12">

<?php 
//Require alert_message.php
require('include/alert_message.php');

?>
</div>
</div>
<?php 
//Display hello to the user if there is something into cart;
$added_to_cart=$_SESSION['email'];
if(isset($_SESSION['email'])){
//cart_element($row['product_image'],$row['product_name'],$row['product_price']);	
	$select=$conn->prepare("SELECT SUM(quantity)AS total FROM added_to_cart WHERE email=?")or die($conn->error);
    
	$select->bind_param("s",$added_to_cart);
	$select->execute();
	
	//Bind result
	
	$result=$select->get_result();
	
	$amount=$result->num_rows;
	
	if($row=$result->fetch_assoc()){
     $total=$row['total'];
$sql=$conn->prepare("SELECT * FROM added_to_cart WHERE email=?")or die($conn->error);
$sql->bind_param("s",$added_to_cart);
$sql->execute();

$result=$sql->get_result();
$row=$result->fetch_assoc();


?>
<div class="cart-medium">
<div class="row">
<div class="col-md-12">

<h3>Hello <?php echo '<span class="text-capitalize">'.$row['name'].'</span>'; ?>.&nbsp;
Your Shopping Cart Has <?php echo $total; ?> Item(s)</h3>
<label for="selectAll">
<input class="cart-medium-input"type="checkbox" name="select_all" value="<?php echo $row['email']; ?>">&nbsp;
Select All
<label>
</div>
</div>
</div>
<?php } }  ?>
<br>

<?php 
require_once("cart_function.php");

$added_to_cart=$_SESSION['email'];

if(isset($_SESSION['email'])){
//cart_element($row['product_image'],$row['product_name'],$row['product_price']);	
	$select=$conn->prepare("SELECT*FROM added_to_cart WHERE email=?")or die($conn->error);
    $select->bind_param("s",$added_to_cart);
	$select->execute();
	
	//Bind result
	
	$result=$select->get_result();
	
	if($result->num_rows>0){
	
	while($row=$result->fetch_assoc()){

		
cart_element($row['product_image'],$row['product_name'],$row['product_price'],
$row['product_catalogue'],$row['product_size'],$row['quantity'],$row['cart_id']);
	
	
	}
	}
	else{
		
		echo "
		<div class='empty-cart'>
		<h3>Your Shopping Cart is Empty.</h3>
		<p>Make Your Cart Live.Fill it with 
		<a href='../wine/wine.php'>Wine</a>,
		<a href='../wine/champagne.php'>Champagne</a>,
		<a href='../Whisky/whisky.php'>Whisky</a>
		&amp; Other Spirits like 
		<a href='../other_spirits/brands/vodka.php'>Vodka</a>
		and <a href='../other_spirits/other_spirits.php'>Many More</a>.
		</p>
		<p>The Price and Availability of items at <strong> Avectime.com </strong>  are subject to change.
		The Cart is a Temporary Place to Store a List of your Items and Reflects
		each Item's Most Recent Price.<a href='cart_info/learn_more.php'>Learn More.</a></p>
		<br>
		<p>Make your Life Easy , <a href='cart_info/learn_how.php'>Learn how</a> to Shop at
		<strong>Avectime.com</strong>.It is Easy, Fast &amp; Secure.</p>
		<p>Do you have a Promo Code or Discount Coupon ? We will ask you to enter your Code
		when it's Time to Pay.You don't have it? You can <a href='../promotions/promo_discount_code.php'>Apply One</a>.</p>
		
		<br>
		<p>Thank you for Shopping at <a href='../index.php'>Avectime.com</a>.Your Wishes is our Priority.</p>
		</div>
		
		
		";
	}
	
	
}


?>



</div>
<div class="col-md-3  price-detail"><div class="cart-medium">
<h6 class="lead" style="font-weight:bold;">Order Summary</h6>
<div class="row">
<div class="col-md-6">
<h5 class="lead">Subtotal</h5>
<h5>Delivery</h5>
</div>
<div class="col-md-6 subtotal" >	
<h5 class="tprice lead" style="font-weight:bold; ">$0.00</h5>
<h5> $0.00</h5>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<h5 class="total lead">Total</h5>
</div>
<div class="col-md-6">
<h5 class="total-price lead"> $0.00</h5>
</div>
</div>
<div class="row">
<div class="col-md-12">
<button class="btn btn-warning btn-block buy-button" type="submit" name="checkout">Buy(amount)</button>
<label for="gift">
<input type="checkbox" id="send_gift" value="">
This Order Contains a Gift
</label>
</div>
</div></div>

</div>
</div>
</div>
<!--/Main--->

<!--Browsing Hx--->

<?php

require('../browsingHx/browsing.php');

 ?>

<!--Browsing Hx--->



<!--Footer--->
<!--Footer--->

<div id="data"></div>
<script src="../setup/jquery-3.4.1.min .js"></script>
    
    <script src="../setup/bootstrap/js/bootstrap.min.js"></script>
	 <script src="../setup/sticky/jquery.sticky.js"></script>
	<script  >
	
$(document).ready(function(){



//INCREASE AND DECREASE QUANTITY IN CART

/*Increase quantity when user click increase button*/

$(".increase").click(function(){
	
	var quantity=$(".input_qty[data-index='"+$(this).data("index")+"'")
	
	if(quantity.val()>=1 && quantity.val()<=9){
		
		var oldVal=quantity.val();
		quantity.val(function(){
			return ++oldVal;
			
		})
		
	}
	
//get the total amount added in input field and in data index 
	var amount=quantity.val();
	
	var currentIndex=parseInt($(this).data('index'));
	
	
	
	$.post('cart_quantity.php',{amount,currentIndex},function(data){
	
	location.reload(data);
	
	//console.log(data);
	
	//$(".recomended-for-u").html(data);
	})
	
	
})	


	
/*Decrease quantity when user click increase button*/

$(".decrease").click(function(){
	
	var quantity=$(".input_qty[data-index='"+$(this).data("index")+"'")
	
	if(quantity.val()<=10 && quantity.val()>=2){
		
		var newVal=quantity.val();
		quantity.val(function(){
			return --newVal;
		})
	}
	
//get the total amount added in input field and in data index 
	var amount=quantity.val();
	
	var currentIndex=parseInt($(this).data('index'));
	
	
	
	$.post('cart_quantity.php',{amount,currentIndex},function(data){
	location.reload(data);
	//console.log(data);
	//$(".recomended-for-u").html(data);
	})
})	


//if increase and decrease input get focus , get it value

$(".input_qty").mouseout(function(){
var quantity=$(".input_qty[data-index='"+$(this).data("index")+"'")

//get the total amount added in input field and in data index 
	if(quantity.val()>=1 && quantity.val()<=9){
	var amount=quantity.val();
	
	var currentIndex=parseInt($(this).data('index'));
	
	
	
	$.post('cart_quantity.php',{amount,currentIndex},function(data){
	
    console.log(data);
	//$(".recomended-for-u").html(data);
	})
 $(".input_qty").css({'border':'1px solid transparent'});
	}
else{
	alert("Value Should Be Between 1 and 10 ");
	$(".input_qty").css({'border':'1px solid red'});
}	
	
})

		
	
//HAEDER AUTO SEARCH INPUT.

//medium  device screen main search ajax codes
	
	$('#form-md').keyup(function(e){
    e.preventDefault();
	
	//get input data
	var search=$('#search-md').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});
//Small to medium screen main auto search ajax codes
	
	$('#form-sm').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-sm').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});

//Very small screen ajax  auto search code
	$('#form-xs').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-xs').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});	
/*Hide myseach div box When click outside*/	
	$('body').click(function(e){
	
	$("form #mysearch").hide();	
})

//End of main search input data via ajax;	


//select all in cart list checkbox	
$("input[name='select_all']").click(function(){

var checked=$("input[name='select_all']").is(":checked");;

if(checked==true){

var email=$("input[name='select_all']").val();
$.post('subtotal.php',{email},function(data){
	$(".tprice").html(data);
	
})
//check all element in cart
$("input[name='total_cart']").prop("checked",true);	
}
else{

if(checked==false){
   
//alert('working again
$(".tprice").html("<h5>$0.00</h5>");
$("input[name='total_cart']").prop("checked",false);	

}	
}

})

//check is send as gift is checked
$(".sendGift").click(function(){
	
var gift=$(".sendGift[data-index='"+$(this).data('index')+"']").is(":checked");
		
if( gift==true){
	var productId=$(".sendGift[data-index='"+$(this).data('index')+"']").val();
	var update="Is Gift";
	//alert(isGift);
	
	//call ajax
	$.post('sendgift.php',{productId,update},function(data){
		
		console.log(data);
		
		
		
	})
	
	$("#send_gift").prop("checked",true);
	
	
}
else{
	if(gift==false){
		
	$("#send_gift").prop("checked",false);	
	
	//also call ajax to update added to cat table
	var productId=$(".sendGift[data-index='"+$(this).data('index')+"']").val();
	var update="Not Gift";
	
	$.post("sendgift.php",{productId,update},function(data){
		console.log(data);
	})
	
	}
}
	
});	














	
	})
	
	
	
	</script>
	
  </body>
</html>