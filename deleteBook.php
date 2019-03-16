<?php
    session_start();
    require 'config.php';

    $id = $_GET['id'];
  


  //  $sqlDeleteFile = "Select * FROM `book` WHERE SerialNum='$id'";
	 $sql = "DELETE FROM `book` WHERE SerialNum='$id'";
    //$resultDeleteFile = mysqli_query($connection,$sqlDeleteFile);
    //$row = $resultDeleteFile->fetch_assoc();

    // $url = $row['profURL'];
    
    // echo $url;
    // if(unlink("$url"))
    // echo "File Deleted.";
    //echo $id;
    
        
    if(mysqli_query($connection,$sql)==TRUE){

        echo "Book hass been successfully Delete";
      
       header("Location:Book.php? ");

      }
      else{

        echo "Faild to Delete the Book","<br>" ,mysqli_error($connection);

      }
   
    
    
    mysqli_close($connection);
?>