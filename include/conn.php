
<?php
//Create connection

$localhost="localhost";
$username="root";
$password="";
$dbname="avectime.com";

$conn=new mysqli($localhost,$username,$password,$dbname,3308);

//check connection

if($conn->connect_error){
	
	die('Failled Connection'.$conn->connect_error);
}
else{
	//echo"Connected";
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn->set_charset('utf8mb4');
 ?>