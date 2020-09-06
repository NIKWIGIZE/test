<style>
.header_medium{
	background-color:var(--primary-color);
	font-family:var(--roboto);
		
}
#container-iconbar_medium{
border:0.2px solid grey;
width:40px;
padding:4px 4px 4px 4px;
margin-top:10px;
border-radius:0.2em;

}
#container-iconbar_medium:hover{
border:1px solid black;		
}
.iconbar{
width:25px;
height:2px;
background-color:black;
margin:5px ;
padding-right:2px;
	
}

.brand_medium{
	margin-top:15px;
	margin-left:15px;
	
}

 .brand_medium a{
	 border:1px solid transparent;
	color:white;
	text-decoration:none;
}
.brand_medium a:hover{
	border:1px solid white;
	
}

form {
	
	margin-top:10px;
	
}

.header_medium ul{
	margin-top:13px;
}
.header_medium li{
	
	border:1px solid transparent;
}

 .header_medium li:hover{
	border:1px solid white;
	
}
 .header_medium li a{
	color:white;
	text-decoration:none;
	font-weight:bold;
	padding-top:7px;
	padding-bottom:7px;
	font-size:15px;
	
}

.header_medium .dropdown_medium li a{
	color:black!important;
	padding-top:2px !important;
	padding-bottom:2px !important;
}
.header_medium .username{
	border:1px solid black!important;
	border-radius:50%;
	background-color:black;
}

.navigation_medium ul li{
	margin-top:10px;
}
.list_medium li{
	border:1px solid transparent;
	
}
.list_medium li:hover{
	border:1px solid black;
	
	
}
.list_medium li a{
	color:black;
	text-decoration:none;
	font-size:14px;
	
}
.list_medium a .badge{
	background-color:#f0ad4e;
	border:0.4px solid black;
}

.popover {
  
  max-width: 420px;
 
 
}

.popover-content .popover-btn-medium{
	
  width:390px;
  
}
.popover-content  .text-medium{
	margin-left:80px;
	
}
.popover-content  .text-medium a{
	color:blue;
}
.popover-content  .text-medium a:hover{
	
	 color:orange;
}

.popover-content  .popover-footer{
	
	padding-top:20px;
	margin-left:80px;
	color:blue;
}


#container{
	width:400px;
	height:200px;
	background-color:white;
}

#leftsidebar{
	width:180px;
	height:200px;
	border-right:1px solid #eeeeee;
	float:left;
	
	
}
#rightsidebar{
	width:180px;
	margin-right:20px;
	height:200px;
	float:right;
	
}
.popover.bottom>.arrow{
	
  margin-left:60px;
	 
}
</style>

<?php 
//include connection 

require_once('../../include/conn.php');

//security;

require_once('../../security/security.php');

?>

<!-- Header section -->
<nav class="navbar navbar-default navbar-fixed-top hidden-xs hidden-sm">
<div class=" container-fluid header_medium  ">
<div class="row ">
 
<div class="col-md-9  ">
<div class="row">
<div class="col-md-3">
<div class="row">
<div class="col-md-3">
<div id="container-iconbar_medium">
<div class="iconbar"></div>
  <div class="iconbar"></div>
  <div class="iconbar"></div>
  </div>
  </div>
  <div class="col-md-9">
  <h3 class=" brand_medium"><a href="../../index.php">Avectime</a></h3>
  </div>
  </div>
  </div>
<div class="col-md-9 ">
 <form id="form-md">
<div class="form-group">
<div class="input-group">

 <! To create a dropdown-menu button  with an input group on left side of our search bar>
  <div class="input-group-btn dropdown " >
 
  <a class="btn btn-danger dropdown-toggle" href="#" data-toggle="dropdown" title="Search in">All
  <span class="caret"></span>
  </a>
  <ul class="dropdown-menu dropdown_medium">
  <li><a href="">All Department</a></li>
  <li><a href="">Art &amp; Craft</a></li>
  <li><a href="">Automotive</a></li>
  <li><a href="">Beauty &amp; Personal Care</a></li>
   <li><a href="">Books</a></li>
    <li><a href="">Computer</a></li>
	 <li><a href="">Digital Music</a></li>
	  
	   <li><a href="">Women's Fashion</a></li>
	    <li><a href="">Men's Fashion</a></li>
		 <li><a href="">Girls's Fashion</a></li>
		  <li><a href="">Boy's Fashion</a></li>
		   <li><a href="">Deals</a></li>
		    <li><a href="">Health &amp; Household</a></li>
			 <li><a href="">Home &amp; Kitchen</a></li>
			 
			   <li><a href="">Luggage</a></li>
			    <li><a href="">Movies &amp; TV</a></li>
				 <li><a href="">Music, CDs &amp; Vinyl</a></li>
			
				 <li><a href="">Sports &amp; Outdoors</a></li>
				
				 
  </ul>
  </div>

