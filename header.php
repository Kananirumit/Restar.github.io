<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Restar-Amusment Park</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
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
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #eeeeee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>

<body>

    <!-- main header -->
    <header class="main-header header-style-one">
        <div class="header-lower">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="resort.php">ROOM</a></li>
                                <li class="dropdown">RIDES</a>
                                    <ul>
                                        <li><a href="themepark.php">DRYRIDES</a></li>
                                        <li><a href="waterpark.php">WATERRIDES</a></li>
                                    </ul>
                                </li>
                                <li><a href="attrection.php">ATTRECTION</a></li>
                                <li><a href="daining.php">DAINING</a></li>
                                <li><a href="about.php">ABOUT US</a></li>
                                <li><a href="gallery.php">OUR GALLERY</a></li>
                                <li><a href="contact.php">CONTACT</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="btn-box">
                        <a href="#" id="openPopup">Book your ticket</a>
                    </div>
                </div>

                <!-- Sign-in/Sign-up Popup -->
                <div id="popup" class="popup">
                    <!-- Your sign-in and sign-up form content goes here -->
                    <div class="popup-content">
                        <span class="close" onclick="closePopup()">&times;</span>
                        <div id="login-form" class="form-box login">
                            <div class="form-content">
                                <h2>LOGIN</h2>
                                <form action="#">
                                    <div class="input-field">
                                        <input type="text" required="" fdprocessedid="s8jhqb">
                                        <label>Email</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" required="" fdprocessedid="1qh8wc">
                                        <label>Password</label>
                                    </div>
                                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                                    <button type="submit" class="btn-log" fdprocessedid="hzsxfi">Log In</button>
                                </form>
                                <div class="bottom-link">
                                    Don't have an account?
                                    <a href="#" id="signup-link" onclick="openLoginPopup()">Signup</a>
                                </div>
                            </div>
                        </div>
                        <div id="signup-form" class="form-box signup">
                            <!-- <div class="form-details back-img">
                                <div class="">
                                    <h2>Create Account</h2>
                                    <p>To become a part of our community, please sign up using your personal information.</p>
                                </div>
                            </div> -->
                            <div class="form-content">
                                <h2>SIGNUP</h2>
                                <form action="#">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label for="fname" class="h6">First Name:</label>
                                            <input type="text" class="form-control text-font" id="fname" placeholder="Enter Firstname">
                                            <div class="invalid-feedback">Please enter your Firstname.</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label for="lname" class="h6">Last Name:</label>
                                            <input type="text" class="form-control text-font" id="lname" placeholder="Enter Lastname">
                                            <div class="invalid-feedback">Please enter your Lastname.</div>
                                        </div>
                                        <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                            <label for="gender" class="h6">Choose Gender:</label><br>
                                            <input type="radio" class="text-font" id="male" name="gender" value="male">
                                            <label for="male">Male</label>
                                            <input type="radio" class="text-font" id="female" name="gender" value="female">
                                            <label for="female">Female</label>
                                            <div class="invalid-feedback">Please enter your Lastname.</div>
                                        </div>
                                        <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                            <label for="phone" class="h6">Phone:</label>
                                            <input type="number" class="form-control text-font" id="phone" placeholder="Enter Phone Number">
                                            <div class="invalid-feedback">Please enter your Lastname.</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-md-6 col-sm-12 form-group">
                                            <label for="child" class="h6">Email:</label>
                                            <input type="text" class="form-control text-font" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="Email">
                                            <div class="invalid-feedback invalid-feedback-email">Please enter a valid email address.</div>
                                        </div>
                                        <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                            <label for="child" class="h6">Password:</label>
                                            <input type="text" class="form-control text-font" id="pass" placeholder="Enter Password">
                                            <div class="invalid-feedback">Please enter your Lastname.</div>
                                        </div>
                                        <div class="col-lg-12  col-md-12 col-sm-12 form-group">
                                            <label for="child" class="h6">Confirm Password:</label>
                                            <input type="text" class="form-control text-font" id="confirm pass" placeholder="Confirm Password">
                                            <div class="invalid-feedback">Please enter your Lastname.</div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 text-center">
                                            <button class="theme-btn btn-one" name="reg" id="buy" onclick="validateForm()">Sign Up</button>
                                        </div>
                                    </div>
                                    <!-- <button type="submit">Sign Up</button> -->
                                </form>
                                <div class="bottom-link" style="color:aqua">
                                    Already have an account?
                                    <a href="#" id="login-link" onclick="openSignupPopup()">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
    <script>
        // Function to open the popup
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        // Function to close the popup
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        // Event listener to open the popup when the link is clicked
        document.getElementById("openPopup").addEventListener("click", openPopup);
    </script>
    <script>
        // Function to open the popup with the login form
        function openLoginPopup() {
            document.getElementById("popup").style.display = "block";
            document.getElementById("login-form").style.display = "flex";
            document.getElementById("signup-form").style.display = "none";
        }

        // Function to open the popup with the signup form
        function openSignupPopup() {
            document.getElementById("popup").style.display = "block";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("signup-form").style.display = "flex";
        }

        // Function to close the popup
        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        // Event listener to open the popup with the login form when the login link is clicked
        document.getElementById("login-link").addEventListener("click", openLoginPopup);

        // Event listener to open the popup with the signup form when the signup link is clicked
        document.getElementById("signup-link").addEventListener("click", openSignupPopup);
    </script>

    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>

    <!-- main-js -->
    <!-- <script src="assets/js/script.js"></script> -->
</body>

</html>