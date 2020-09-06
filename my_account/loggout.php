<?php 
//Create loggout page
session_start();

session_destroy();


header("location:../index.php");




?>