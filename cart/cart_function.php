

<style>
	 
	  .cart-medium{
		  
		  background-color:beige;
		  border-radius:1em;
		  padding:10px;
	  }
	  .cart-medium .product-details{
		  
		  margin-top:20px;
	  }
	  .cart-medium .product-details p{
		  
		  margin:0px;
	  }
	  hr{
		  
		 border:1px solid red; 
		  margin:20px;
	  
	  }
	 .cart-medium .cart-medium-input{
		height:20px;
		 width:20px; 
	 }
	
	   
	  form .cart-medium .input-medium{
		  margin-top:60px;
		 height:20px;
		 width:20px;
	  }
	   form .cart-medium .input-group{
			  width:10px;
		  }
		 form .cart-medium  .empty-heart{
			 background-color:beige;
		 }
		form .cart-medium  .empty-heart .glyphicon-heart-empty{
			font-size:25px;
		}
		  form .cart-medium  .trash{
			 background-color:beige;
		 }
		 form .cart-medium  .trash .glyphicon-trash{
			 font-size:20px;
			 
		 }
		  form .cart-medium .input-group .quantity{
			  margin-top:5px;
		  }
		 form .cart-medium .input-group .input-group-btn button{
			 border-radius:50%;
			  height:30px;
			 
		 }
		  form .cart-medium .input-group .input-group-btn button .lead-plus{
			 
			  font-size:30px;
			  line-height:20px;
		  }
		 form .cart-medium .input-group .input-group-btn button .lead-minus{
			 
			  font-size:40px;
			  line-height:10px;
		  }
		  
		  form  .cart-medium .input-group .input_qty{
			width:30px;
			border:none;
			padding-left:2px;
			background-color:beige;
		}
		
		.price-detail{
			margin-top:10px;
		}
		.price-detail .total{
			font-weight:bold;
			
		}
		.price-detail .total-price{
			font-weight:bold;
			
		}
		.caption a:hover{
			
			color:orange;
			
		}
		.price-detail .buy-button{
			border:1px solid black;
			color:black;
		}
		.empty-cart a:hover{
			color:orange;
		}
	  </style>
	  



<?php 

function cart_element($product_image,$product_name,$discount_price,$product_catalogue,$size,$quantity,$id){
	$element='<form method="post" action="cart.php?id='.$id.'">
<div class="cart-medium">
<div class=" row seller-medium">
<p class="text-center" >Seller:Avectime.com</p>
<hr>
</div>
<div class="row product-details">

<div class="col-md-1">
<input class="input-medium"type="checkbox" name="total_cart" value=""/>
</div>
<div class="col-md-9">
<div class="row">
<div class="col-md-2">
<a href="../search_files/file/search.php?cat='.$product_catalogue.'">
<img class="img-responsive" src="'.$product_image.'" alt="">
</a> 
</div>
<div class="col-md-10">
<div class="caption">
<a href="../search_files/file/search.php?cat='.$product_catalogue.'">
<p class="lead text-capitalize">'.$product_name.' Description Sumary</p>
</a>

<p class="lead">US $'.$discount_price.'.00</p>
<p>Delivery:US $ 0.00<a href="cart_info/delivery_time.php"> <small>Check Estimated Delivery Time</small></a></p>
<p> Size:'.$size.'</p>
<label for="gift" style="font-weight:100;">
<input data-index="'.$id.'" class="sendGift" type="checkbox"   value="'.$id.'">
Send It As Gift.<a href="sendgift.php">Learn More </a>
</label>
</div>
</div>
</div>

</div>
<div class="col-md-2">

<div class="row">
<button title="Add to Wish List"type="submit"  class="btn  empty-heart"name=""><i class="glyphicon glyphicon-heart-empty"></i></button>
&nbsp;&nbsp;&nbsp;
<button title="Remove from Cart" class="btn trash " type="submit" name="remove"><i class="glyphicon glyphicon-trash"></i></button></div>

<div class="row">
<div class="input-group" id="qty">
<div class="input-group-btn">
<button data-index="'.$id.'" class="btn btn-secondary increase"type="button"><i class=" lead-plus">+</i></button>
</div>

<input data-index="'.$id.'" type="text"  class="input_qty form-control "  value="'.$quantity.'" >

<div class="input-group-btn">
<button data-index="'.$id.'" class="btn btn-secondary decrease" type="button" ><i class="lead-minus">-</i></button>
</div>

</div>
</div>
</div>
</div>



</div>
</form>';

echo $element;
}
?>