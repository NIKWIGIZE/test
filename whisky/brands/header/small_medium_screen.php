<style>
.header-small_medium{
	background-color:var(--primary-color);
	font-family:var(--roboto);
		
}
#container-iconbar-small_medium{
border:0.2px solid grey;
width:40px;
padding:4px 4px 4px 4px;
margin-top:10px;
border-radius:0.2em;

}
#container-iconbar-small_medium:hover{
border:1px solid black;		
}
.iconbar{
width:25px;
height:2px;
background-color:black;
margin:5px ;
padding-right:2px;
	
}

.brand-small_medium{
	margin-top:15px;
	margin-left:15px;
	
}

 .brand-small_medium a{
	 border:1px solid transparent;
	color:white;
	text-decoration:none;
}
.brand-small_medium a:hover{
	border:1px solid white;
	
}

form {
	
	margin-top:10px;
	
}
.header-small_medium ul{
	margin-top:13px;
}
.header-small_medium li{
	
	border:1px solid transparent;
}

 .header-small_medium li:hover{
	border:1px solid white;
	
}
 .header-small_medium li a{
	color:white;
	text-decoration:none;
	font-weight:bold;
	padding-top:7px;
	padding-bottom:7px;
	font-size:15px;
	
}
.header-small_medium .dropdown-small_medium li a{
	color:black!important;
	padding-top:2px !important;
	padding-bottom:2px !important;
}
.header-small_medium .username{
	border:1px solid black!important;
	border-radius:50%;
	background-color:black;
}
.navigation-small_medium ul li{
	margin-top:10px;
}
.list-small_medium li{
	border:1px solid transparent;
	
}
.list-small_medium li:hover{
	border:1px solid black;
	
	
}
.list-small_medium li a{
	color:black;
	text-decoration:none;
	font-size:15px;
	
}
.list-small_medium a .badge{
	background-color:#f0ad4e;
	border:0.4px solid black;
}
.popover {
  
  max-width: 420px;
 
 
}

.popover-content .popover-btn-small{
	
  width:390px;
  
}
.popover-content  .text-small{
	margin-left:80px;
	margin-bottom:0px;
	
}
.popover-content  .text-small a{
	color:blue;
}
.popover-content  .text-small a:hover{
	
	 color:orange;
}

.popover-content  .popover-footer_small_medium{
	
	padding-top:20px;
	margin-left:80px;
	color:blue;
}


.popover-content  #container_small_medium{
	width:400px;
	background-color:white;
}

.popover-content  #leftsidebar_small_medium{
	width:180px;
	border-right:1px solid #eeeeee;
	float:left;
	
	
}
.popover-content  #leftsidebar_small_medium .header{
	
	font-weight:bold;
	background-color:white;
	font-size:15px;
}
.popover-content  #leftsidebar_small_medium .header:hover{
	border:1px solid transparent;
	background-color:white;
}

.popover-content  #leftsidebar_small_medium li{
	margin:3px;
}
.popover-content  #leftsidebar_small_medium li:hover{
	border:1px solid transparent;
	
}
.popover-content  #leftsidebar_small_medium li a:hover{
	color:orange;
	text-decoration:underline;
	
}
.popover-content  #rightsidebar_small_medium{
	width:180px;
	margin-right:20px;
	float:right;
	
}
.popover-content  #rightsidebar_small_medium .header{
	
	font-weight:bold;
	background-color:white;
	font-size:15px;
}
.popover-content  #rightsidebar_small_medium .header:hover{
	border:1px solid transparent;
	background-color:white;
}

.popover-content  #rightsidebar_small_medium li{
	margin:3px;
}
.popover-content  #rightsidebar_small_medium li:hover{
	border:1px solid transparent;
	
}
.popover-content  #rightsidebar_small_medium li a:hover{
	color:orange;
	text-decoration:underline;
	
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
<nav class="navbar navbar-default navbar-fixed-top hidden-xs">
<div class=" container-fluid header-small_medium  ">
<div class="row ">
 
<div class="col-sm-8 visible-sm  ">
<div class="row">
<div class="col-sm-4">
<div class="row">
<div class="col-sm-1">
<div id="container-iconbar-small_medium">
<div class="iconbar"></div>
  <div class="iconbar"></div>
  <div class="iconbar"></div>
  </div>
  </div>
  <div class="col-sm-3">
  <h3 class=" brand-small_medium"><a href="../../index.php">Avectime</a></h3>
  </div>
  </div>
  </div>
