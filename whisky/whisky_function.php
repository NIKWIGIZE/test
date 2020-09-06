 <style>
	  body{
	
	font-family:aria,gerarda,sans-serif;
	padding-top:100px;
}
form{
	margin-bottom:10px;
	
}
form .padding-bottom-medium{
	height:180px;
	background-color:beige!important;
	
}
form .product-medium-text h5,h6,p{
	margin:2px;
	padding:0px;
}
form .product-medium-img,.product-medium-text{
	padding:10px;
	
}

form .product-medium-text h6 .glyphicon-star,.glyphicon-star-empty{
	font-size:18px;
	color:#f0ad4e;
	
}
form .product-medium-text a:hover{
	color:orange;
}
form .product-medium-text .glyphicon-info-sign{
	color:grey;
	
}
form .product-medium-text .btn-warning{
	border-color:black;
	color:black;
}
	  </style>

<?php 

function product_medium($product_img,$product_name,$product_desc,$actual_price,
$discount_price,$delivery_price,$id){
	
	$element='<div class="col-md-4">
<form method="post" action="whisky.php?id='.$id.'">

<div class="padding-bottom-medium">
<div class="col-md-4 product-medium-img">
<a href="whisky.php?id='.$id.'">
<img class="img-responsive" src="'.$product_img.'" alt="">
</a>
</div>
<div class="col-md-8 product-medium-text">
<div class="caption" >
<a href="whisky.php?id='.$id.'">'.$product_name.'</a>
<p><a href="whisky.php?id='.$id.'">'.$product_desc.'</a></P>
<h5><small><s>$'.$actual_price.'.00</s></small>&nbsp; $'.$discount_price.'.00/unit</h5>
<p>Delivery:$'.$delivery_price.'.00&nbsp; <a title="Check Delivery Details."class="glyphicon glyphicon-info-sign"></a></p>
<h6>
<span class=" glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class=" glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
</h6>
<button class="btn btn-warning btn-sm" type="submit"name="cart_detail"> See Product Details  </button>

</div>
</div>
</div>

</form></div>
';
	
echo $element;	
}




?>

