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
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <title>cardiologist</title>
</head>
<style>
/* h1{
font-size:50px;
text-align:center;
padding-top:20px;
color:#000066;
}
li{
font-size:24px;
}
ul{
font-size:28px;
}
ul h3{
font-size:30px;
}
footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#333333;
   color: white;
   text-align: center;
}
 
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color:#FFFF33;
      text-decoration: none;
  }
     footer .glyphicon {
      font-size: 15px;
      margin-bottom: 0px;
      color: #f4511e;
  }
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
body {margin:0;
padding:0;
width:100%;
height:100vh;
background-image:url(pic/Doctor_Time.jpg);
background-size:cover;}
div ul
{
padding-bottom:70px;
} */

h1{
  font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    font-size: 50px;
    font-weight: 700; 
    text-align:center;
    padding-top:50px;
    color: #4d0d0dcb;}
h3{
font-size:30px;
}

li{
font-size:13px;
}
body {margin:0;
padding:0;
font: 400 15px/1.8 Lato, sans-serif;
/* background-color: #b48e8efb; */
background-image:url(../pic/hc.png);
width:100%;
height:100vh;
background-size:cover;
}
</style>
<body class="container-fluid">
<h1>Cardiologist</h1>
  

<table class="table table-hover table-dark">
  <thead>
  <tr class="table-dark">
  <th scope="col" style="color:rgba(189, 67, 67, 0.857);  font-size:30px"> Name</th>
  <th scope="col" style="color:rgba(189, 67, 67, 0.857);  font-size:30px">Specialist</th>
  <th scope="col" style="color:rgba(189, 67, 67, 0.857);  font-size:30px">Qualification</th>

    </tr>
  </thead>
<?php 
include("connection.php");

//include 'translate.php';
      // $query = "SELECT * 
        //             FROM doctor inner join schedule on schedule.d_id=doctor.id  where permission='approved' AND specialist like'cardiologist%' OR permission='Added' AND specialist like'cardiologist%' ";

        $query = "SELECT *
      FROM doctor WHERE specialist = 'cardiologist'";
      


				   $run = mysqli_query($db, $query);
				   while($row = mysqli_fetch_array($run))
				   {
				         
						  echo  "<h3><tr><th><a href='Admin/detail.php?s_id={$row['s_id']}'>{$row['f_name']}{$row['l_name']}</a></th></h3>";
						    
						   echo "<h3><th>". $row['specialist'] ." </th></h3>" ;
						   echo "<h3><th>". $row['qualification'] ." </th></tr></h3>";
						   
						  
				   }
				    
			   ?>   </table></ul>
                   
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
<li class="previous" ><a href="doctor_name_display.php">Previous</a></li>
  <li class="next "><a href="surgeon.php">Next Page</a></li>
</ul></div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>
