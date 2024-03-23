<?php

  session_start();

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
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="../text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/amusement-park.png />
  </head>

  <body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=".index.php"><img src="../images/logo.png" class="mr-2" alt="logo"
            style="width: 100px; height:50px;" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/fair.png" alt="logo"
            style="width: 50px; height:50px;" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center btn1" type="button" data-toggle="minimize">
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
              <img src="../images/faces/face28.png" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="<?php echo isset($_SESSION['email']) ? 'add.php' : './login.php'; ?>">
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
            <label for="info">information:</label>
            <input type="text" class="form-control" id="info" name="info" required>
          </div>
          <div class="form-group">
            <label for="event_price">Event Price:</label>
            <input type="text" class="form-control" id="event_price" name="event_price" required>
          </div>
          <div class="hero">
                              <label for="input-file" id='drop-area'>
                                <input type="file" accept="image/*" name="img" id="input-file" hidden>
                                <div id="img-view">
                                  <img class="img" src="../images/icon.png" alt="">
                                  <p>Drag and Drop or click here <br> to upload image.</p>
                                  <span>Upload any image from desktop</span>
                                </div>
                              </label>
                            </div>
                          <input class='w-100 btn btn-inverse-primary btn-large btn-block' name="add" id="add" type="submit" value="Add Event">
                        </form>
                        </body>
</html>


<?php

        if (isset($_REQUEST['add'])) {
          
          require("./admin/include/connect.php");
          $event_name=$_REQUEST['event_name'];
          $start_date=$_REQUEST['start_date'];
          $end_date=$_REQUEST['end_date'];
          $info=$_REQUEST['info'];
          $event_price=$_REQUEST['event_price'];
          $img_name=$_FILES['img']['name'];
          $tmp_loc=$_FILES['img']['tmp_name'];
          $conn = "insert into events values('$event_name','$start_name','$end_date','$info','$event_price','$img_name')";
          echo $q;
            if(file_exists('../../images/Events/'.$img_name)){
              echo "<h1>File Already Exist!!!</h1>";
            }
            else{
              if (mysqli_query($mysql,$q)) {
                echo "Inserted Successfully!!";
                move_uploaded_file($tmp_loc,'../../images/Events/'.$img_name);
                echo "<script type='text/javascript'>window.location.href='../Event.php'</script>";
              }
              else{
                echo "<h1>Insertion Failed!!!</h1>";
              }
            }
          }
        ?>