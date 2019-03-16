<?php
session_start();
require'config.php';

	
	
	$serialNum=preg_replace('/\s+/', '', $_POST["b_no"]);
	//$memberId=$_POST["memberID"];
	$title=$_POST["b_title"];
	$author=$_POST["b_author"];
	$categoryType=$_POST["taskOption"];
	$date=$_POST["date"];
	 

	if(isset($_POST["update"])){
		
        
		$sql1="UPDATE `book` SET `SerialNum`='$serialNum',`Title`='$title',`Author`='$author',`categoryType`='$categoryType',`Date`='$date' WHERE `SerialNum`='$serialNum'";
       echo $sql1;

        if(mysqli_query($connection,$sql1)==TRUE){

            echo "<script>alert('Updated Sucessfully') </script>";
            header("Location:Book.php? ");
        }else{

            echo "<script>console.log('Updated Fail') </script>";
            echo "Updated Fail";
			header("Location:Book.php? ");
           

        }
		
	}else{
		if(!$connection){
		echo mysqli_connect_error();
	}else{
		$sql="INSERT INTO `book`(`SerialNum`, `Title`, `Author`, `categoryType`, `Date`) VALUES ('$serialNum','$title','$author','$categoryType','$date')";
		
		
		if(mysqli_query($connection,$sql)==TRUE){
			echo"<script> alert('Book has been Successfully Saved') </script>";
			//echo "USer has been Successfully Saved";
			header("Location:Book.php? ");
			//header("Location :SignUp.php");
		}else{
			
			echo"Faild to save the Book ",mysqli_error($connection);
			header("Location:Book.php? ");
		}
		
		mysqli_close($connection);
	}
	}
	
?>