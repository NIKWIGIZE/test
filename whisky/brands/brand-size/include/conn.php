<?php

$conn=new mysqli("localhost","root","","avectime.com",3308);

if($conn->connect_error){
	die('Can not Connect to Database'.$conn->connect_error);
	
}
else{
	//echo"Connected ";
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//for error reporting
$conn->set_charset("utf8mb4");
 ?>