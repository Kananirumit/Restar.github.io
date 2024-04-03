<?php
session_start(); // Start session

include "./include/connect.php";

if (isset($_POST['submit_form'])) {
    // Store form data in session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['child'] = $_POST['child'];
    $_SESSION['adult'] = $_POST['adult'];
    $_SESSION['senior'] = $_POST['senior'];
    $_SESSION['txtDate'] = $_POST['txtDate'];
    $_SESSION['total'] = $_POST['total'];

    // Insert form data into database
    $name = $_POST['name'];
    $email = $_POST['email'];
    $child = $_POST['child'];
    $adult = $_POST['adult'];
    $senior = $_POST['senior'];
    $txtDate = $_POST['txtDate'];
    $total = $_POST['total'];

    $insert = "INSERT INTO `ticket`(`name`, `email`, `child`, `adult`, `senior`, `txtDate`, `total`) VALUES ('$name','$email','$child','$adult','$senior','$txtDate','$total')";

    $result = $conn->query($insert);

    if ($result) {
        // Redirect to payment page
        header("location: card2.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "<div class='alert alert-danger'>Error processing form submission.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Restar-Amusement Park</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/amusement-park.png" type="image/x-icon">

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

</head>

<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader about-page-2">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <?php
        include "header.php";
        ?>

        <!-- Page Title -->
        <section class="page-title">
            <div class="img-wrap parallax-demo-1">
                <div class="parallax-inner back-img" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.php">Home</a></li>
                        <li>Our Pricing</li>
                    </ul>
                    <div class="title">
                        <h1>BOOK YOUR TICKET</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- pricing-section -->
        <section class="pricing-section centred sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">
                                    <div class="icon-box"><i class="flaticon-daughter"></i></div>
                                    <h5>Child</h5>
                                    <p>( under 12 years )</p>
                                    <h2><span>₹</span>850</h2>
                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix">
                                        <li>Restar-Amusment-Park</li>
                                        <li>Mind Blowing Rides</li>
                                        <li>Aquatic Animals And Fish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">
                                    <div class="icon-box"><i class="flaticon-teen"></i></div>
                                    <h5>Adults</h5>
                                    <p>( under 30 years )</p>
                                    <h2><span>₹</span>950</h2>
                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix">
                                        <li>Restar-Amusment-Park</li>
                                        <li>Mind Blowing Rides</li>
                                        <li>Aquatic Animals And Fish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">
                                    <div class="icon-box"><i class="flaticon-monkey"></i></div>
                                    <h5>Seniors</h5>
                                    <p>( upper 30 years )</p>
                                    <h2><span>₹</span>1050</h2>
                                </div>
                                <div class="table-content">
                                    <ul class="feature-list clearfix">
                                        <li>Restar-Amusment-Park</li>
                                        <li>Mind Blowing Rides</li>
                                        <li>Aquatic Animals And Fish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-section end -->
        <!--Ticket start-->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                        <div class="sec-title centred">
                            <h2>BOOK YOUR TICKET</h2>
                        </div>
                        <div class="form-inner text-left">
                            <form method="post" action="" id="contact-form" class="default-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="child" class="h6">Name:</label>
                                        <input type="text" class="form-control text-font" id="name" placeholder="Name" name="name">
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="child" class="h6">Email:</label>
                                        <input type="text" class="form-control text-font" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="Email" name="email">
                                        <div class="invalid-feedback invalid-feedback-email">Please enter a valid email address.</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="child" class="h6">Child:</label>
                                        <div class="d-flex">
                                            <div class="input-group">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="decrement('child')">-</span>
                                                <input type="text" class="form-control text-font" id="child" value="0" readonly name="child">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="increment('child')">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="child" class="h6">Adult:</label>
                                        <div class="d-flex">
                                            <div class="input-group">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="decrement('adult')">-</span>
                                                <input type="text" class="form-control text-font" id="adult" value="0" readonly name="adult">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="increment('adult')">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="child" class="h6">Senior:</label>
                                        <div class="d-flex">
                                            <div class="input-group">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="decrement('senior')">-</span>
                                                <input type="text" class="form-control text-font" id="senior" value="0" readonly name="senior">
                                                <span class="btn btn-warning d-flex align-items-center text-font" onclick="increment('senior')">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="child" class="h6">Date:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control text-font" id="txtDate" name="txtDate">
                                        </div>
                                        <div class="invalid-feedback invalid-feedback-date">Please select a date.</div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label for="child" class="h6">Total:</label>
                                        <div class="input-group">
                                            <input class="form-control d-flex align-items-center" value="0" id="total" name="total" readonly>
                                        </div>
                                        <div class="invalid-feedback invalid-feedback-total">Select at least one person.</div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 text-center">
                                        <button class="theme-btn btn-one" name="submit_form" id="buy" onclick="validateForm()">Buy</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Ticket end-->
        <br><br>
        <script>
            // date valiation
            $(function(updatedate) {
                var dtToday = new Date();

                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if (month < 10)
                    month = '0' + month.toString();
                if (day < 10)
                    day = '0' + day.toString();

                var minDate = year + '-' + month + '-' + day;

                $('#txtDate').attr('min', minDate);
            });

            var childCount = 0;
            var adultCount = 0;
            var seniorCount = 0;

            // Update the total based on counts
            function updateTotal() {
                var childPrice = 850;
                var adultPrice = 950;
                var seniorPrice = 1050;

                var total = (childCount * childPrice) + (adultCount * adultPrice) + (seniorCount * seniorPrice);

                $('#total').attr('value', '₹' + total);
            }

            // Increment and Decrement functions
            function increment(category) {
                if (category === 'child') {
                    childCount++;
                    $('#child').val(childCount);
                } else if (category === 'adult') {
                    adultCount++;
                    $('#adult').val(adultCount);
                } else if (category === 'senior') {
                    seniorCount++;
                    $('#senior').val(seniorCount);
                }
                updateTotal();
            }

            function decrement(category) {
                if (category === 'child' && childCount > 0) {
                    childCount--;
                    $('#child').val(childCount);
                } else if (category === 'adult' && adultCount > 0) {
                    adultCount--;
                    $('#adult').val(adultCount);
                } else if (category === 'senior' && seniorCount > 0) {
                    seniorCount--;
                    $('#senior').val(seniorCount);
                }

                updateTotal();
            }

            $('#clear').click(function() {
                // Clear the form and counts
                $('#name').val('');
                $('#email').val('');
                childCount = 0;
                adultCount = 0;
                seniorCount = 0;
                $('#child').val('0');
                $('#adult').val('0');
                $('#senior').val('0');
                $('#txtDate').val('');
                $('#total').text('0');
            });

            $(document).ready(function() {
                // Function to validate an input field
                function validateInput(input, pattern, errorSelector, errorMessage) {
                    var value = input.val();
                    if (value === "" || !pattern.test(value)) {
                        input.addClass("is-invalid");
                        errorSelector.text(errorMessage).show();
                        return false;
                    } else {
                        input.removeClass("is-invalid");
                        errorSelector.text("").hide();
                        return true;
                    }
                }

                // Email validation pattern
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                // Add blur event listeners to input fields
                $("#name").blur(function() {
                    validateInput($(this), /^.+$/, $(".invalid-feedback-name"), "Please enter your name.");
                });

                $("#email").blur(function() {
                    validateInput($(this), emailPattern, $(".invalid-feedback-email"), "Please enter a valid email address.");
                });

                $("#txtDate").blur(function() {
                    if ($(this).val() === "") {
                        $(this).addClass("is-invalid");
                        $(".invalid-feedback-date").text("Please select a date.").show();
                    } else {
                        $(this).removeClass("is-invalid");
                        $(".invalid-feedback-date").text("").hide();
                    }
                });

                // Function to calculate the total and check if it's greater than 0
                function calculateTotal() {
                    var child = parseInt($("#child").val());
                    var adult = parseInt($("#adult").val());
                    var senior = parseInt($("#senior").val());
                    var total = child + adult + senior;

                    if (total <= 0) {
                        $("#total").addClass("is-invalid");
                        $(".invalid-feedback-total").text("Select at least one person.").show();
                        return false;
                    } else {
                        $("#total").removeClass("is-invalid");
                        $(".invalid-feedback-total").text("").hide();
                        return true;
                    }
                }

                // Add input event listeners to quantity fields (Child, Adult, Senior) for immediate validation
                $("#child, #adult, #senior").on("input", function() {
                    calculateTotal();
                });

                // Validate the form on Buy button click
                $("#buy").click(function(e) {
                    // Trigger blur for all input fields to perform validation
                    $("#name, #email, #txtDate").blur();

                    // Calculate the total and check if it's greater than 0
                    if (calculateTotal()) {
                        // If all validation passes, you can redirect to the card.html page
                        window.location.href = 'card.html';
                    } else {
                        e.preventDefault(); // Prevent the form from submitting if there are validation errors
                    }
                });
            });
        </script>
        <?php
        include "footer.php";
        ?>

        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fal fa-long-arrow-up"></i>
        </button>
    </div>

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
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->


</html>