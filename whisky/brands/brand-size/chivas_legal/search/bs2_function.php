 <style>
	

	  .imageStyle{
		  
		  width:50px;
		  height:50px;
		  border:2px solid grey;
		  border-radius:0.4em;
		  margin:2px;
		  
	  }
	  #second_image{
		  
		  border:2px solid red !important;
	  }
	  .product-desc #image-size img{
		  display:inline;
	  }
	  
	 #desciption .glyphicon-star,.glyphicon-star-empty{
		 font-size:20px;
		 color:#f0ad4e;
	 }
	
	 #desciption .badge a{
		 text-decoration:none;
		 color:beige;
	 }
	form #desciption .select {
    height: 30px;
    padding: 4px 10px;
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
	  </style>
<?php 

function dimple_image2($product_image,$product_name,$actual_price,$discount_price,$size,$id){
	
	$element=' <form method="post" action=""> 
  <!--Main Image and Thumbnail Wih zoom Effect-->
  <div class="col-md-4">
  <div class="row">
  <div class="col-md-2 " >
  <div id="image-thumbnail">
  <!--Different images of product-->
   <img class="img-responsive imageStyle" src="../../images/thumbnail/z10.jpg" alt="">
	 <img class="img-responsive imageStyle" src="../../images/thumbnail/z9.jpg" alt="">
    <img class="img-responsive imageStyle" src="../../images/thumbnail/z7.jpg" alt="">
	 <img class="img-responsive imageStyle" src="../../images/thumbnail/z5.jpg" alt="">
	 </div>
  </div>
  <div class="col-md-10 mainImage zoom-box">
   <img class="img-responsive " src="../../'.$product_image.'" alt="">
  <p class="text-center ">Roll Over Image to Zoom In</p>
  </div>
  </div>
  </div>
  <!--/Image and Thumbnail-->
  <!--Product Description-->
 <div class="col-md-6 product-desc ">

 <div id="desciption">
 <p>'.$product_name.'<p>
 <p>Brand: <a href="#">Dimple Small Size</a></p>
 <h6>
<span class=" glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class=" glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star"></span>
<span class="glyphicon glyphicon-star-empty"></span>
</h6>
<hr>
<div class="row">
<div class="col-md-8">
<h4><small><s>US '.$actual_price.'.00</s></small > <i class="text-danger">US '.$discount_price.'.00</i></h4>
<span class="badge"><a href="#">New User Bonus</a> </span>
</div>
<div class="col-md-4 text-center add_buy_btn">
<button class="btn btn-secondary btn-block" type="submit" name="buy_now"> <span class="glyphicon glyphicon-credit-card"></span> &nbsp;Buy Now</button>
<button id="addcart" class="btn btn-warning btn-block" type="submit" name="mycart"> <span class="glyphicon glyphicon-shopping-cart "></span>&nbsp;Add to Cart</button>
<small><a href="#" > Secure Transaction <span class="caret"></a></small>
<input type="hidden" name="product_id" value="1">
</div>
</div>
<hr>
<p>size:<span class="image-size">'.$size.'</span></p>
<div class="row">
<div class="col-md-12">
<div id="image-size">
<!--Different images of product each represent specific size-->
   <img id="home_image"class="img-responsive imageStyle" src="../../images/thumbnail/z2.jpg" alt="">
	 <img id="second_image"class="img-responsive imageStyle " src="../../images/thumbnail/z10.jpg" alt="">
   <img id="third_page"class="img-responsive imageStyle " src="../../images/thumbnail/z7.jpg" alt="">
	<img id="fourth_page"class="img-responsive imageStyle " src="../../images/thumbnail/z1.jpg" alt="">
	 <img id="firth_page"class="img-responsive imageStyle " src="../../images/thumbnail/z8.jpg" alt="">
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
 <p class="estimated-deleivery">Delivery:US $0.00 <a href="#">Check Estmated Delivery Time</a></p>
 <br>
 <p>Full Product Desciption (Brand,type,orgin,size,alcohol proof,number of years,
 category,a cerebrety who like this type of product,....)</p>
 </div>
 
 </div>
 </form>';
	
	
	echo $element;
}


?>