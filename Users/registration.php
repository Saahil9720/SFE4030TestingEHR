
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>registration</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>registration</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'><style>
<style>
  
.container h1 {
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    font-size: 50px;
    font-weight: 700; 
    text-align:center;
    padding-top:50px;
    color: #4d0d0dcb;
}

.bg-success{
/* background-color:#ccccc; */
   color:black;
      padding: 100px 25px;
    }
    p{
        text-align:center;
    }
body {margin:0;
padding:0;
font: 400 15px/1.8 Lato, sans-serif;
color: rgba(149, 36, 36, 0.805);
width:100%;
height:100vh;
background-image:url(../pic/2.png);
width:100%;
background-size:cover;

}
form{
    width: 50%;
    margin-left: 200px;
    
}

 form .inputbox textarea,
 form .inputbox input{
    background-color: rgba(103, 91, 91, 0.1);
    border: 1px solid transparent;
    font-size: medium;
}

 form .inputbox textarea{
    background-color: rgba(103, 91, 91, 0.1);
    border: 1px solid transparent;
    font-size: medium;
}
::placeholder{
    color: black;
    
}
button{
    background-color: rgba(66, 62, 62, 0.1);
    border: 1px solid transparent;
}

button:hover{
    font-size: larger;
}

/* .jumbotron {
      background-color: #b48e8efb !important; 
      color:#666666;
      padding: 100px 25px;
  } */
  .container-fluid {
      padding: 60px 50px;
  } 
.bg-success{
/* background-color:#ccccc; */
   color:black;
      padding: 100px 25px;

}.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
  padding: 0 16px;
}
   .bg-grey {
      /* background-color:#b48e8efb; */
  
  }.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


</style>
 
<?php 
include("connection.php");

if(isset($_POST["submit"])){

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];   
$contact = ($_POST['contact']);
$address = $_POST['address'];
$DOB = $_POST['DOB'];
$age=$_POST['age'];
$gender = $_POST['gender'];
$pswd = $_POST['pswd'];
$pswd_len=strlen($pswd);
 $d_date = date("y/m/d") ;

  $_POST[".$d_date."];


   
	 if(empty($f_name))
	   {
	   $error_msg="Please Enter Your  First Name";
	   }
	   	 elseif(empty($l_name))
	   {
	   $error_msg="Please Enter Your  Last Name";
	   }
	    elseif(empty($email))
	   {
	   $error_msg="Please Enter Your Email Address";
	   }
	    
	 
	    elseif(empty($contact))
	   {
	   $error_msg="Please Enter Your Contact Information";
	   }
	 /*     elseif(!filter_var($d_contact,FILTER_VALIDATE_INT)){
	   $error_msg ="please enter a valid number";
	   }*/
	  
	    
	   
	    
	    
	    elseif(empty($gender))
	   {
	   $error_msg="Please Fill Up The Gender  ";
	   }
	  
	   elseif(empty($pswd))
	   {
	   
	   $error_msg=" Please Enter Your Password";
	   }
	  elseif($pswd_len<=8)
	   {
	   $error_msg="Your Password Should Be More Than 8 Characters Long";
	   }
	   else
	   
	   { $d_query="INSERT INTO user(f_name,l_name,email,contact,address,DOB,gender,pswd,date)     
	                            VALUES('$f_name','$l_name','$email','$contact','$address','$DOB','$gender','$pswd','$date')" ;
								mysqli_query($db,$d_query);
							$run= $success_msg="Thank You For Registration";
				
					 echo "<script> window.location='login.php' </script> ";
				
							 }
	
	
}
    
?>



 <div class="container-fluid text-center bg-grey col-50">
   <form action = "registration.php" method="POST" class="form-inline">
<div class="container">
<h1 style="font-family: 'Montserrat', sans-serif; color: #4d0d0dcb; font-size:50px; font-weight:700;"><b>REGISTRATION</b></h1><p>Please fill in this form to create an account.</p>
      
<div class="inputbox">
<label for="f_name" style="font-size:16px", >First Name: </label> <input type="text"placeholder="Your First Name" name="f_name"required>
</div>
<br>

