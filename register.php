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
        <!-- Your sign-in and sign-up form content goes here -->
        <div class="popup-content">
            <div id="signup-form" class="form-box signup">
                <div class="form-content">
                    <h2>SIGNUP</h2>
                    <form action="#">
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
                                <select id="genderDropdown" class="form-control text-font" required="" id="gender">
                                    <option value="male" name="gender">Male</option>
                                    <option value="female" name="gender">Female</option>
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
                                    <input type="text" class="form-control text-font" required="" name="pass" id="pass">
                                    <label>Password:</label>
                                </div>
                            </div>
                            <div class="col-lg-12  col-md-12 col-sm-12 form-group">
                                <div class="input-field">
                                    <input type="text" class="form-control text-font" required="" name="confirmpass" id="confirm_pass">
                                    <label>Confirm Password:</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 text-center">
                                <button class="theme-btn btn-one" name="reg" id="buy" onclick="validateForm()">Sign Up</button>
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
</body>

</html>