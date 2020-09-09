<?php

//connect to heroku database i created called bigrwanda-database
 
 $hostname="us-cdbr-east-02.cleardb.com";
 $username="b2ffb9bae31362";
 $pass="83b1c0c2 ";
 $dbname="heroku_173a3af4752f299";
 $conn=new mysqli($hostname,$username,$pass,$dbname);
 if($conn->connect_error){
	 die($conn->connect_error);
 }
else{
	//echo"Connected ";
}

 ?>
