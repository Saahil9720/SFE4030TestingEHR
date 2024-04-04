<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Profile</title>
</head>

<style>
.profile h1{
  font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    font-size: 50px;
    font-weight: 700; 
    text-align:center;
    padding-top:50px;
    color: #4d0d0dcb;
}
img 
{ float: left;
width: 77px;
}
li{
font-size:13px;
}
h6{
font-size:20px;
text-align: center;
/* letter-spacing:4px; */
}

body {margin:0;
padding:0;
font: 400 15px/1.8 Lato, sans-serif;
/* background-color: #b48e8efb; */
width:100%;
height:100vh;
background-size:cover;
background-image:url(../pic/1.png);
}
</style>
<body class="container display-4">
  
                        <!-- Grid -->
<!-- <div class="w3-row"> -->

<!-- Blog entries -->
<!-- <div class="w3-col 18 s12"> -->
  <!-- Blog entry -->
  <!-- <div class="w3-card-4 w3-margin w3-black"> -->
    <div class="profile">
                     <h1 >Personal Profile</h1>
                        <hr color="#333333" />
<h6><b><?php
session_start();
include("connection.php");
error_reporting(0);
	  //  include 'translate.php';
$d_email=$_SESSION['email'];

	$edit_doctor_profile_query="select * from doctor where email='$d_email'" ;
	
	$edit_run_doctor_profile_query=mysqli_query($db,$edit_doctor_profile_query);
 
				   while($drow = mysqli_fetch_array($edit_run_doctor_profile_query))
				   {
				   ?>
                    <?php
echo"ID :  ";   echo $drow['id'];  echo " <br />" ;		          
echo" Name : ";        echo $drow['f_name'] ; echo "  " ; echo $drow['l_name'] ; echo " <br />";		 		

echo"Email Address :  ";   echo $drow['email'];  echo " <br /> " ;
echo"Contact Number :  ";  echo $drow['contact'] ; echo "  " ; echo"<a href=d_contact.php>edit</a><br />";
echo"Address :  "; 		   echo $drow['address'] ; echo "  " ;  echo  "<a href=d_address.php>edit</a><br />";
echo"Change Password :  "; echo "  " ; echo "<a href=d_pswd.php>edit</a><br />";

echo"Specialist:  "; 		   echo $drow['specialist'] ."</br>"; echo "  " ;
echo"Qualification:  "; 		   echo $drow['qualification']."</br>"; echo "  " ; 


				   }
                   ?><b></h6>
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="doctor_home_page.php">Previous</a></li>
  <!-- <li class="next"><a href="doctor_appointment_schedule_updating.php">Next</a></li> -->
</ul></div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
                  
	
                  
</body>
</html>