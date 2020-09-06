<style>

#mysearch{
	margin-left:290px;
	margin-right:355px;
	margin-top:-75px;
	position:relative;
	background-color:beige;
	padding:20px;
	z-index:800000;
}

</style>


<?php 
require_once("../include/conn.php");

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
	
	echo $row['component']."<br>";
}

}
else{
	
	echo "No record found";
}
 ?>
 
 </div>