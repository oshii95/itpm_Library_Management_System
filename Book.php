<?php
	session_start();
	require'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Issue Form</title>

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

            height:65%;
            width:100%;
        }
        #footer {
			
			margin-bottom:100px;
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
		
		#books {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 70%;
		}

		#books td, #books th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#books tr:nth-child(even){background-color: #f2f2f2;}

		#books tr:hover {background-color: #ddd;}

		#books th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
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
        <h1>Book Details</h1>
        <h2></h2>

</tr>
<!----onsubmit="return form1Validate()"-->

<form name="form1" action="BookDB.php" method="POST">
            <table cellspacing="10px">
                <tr>
					<td><lable for="book_no">1.Book Serial No :</lable></td>
                    <td><input type="text" placeholder=" Book Serial No" id="b_no" name="b_no" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
					<td><lable for="book_title">2.Title :</lable></td>
                    <td><input type="text" placeholder="  Title " id="b_title" name="b_title" value="" class="area" size="35px"> </td>
                </tr>
				<tr>
					<td><lable for="book_author">3.Author :</lable></td>
                    <td><input type="text" placeholder="  Author " id="b_author" name="b_author" value="" class="area" size="35px"> </td>
                </tr>
                <tr>
					<td><lable for="mem_type">4.Category Type :</lable></td>
					<td>
					
						<select name="taskOption" class="valid"id="b_cat">
						  <option value="Select">Select</option>
						  <option value="Fiction">Fiction</option>
						  <option value="Dictionary">Dictionary</option>
						  <option value="Biography">Biography</option>
						</select>
						
					
					</td>
                </tr>
                <tr>
					<td><lable for="book_PD">5.Published Date :</lable></td>
					<td><input id="calFromDate" type="text" name="date" class="area">
					<script type="text/javascript">
                </tr>
				<tr>
				<td><lable for="book_quntity">6.Quntity :</lable></td>
                    <td><input type="number" placeholder="  Author " name="b_quntity" value="" class="area" size="35px"> </td>
					</tr>
<script>
    var datepickerDateFormat = 'yy-mm-dd';
    var displayDateFormat = datepickerDateFormat.replace('yy', 'yyyy');

    $(document).ready(function(){
        
        var dateFieldValue = $.trim($("#calFromDate").val());
        if (dateFieldValue == '') {
            $("#calFromDate").val(displayDateFormat);
        }

        daymarker.bindElement("#calFromDate",
        {
            showOn: "both",
            dateFormat: datepickerDateFormat,
            buttonImage: "/webres_5bd6ae3dc0fea0.31921995/themes/default/images/calendar.png",
            buttonText:"",
            buttonImageOnly: true,
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+100",
            firstDay: 1,
            onClose: function() {
                $("#calFromDate").trigger('blur');
            }            
        });
        
        //$("img.ui-datepicker-trigger").addClass("editable");
        
        $("#calFromDate").click(function(){
            daymarker.show("#calFromDate");
            if ($(this).val() == displayDateFormat) {
                $(this).val('');
            }
        });
    
    });

</script>
			</td>
				</tr>
				
				

</td>
				</tr>
				
				<tr>
					<td><lable for="ADD"></lable></td>
                    <td><input type="submit" name="add" value="ADD" class="button" size="35px"></td>
                </tr>
                <tr>
					<td><lable for="Update"></lable></td>
                    <td><input type="submit" name="update" value="UPDATE" class="button" size="35px"></td>
					
                </tr>
              <!--  <tr>
					<td><lable for="view"></lable></td>
                    <td><input type="submit" name="view" value="VIEW" class="button" size="35px"></td>
                </tr>-->
				
                
				<tr>
					<?php
			if(!$connection){
				echo mysqli_connect_error();
			}else{
				$sql = "SELECT * FROM Book";
				$result = mysqli_query($connection,$sql);
			
		?>
		
                </tr>
                
            </table>
        </form>
		<table id="books">
		  <thead>
		  <tr>
			<th>Book Serial Number</th>
			<th>Title</th>
			<th>Author</th>
			<th>CategoryType</th>
			<th>PublishDate</th>
			<th>Delete</th>
		  </tr>
		  </thead>
		  
		  <tbody>
			  <tbody>
                    <?php 
                        while($row = $result->fetch_assoc()){
                           ?>
                           <tr> 
                           <td> <?php  echo $row['SerialNum'] ?></td>
                           <td> <?php  echo $row['Title'] ?></td>
						   <td> <?php  echo $row['Author'] ?></td>
                           <td> <?php echo $row['categoryType'] ?> </td>
                           <td> <?php echo $row['Date'] ?></td>
                            <td>  <a  href="deleteBook.php?id=<?php echo $row['SerialNum']?> " ><button   id="btnDelete" class="button"> Delete </button></a></td>
                           </tr>

                            <?php
                        }
                        mysqli_close($connection);
                    }
                    ?>
                </tbody>
		  </tbody>
		  
		</table>
		


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
<script>
 var table = document.getElementById('books');
                
       
                for(var i = 1; i < table.rows.length; i++){
                    //for(var j=1;j<table.column.longth;j++){
                        table.rows[i].onclick = function()
                        {
                            //rIndex = this.rowIndex;
                            document.getElementById("b_no").value = this.cells[0].innerHTML;
                            document.getElementById("b_title").value = this.cells[1].innerHTML;
                            document.getElementById("b_author").value = this.cells[2].innerHTML;
                            document.getElementById("calFromDate").value =this.cells[4].innerHTML;
                            
                            
                            //  document.getElementById("age").value = this.cells[2].innerHTML;
                        };
                    //}
                
                   
                }

</script>

</body>


</html>