<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Droid+Serif:400,400i" rel="stylesheet">
    <title>Doctor Login</title>
</head>

<style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #953624;
        background-color: #f9c5d1;
        background-size: cover;
        height: 100vh;
    }

    .login-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        background-color: rgba(103, 91, 91, 0.1);
        border: 1px solid transparent;
    }

    .form-control:focus {
        background-color: rgba(189, 67, 67, 0.1);
        border-color: #d27979;
    }

    button {
        background-color: #4d0d0dcb;
        color: white;
    }

    button:hover {
        background-color: #953624;
    }

    @media (max-width: 768px) {
        form {
            width: 90%;
            /* More width on smaller screens */
            margin: 0 5%;
            /* Small side margins for breathing space */
        }
    }
</style>


<body class="container">
    <?php
    session_start();
    include("connection.php"); // Ensure this path is correct

    if (isset($_POST['submit'])) {
        $d_email = $_POST['email'];
        $d_pswd = $_POST['pswd'];

        if (empty($d_email) || empty($d_pswd)) {
            $error_msg = "Fill in all the requirements.";
        } else {
            // Use prepared statement to enhance security
            $stmt = $db->prepare("SELECT * FROM doctor WHERE email = ? AND permission IN ('Approved', 'Added')");
            $stmt->bind_param("s", $d_email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Verify password
                if (password_verify($d_pswd, $row['pswd'])) {
                    $_SESSION['email'] = $row['email'];
                    echo "<script>window.location = 'doctor_home_page.php';</script>";
                } else {
                    $invalid_msg = "Invalid email/password or not approved/added by admin.";
                }
            } else {
                $invalid_msg = "Invalid email/password or not approved/added by admin.";
            }
            $stmt->close();
        }
    }
    ?>

    <div class="container">
        <h1 class="text-center" style="font-family: 'Montserrat', sans-serif; color: #4d0d0dcb; font-size:50px; font-weight:700;">DOCTOR LOGIN</h1>
        <form action="doctor_login.php" method="post" class="w-50 mx-auto">
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
            </div>
            <div class="form-group">
                <label for="pswd">Password:</label>
                <input type="password" class="form-control" placeholder="Your Password" name="pswd" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
            <p class="text-center">Not Yet A Member? <a href="../Admin/add_doctor.php"><strong>Register</strong></a></p>
            <p class="text-center"><a href="../index.php"><strong>Back To Home Page</strong></a></p>
        </form>
    </div>

    <?php if (isset($error_msg)) {
        echo "<div class='alert alert-danger'>$error_msg</div>";
    } ?>
    <?php if (isset($invalid_msg)) {
        echo "<div class='alert alert-warning'>$invalid_msg</div>";
    } ?>
</body>

</html>