<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>doctor_registration</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<title>registration</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>
    .container h1 {
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
        font-size: 50px;
        font-weight: 700;
        text-align: center;
        padding-top: 500px;
        color: #4d0d0dcb;
    }

    .bg-success {
        /* background-color:#ccccc; */
        color: black;
        padding: 100px 25px;
    }

    p {
        text-align: center;
    }

    body {
        margin: 0;
        padding: 0;
        font: 400 15px/1.8 Lato, sans-serif;
        color: rgba(149, 36, 36, 0.805);
        width: 100%;
        height: 100vh;
        /* background-color: #f9c5d1; */
        background-image: url(../pic/2.png) !important;
        width: 100%;
        background-size: cover;

    }

    form {
        width: 50%;
        margin-left: 250px;

    }

    form .inputbox textarea,
    form .inputbox input {
        background-color: rgba(103, 91, 91, 0.1);
        border: 1px solid transparent;
        font-size: medium;
    }

    form .inputbox textarea {
        background-color: rgba(103, 91, 91, 0.1);
        border: 1px solid transparent;
        font-size: medium;
    }

    ::placeholder {
        color: black;

    }

    button {
        background-color: rgba(66, 62, 62, 0.1);
        border: 1px solid transparent;
    }

    button:hover {
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

    .bg-success {
        /* background-color:#ccccc; */
        color: black;
        padding: 100px 25px;

    }

    .col-50 {
        -ms-flex: 50%;
        /* IE10 */
        flex: 50%;
        padding: 0 16px;
    }

    .bg-grey {
        /* background-color:#b48e8efb; */

    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }
</style>

<?php
include ("connection.php");


session_start();

if (isset($_POST["submit"])) {
    $d_f_name = $_POST['f_name'];
    $d_l_name = $_POST['l_name'];
    $d_age = $_POST['age'];
    $d_gender = $_POST['gender'];
    $d_email = $_POST['email'];
    //$d_email=$_SESSION['email'];
    $d_address = $_POST['address'];
    $d_contact = ($_POST['contact']);
    $d_doctor = ($_POST['doctor']);
    $d_doc_email = ($_POST['doc_email']);
    $d_bookdate = $_POST['bookdate'];



    // debugging

    //var_dump($d_email);
//var_dump($_SESSION['email']);

    error_reporting(0);

    //$emailsql="select * from user where email='$d_email'" ;

    //$runemailsql=mysqli_query($db,$emailsql);

    //$d_date = date("y/m/d") ;
//
    //$_POST[".$d_date."];





    if (empty($d_f_name)) {
        $error_msg = "Please Enter Your  First Name";
    } elseif (empty($d_l_name)) {
        $error_msg = "Please Enter Your  Last Name";
    }

    //    elseif(empty($d_email))
    //   {
    //  $error_msg="Please Enter Your Email Address";
    //   }
    //     elseif(!filter_var($d_email,FILTER_VALIDATE_EMAIL)){
    //   $error_msg ="Please Enter A Valid Email Address";
    //   }
    elseif (trim($d_email) != $_SESSION['email']) {

        $error_msg = "Please Enter logged in email address";
    } elseif (empty($d_contact)) {
        $error_msg = "Please Enter Your Contact Information";
    }
    /*     elseif(!filter_var($d_contact,FILTER_VALIDATE_INT)){
         $error_msg ="please enter a valid number";
         }*/ elseif (empty($d_doctor)) {
        $error_msg = "Please Enter Your Doctor";
    } elseif (empty($d_bookdate)) {
        $error_msg = "Please Choose Your Appointment Date";
    } elseif (empty($d_gender)) {
        $error_msg = "Please Fill Up The Gender  ";
    } else {





        $d_query = "INSERT INTO appointment(f_name,l_name,age,gender,email,address,contact,doctor,doc_email,bookdate)     
	                            VALUES('$d_f_name','$d_l_name','$d_age','$d_gender','$d_email','$d_address','$d_contact','$d_doctor','$d_doc_email','$d_bookdate')";
        mysqli_query($db, $d_query);
        $run = $success_msg = "Thank You For Registration And Wait For Doctor's Call.";

    }


}

?>
<!-- <div class="text-center panel-body bg-success"> -->
<div class="container-fluid text-center bg-grey col-50">
    <br>
    <h1 style="font-family: 'Montserrat', sans-serif; color: #4d0d0dcb; font-size:50px; font-weight:700;">
        <strong>APPOINTMENT BOOKING</strong>
    </h1>
    <p>Please fill in this form to book an appointment.</p>
    <form action="book_appointment.php" method="POST" class="form-inline">



        <div class="container">
            <div class="inputbox">
                <label for="f_name">First Name :</label><input type="text" class="form-control"
                    placeholder=" Your First Name" name="f_name" required>
            </div>
            <br>

            <div class="inputbox">
                <label for="l_name"> Last Name:</label><input type="text" class="form-control"
                    placeholder="Your Last Name" name="l_name" required>
            </div>
            <br>

            <!-- <div class="inputbox">
<label for="age"></i>   Age:</label><input type="text"class="form-control" placeholder="Your Age" name="age"required>
</div>
<br> -->

            <div class="inputbox">
                <label for="gender">Gender:</label><br><input type="radio" name="gender" style="font-size:16px"
                    value="male" required><b style="font-size:14px">Male<b>
                        <input type="radio" name="gender" style="font-size:16px" value="female" required><b
                            style="font-size:14px">Female</b>
            </div>
            <br>

            <div class="inputbox">
                <label for="email">Email Address:</label><input type="email" placeholder=" Your Email Address"
                    class="form-control" name="email" required>
            </div>
            <br>

            <div class="inputbox">
                <label for="address">Address:</label><input type="address" class="form-control" name="address"
                    placeholder="Your Address" required>
            </div>
            <br>

            <div class="inputbox">
                <label for="contact">Contact Number:</label><input type="contact" class="form-control"
                    placeholder="Your Contact Number" name="contact" required>
            </div>
            <br>


            <div class="inputbox">
                <label for="doctor">Doctor:</label><select name="doctor" required>
                    <option value="">Select a doctor</option>

                    <!-- PHP code to populate the options from MySQL database -->
                    <?php

                    // Create connection
                    $conn = new mysqli('localhost', 'root', '', 'healthcaredb');

                    // Query to fetch data from the MySQL table
                    $sql = "SELECT CONCAT(f_name, ' ', l_name, ' - ', specialist) AS NAME FROM doctor";
                    $result = $conn->query($sql);

                    // Loop through the data and generate the options
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value=\"" . $row["NAME"] . "\">" . $row["NAME"] . "</option>";
                        }
                    }



                    ?>

                </select>



            </div>
            <br>



            <div class="inputbox">
                <label for="doc_email">Doctor's Email:</label><select name="doc_email" required>
                    <option value="">Select doctor's email</option>

                    <!-- PHP code to populate the options from MySQL database -->
                    <?php

                    // Create connection
                    $conn = new mysqli('localhost', 'root', '', 'healthcaredb');

                    // Query to fetch data from the MySQL table
                    $sql = "SELECT email FROM doctor";
                    $result = $conn->query($sql);

                    // Loop through the data and generate the options
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value=\"" . $row["email"] . "\">" . $row["email"] . "</option>";
                        }
                    }



                    ?>

                </select>



            </div>
            <br>




            <div class="inputbox">
                <label for="bookdate">Book Date:</label><input type="date" class="form-control" name="bookdate"
                    required>
            </div>

            <br>
            <input type="submit" class="btn btn-danger text-uppercase focus" name="submit" value="register">
        </div>


        <!-- <h2><a href="view_user_homepage.php">Back</a></h2> </p> -->


</div>

<?php
if (isset($error_msg)) {
    echo $error_msg;
}
if (isset($success_msg)) {
    echo $success_msg;
}

?>
<script>
    alert(wait  admin);
</script>
</form>
</div>


</body>

</html>