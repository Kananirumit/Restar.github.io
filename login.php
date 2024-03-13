<?php

include './include/connect.php';
session_start();

if (isset($_POST['login'])) {
    $emailOrPhone = $_POST['emailOrPhone'];
    $pass = $_POST['pass'];

    // Check if the input is a valid email or phone number
    if (filter_var($emailOrPhone, FILTER_VALIDATE_EMAIL)) {
        $loginField = 'email';
    } elseif (preg_match('/^\d{10}$/', $emailOrPhone)) {
        $loginField = 'phone';
    } else {
        echo "<script>alert('Invalid Email or Phone format!');</script>";
        exit;
    }

    // Use prepared statements to prevent SQL injection
    $select = "SELECT * FROM `register` WHERE $loginField = ? AND pass = ?";
    $stmt = $conn->prepare($select);
    $stmt->bind_param('ss', $emailOrPhone, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count > 0) {
        while ($row = $result->fetch_assoc()) {
            $email = $row['email'];
            $pass = $row['pass'];
        }

        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;

        header("location:index.php");
    } else {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }

    $stmt->close();
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
    <style>
        .toggle-password-eye i{
            position: relative;
            left: 89%;
            bottom: 40px;
        }
        .toggle-password-email i{
            position: relative;
            left: 89%;
            bottom: 40px;
        }
    </style>
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
                                <input type="text" required="" name="emailOrPhone" fdprocessedid="s8jhqb">
                                <label>Email or Phone</label>
                                <span class="toggle-password-email">
                                    <i class="fa fa-envelope"></i> <!-- Font Awesome eye icon -->
                                </span>
                            </div>
                            <div class="input-field">
                                <input type="password" required="" name="pass" fdprocessedid="1qh8wc" id="pass">
                                <span class="toggle-password-eye" onclick="togglePasswordVisibility('pass')">
                                    <i id="eyeIcon" class="fa fa-eye-slash"></i> <!-- Font Awesome eye icon -->
                                </span>
                                <label>Password</label>

                            </div>
                            <a href="forgot.php" class="forgot-pass-link">Forgot password?</a><br>
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
        // eyes
        function togglePasswordVisibility(passwordFieldId) {
            var passwordField = document.getElementById(passwordFieldId);
            passwordField.type = (passwordField.type === "password") ? "text" : "password";
        }

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