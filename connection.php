<?php
	$db_user = "root";
	$db_pass = "Manju2000@";
	$db_name = "pachpee";

$conn = new mysqli("localhost",$db_user,$db_pass,$db_name);
if($conn->connect_error){
	die("Connection failed :".$conn->connect_error);
} ?>
