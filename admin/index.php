<?php
session_start();
include '../include/connect.php';
if (isset($_POST['delete'])) {
  $IdToDelete = $_POST['delete'];
  $deleteQuery = "DELETE FROM `adminlogin` WHERE `id` = $IdToDelete";

  if ($conn->query($deleteQuery) === TRUE) {
    // Deletion successful, you can redirect or perform other actions if needed
  } else {
    echo "Error: " . $conn->error;
  }
}

if (isset($_POST['update'])) {
  $IdToDelete = $_POST['delete'];
  $deleteQuery = "DELETE FROM `adminlogin` WHERE `id` = $IdToDelete";

  if ($conn->query($deleteQuery) === TRUE) {
    // Deletion successful, you can redirect or perform other actions if needed
  } else {
    echo "Error: " . $conn->error;
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
    .table-bordered .cust-center {
      display: flex;
      justify-content: center;
    }
    .cust-center .btn-primary a{
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>

<body>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.php -->
      <nav class="navbar col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.png" class="mr-2" alt="logo" style="width: 100px; height:50px;" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/fair.png" alt="logo" style="width: 50px; height:50px;" /></a>
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
                <img src="images/faces/face29.jpg" alt="profile" />
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="<?php echo isset($_SESSION['email']) ? 'add.php' : 'login.php'; ?>">
                  <i class="ti-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="<?php echo isset($_SESSION['email']) ? '../admin/logout.php' : '../admin/login.php'; ?>">
                  <i class="ti-power-off text-primary"></i>
                  <?php echo isset($_SESSION['email']) ? 'Logout' : 'Login'; ?>
                </a>
              </div>
            </li>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome</h3>
                    <h6 class="font-weight-normal mb-0">All systems are running smoothly!<span class="text-primary"></span></h6>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h1>Dashboard</h1>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                  <div class="card-people mt-auto">
                    <img src="images/dashboard/people.svg" alt="people">
                    <div class="weather-info">
                      <div class="d-flex">
                        <div>
                          <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>24<sup>C</sup></h2>
                        </div>
                        <div class="ml-2">
                          <h4 class="location font-weight-normal">Surat</h4>
                          <h6 class="font-weight-normal">India</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin transparent">
                <div>
                  <h3 style="text-align: center; text-decoration:dashed underline 2px aquamarine;" class="text-muted">
                    Online Bookings
                  </h3>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div class="card-body">
                        <p class="mb-4">Today’s Bookings</p>
                        <p class="fs-30 mb-2">4006</p>
                        <p>10.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">Monthly Bookings</p>
                        <p class="fs-30 mb-2">61344</p>
                        <p>22.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Number of Visitors Yearly</p>
                        <p class="fs-30 mb-2">11,34,040</p>
                        <p>2.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Number of Clients</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>0.22% (30 days)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADMIN DATA TABLE</h4>
                  <!-- <p class="card-description">
                Add class <code>.table-{color}</code>
              </p> -->
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="table-primary">
                          <th>
                            Admin_ID
                          </th>
                          <th>
                            Admin_Name
                          </th>
                          <th>
                            Admin_email
                          </th>
                          <th>
                            Password
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                        <?php
                        $select = "SELECT * FROM `adminlogin`";
                        $result = $conn->query($select);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                          <tr>
                            <td>
                              <?php echo $row['id'] ?>
                            </td>
                            <td>
                              <?php echo $row['name'] ?>
                            </td>
                            <td>
                              <?php echo $row['admin_email'] ?>
                            </td>
                            <td>
                              <?php echo $row['pass'] ?>
                            </td>
                            <td class="cust-center">
                              <form method="post" style="display: inline;">
                                <button type="submit" name="update" class="btn btn-primary"><a class="mdi mdi-pencil mdi-20px" href="add.php?edit=<?php echo $row['id'];?>"> Update</a></button>
                                <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');"><i class="mdi mdi-delete mdi-20px" style="color: white;"></i> Delete</button>

                              </form>
                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

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