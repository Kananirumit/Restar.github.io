<?php

include "./include/connect.php";

if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `contact`(`username`,`email`,`phone`,`subject`,`message`) VALUES ('$username','$email','$phone','$subject','$message')";

    $result = $conn->query($insert);

    if ($result) {
        header("location:index.php");
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

</head>


<style>
    .map-container {
    position: relative;
    width: 100%;
    padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
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
        $currentPage = 'contact';
        include "header.php";
        ?>


        <!-- Page Title -->
        <section class="page-title">
            <div class="img-wrap parallax-demo-1">
                <div class="parallax-inner back-img"
                    style="background-image: url(assets/images/gallery/ride/group-of-happy-best-friends-laughing-and-having-fun-at-amusement-park.jpg);">
                </div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- google-map-section -->
        <section class="google-map-section">
    <div class="auto-container">
        <div class="map-inner">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.9407063078324!2d72.86247447343966!3d21.194514282068454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04fa54162df73%3A0xc64e227c6b44a7c1!2sAquamagicaa!5e0!3m2!1sen!2sin!4v1711973660285!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="content-box">
                <h2>get in touch with us</h2>
                <ul class="info clearfix">
                    <li><i class="flaticon-telephone"></i>
                        <a href="tel:9107776767">+91 91067 76464</a><br>
                        <a href="tel:76988 65902">+91 76988 65902</a>
                    </li>
                    <li><i class="flaticon-email"></i><a href="mailto:restarpark@gmail.com">restarpark@gmail.com</a></li>
                    <li><i class="flaticon-pin"></i>Canal Road,Parvat Patiya,Magob, Surat,Gujarat 395010</li>
                </ul>
                <div class="inner">
                    <div class="icon-box"><i class="flaticon-clock-1"></i></div>
                    <p>Monday - Sunday</p>
                    <h4>9:00am to 6:00pm</h4>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- google-map-section end -->


        <!-- contact-section -->
        <section class="contact-section centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 offset-xl-2 big-column">
                        <div class="sec-title centred">
                            <h2>have question? <br />drop a line</h2>
                        </div>
                        <div class="form-inner">
                            <form method="post" id="contact-form" class="default-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Full name" required=""
                                            aria-required="true">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required=""
                                            aria-required="true">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone"
                                            aria-required="true">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Subject"
                                            aria-required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn btn-one" type="submit" name="add"><span>Submit
                                                comment</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


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