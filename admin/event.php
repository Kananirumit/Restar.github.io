<?php

include "../include/connect.php";

if (isset ($_POST['add_event'])) {
    $event_name = $_POST['event_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $info = $_POST['info'];
    $event_price = $_POST['event_price'];
    $event_image = $_FILES['event_image']['name'];

    if (file_exists("upload/" . $_FILES["event_image"]["name"])) {
        $store = $_FILES["faculty_image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
        header('Location:add_event.php');
    } else {


        $query = "INSERT INTO events(`event_name`,`start_date`,`end_date`,`info`,`event_price`,`event_image`)VALUES('$event_name','$start_date','$end_date','$info','$event_price','$event_image')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file($_FILES["event_image"]['tmp_name'], "./admin/assets/images/event/ " . $_FILES["event_name"]["name"]);
            $_SESSION['success'] = "Event addedd";
            header('Location: add_event.php');
        } else {
            $_SESSION['success'] = "Event not addedd";
            header('Location: add_event.php');
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

        .add1 {
            background-color: #4B49AC;
            position: fixed;
            height: auto;
            padding: 5px;
            font-size: 50px;
            color: #FFEEB8;
            width: 75px;
            text-align: center;
            border-radius: 10%;
            bottom: 10px;
            text-decoration: none;
            right: 10px;
            z-index: 1;
        }
        .add1:hover{
            color: #FFFFFF;
            text-decoration: none;
        }
    </style>
</head>



<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.php -->
        <nav class="navbar col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="images/logo.png" class="mr-2"
                        alt="logo" style="width: 100px; height:50px;" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/fair.png" alt="logo"
                        style="width: 50px; height:50px;" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center btn1" type="button"
                    data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-toggle="fullscreen">
                            <i class="fa-solid fa-expand" style=""></i>
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face29.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item"
                                href="<?php echo isset ($_SESSION['email']) ? 'add.php' : 'login.php'; ?>">
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
                </ul>
            </nav>

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
            <a href="add_event.php" class="add1">
                +
            </a>
            <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="row">
                        <?php
                        require ("../include/connect.php");
                        $query = "select * from events";
                        $result = mysqli_query($conn, $query) or die ("Query Failed!!!" . mysqli_error($conn));
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class='col-lg-12 grid-margin stretch-card'>
          <div class='card'>
            <div class='card-body'>
              <h1 style='text-transform: uppercase; font-size: 35px;'>Added events</h1>
              <div class='table-responsive pt-3'>
                <table class='table table-bordered'>
                  <thead>
                    <tr class='table-warning'>
                      <th>
                        Event ID
                      </th>
                      <th>
                        Event name
                      </th>
                      <th>
                        Start date
                      </th>
                      <th>
                        End date
                      </th>
                      <th>
                        Infromation
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        EDIT
                      </th>
                      <th>
                        DELETE
                      </th>
                    </tr>

                        </thead>";
                            while ($row = mysqli_fetch_array($result)) {
                                $img = "images/event/$row[event_image]";
                                echo "<tbody>
                          <tr>
                              <td>$row[id]</td>
                              <td>$row[event_name]</td>
                              <td>$row[start_date]</td>
                              <td>$row[end_date]</td>
                              <td 'style:text-wrap: wrap;'>$row[info]</td>
                              <td>$row[event_price]</td>
                              <td><img src=$img style='width:70px !important;height: 100px !important;border-radius:0% !important' alt=$row[event_image]></td>
                              <td><a class='btn btn-inverse-success btn-sm' href='Edit_Event.php?id=$row[0]'><i class='mdi mdi-pencil-circle-outline mdi-24px'></i></td>
                              <td><a class='btn btn-inverse-danger btn-sm' href='Delete_Event.php?id=$row[0]'><i class='mdi mdi-delete-empty mdi-24px'></td>
                            </tr>
                          </tbody>";
                            }
                            echo "</table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>";
                        } else {
                            echo "<div class='col-12 m-1 grid-margin'>
              <div class='card'>
                <div class='row'>
                  <div class='card-body'>
                    <h1 style='text-align:center; text-shadow:-2px 2px 4px black;'>No Events Are Available Now!!!</h1>
                  </div>
                </div>
              </div>
            </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <script>
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