
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Smart medical service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

  <style>
   body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
}
  .container {
      padding: 80px 120px;
  }


  .nav-tabs li a {
      color:#999999;
  } 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 16px !important;
	    font-weight:900;
      letter-spacing: 3px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  

  .nav-tabs li a {
      color:#999999;
  } 
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
   .container-fluid {
      padding: 5px 20px;
  }  
  .carousel-inner img {
    -webkit-filter: grayscale(30%);
      filter: grayscale(30%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .fa {
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;}


  </style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" >
<?php
include("connection.php");

?>
<!-- <?php
 $queryPermission="WHERE permission='Pending' ";
  $show_number_pending_request_query = "SELECT * 
                  FROM doctor $queryPermission 
				   order by date='$d_date' asc
				";
				   $run = mysqli_query($db, $show_number_pending_request_query);
				   $count=mysqli_num_rows($run);
	

 
?>  -->

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid ">
    <div class="navbar-header">        
    
      <a class="navbar-brand text-dark" href="#myPage"><strong>e-healthcare</strong></a>
    <div class="collapse navbar-collapse" id="myNavbar">             
      <ul class="nav navbar-nav navbar-right">
          

<li><a href='profile.php'>Profile</a></li>
  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#Appointments">Appointments<span class="caret"></span></i></a>
          <ul class="dropdown-menu"> 
<li><a href='book_appointment.php'> Book Appointment</a></li>

<li><a href="view_users_appointment.php">My Appointments</a></li>
        </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#Medicines">Medicines<span class="caret"></span></i></a>
          <ul class="dropdown-menu"> 
<li><a href='../drugs_list.php'> Medicine list</a></li>

<!-- <li><a href="../add_drugs.php">Add medicines</a></li> -->
        </ul>
        </li>

<!-- <li><a href=doc_reg_request.php>Request  -->
  <!-- <?php if($count>0)
{

} 
echo '('.$count.')'?> -->
<!-- </a></li> -->

<li><a href='../labtests.php'>Check up Packages</a></li>
<li><a href=userlogout.php><i class="fa fa-sign-out"></i></a></li>
     <li>
       <form action = "../search.php" method = "POST">
       <input style= "background-color: rgba(210, 124, 124, 0.472); border: 1px solid transparent; font-size: medium; color:black;" type = "text" name="f_name" placeholder="Doctor Name" />
        <input style= "background-color: rgba(210, 124, 124, 0.472); border: 1px solid transparent; font-size: medium; color:black;" type="submit"name="search"  value="SEARCH" />
</li>

      </ul>
    </div>
  </div>
  </div>
</nav>
 
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Background image -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img src="../pic/homepage2.png" alt="img1" width="1500" height="800" title="User Home Page">
  <!-- <div class="w3-display-middle w3-margin-top w3-center">
  <h1 class="w3-xlarge w3-text-black">
    <ol class="w3-padding-small w3-dark-grey w3-opacity-max"><b>You can see your profile, doctors and bookappointments</b></ol></h1>
  </div> -->
    </div></div></div>
                        
 
</body>

</html>
