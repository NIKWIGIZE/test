<style>
.header-small{
	background-color:var(--primary-color);
	font-family:var(--roboto);
		
}
#container-iconbar-small{
border:0.2px solid grey;
width:40px;
padding:4px 4px 4px 4px;
margin-top:10px;
border-radius:0.2em;

}
#container-iconbar-small:hover{
border:1px solid black;		
}
.iconbar{
width:25px;
height:2px;
background-color:black;
margin:5px ;
padding-right:2px;
	
}

.col-xs-9 .brand-small{
	
	border:1px solid transparent;
	margin-top:13px;	
}
.col-xs-9 .brand-small:hover{
	border:1px solid white;
}
.col-xs-9 .brand-small a{
	color:white;
	text-decoration:none;
}

 .form-small form {	
	margin-top:0px;	
	margin-bottom:-8px;	
}
.header-small ul{
	margin-top:13px;
}
.header-small li{
	
	border:1px solid transparent;
}

 .header-small li:hover{
	border:1px solid white;
	
}
 .header-small li a{
	color:white;
	text-decoration:none;
	font-weight:bold;
	padding-top:7px;
	padding-bottom:7px;
	font-size:15px;
	
}
.header-small .username{
	border:1px solid black!important;
	border-radius:50%;
	background-color:black;
}
.navigation-small ul li{
	margin-top:10px;
}
.list-small li{
	border:1px solid transparent;
	
}
.list-small li:hover{
	border:1px solid black;
	
	
}
.list-small li a{
	color:black;
	text-decoration:none;
	font-size:15px;
	
}
.list-small a .badge{
	background-color:#f0ad4e;
	border:0.4px solid black;
}


</style>



<!-- Header section -->
<nav class="navbar navbar-default navbar-fixed-top">
<div class=" container-fluid header-small  ">
<div class="row ">
 
<div class="col-xs-5 visible-xs  ">
<div class="row">
<div class="col-xs-3">
<div id="container-iconbar-small">
<div class="iconbar"></div>
  <div class="iconbar"></div>
  <div class="iconbar"></div>
  </div>
  </div>
<div class="col-xs-9 ">
 <h3 class=" brand-small"><a href="../index.php">Avectime</a></h3>
 </div>
 </div>
  </div>


<div class="col-xs-7 visible-xs">
<ul class="header-small list-inline text-right"  >
<li><a href="../forms/signin.php">Sign In</a></li>
<li><a href="../forms/signup.php"> Create  Account</a></li>
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




<div class="row">
<div class="col-xs-12 visible-xs form-small">
<form id="form-xs" >
<div class="form-group">
<div class="input-group">
<input class="form-control" type="search" id="search-xs" autocomplete="off">
<div class="input-group-btn">
  <a class="btn btn-warning" href="#" title="Search">
  <span class="glyphicon glyphicon-search"></span>
  </a>
  </div>
</div>
</div>
  <!--Ajax--->
  <div class="post_data"></div>
</form>
</div>
</div>
</div>

<!-- /Header section -->



<!-- Navigation --->

<div class="container-fluid navigation-small">
<div class="row">
<div class="col-xs-8 visible-xs">
<ul class=" list-inline list-small">
<li><a href="../my_account/my_account.php"><span class="glyphicon glyphicon-home"></span>&nbsp; My Account</a></li>
<li><a href="#">Track Your Order</a></li>
</ul>
</div>
<div class="col-xs-4 text-right visible-xs">
<ul class="list-inline list-small">
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

<li ><a href="cart.php">Cart <span class="badge"><?php if($total!=0){echo $total;}else{ echo "0";} ?></span></a></li>
<?php 
}else{
echo '<li ><a href="cart.php">Cart <span class="badge">0</span></a></li>';	
	
} ?>

</ul>
</div>
</div>
</div>
</nav>
<!-- /Navigation -->