<div class="inputbox">
<label for="l_name"style="font-size:16px">Last Name: </label> <input type="text"  placeholder="Your Last Name"name="l_name"required>
</div>
<br>

<div class="inputbox">
<label for="email"style="font-size:16px">Email Address: </label>
<input type="text"style="font-size:16px" placeholder="Your Email Address"name="email"required>
</div>
<br>

<div class="inputbox">
<label for="contact"style="font-size:16px">Contact Number: *</label>
<input type="contact"style="font-size:16px" placeholder="Your Contact Number"name="contact" >
</div>
<br>


<div class="inputbox">
<b style="font-size:16px">Address:</b></label> 
<textarea style="font-size:16px" placeholder="Your Address"name="address"></textarea>
</div>
<br>

<div class="inputbox">
<label for="DOB"style="font-size:16px"><b>DOB: *</b></label> <input type="date" name="DOB"required>
</div>
<br>

<div class="inputbox">
<label for="gender"style="font-size:16px">  Gender:</label><br><input type="radio" name="gender"required style="font-size:16px" value="male"><b style="font-size:14px" >Male</b>
                          <input type="radio" name="gender"required value="female"><b style="font-size:16px">Female </b>
</div>
<br>

<div class="inputbox">
<label for="pswd" style="font-size:16px">Create New Password:</label><input type = "password"placeholder="Your password" name="pswd"required>  <p style="font-size:10px"> Password should be more than 8 characters long </p>
</div>

<input type ="submit" class="btn btn-danger text-uppercase focus" name="submit" value="register"> 

</div>
 <p style="text-align:center"> <strong> Already have an account? <a href="login.php">Login</a></strong></p>
<h2><a href="../index.php">Back</a></h2> </p>
 </div>





 <!-- <div class="home-text">
 <h1 style="text-align:center">REGISTRATION</h1><p style="text-align:center">Please fill in this form to create an account.</p>
        
            </div>   
 <form name="Registration Form">
 <form action = "registration.php" method="POST" class="form-inline">
 
 <div class="container">    
 	<div class="inputbox">
            <label for="f_name">First Name:</label>
            <input type="text" id="fname" name="f_name"required placeholder="Your name">
        </div>
        <br>
        <div class="inputbox">
            <label for="l_name">Last Name:</label>
            <input type="text" id="lname" name="l_name" placeholder="Your last name">
        </div> 
        <br>
        <div class="inputbox">
            <label for="contact">Phone Number:</label>
            <input type="text" id="phone" name="contact" placeholder="Your phone number">
        </div> 
        <br>
        <div class="inputbox">
            <label for="email">E-mail Address:</label>
            <input type="text" id="email" name="email" placeholder="Your email">
        </div>   
        <br>

        <div class="inputbox">
			<label for="gender">Gender:</label><br>
			<input type="radio" name="gender"required value="male">Male
			<br> <input type="radio" name="gender"required value="female">Female<br> 
				
        </div> 

        <br>   
        <div class="inputbox">
        <label for="DOB"> Date of Birth: </label><br>
		<input type="date" name="DOB"required><br> <br>
            

        </div>
        <br>
        <div class="inputbox">
            <label for="address">Address:</label> <br>
            <textarea name="address" placeholder="Country/Zip code/City/State/Building Name/Street Name" id="pickup" cols="30" rows="5"> </textarea>
        </div>
		<br>
		<br>
		<div class="inputbox">
            <label for="pwsd">Create New Password:</label> <br>
            <input type="password" name="pswd"required placeholder="New password"> <br>
            <p style="font-size:10px"> Password should be more than 8 characters long </p>
        </div> 
		
		<input type ="submit" class="btn btn-danger text-uppercase focus" name="submit" value="register"> <br>
		<br>
		<p style="font-size:16px"> <strong> Already have an account? <a href="login.php">Login</a></strong></p>
		<p style="font-size:16px"><a href="../index.php"><b> Back </b> </a> </p>

	</div> -->


<?php
if(isset($error_msg)){echo $error_msg;}
if(isset($success_msg)){echo $success_msg;}
	
?>
	 
</form></div>
					
					
</body>
</html>