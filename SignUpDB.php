<?php
session_start();
require'config.php';

	$name=$_POST["urName"];
	//$memberId=$_POST["memberID"];
	$email=$_POST["email"];
	$contacNumber=$_POST["Contact_Number"];
	$password=$_POST["password"];
	
	if(!$connection){
		echo mysqli_connect_error();
	}else{
		$sql="INSERT INTO `user`(`Name`, `MemId`, `Email`, `Contac`, `Password`) VALUES ('$name',NULL,'$email','$contacNumber','$password')";
		
		if(mysqli_query($connection,$sql)==TRUE){
			echo"<script> alert('User has been Successfully Saved') </script>";
			//echo "USer has been Successfully Saved";
			//header("Location :SignUp.php");
		}else{
			
			echo"Faild to save the Admin ",mysqli_error($connection);
		}
		
		mysqli_close($connection);
	}
?>