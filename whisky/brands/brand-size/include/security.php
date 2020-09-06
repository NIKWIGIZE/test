<?php

function escape($data){
	
	$data=htmlspecialchars($data);
	$data=trim($data);
	$data=stripslashes($data);
	return $data;
}

 ?>