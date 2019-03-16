<?php
session_start();
require 'config.php';

$username = $_POST['urName'];
$password = $_POST["urPass"];



    if(!$connection){
        echo mysqli_connect_error();
    }else{
        $sql = "Select * from user where Name='$username'";
       
        $result = mysqli_query($connection,$sql);

        $row = $result->fetch_assoc();

            
        if($password==$row['Password']){

        }else{
            $_SESSION['LoginError']="Password Is Incorrect please enter Valid Password"; 
        }

        if($username == $row['Name']){

        }else{

            $_SESSION['LoginError']="UserName Is Incorrect please enter Valid UserName"; 
        }



		if($password==$row['Password'] && $username === $row['Name']){
			  header("Location:Homepage.html");
			  unset( $_SESSION['LoginError']);
		}else{
			
			header("Location:SignIn.php");
			echo "Login Faild";
		}
		
       /* if(md5($password) === $row['password'] && $username === $row['Name']){
            
            $_SESSION["loggingSession"] = "logged";
            $_SESSION['profPicture']=$row['profURL'];
         //   echo $_SESSION['profPicture'];
            $_SESSION['ID'] = $row['AdminId'];
            $_SESSION['LoginError']=NULL;
            //  header("Location:addUserHtml.php ");
            header("Location:  Dashboad1.php");
          
        }else{

            header("Location:index.php");

           

        }*/
    }

?>