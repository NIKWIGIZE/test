<style>

#mysearch{
	position:absolute;
	background-color:white;
	padding-left:20px;
	width:90%;
	z-index:800000;
}
#mysearch a:hover{
	color:orange;
	
	
}
#mysearch .list-group-item{
	border:0px;
	
}
#mysearch a {
	margin-bottom:-20px;
	font-weight:bold;
	font-size:16px;
}
</style>


<?php


//require connection 
require_once("../../include/conn.php");


?>
<div id="mysearch">
<?php

if(isset($_POST['search'])){
   
	$search=$_POST['search'];
	
	
$query=$conn->prepare("SELECT*FROM main_search WHERE component LIKE CONCAT('%',?,'%')")or die($conn->error);
$query->bind_param('s',$search);
$query->execute();

//bind result

$result=$query->get_result();

while($row=$result->fetch_assoc()){
	
			 
	$search=$row['component'];
				
echo "<a href='../search_files/$search.php' class='list-group-item '><div>$search</div></a> <br>";
	
  
}
//get the serchead name int session



}
else{
	
	echo "No record found";
}
 ?>
 
 </div>