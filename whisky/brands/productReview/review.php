<!DOCTYPE html>

<?php 
$mytime=getdate(date("U"));
$date="$mytime[weekday],$mytime[month],$mytime[mday],$mytime[year]";

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
 
    <!-- Slick -->
    <link href="../../../setup/slick/slick/slick.css" rel="stylesheet">
	  <link href="../../../setup/slick/slick/slick-theme.css" rel="stylesheet">
	   <!-- Jqscript.net -->
	   <link href="../../../setup/zoom-image/css/jquery.jqZoom.css" rel="stylesheet">
	    
	 <style>
	 .btn-review{
		 border:1px solid black;
		 color:black;
		 
	 }
	 .btn-review:hover,.btn-review:focus{
		border:1px solid black;
		 color:black; 
	 }
	 
	 .modal .glyphicon-star{
		 font-size:20px;
		 color:#f7bf17;
	 }
	 .modal-content form{
		 margin:20px;
	 }
	 	.modal #postRiview{
			
			border:1px solid black;
			color:black;
		}
	  </style>
  </head>
  <body>
  
  <div class="container-fluid">
  <div class="row">
  <div class="col-xs-4 col-xs-offset-4 text-center">
  <h4 class="lead">Review This Product</h4>
  <p>Share Your Thoughts with Other Customers</p>
  <button type="button" class="btn btn-warning btn-block btn-review" data-toggle="modal"data-target="#modalReview">
  Write A Customer Review</button>
  <!--Modal--->
  <div class="modal" tab-index=-1 id="modalReview" >
  <div class="modal-dialog">
  <div class="modal-content">
  <form method="post" action="">
  <div class="str"align="center">
  <i class="glyphicon glyphicon-star" data-index="0" style="display:none;"></i>
    <i class="glyphicon glyphicon-star"data-index="1"></i>
	 <i class="glyphicon glyphicon-star"data-index="2"></i>
	  <i class="glyphicon glyphicon-star"data-index="3"></i>
	   <i class="glyphicon glyphicon-star"data-index="4"></i>
	    <i class="glyphicon glyphicon-star"data-index="5"></i>
  </div>
  <input type="hidden" name="starRate" value="" class="ratedValue">
  <input type="hidden" name="ratedDate" value="<?php echo $date;?>" class="rateDate">
  <br>
  <div class="form-group">
  <label for="name">Your Name</label>
  <input type="text" id="name" value="" class="form-control" 
  autocomplete="off" required placeholder="Your Name">
  </div>
  
  <div class="form-group">
  <label for="comment">Your Comment</label>
  <textarea class="form-control" id="comment" value="" required placeholder="Share Your Thoughts"></textarea>
  </div>
  
  <div class="form-group">
  <button id="postRiview"type="submit" name="submit" class="btn btn-warning">Post Review</button>
  </div>
  <div class="error text-danger"></div>
  </form>
  </div>
  </div>
  </div>
  <!--/Modal--->
  </div>
  
  <div class="col-md-12"></div>
  </div>
  </div>
 






    <script src="../../../setup/jquery-3.4.1.min .js"></script>
    <!-- bootstrap-->
    <script src="../../../setup/bootstrap/js/bootstrap.min.js"></script>
	
	 <!-- jqscript.net -->
	 	 <script src="../../../setup/zoom-image/js/jquery.jqZoom.js"></script>
		 
	 <script>
	 
	 var ratingIndex=-1;
function greyStar(){
	 
	$(".str  .glyphicon-star").css({
		'color':'#b9b9b9'
	})
}

function filedStar(max){
	
	for(var i=0;i<=max;i++){
		
	$(".str .glyphicon-star:eq("+i+")").css("color","#f7bf17");	
	}	
	}
	

$(document).ready(function(){
	greyStar();
	
	$(".str .glyphicon-star").mouseover(function(){
	greyStar();
   var  ratedIndex=$(this).data("index");
   filedStar(ratedIndex);
		
	})
	
	
	$(".str .glyphicon-star").click(function(){
		
		var ratedIndex=$(this).data("index");
		localStorage.setItem("rating",ratedIndex);
		$getItem=parseInt(localStorage.getItem("rating"));
		
		//pass this value into empty value input
		$(".ratedValue").val($getItem);
	})
	
	$(".str .glyphicon-star").mouseleave(function(){
		greyStar();
		
		if(ratingIndex!=-1){
		  filedStar(ratedIndex);	
		}
		
		if(localStorage.getItem("rating")!=null){
			
			filedStar(parseInt(localStorage.getItem("rating")));
			$getItem=parseInt(localStorage.getItem("rating"));
		   //pass this value into empty value input
		  $(".ratedValue").val($getItem);
		}
		
	})
	
	
	$("#postRiview").click(function(){
	
   //get input values	
	var ratedValue=$(".ratedValue").val();	
	if(ratedValue==""){
		$(".modal form .error").htm("Please Rate  Product");
	    return false;
	}
	
	//get date value
	var date=$(".rateDate").val();
	
   //get name

   var name=$("#name").val();
    if(name==""){
	$(".modal form .error").htm("Your Name Is Required.");
	    return false;	
	}
   
   //get comment

   var comment=$("#comment").val();
   if(comment==""){
	$(".modal form .error").htm("Please Share Your Thoughts");
	    return false;   
   }
    
	//set product catalogue
	
	var cataloge="di000";



	
	})
	
	
	
	

 })
	 </script>
  </body>
</html>