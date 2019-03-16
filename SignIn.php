<?php
	session_start();
	require 'config.php';
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>

        <link rel="stylesheet" href="style.css">
    <script language="JavaScript" type="text/javascript" src="validation.js"></script>

    <style>
         #container{

            height: 1000px;
        }

        #header{
            height: 30%;
        }

        #mainbody{

            height:55%;
            width:100%;
        }
        #footer {

            height: 15%;
        }
        .area{
            height: 40px;
            border-width: 1px;
            border-radius:3px;
            border-color:black;


        }
        .button{
            background-color:#4682B4;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            height: 40px;
            width: 100%;


        }

    </style>

</head>
<body>
<div id="container">
    <div id="header"><div id="img1"><a href="" ><img src="Images/logo.png" width="10%" height="10%" align="left"></a></div>
        <font color="white" style="font-family:'Good Times';float: left;font-size: 75px" >&nbsp&nbsp&nbsp&nbsp ONLINE<br>&nbsp&nbsp&nbsp&nbspLIBRARY</font>


		 <?php
                    if (!empty($_SESSION['LoginError'])) {

                        $message = $_SESSION['LoginError'];
						
               
                    echo "<script type='text/javascript'> alert('$message');</script>";
					unset( $_SESSION['LoginError']);
                    }
        ?>
        <div id="text1">
            <a href=""><img src="Images/download.png" width="50%" height="50%" align="right"  ></a>
            <br><br><br><br><br><br><br>
            <a href="SignUp.html"> <font color="black" style="float: right"> &nbsp&nbsp&nbsp&nbspSign Up</font></a>
            <a href="SignIn.html" ><font color="black" style="float: right">Sign In &nbsp&nbsp&nbsp&nbsp</font></a>

        </div>
        <div id="navbar">
             <li><font color="black" size="3">Search</font></li>
            <li><a href="ContactUs.html"><font color="black" size="4"  >Contact Us</font></a></li>
            <li><a href=""><font color="black" size="4">About Us</font></a></li>
            <li><a href=""><font color="black" size="4">Profile</font> </a></li>
			<li><a href=""><font color="black" size="4">Book Issue </font></a></li>
            <li><a href="Category.html"><font color="black" size="4">Category</font> </a></li>
            <li><a href="Homepage.html"><font color="black" size="4">Home</font> </a></li><br/>
    </div> </div>

    <div id="mainbody" align="center">
        <h1>Sign In</h1>
        <h2>Welcome Back!</h2>

            <form name="form3" action="SignInDB.php" method="POST">
			
                <table cellspacing="10px">
                    <tr>
                        <td><input type="text" placeholder="   Username/Email" name="urName" value="" class="area" size="35px"> </td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="   Password" id="pd" name="urPass" value="" class="area" size="35px"> </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sIn" value="Sign In"  size="35px" class="button" > </td>
                    </tr>
                    <tr>
                        <td><a href="SignUp.php"> <input type="submit" name="sUp" value="Sign Up" class="button" size="35px" style="background-color:#4682B4 ; border-color: ;color:white" > </a></td>
                    </tr>
                    
                </table>
				
            </form>


        </div>

    <div id="footer">
	
	 <div id="footer">
         <li><a href="Homepage.html"><font color="black">Home</font></a></li>
        <li><a href="Category.html"><font color="black">Category</font> </a></li>
		<li><a href=""><font color="black" size="4">Book Issue </font></a></li>
        <li><a href=""><font color="black">Profile</font></a></li>
        <li><a href="ContactUs.html"><font color="black">Contact us</font> </a> </li>
        <br><br><br><br><br> Copyright @ WE_19_02 2019-All rights Reseved
    </div>
	  

</div>
</body>
</html>