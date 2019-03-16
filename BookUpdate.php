<?php


session_start();
require 'config.php';
// echo "tttttttttttttttttttttttttttttttttttt";
// header("location:updateProfile.php?ID={$ID}&name={$userName}&nic={$nicName}&email={$email}&contactNumber={$contacNumber}&password={$password}");

$id = $_GET["ID"];
$userName= $_GET["name"];
$nicName=$_GET["nic"];
// $pictureUrl = $_SESSION['imgURL'];
$pictureUrl=$_SESSION['imgURLL'];

$email= $_GET["email"];
$contacNumber= $_GET["contactNumber"];
$password= $_GET["password"];

$encriptPass = md5($password);


    if(!$connection){

        echo mysqli_connect_error();

    }else{

       

       

        $sql="UPDATE `admin` SET `AdminId`='$id',`Name`='$userName',`NIC`='$nicName',`Email`='$email',`ContacNumber`='$contacNumber',`password`='$encriptPass' WHERE `AdminId`='$id'";
        
        $result = mysqli_query($connection,$sql);

        if(mysqli_query($connection,$sql)==TRUE){

            echo "<script>alert('Updated Sucessfully') </script>";
             header("Location:addUserHtml.php");
        }else{

            echo "<script>console.log('Updated Fail') </script>";
            echo "Updated Fail";
            header("Location:addUserHtml.php ");

        }
    }

?>
