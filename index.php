
<!-- <!DOCTYPE html> PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<!DOCTYPE html>  
<html>
<head><title>Healthcare Appointment Booking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i">
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
  h3 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #4d0d0dcb; }

  input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  .container {
      padding: 100px 100px;
      background-color: #b48e8efb;
      color: #4d0d0dcb;
      width: 100%;
  }
  .container h3 {
      text-align: center;
      color: #4d0d0dcb;
      font-family: 'Droid Serif', sans-serif;
  }
  .container h4 {
      text-align: center;
      color: #4d0d0dcb;
      font-family: 'Droid Serif', sans-serif;
  }
  .container2 {
      padding: 80px 120px;
      color: #d27979cb;
      background-color: #b48e8efb;
  }

  .container p {
      text-align: center;
      color: #4d0d0dcb;
      font-family: 'Lato', sans-serif;
  }
  .main img {
    -webkit-filter: grayscale(60%);
      filter: grayscale(60%); /* make all photos black and white */ 
      /* width: 50%; Set width to 100% */
      margin: auto;
      max-width: 100%;  
      height: auto; 
      /* padding: 100px 100px; */
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;
            font-size:24px;
            text-align:center;
          }
  .bg-1 p  {font-style:oblique;
            text-align:center;
            font-size:20px;
          }
  /* .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0; */
  /* } */
  /* .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  } */
  

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
      letter-spacing: 2px;
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
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 22px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
  color:#FFFF66;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:#999999;
  }  .container-fluid {
      padding: 5px 20px;
  }
  .contact1{
    color: #4d0d0dcb;
    text-align: center;
    background-color: ;
  }
  .contact2{
    color: #4d0d0dcb;
    text-align: center;
    background-color: ;
  }
  </style></head>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top"> 
<div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand text-dark" href="#myPage"><b>e-Healthcare</b></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Log in<span class="caret"></span></a>
          <ul class="dropdown-menu">
                  <li><a href="Doctor/doctor_login.php">Doctor</a></li>
                  <li><a href="Users/login.php">User</a></li>
            	<li><a href="Admin/adminlogin.php">Admin</a></li>
                  </ul>
          </li>
        
        
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors
          <span class="caret"></span></a>
          <ul class="dropdown-menu">     
     <li> <a href='medicine.php'>Medicine</a></li>
    <li>  <a href='dentist.php'>Dentist</a></li>
      <li> <a href='bone.php'>Orthopedic</a></li>
      <li> <a href="cardiac_electrophysiologist.php">Cardiac electrophysiologist</a></li>
      <li> <a href='cardiologist.php'>Cardiologist</a></li>
      <li> <a href='surgeon.php'>Surgeon</a></li>
     <li>  <a href='gynecologist.php'>Gynecologist</a></li>
     </ul>
        </li>
     
   <li> <a href="#contact1" onclick="toggleFunction()">Contact Us</a></li>

                
     <li>
       <form action = "search.php" method = "POST">

 <input style= "background-color: rgba(210, 124, 124, 0.472);
    border: 1px solid transparent;
    font-size: medium; color:black;" type = "text" name="f_name" placeholder="Doctor's Name..." />
                   <input style= "background-color: rgba(210, 124, 124, 0.472);
    border: 1px solid transparent;
    font-size: medium; color:black;" type="submit"name="search"  value="SEARCH" />
                       <?php
if(isset($error_msg)){echo $error_msg;}
?>
       </form></li>
       </li> 

      </ul>
    </div>
  </div>
</nav>


<div class="main">
  <img src="pic/homepage2.png"/>
</div>

<div class="container">
  <h3>Welcome to e-Healthcare - Your Personal Healthcare Companion </h3>
  <p> <i> We believe that accessing quality healthcare should be effortless and empowering. To get an appointment, log in using your account. Not registered,  <strong style="color:#0066FF"><a href="Users/registration.php">Click me</a></strong> </i></p>
  <br>
  <h4> Why Us? </h4>
  <p> Seamless Appointment Booking </p>
  <p> Short waiting times </p>
  <p> Expert Healthcare Professionals </p>
  
    <!-- <div class="container2"> -->

    <!-- <h3>e-Healthcare Appointments and Bookings</h3> -->



  
    <!-- </div> -->
  </div>

  <!-- The Contact Section -->
  <div class="contact1">
     <!-- style="container, content, padding:64, max-width:800px"  id="contact"> -->
    <h2> CONTACT US</h2>
    <p> <i>For inquiries and comments, drop a note</i></p>
    
    <div class="contact2">
      <div class="details">
      <!-- <div class="w3-col m6 w3-large w3-margin-bottom"> -->
        <i class="fa fa-map-marker" style="width:30px"></i>Mombasa, Kenya<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +254719333111<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: test@gmail.com<br>
      </div>
      <?php
	  if(isset($_POST["submit"])){
$c_name = $_POST['name'];
$c_gmail = $_POST['gmail'];
$c_text = $_POST['text'];

   
	 if(empty($c_gmail))
	   {
	   $error_msg="Please Provide Your Gmail/Email";
	   }
	 
	   else
	   
	   { $comment_query="INSERT INTO comment(name,gmail,text)     
	                            VALUES('$c_name','$c_gmail','$c_text')" ;
								mysqli_query($db,$comment_query);
							$run= $success_msg="Successfully Submitted";
				
					
				
							 }
	
}
	 
?>
      
        </form>
      </div>
    </div>
  </div>
  
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright<a href="#" data-toggle="tooltip" title="e-Healthcare">@ e-Healthcare 2023</a></p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
