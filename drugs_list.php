<style><?php

include '1style.css';

?></style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<title>Drugs</title>
</head>
<style>
h1{
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
/* ul{
font-size:28px;
}
ul h3{
font-size:40px;
} */

body {margin:0;
padding:0;
font: 400 15px/1.8 Lato, sans-serif;
/* background-color: #b48e8efb; */
background-image:url(pic/hc.png);
width:100%;
height:100vh;
background-size:cover;
}
</style>

<body class="display-1 container ">
  <h1> MEDICINES' LIST</h1>
<!-- <form class="text-center text-capitalize font-weight-bold"  method="POST"> -->
<!-- <table  border="1" cellPadding="13" align="center" 
class="table table-hover table-dark"> -->
<br>

<table class="table table-hover table-dark">
<thead>
<tr class="table-dark">
  <th scope="col" style="color:rgba(189, 67, 67, 0.857); font-size:30px" >Name</th>
  <th scope="col" style="color:rgba(189, 67, 67, 0.857); font-size:30px" >Description</th>
  <th scope="col" style="color:rgba(189, 67, 67, 0.857); font-size:30px" >Common uses</th>
</thead>

  <tbody>
    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Ibuprofen</th>
      <td style="color: #4d0d0dcb">Ibuprofen is a nonsteroidal anti-inflammatory drug (NSAID) used to relieve pain, reduce inflammation, and lower fever.</td>
      <td style="color: #4d0d0dcb">Headaches, muscle aches, menstrual cramps, arthritis, fever</td>
  </tr>

    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Acetaminophen (Paracetamol)</th>
      <td style="color: #4d0d0dcb">Acetaminophen is a pain reliever and fever reducer that works centrally in the brain.</td>
      <td style="color: #4d0d0dcb">Pain relief (mild to moderate pain), fever reduction</td>
     
    </tr>
    
    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Aspirin</th>
      <td style="color: #4d0d0dcb">Aspirin is an NSAID with anti-inflammatory, analgesic, and antipyretic properties</td>
      <td style="color: #4d0d0dcb">Pain relief, fever reduction, blood-thinning (to prevent heart attacks or strokes), antiplatelet effects.</td>
    </tr>

    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Lisinopril</th>
      <td style="color: #4d0d0dcb">Lisinopril is an angiotensin-converting enzyme (ACE) inhibitor used to treat high blood pressure and heart failure.</td>
      <td style="color: #4d0d0dcb">Hypertension (high blood pressure), heart failure</td>
    </tr>

    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Metformin</th>
      <td style="color: #4d0d0dcb">Metformin is an oral antidiabetic medication used to manage type 2 diabetes by improving insulin sensitivity and reducing glucose production in the liver.</td>
      <td style="color: #4d0d0dcb">Type 2 diabetes management</td>
    </tr>

    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Albuterol (Salbutamol)</th>
      <td style="color: #4d0d0dcb">Albuterol is a bronchodilator that relaxes the muscles in the airways, making it easier to breathe. It is commonly used in inhalers for respiratory conditions.</td>
      <td style="color: #4d0d0dcb">Asthma, chronic obstructive pulmonary disease (COPD).</td>
    </tr>

    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Atorvastatin</th>
      <td style="color: #4d0d0dcb"> Atorvastatin is a statin medication used to lower cholesterol levels and reduce the risk of cardiovascular events</td>
      <td style="color: #4d0d0dcb">Hypercholesterolemia (high cholesterol), prevention of heart disease.</td>
    </tr>

    <tr class="table-dark">
      <th scope="row" style="color: #4d0d0dcb">Fluoxetine</th>
      <td style="color: #4d0d0dcb"> Fluoxetine is an SSRI antidepressant that helps balance serotonin levels in the brain, alleviating symptoms of depression, anxiety, and certain other disorders</td>
      <td style="color: #4d0d0dcb">Major depressive disorder, panic disorder, obsessive-compulsive disorder.</td>
    </tr>
  </tbody>





     

   
<!-- <?php 
session_start();
include("connection.php");
 if(isset($_REQUEST["submit"]))
				   {
				   $check=$_REQUEST["check"];
				   $save=implode(",",$check);
				$id=$_GET['id'];
       $query = "DELETE 
                   FROM user where id in ($save) ";
				   $run = mysqli_query($db, $query);
				   
				   }

       $query = "SELECT * 
                   FROM user ";
				   $run = mysqli_query($db, $query);
				   while($row = mysqli_fetch_array($run))
				   {
				         
						?>
                        
            <tr class="table-dark">
              <th class="text-center text-dark active"> <?php  echo  "<h3><a href='user_detail.php?id={$row['id']}'>{$row['f_name']}{$row['l_name']}</a></h3>";?></th>
              <th class="text-center text-dark active"><input type ="checkbox" name ="check[] "value="<?php echo $row['id']?> "></th></tr>
						    </thead>
						  <?php
				   }
				    
			   ?> -->
                     </table> 
          </form>
                     
<div class="container ">
<ul class="pager font-weight-bold text-monospace text-center">
  <li class="previous "><a href="../view_user_home_page.php">Previous</a></li>
<!-- <li class="next"><a href="doc_reg_request.php">Next</a></li> -->
</ul></div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </table>
      </body>
</html>
