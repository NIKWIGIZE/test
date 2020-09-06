
<!DOCTYPE html>

<?php 
/*ADD TO CART*/
session_start();

?>
<?php 
require_once("../../../../include/conn.php");
//include connection 
require_once("../../../../include/whisky_Db.php");

//Create class object;
$db=new connect_product();

//echo $db->conn;

//security

require_once("../../../../security/security.php");

?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../../setup/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../style.css" rel="stylesheet">
    <!-- Slick -->
    <link href="slick/slick/slick.css" rel="stylesheet">
	  <link href="slick/slick/slick-theme.css" rel="stylesheet">
	   <link href="zoom-image/css/jquery.jqZoom.css" rel="stylesheet">
	   
	 
	  
  </head>
  <body>
  
  <div class="container-fluid">
  <div class="row">
 
 <div id="dimple_thumbnail">
 <?php 
 require_once("bs3_function.php");
 
 //dimple_image2("images/zoom/z7.jpg","Product Name",14,10,"20ml");

  //get the id of product , if we call ajax
  if(isset($_POST['cataloge'])){
	 
	 $chivas_id=escape($_POST['cataloge']);
	$cataloge=filter_var($chivas_id,FILTER_SANITIZE_STRING);
	
	 
	 $query=$conn->prepare("SELECT * FROM whisky_brands_size WHERE 
	 product_cataloge=? ")or die($this->conn->error);
$query->bind_param('s',$cataloge);
$query->execute();

//bind result;
$result=$query->get_result();
while($row=$result->fetch_assoc()){
	 
	dimple_image2($row['product_image'],$row['product_name'],$row['actual_price'],
	$row['discount_price'],$row['size'],$row['id']); 
 }
 	
	
 }


 ?>

 </div>
   <!--/Product Description-->
   
    <!--rightside bar-->
  <div class="col-md-2"><div id="rigtsidebar">Related Product </div></div>
   <!--rightside bar-->
    
  </div>
  <hr>
  </div>
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  <script src="../../../setup/jquery-3.4.1.min .js"></script>
    
    <script src="../../../setup/bootstrap/js/bootstrap.min.js"></script>
	 <script src="../../../setup/slick/slick/slick.js"></script>
	 	<! <script src="zoom/jquery.magnifier.js"></script>
	 <script src="zoom-image/js/jquery.jqZoom.js"></script>
	<script>
	$(document).ready(function(){
	
	//MAIN IMAGE AND ITS THUMBNAIL
/*
$("#image-thumbnail img").on({
	mouseover:function(){

$(this).css({
'cursor':'pointer',
'border-color':'red',
});

},
mouseout:function(){
$(this).css({
'cursor':'default',
'border-color':'grey',
});
		
},
mouseover:function(){
	var mainImageAttr=$(this).attr('src');
	
	$(".mainImage img").attr('src',mainImageAttr);
}
	
	
})

/*Second image thumbnail in a description
	$("#image-size img").on({
	mouseover:function(){

$(this).css({
'cursor':'pointer',
'border-color':'red',
});

},
mouseout:function(){
$(this).css({
'cursor':'default',
'border-color':'grey',
});
		
},
click:function(){
	var mainImageAttr=$(this).attr('src');
	
	$(".mainImage img").attr('src',mainImageAttr);
}
	
	
})
*/


	//ZOOM MAIN IMAGE ON HOVER
$(function(){

  $(".mainImage img").jqZoom({

    selectorWidth: 40,
    selectorHeight: 40,
    viewerWidth: 800,
    viewerHeight: 500

 

  });

})

//Hide product description when hvering over main image(ie:when zooming)	
	
$(".mainImage").mouseover(function(){
	
	//alert("Working");
	$("#desciption,#rigtsidebar").hide();
})	
$(".mainImage").mouseout(function(){
	
	//alert("Working");
	$("#desciption,#rigtsidebar").show();
})		



/*NAVIGATE THROUG PAGES USING AJAX*/

//load back  first page when first image

$("#home_page").click(function(){
	
//alert('working');

$.post('dimple.php?q=dimple',function(data){
	
	$("#thumbnail").html(data);
})

})


//load  the second page when click on second image

$("#second_image").click(function(){
	
//alert('working');

var cataloge="di001";
$.post('brand-size/dimple/bs2.php #dimple_thumbnail',{cataloge},function(data){
	
	$("#thumbnail").html(data);
})

})

//load  the forth page when click on forth image

$("#forth_image").click(function(){
	
//alert('working');

var cataloge="di003";
$.post('brand-size/dimple/bs4.php #dimple_thumbnail',{cataloge},function(data){
	
	$("#thumbnail").html(data);
})

})


//GET SELECTED QUANTITY AND SHOW MODAL RESULT

$('#addcart').click(function(e){
   e.preventDefault();
		var select=$(".select").val();
		var product='di002';
	//alert(select);
	
	$.post('brand-size/include/modal.php ',{select,product},function(data){
		//location.reload(data);
		$("#modal .modal-box").html(data);
	    $("#modal").fadeIn();
	})

});

//dismiss modal on click

$(".modal-bg").click(function(){
	
	$("#modal").fadeOut();
})	
		









});
	</script>
	
  </body>
</html>