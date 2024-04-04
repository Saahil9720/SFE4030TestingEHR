<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Admin Login</title>
</head>

<style>
    .home-text h1 {
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
        font-size: 50px;
        font-weight: 700;
        text-align: center;
        padding-top: 600px;
        color: #4d0d0dcb;
    }

    img {
        float: left;
        width: 77px;
    }

    li {
        font-size: 24px;
    }

    p {
        text-align: center;
        font-size: 20px;
    }

    body {
        margin: 0;
        padding: 0;
        font: 400 15px/1.8 Lato, sans-serif;
        color: rgba(149, 36, 36, 0.805);
        width: 100%;
        height: 100vh;
        background-image: url(../pic/2.png);
        width: 100%;
        background-size: cover;

    }

    form {
        width: 50%;
        margin-left: 400px;

    }

    form .inputbox textarea,
    form .inputbox input {
        background-color: rgba(103, 91, 91, 0.1);
        border: 1px solid transparent;
        font-size: medium;
    }

    form .inputbox textarea {
        background-color: rgba(189, 67, 67, 0.857);
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

    h1 {
        font-size: 50px;
        text-align: center;
        padding-top: 30px;
        color: #000066;
    }

    img {
        float: left;
        width: 77px;
    }

    li {
        font-size: 24px;
    }

    h3 {
        font-size: 24px;
    }
</style>

<body class="container display-4">
    <?php
    error_reporting(0);
    session_start();
    include ("connection.php");
    // include ('..translate.php');
    
    if (isset($_POST['submit'])) {

        $admin_email = $_POST['email'];
        $admin_pswd = $_POST['admin_pswd'];

        if (empty($admin_email) || empty($admin_pswd)) {
            $error_msg = "fill all the requirements";
        } else {

            $admin_query = "select* from admin where email='$admin_email' AND admin_pswd='$admin_pswd'";
            $check = mysqli_query($db, $admin_query);

            if (mysqli_num_rows($check) > 0)
            /*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/ {
                $check_row = mysqli_fetch_assoc($check);
                $_SESSION['email'] = $check_row['email'];
                echo "<script> window.location='view_admin_home_page.php' </script> ";
            } else {
                $invalid_msg = "Invalid user id / password ";
            }

        }
    }
    ?>


    <!-- Login -->
    <!-- <div class="w3-white w3-margin" >
        <div class="w3-container w3-padding w3-black" > -->
    <div class="container">
        <h1 style="font-family: 'Montserrat', sans-serif; color: #4d0d0dcb; font-size:50px; font-weight:700;">
            <b>ADMIN LOGIN</b>
        </h1>
        <!-- <h1  class=" text-center font-weight-bold text-white ">Admin Login</h1> -->
    </div>

    <form action="adminlogin.php" method="post">
        <!-- <div class="w3-container w3-white"> -->

        <div class="inputbox">
            <label for="email" style="font-size:16px"><b>Email Address </label> <br>
            <input type="email" style="font-size:16px" placeholder="Your Email Address" name="email" required>
        </div>

        <br>

        <div class="inputbox">
            <label for="pswd" style="font-size:16px" s><b>Password</b></label> <br>
            <input type="password" style="font-size:16px" placeholder="Your Password" name="admin_pswd" required>
        </div>
        <br>
        <button type="submit" name="submit" value="login"> LOG IN </button>
        <!-- <button type ="submit" name="submit" value="login" class="w3-button w3-block w3-black">Login</button>
        </div> -->
        <p style="text-align:center"> <br>
            <a style="text-align:center" href="../index.php"><strong style="color:#000000">Back To Home
                    Page</strong></a>
        </p>

    </form>
    </div>

    <!-- <div class="home-text">
                <h1> Admin Log In  </h1>
            </div>   
      <form name="Log in Form">
     <form action="adminlogin.php" method="post">
        
        <div class="inputbox">
            <label for="email" style="font-size:20px">E-mail Address:</label>
            <input type="text" id="email" name="email" placeholder="Your email">
        </div>   
        <br>
        <div class="inputbox">
            <label for="pswd" style="font-size:20px">Password:</label>
            <input type="password" id="pswd" name="pswd" placeholder="Your password">
        </div>   
        <br>
        <button type ="submit" name="submit" value="login"> LOG IN </button>
        <p style="text-align:center" >
Don't have an account? <a href="registration.php"><strong style="color:#000000">SIGN UP</strong></a></br>
<a style="text-align:center" href="../index.php"><strong style="color:#000000">Back To Home Page</strong></a></p>
</form> -->

    <?php
    if (isset($error_msg)) {
        echo $error_msg;
    }
    if (isset($invalid_msg)) {
        echo $invalid_msg;
    }
    ?>



</body>

</html>