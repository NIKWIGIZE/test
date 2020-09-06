  <style>
	

	  .imageStyle{
		  
		  width:50px;
		  height:50px;
		  border:2px solid grey;
		  border-radius:0.4em;
		  margin:2px;
		  
	  }
	   #image1{
		  
		  border:2px solid red!important;
	  }
	  .product-desc #image-size img{
		  display:inline;
	  }
	 
	 #desciption .glyphicon-star,.glyphicon-star-empty{
		 font-size:20px;
		 color:#f0ad4e;
	 }
	 #desciption .badge{
		 
	 }
	 #desciption .badge a{
		 text-decoration:none;
		 color:beige;
	 }
	form #desciption .select {
    height: 30px;
    padding: 4px 12px;
    font-size: 12px;
    background-color:#eeeeee;
	border:0.3px solid orange;
	box-shadow:1px 1px 8px orange;
	}
	  form #desciption .select option {
    background-color:#fff;
	}
		 form #desciption .amount-available{
			 margin-top:30px;
		 }
		form #desciption .estimated-deleivery a:hover{
			color:orange;
		}
		
		form #desciption  .add_buy_btn .btn-secondary{
			border:0.5px solid black;
			margin-bottom:10px;
		}
		
		form #desciption  .add_buy_btn .btn-warning{
			border:0.5px solid black;
			color:black;
			
		}
		
	#rigtsidebar{
		border:1px solid #eeeeee;
		border-radius:0.5em;
	}

.star{
color:#b9b9b9;
float:left;
line-height:25px;	
	
}
.star .greyStar{
	height:100%;
}
.star .filledStar{
    margin-top:-26px;
	overflow:hidden;
	color:#f7bf17;	
	
}
.star .filledStar::before,
.star .greyStar::before{
	content:"\2605\2605\2605\2605\2605";
	font-size:27px;
	line-height:18px;
}	
	  </style>
	  
<?php 

function dimple($product_image,$product_name,$actual_price,$discount_price,$delivery_price,
$size,$id){
	
	
	$element='<form method="post" action="dimple.php?id='.$id.'" > 
  <!--Main Image and Thumbnail Wih zoom Effect-->
  <div class="col-md-4">
  <div class="row">
  <div class="col-md-2 " >
  <div id="image-thumbnail">
  <!--Different images of product-->
   <img class="img-responsive imageStyle" src="images/thumbnail/z12.jpg" alt="">
	 <img class="img-responsive imageStyle" src="images/thumbnail/z3.jpg" alt="">
    <img class="img-responsive imageStyle" src="images/thumbnail/z4.jpg" alt="">
	 <img class="img-responsive imageStyle" src="images/thumbnail/z5.jpg" alt="">
	 </div>
  </div>
  <div class="col-md-10 mainImage zoom-box">
   <img class="img-responsive " src="'.$product_image.'" alt="">
  <p class="text-center ">Roll Over Image to Zoom In</p>
  </div>
  </div>
  </div>
  <!--/Image and Thumbnail-->
  <!--Product Description-->
 <div class="col-md-6 product-desc ">

 <div id="desciption">
 <p class="lead text-capitalize">'.$product_name.' Description Sumary<p>
 <p>Brand: <a href="#">Dimple</a></p>
 
 <div class="row">
<div class="col-xs-3">
<div class="star">
<div class="greyStar"></div>
<div class="filledStar"style="width:60%;"></div>
</div>
<span class="caret" ></span>
</div>
<div class="col-xs-9"><a href="productReview/totalRating.php">(1000) Ratings</a></div>
</div>
 
<hr>
<div class="row">
<div class="col-md-8">
<h4><small><s>US '.$actual_price.'.00</s></small > <i class="text-danger">US '.$discount_price.'.00</i></h4>
<span class="badge"><a href="#">New User Bonus</a> </span>
</div>
<div class="col-md-4 text-center add_buy_btn">
<button class="btn btn-secondary btn-block" type="submit" name="buy_now"> <span class="glyphicon glyphicon-credit-card"></span> &nbsp;Buy Now</button>
<button id="add"class="btn btn-warning btn-block" type="submit" name="add_to_cart"> <span class="glyphicon glyphicon-shopping-cart "></span>&nbsp;Add to Cart</button>
<small><a href="#" > Secure Transaction <span class="caret"></span></a></small>

</div>
</div>
<hr>
<p>size:<span class="image-size">'.$size.'</span></p>
<div class="row">
<div class="col-md-12">
<div id="image-size">
<!--Different images of product each represent specific size-->
   <img id="image1"class="img-responsive imageStyle " src="images/thumbnail/z12.jpg" alt="">
	<img id="image2"class="img-responsive imageStyle " src="images/thumbnail/z7.jpg" alt="">
    <img id="image3"class="img-responsive imageStyle" src="images/thumbnail/z6.jpg" alt="">
	 <img id="image4"class="img-responsive imageStyle" src="images/thumbnail/z8.jpg" alt="">
	 </div>
</div>
</div>
<br>
<div class="row">
<div class="col-md-2">
<p>Quantity:</p>
<select class="form-control select" name="quantity" value="">
<option><small >Qty:</small> 1</option>
<option><small >Qty:</small> 2</option>
<option><small >Qty:</small> 3</option>
<option><small >Qty:</small> 4</option>
<option><small >Qty:</small> 5</option>
</select>
 </div>

 <div class="col-md-10"><p class="amount-available">(amount) Units Available</p></div>
 </div>
 <br>
 <p class="estimated-deleivery">Delivery:US $'.$delivery_price.'.00 <a href="#">Check Estmated Delivery Time</a></p>
 <br>
 <p>Full Product Desciption (Brand,type,orgin,size,alcohol proof,number of years,
 category,a cerebrety who like this type of product,....)</p>
 </div>
 
 </div>
 </form>';
	
	echo $element;
}

?>