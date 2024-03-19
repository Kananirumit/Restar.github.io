<?php
include "./include/connect.php";


if (isset($_POST['add'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirmpss = $_POST['confirmpss'];

    // Check if the email or phone already exists in the database
    $checkEmailQuery = "SELECT * FROM `register` WHERE email = '$email'";
    $checkPhoneQuery = "SELECT * FROM `register` WHERE phone = '$phone'";

    $checkEmailResult = $conn->query($checkEmailQuery);
    $checkPhoneResult = $conn->query($checkPhoneQuery);

    if ($checkEmailResult->num_rows > 0 && $checkPhoneResult->num_rows > 0) {
        echo "<script>alert('Both email and phone already exist!');</script>";
    } elseif ($checkEmailResult->num_rows > 0) {
        echo "<script>alert('Email already exists!');</script>";
    } elseif ($checkPhoneResult->num_rows > 0) {
        echo "<script>alert('Phone already exists!');</script>";
    } else {
        // Perform the registration since email and phone are unique
        $insert = "INSERT INTO `register`(`fname`,`lname`,`gender`,`phone`,`email`,`pass`,`confirmpss`) VALUES ('$fname','$lname','$gender','$phone','$email','$pass','$confirmpss')";
        $result = $conn->query($insert);

        if ($result) {
            header("location:login.php");
        } else {
            echo "<script>alert('Registration failed!');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>

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
        /* Add your existing styles here */
        .toggle-password {
            cursor: pointer;
            user-select: none;
        }

        .toggle-password:hover {
            text-decoration: underline;
        }

        .toggle-password-eye i {
            position: relative;
            left: 82%;
            bottom: 40px;
            cursor: pointer;
        }

        .toggle-password-eyepass i {
            position: relative;
            left: 92%;
            bottom: 40px;
            cursor: pointer;
        }

        @media (max-width: 468px) {
            .popup-content {
                max-height: 80vh;
                /* Set maximum height for the popup content */
                overflow-y: auto;
                /* Enable vertical scrolling */
            }

            .form-box.signup {
                height: 100%;
                /* Ensure the form box takes up all available height */
            }

            .form-content {
                padding: 20px;
                /* Add padding to the form content */
            }
        }
    </style>
</head>

<body>
    <div id="popup" class="popup">
        <!-- Your sign-in and sign-up form content goes here -->
        <div class="popup-content">
            <div id="signup-form" class="form-box signup">
                <div class="form-content">
                    <h2>REGISTRATION</h2>
                    <form action="#" method="POST">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="text" class="form-control text-font" required="" name="fname" id="fname">
                                    <label>First Name:</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="text" class="form-control text-font" required="" name="lname" id="lname">
                                    <label>Last Name:</label>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                <label for="gender">Choose Gender:</label><br>
                                <select id="genderDropdown" class="form-control text-font" name="gender" required="" id="gender">
                                    <option value="male" name="gender">Male</option>
                                    <option value="female" name="gender">Female</option>
                                    <option value="other" name="gender">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="text" class="form-control text-font" required="" name="phone" id="phone">
                                    <label>Phone:</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-md-6 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="text" class="form-control text-font" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required="" name="email" id="email">
                                    <label>Email:</label>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="password" class="form-control text-font" required="" name="pass" id="pass">
                                    <span class="toggle-password-eye" onclick="togglePasswordVisibility('pass')">
                                        <i id="eyeIcon" class="fa fa-eye-slash"></i> <!-- Font Awesome eye icon -->
                                    </span>
                                    <label>Password:</label>
                                </div>
                            </div>
                            <div class="col-lg-12  col-md-12 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="password" class="form-control text-font" required="" name="confirmpss" id="confirm_pass">
                                    <span class="toggle-password-eyepass" onclick="togglePasswordVisibility('confirm_pass')">
                                        <i id="eyeIcon" class="fa fa-eye-slash"></i> <!-- Font Awesome eye icon -->
                                    </span>
                                    <label>Confirm Password:</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 text-center">
                                <button class="theme-btn btn-one" name="add" id="buy" onclick="validateForm()">Sign Up</button>
                            </div>
                        </div>
                        <!-- <button type="submit">Sign Up</button> -->
                    </form>
                    <div class="bottom-link">
                        Already have an account?
                        <a href="login.php" id="login-link">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(passwordFieldId) {
            var passwordField = document.getElementById(passwordFieldId);
            passwordField.type = (passwordField.type === "password") ? "text" : "password";
        }

        function validateForm() {
            var password = document.getElementById("pass").value;
            var confirmPassword = document.getElementById("confirm_pass").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
            } else {
                // Passwords match, you can proceed with form submission
                document.getElementById("myForm").submit();
            }
        }
    </script>
</body>

</html>