<?php
include "../include/connect.php";

$popup_message = ''; // Initialize popup message variable

if (isset ($_POST['add_event'])) {
  // Retrieve form data
  $event_name = $_POST['event_name'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $event_price = $_POST['event_price'];

  // Process the image upload
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["event_image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is an actual image or fake image
  if (isset ($_POST["add_event"])) {
    $check = getimagesize($_FILES["event_image"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      $popup_message = "Error: File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    $popup_message = "Error: Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["event_image"]["size"] > 500000) {
    $popup_message = "Error: Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    $popup_message = "Error: Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $popup_message = "Error: Sorry, your file was not uploaded.";
  } else {
    // if everything is ok, try to upload file
    if (move_uploaded_file($_FILES["event_image"]["tmp_name"], $target_file)) {
      $popup_message = "Success: The event has been added successfully.";

      // Insert event details into the database
      $stmt = $conn->prepare("INSERT INTO events (event_name, start_date, end_date, event_price, event_image) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("sssss", $event_name, $start_date, $end_date, $event_price, $target_file);
      $stmt->execute();

      // Check if the query was successful
      if ($stmt === false) {
        $popup_message = "Error: " . $conn->error;
      }

      // Close statement
      $stmt->close();
    } else {
      $popup_message = "Error: Sorry, there was an error uploading your file.";
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
  <style>
    .popup-message {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      display: none;
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
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="fullscreen">
              <i class="fa-solid fa-expand" style=""></i>
            </button>
          </li>
          <li class="nav-item dropdown">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
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
            <a class="nav-link" href="Room_booking.php">
              <i class="fa-solid fa-table-cells-large" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Room Booking Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Ticket_booking.php">
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
            <a class="nav-link" href="add_event.php">
              <i class="fa-regular fa-square-plus" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Add event</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event_booking.php">
              <i class="fa-solid fa-calendar-check" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">event Booking</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rbpayment.php">
              <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">ROOM Booking Payment Data</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tbpayment.php">
              <i class="fa-regular fa-credit-card" style="font-size: 18px; margin: 5px;"></i>
              <span class="menu-title">Ticket Booking Payment Data</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="container">
        <h2>Add Event</h2>
        <!-- Add event form -->
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <label for="event_name">Event Name:</label>
            <input type="text" class="form-control" id="event_name" name="event_name" required>
          </div>
          <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
          </div>
          <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
          </div>
          <div class="form-group">
            <label for="event_price">Event Price:</label>
            <input type="text" class="form-control" id="event_price" name="event_price" required>
          </div>
          <div class="form-group">
            <label for="event_image">Event Image:</label>
            <input type="file" class="form-control-file" id="event_image" name="event_image" required>
          </div>

          <button type="submit" class="btn btn-primary" name="add_event">Add Event</button>
        </form>
        <table>
          <table class="table">
            <thead>
              <tr>
                <th>Event Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Event Price</th>
                <th>Event Image</th>
              </tr>
            </thead>
            <tbody>
              <?php

              include "../include/connect.php";
              // Fetch events data from the database
              $sql = "SELECT * FROM events";
              $result = $conn->query($sql);

              if (!$result) {
                // Error occurred, display error message
                echo "Error: " . $conn->error;
              } else {
                // No error, proceed with displaying data
                if ($result->num_rows > 0) {
                  // Output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["event_name"] . "</td>";
                    echo "<td>" . $row["start_date"] . "</td>";
                    echo "<td>" . $row["end_date"] . "</td>";
                    echo "<td>" . $row["event_price"] . "</td>";
                    echo "<td><img src='" . $row["event_image"] . "' alt='Event Image' style='width: 100px;'></td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='5'>No events found</td></tr>"; // This message will display if no data is retrieved
                }
              }
              ?>
            </tbody>
          </table>
      </div>
      <!-- Add this code where you want to display the added event in a table -->

      <script>
        // Show popup message if not empty
        var popupMessage = "<?php echo $popup_message; ?>";
        if (popupMessage.trim() !== '') {
          // Display popup message
          var popupElement = document.querySelector('.popup-message');
          popupElement.style.display = 'block';

          // Auto-hide after 5 seconds
          setTimeout(function () {
            popupElement.style.display = 'none';
          }, 5000);
        }
      </script>

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