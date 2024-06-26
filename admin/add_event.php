<?php

include "../include/connect.php";

if (isset ($_POST['add_event'])) {
  $event_name = $_POST['event_name'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $info = $_POST['info'];
  $event_price = $_POST['event_price'];
  $event_image = $_FILES['event_image']['name'];

  if (file_exists("./admin/images/event/" . $_FILES["event_image"]["name"])) {
    $store = $_FILES["faculty_image"]["name"];
    $_SESSION['status'] = "Image already exists. '.$store.'";
    header('Location:add_event.php');
  } else {


    $query = "INSERT INTO events(`event_name`,`start_date`,`end_date`,`info`,`event_price`,`event_image`)VALUES('$event_name','$start_date','$end_date','$info','₹$event_price','$event_image')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
      move_uploaded_file($_FILES["event_image"]['tmp_name'], "./admin/images/event/" . $_FILES["event_name"]["name"]);
      $_SESSION['success'] = "Event addedd";
      header('Location: ./event.php');
    } else {
      $_SESSION['success'] = "Event not addedd";
      header('Location: ./event.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Restar Admin</title>
  <script src="https://kit.fontawesome.com/206142e5bd.js" crossorigin="anonymous"></script>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/amusement-park.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css">
  <style>
    .div-add {
      background: #F5F7FF;
      padding: 18px 18px;
      width: 100%;
      -webkit-flex-grow: 1;
      flex-grow: 1;
    }
  </style>
</head>



<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.png" class="mr-2" alt="logo"
            style="width: 100px; height:50px;" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/fair.png" alt="logo"
            style="width: 50px; height:50px;" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center btn1" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="fullscreen">
              <i class="fa-solid fa-expand"></i>
            </button>
          </li>
          <li class="nav-item dropdown">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face29.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="<?php echo isset ($_SESSION['email']) ? 'add.php' : 'login.php'; ?>">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="../admin/logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fa-solid fa-grip" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">
              <i class="fa-solid fa-table-columns" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Registration Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="room_booking.php">
              <i class="fa-solid fa-table-cells-large" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Room Booking Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ticket_booking.php">
              <i class="fa-solid fa-table-list" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Ticket Booking Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">
              <i class="fa-solid fa-address-book" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Contact us Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event.php">
              <i class="fa-regular fa-square-plus" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Added event</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event_booking.php">
              <i class="fa-solid fa-calendar-check" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Event Booking</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rbpayment.php">
              <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Room Booking Payment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tbpayment.php">
              <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Ticket Booking Payment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ebpayment.php">
              <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Event Booking Payment</span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="container div-add">
        <h2>Add Event</h2>
        <form method="post" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="event_name">Event Name:</label>
                <input type="text" class="form-control" id="event_name" name="event_name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="start_date">Start Date:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="end_date">End Date:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="event_price">Event Price:</label>
                <input type="text" class="form-control" id="event_price" name="event_price" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="info">Information:</label>
                <textarea class="form-control" name="info" id="info" rows="5" required></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="event_image">Event Image:</label>
                <input type="file" class="form-control-file" id="event_image" name="event_image" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary" name="add_event">Add Event</button>
            </div>
          </div>
        </form>

        <!-- Button trigger modal -->
        <?php
        if (isset ($_SESSION['success']) && $_SESSION['success'] != '') {
          echo '<h2 class="bg-primary text-white"> ' . $_SESSION['success'] . ' </h2>';
          unset($_SESSION['success']);
        }

        if (isset ($_SESSION['status']) && $_SESSION['status'] != '') {
          echo '<h2 class="bg-danger text-white"> ' . $_SESSION['status'] . ' </h2>';
          unset($_SESSION['status']);
        }
        ?>

        <script>
          // date valiation
          // Get today's date
          var today = new Date();

          // Format the date to YYYY-MM-DD (required by the date input)
          var yyyy = today.getFullYear();
          var mm = String(today.getMonth() + 1).padStart(2, '0');
          var dd = String(today.getDate()).padStart(2, '0');
          var minDate = yyyy + '-' + mm + '-' + dd;

          // Set the minimum date for the date input
          document.getElementById("start_date").min = minDate;
          document.getElementById("end_date").min = minDate;


          document.addEventListener("DOMContentLoaded", function () {
            // Select the "ADD" button
            var addEventButton = document.getElementById('addEventButton');

            // Add click event listener to the "ADD" button
            addEventButton.addEventListener('click', function () {
              // When the button is clicked, show the modal popup
              $('#eventmodal').modal('show');
            });
          });
        </script>
        <!-- Add this code where you want to display the added event in a table -->
        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>