<input class="form-control" type="search" id="search-md" autocomplete="off">
<div class="input-group-btn">
  <a class="btn btn-warning" href="#" title="Search">
  <span class="glyphicon glyphicon-search"></span>
  </a>
  </div>
</div>
</div>
</form>
 </div>
 </div>
  </div>


<div class="col-md-3 ">
<ul class="header_medium list-inline text-right"  >
<li><a href="../../forms/signin.php">Sign In</a></li>
<li><a href="../../forms/signup.php"> Create  Account</a></li>
<?php 
//If user has sign in display first letter in header

if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	
	$sql=$conn->prepare("SELECT name FROM user_account WHERE email=?")or die($conn->error);
    $sql->bind_param('s',$email);
	$sql->execute();
	
	//bind result
	$result=$sql->get_result();
	
	while($row=$result->fetch_assoc()){
		$name=$row['name'];
		echo"
		<li title='Sign Out' class='username text-capitalize'><a href=''>".substr($name,0,1)."</a></li>
		";
	}

}
?>
</ul>
</div>
</div>

</div>

<!-- /Header section -->



<!-- Navigation --->

<div class="container-fluid navigation_medium">
<div class="row">
<div class="col-md-8 ">
<ul class=" list-inline list_medium">
<li><a href="../../my_account/my_account.php"><span class="glyphicon glyphicon-home"></span> &nbsp; My Account</a></li>
<li  id="signin_category_medium"data-toggle="popover"><a href="#">Hi,Sign in &amp Category <span class="caret"></span></a></li>

<li><a href="#">Help &amp; Contact&nbsp;24/7</a></li>
</ul>
</div>
<div class="col-md-4 text-right ">
<ul class="list-inline list_medium">
<li><a href="#">Daily Deals</a></li>
<li><a href="#">Track Your Order</a></li>
<li ><a href="#">EN <span class="caret"></span></a></li>

<?php
//Display amount in cart of a user who sign into account;

if(isset($_SESSION['email'])){
	
	$email=$_SESSION['email'];
	
	$query=$conn->prepare("SELECT SUM(quantity)AS total FROM added_to_cart WHERE email=?") or die($conn->error);
	$query->bind_param('s',$email);
	$query->execute();
	
	//bind result;
	
	$result=$query->get_result();
	
	$row=$result->fetch_assoc();
     $total=$row['total'];	


 ?>

<li class="mycart"><a href="../../cart/signin.php">Cart <span class="badge"><?php if($total!=0){echo $total;}else{ echo "0";} ?></span></a></li>
<?php 
}else{
echo '<li class="mycart"><a href="../../cart/signin.php" >Cart <span class="badge">0</span></a></li>';	
	
} ?>



</ul>
</div>
</div>
</div>
</nav>
<!-- /Navigation -->




	



    <div id="post_data"></div>
    <script src="../../setup/jquery-3.4.1.min .js"></script>
    
    <script src="../../setup/bootstrap/js/bootstrap.min.js"></script>
	 <script src="../../setup/slick/slick/slick.js"></script>
	  <script src="js/main.js"></script>
	<script>
	$(document).ready(function(){
//sign in and category popover

$("#signin_category_medium a").popover({


content:' <div class="row">'+
  '<div class="col-xs-12">'+
  '<a class="btn btn-warning popover-btn-medium" href="forms/signin.php">Sign In</a>'+
  '<p class="text-medium small">New Customer ? <a href="forms/signup.php">Start here</a></p>'+
  '</div></div><hr>'+
  '<div id="container">'+
  '<div id="leftsidebar">Content Here</div>'+
   '<div id="rightsidebar">Content Here</div>'+
  '</div>'+
 ' <p class=" popover-footer">Thank You for Shopping with Us</p>',
trigger:'click',
placement:'bottom',
html:true

});



/*If user click cart,display sign in if not signed in already.

$(".mycart").click(function(e){
	
	//alert('working');
	e.preventDefault();
	$.post('../../cart/signin.php #dialoge',function(data){
		
		$("#post_data").html(data);
	})
	
})
*/	
	

});
	</script>
	
