<?php
	session_start();
	require'config.php';
?>


<?php
	if(!$connection){
		echo mysqli_connect_error();
	}else{
		//$sql="";
		//$result
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

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

        <div id="text1">
            <a href=""><img src="Images/download.png" width="50%" height="50%" align="right"  ></a>
            <br><br><br><br><br><br><br>
            <a href="SignUp.html"> <font color="black" style="float: right"> &nbsp&nbsp&nbsp&nbspSign Up</font></a>
            <a href="SignIn.php" ><font color="black" style="float: right">Sign In &nbsp&nbsp&nbsp&nbsp</font></a>

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
        <h1>Sign Up</h1>
        <h2>Sign up to browse more</h2>


		<!--onsubmit="return form1Validate()" -->
        <form name="form1" action="SignUpDB.php" method="POST">
            <table cellspacing="10px">
                <tr>
                    <td><input type="text" placeholder="   Your name" name="urName" value="" class="area" size="35px"> </td>
                </tr>
				
				<!-- <tr>
                    <td><input type="text" placeholder=" Member ID" name="memberID" value="" class="area" size="35px"> </td>
                </tr>  -->
				
                <tr>
                    <td><input type="Email" placeholder="   Email" name="email" value="" class="area" size="35px"> </td>
                </tr>
				 <tr>
                    <td><input type="text" placeholder="  Contact Number" name="Contact_Number" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="   Password" id="pd" name="password" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
                <td><input type="password" placeholder="   Re type password" id="cpd" value="" class="area" size="35px"> </td>
                </tr>

                    <td><input type="submit" name="Snp" value="Sign Up" class="button" size="35px"></td>
                </tr>
                
            </table>
        </form>


    </div>

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