<?php

include './include/connect.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $select = "SELECT * FROM `register` WHERE email='$email' AND pass='$pass'";
    $result = $conn->query($select);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['email'];
            $pass = $row['pass'];
        }

        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;

        header("location:index.php");
    } else {
        echo "<script>alert('Invalid Email and Password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restar-Amusment Park</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">


    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>

<body>
    <div id="popup" class="popup">

        <div class="boxed_wrapper">

            <div class="popup-content">
                <!-- Your sign-in and sign-up form content goes here -->
                <div id="login-form" class="form-box login">
                    <div class="form-content">
                        <h2>LOGIN</h2>
                        <form action="#" method="POST" class="cus-form">
                            <div class="input-field">
                                <input type="text" required="" name="email" fdprocessedid="s8jhqb">
                                <label>Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" required="" name="pass" fdprocessedid="1qh8wc">
                                <label>Password</label>
                            </div>
                            <a href="#" class="forgot-pass-link">Forgot password?</a>
                            <button type="submit" class="btn-log" name="login" fdprocessedid="hzsxfi">Log In</button>
                        </form>
                        <div class="bottom-link">
                            Don't have an account?
                            <a href="register.php" id="signup-link">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function validateLogin() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            // Add your actual email and password validation logic here
            // For simplicity, let's assume a hardcoded email and password
            var validEmail = "user@example.com";
            var validPassword = "password123";

            if (email === validEmail && password === validPassword) {
                alert("Login successful");
                // You can redirect or perform other actions here
            } else {
                alert("Invalid email or password");
            }
        }
    </script>
</body>

</html>