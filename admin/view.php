
<?php


include "../include/connect.php";

session_start();

if (isset($_GET['guestId']) && isset($_GET['fname']) && isset($_GET['lname'])&& isset($_GET['gender']) && isset($_GET['phone'])&& isset($_GET['email'])&& isset($_GET['pass'])&& isset($_GET['confirmpss']) ) {
    $guestId = $_GET['guestId'];
    $fname = $_GET['fname'];
    $lname =$_GET['lname'];
    $gender=$_GET['gender'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $confirmpss  = $_GET['confirmpss'];
} else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
</head>

<body>
    <div class="container mx-5 mt-5">
        <h1 class="display-4 text-center fw-bolder text-primary">User Details</h1>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>guestId</th>
                <td><?php echo $guestId; ?></td>
            </tr>
            <tr>
                <th>fname</th>
                <td><?php echo $fname; ?></td>
            </tr>
            <tr>
                <th>lname</th>
                <td><?php echo $lname; ?></td>
            </tr>
            <tr>
                <th>gender</th>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <th>phone</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>pass</th>
                <td><?php echo $pass; ?></td>
            </tr>
            <tr>
                <th>confirmpass</th>
                <td><?php echo $confirmpss; ?></td>
            </tr>
        </table>
        <br>
        <a href="index.php" class="btn btn-primary">Back to Dashboard</a>
    </div>
</body>

</html>
