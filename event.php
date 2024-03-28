<?php

// Include the file to establish database connection
$currentPage = 'event';
include "./include/connect.php";
include "header.php";

// Check if the form has been submitted
if (isset ($_POST['add'])) {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $npass = $_POST['npass'];
    $totalprice = $_POST['totalprice'];

    // Prepare and execute SQL query to insert data into database table
    $insert = "INSERT INTO event_data (`fname`, `lname`, `email`, `phone`, `event`, `npass`, `totalprice`) 
               VALUES ('$fname', '$lname', '$email', '$phone', '$event', '$npass', '$totalprice')";
    $result = $conn->query($insert);

    // Check if the query was successful
    if ($result) {
        // Redirect to a success page or do any additional processing
        header("location: index.php");
        exit(); // Exit to prevent further execution
    } else {
        // Handle the case where the query failed
        echo "Error: " . $conn->error;
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
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

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


    <script>
        function updateRoomPrice() {
            var roomDropdown = document.getElementById('roomDropdown');
            var priceDisplay = document.getElementById('roomPrice');

            var selectedRoom = roomDropdown.options[roomDropdown.selectedIndex].value;

            // Set room prices based on the selected room type
            var eventPrices = {
                'Family Fun day': 8000,
                'Summer Event': 6500,
                'Fun Day': 7000
            };

            // Display the price for the selected event
            priceDisplay.innerHTML = '₹' + eventPrices[selectedRoom] + ' per pass';

            // Call the function to update the total price when the number of passes changes
            updateTotalPrice();
        }

        // Function to update the total price based on the number of passes
        function updateTotalPrice() {
            var eventPrice = document.getElementById('roomPrice').innerText;
            var numberOfPasses = document.getElementById('number-of-passes').value;

            // Extract the numerical value from the event price
            var eventPriceValue = parseInt(eventPrice.replace(/[^\d]/g, ''), 10);

            // Calculate the total price
            var totalPrice = eventPriceValue * parseInt(numberOfPasses, 10);

            // Display the total price
            document.getElementById('totalPrice').innerText = '₹' + totalPrice;
        }
    </script>
    <style>
        .error-container {
            color: red;
            margin-bottom: 10px;
        }

        .error-block {
            background-color: #ffeeee;
            padding: 10px;
            border: 1px solid #ff0000;
            margin-bottom: 10px;
        }

        .error-message {
            margin: 5px 0;
        }

        .lin {
            display: flex;
            flex-direction: row;
        }

        .box1 {
            height: 545px;
            width: 250px;
            margin: 70px;
            text-align: center;
            color: black;
            background-color: white;
            font-family: "Quicksand", sans-serif;
            align-items: center;


        }

        @media (max-width: 767px) {
            .box1 {
                width: 100%;
                /* Set width to full on small devices */
            }
        }

        .rim {

            text-align: center;
            text-decoration: none;
            font-weight: 400;
            padding-top: 10px;
            color: #3D3D3D;
            box-shadow: 0 3px 5px rgba(1, 0, 0, 0.4);
        }

        h4.card-title1 {
            margin-bottom: 20px;
            padding: 15px;
            text-align: center;
            font-size: 15px;
            text-transform: uppercase;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-radius: 20%;
            border: solid black 2px;
        }

        h3.card-title2 {
            margin: 10px;
            text-align: center;
            font-size: 10px;
            text-transform: uppercase;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        p.card-title2 {
            margin: 10px 0px;
            text-align: center;
            font-size: 10px;
            text-transform: uppercase;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }


        img.image-shadow {
            box-shadow: 0 3px 5px rgba(1, 0, 0, 0.4);
        }

        .boxed_wrapper {
            overflow-x: unset !important;
        }
    </style>
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



        <!-- Page Title -->
        <section class="page-title">
            <div class="img-wrap parallax-demo-1">
                <div class="parallax-inner back-img" style="background-image: url(assets/images/event/banner.jpeg);">
                </div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Book</li>
                    </ul>
                    <div class="title">
                        <h1>Your event</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
        <div class="container">
            <div class="row mt-4">
                <?php
                require "./include/connect.php";

                $query = "SELECT * FROM events";
                $query_run = mysqli_query($conn, $query);

                $check_event = mysqli_num_rows($query_run) > 0;

                if ($check_event) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        ?>

                        <div class="lin">
                            <div class="box1">
                                <h4 class="card-title1">
                                    <?php echo $row['event_name']; ?>
                                </h4>
                                <img src="./admin/images/event/<?php echo $row['event_image'] ?>" class="image-shadow imge"
                                    alt="image">

                                <h3 class="card-title2">
                                    <?php echo $row['start_date']; ?>
                                </h3>
                                <h3 class="card-title2">
                                    <?php echo $row['end_date']; ?>
                                </h3>
                                <h3 class="card-title2">
                                    <?php echo $row['event_price']; ?>
                                </h3>
                                <p class="card-title2">
                                    <?php echo $row['info']; ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        // echo $row['event_name'];
                    }
                } else {
                    echo "<div class='col-12 m-1 grid-margin'>
                            <div class='cad'>
                                <div class='row'>
                                    <div class='card-body'>
                                        <h1 style='text-align:center; text-shadow:0px 0px 3px black;'>No event is there!!!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
                ?>

            </div>
        </div>
    </div>

    <!--daining end-->
    <!--Ticket booking start-->
    <section class="contact-section centred" id="pricing-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                    <div class="sec-title centred">
                        <h2>BOOK YOUR Event</h2>
                    </div>
                    <div class="form-inner text-left">
                        <form method="post" action="" id="booking-form" class="default-form" novalidate="novalidate"
                            onsubmit="return validateForm()">
                            <!-- Your form fields go here -->
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="child" class="h6">First Name:</label>
                                    <input type="text" class="form-control text-font" name="fname" id="fname"
                                        placeholder="First Name" required>

                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="child" class="h6">Last Name:</label>
                                    <input type="text" class="form-control text-font" name="lname" id="lname"
                                        placeholder="Last Name" required>

                                    <div class="invalid-feedback">Please enter your name.</div>

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="child" class="h6">Email:</label>
                                    <input type="text" class="form-control text-font" id="email" name="email"
                                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="Email"
                                        required>
                                    <div class="invalid-feedback invalid-feedback-email">Please enter a valid
                                        email
                                        address.</div>
                                </div>


                                <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                    <label for="child" class="h6">Phone:</label>
                                    <input type="text" class="form-control text-font" required="" name="phone"
                                        placeholder="Enter your phone number" id="phone">
                                    <div class="invalid-feedback invalid-feedback-text">Please enter your phone
                                        number.</div>
                                </div>
                                <div class="col-lg-6  col-md-6 col-sm-12 form-group">
                                    <label for="room" class="h6">Choose Your event</label><br>
                                    <select id="roomDropdown" class="form-control text-font" name="event" required=""
                                        onchange="updateRoomPrice()">

                                        <option value="Family Fun day" name="event">Family Fun day</option>
                                        <option value="Summer Event" name="event">Summer Event</option>
                                        <option value="Fun Day" name="event">Fun Day</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="room" class="h6">event Price:</label>
                                    <p id="roomPrice">₹8000 per pass</p>
                                </div>

                                <!-- Modify the PHP code to calculate the total price -->
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="child" class="h6">Number of pass:</label>
                                    <div class="input-group">
                                        <button type="button"
                                            class="btn btn-warning d-flex align-items-center text-font"
                                            onclick="decrementPasses()">-</button>
                                        <input type="text" class="form-control text-font" required="" name="npass"
                                            id="number-of-passes" placeholder="Enter number of passes"
                                            onchange="updateTotalPrice()" value="1">
                                        <button type="button"
                                            class="btn btn-warning d-flex align-items-center text-font"
                                            onclick="incrementPasses()">+</button>
                                    </div>
                                    <div class="invalid-feedback">Please enter the number of rooms.</div>
                                </div>

                                <!-- Add this to display the total price -->
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="room" class="h6">Total Price:</label>
                                    <input type="text" class="form-control text-font" name="totalprice" id="totalPrice"
                                        value="₹8000" readonly>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 text-center">
                                    <button class="theme-btn btn-one" name="add" id="add"
                                        onclick="updateTotalPrice();">Book your event</button>
                                </div>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Ticket booking end-->

    <script>
        // date valiation
        $(function (updatedate) {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var minDate = year + '-' + month + '-' + day;

            $('#checkin').attr('min', minDate);
            $('#checkout').attr('min', minDate);
        });

        // date rev validation
        $(function (updatedate) {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;

            $('#birthdate').attr('max', maxDate);
        });

        // Function to increment the number of rooms
        function decrementPasses() {
            var numberOfPasses = document.getElementById('number-of-passes');
            var currentValue = parseInt(numberOfPasses.value, 10);
            if (currentValue > 1) {
                numberOfPasses.value = currentValue - 1;
                updateTotalPrice();
            }
        }

        // Function to decrement the number of rooms (minimum value is 1)
        function incrementPasses() {
            var numberOfPasses = document.getElementById('number-of-passes');
            numberOfPasses.value = parseInt(numberOfPasses.value, 10) + 1;
            updateTotalPrice();
        }


        // Function to update the total price based on the number of rooms
        function updateTotalPrice() {
            var roomPrice = document.getElementById('roomPrice').innerText;
            var numberOfPasses = document.getElementById('number-of-passes').value;

            // Extract the numerical value from the room price
            var roomPriceValue = parseInt(roomPrice.replace(/[^\d]/g, ''), 10);

            // Calculate the total price
            var totalPrice = roomPriceValue * parseInt(numberOfPasses, 10);

            // Display the total price
            document.getElementById('totalPrice').value = '₹' + totalPrice;
        }
    </script>
    <script>
        function validateForm() {
            var fname = document.getElementById('fname').value.trim();
            var lname = document.getElementById('lname').value.trim();
            var email = document.getElementById('email').value.trim();
            var birthdate = document.getElementById('birthdate').value.trim();
            var city = document.getElementById('city').value.trim();
            var phone = document.getElementById('phone').value.trim();
            var roomDropdown = document.getElementById('roomDropdown');
            var numberOfRooms = document.getElementById('number-of-rooms').value.trim();
            var checkin = document.getElementById('checkin').value.trim();
            var checkout = document.getElementById('checkout').value.trim();

            // Check each field individually
            if (fname === '' || lname === '' || email === '' || birthdate === '' || city === '' || phone === '' || roomDropdown.selectedIndex === 0 || numberOfRooms === '' || checkin === '' || checkout === '') {
                alert('Please fill in all the fields before submitting.');
                return false;
            }

            // Perform additional validation checks if needed

            // If all validations pass, the form will be submitted
            return true;
        }
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
    <script>
        function scrollToSection() {
            var pricingSection = document.getElementById('pricing-section');

            if (pricingSection) {
                pricingSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Weldlfe/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jan 2024 07:05:16 GMT -->

</html>