<?php

	$server = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname= "librarymanagementsystem";
	$connection = new mysqli($server,$dbUsername,$dbPassword,$dbname);
	
	if($connection->connect_error){
		die("Connection Faild :".$connection->connect_error);
	}
?>