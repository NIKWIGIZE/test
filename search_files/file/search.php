<?php 
//include security

require('../../security/security.php');

//get product catalogue

if(isset($_GET['cat'])){
	
	$cataloge=escape($_GET['cat']);
	
	header("location:../$cataloge");
}
?>