<div class="col-sm-8 ">
 <form id="form-sm">
<div class="form-group">
<div class="input-group">

<! To create a dropdown-menu button  with an input group on left side of our search bar>
  <div class="input-group-btn dropdown " >
 
  <a class="btn btn-danger dropdown-toggle" href="#" data-toggle="dropdown" title="Search in">All
  <span class="caret"></span>
  </a>
  <ul class="dropdown-menu dropdown-small_medium">
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


<input class="form-control" type="search" id="search-sm" autocomplete="off">
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


<div class="col-sm-4 visible-sm">
<ul class="header-small_medium list-inline text-right"  >
<li><a href="../../forms/signin.php">Sign In</a></li>
<li><a href="../../forms/signup.php"> Create Account</a></li>
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

<div class="container-fluid navigation-small_medium">
<div class="row">
<div class="col-sm-8 visible-sm">
<ul class=" list-inline list-small_medium">
<li><a href="../../my_account/my_account.php"><span class="glyphicon glyphicon-home"></span>&nbsp; My Account</a></li>
<li id="signin_category_small"><a href="#">Hi,Sign in &amp Category <span class="caret"></span></a></li>

<li><a href="#">Help &amp; Contact&nbsp;24/7</a></li>
</ul>
</div>
<div class="col-sm-4 text-right visible-sm">
<ul class="list-inline list-small_medium">
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

<li class="cart"><a href="#">Cart <span class="badge"><?php if($total!=0){echo $total;}else{ echo "0";}?></span></a></li>
<?php 
}else{
echo '<li class="cart"><a href="#" >Cart <span class="badge">0</span></a></li>';	
	
} ?>


</ul>
</div>
</div>
</div>
</nav>
<!-- /Navigation -->




    <script src="../../setup/jquery-3.4.1.min .js"></script>
    
    <script src="../../setup/bootstrap/js/bootstrap.min.js"></script>
	 <script src="../../setup/slick/slick/slick.js"></script>
	  <script src="js/main.js"></script>
	<script>
	$(document).ready(function(){

//sign in and category popover
$("#signin_category_small a").popover({


content:' <div class="row">'+
  '<div class="col-xs-12">'+
  '<a class="btn btn-warning popover-btn-small" href="forms/signin.php">Sign In</a>'+
  '<p class="text-small small">New Customer ? <a href="forms/signup.php">Start here</a></p>'+
  '</div></div><hr>'+
  '<div id="container_small_medium">'+
  '<div id="leftsidebar_small_medium">'+
 ' <ul class="list-unstyled">'+
  '<li class="header">Your Whisky Selections</li>'+
  '<li><a href="#">Your Shopping List</a></li>'+
  '<li><a href="../whisky.php">All Whisky Departments</a></li>'+
  '<li><a href="#">Most People Look For</a></li>'+
  '<li><a href="#">Whisky of Cerebrities</a></li>'+
  '<li><a href="#">Best Brands</a></li>'+
 ' <li><a href="#">Low Price Whisky</a></li>'+
  '<li><a href="#">Other Spirits</a></li>'+
  '<li><a href="#">Your Gift</a></li>'+
  '</ul>'+
  
  '</div>'+
   '<div id="rightsidebar_small_medium">'+
    '<ul class="list-unstyled">'+
  '<li class="header">Wine With Friends</li>'+
 ' <li><a href="#">Your Cart</a></li>'+
  '<li><a href="#">Shop By Category</a></li>'+
  '<li><a href="#">Wedding Champagne</a></li>'+
  '<li><a href="#">Wine with Cerebrities</a></li>'+
 ' <li><a href="#">Wine at Low Price </a></li>'+
   '<li><a href="#"></a></li>'+
  '<li><a href="#"></a></li>'+
  '<li><a href="#"></a></li>'+
  '</ul>'+
   
   '</div>'+
  '</div>'+
  '<div class="row">'+
  '<div class="col-sm-12">'+
  ' <p class=" text-center popover_footer_small_medium">Thank You for Shopping with Us</p>'+
  '</div></div>',
trigger:'click',
placement:'bottom',
html:true

});


	
	

});
	</script>
	