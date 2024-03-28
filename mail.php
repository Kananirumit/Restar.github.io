<?php

include "./include/connect.php";

session_start();
require 'PHP MAILER\Exception.php';
require 'PHP MAILER\PHPMailer.php';
require 'PHP MAILER\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

if (isset($_POST['submit_form'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $child = $_POST['child'];
    $adult = $_POST['adult'];
    $senior = $_POST['senior'];
    $txtDate = $_POST['txtDate'];
    $total = $_POST['total'];


    $insert = "INSERT INTO `ticket`(`name`, `email`, `child`, `adult`, `senior`, `txtDate`, `total`) VALUES ('$name ','$email','$child','$adult','$senior','$txtDate','$total')";

    $result = $conn->query($insert);

    if ($result) {
        $mail = new PHPMailer(true);
    
        try {
                   //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'restarpark@gmail.com';                     //SMTP username
            $mail->Password   = 'nbdp ijqi zzsi uvss';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            
        
        $mail->setFrom('restarpark@gmail.com', 'RESTAR AMUSEMENT PARK');

        $mail->addAddress($_POST['email']);

        $name = $_POST['name'];
    $email = $_POST['email'];
    $child = $_POST['child'];
    $adult = $_POST['adult'];
    $senior = $_POST['senior'];
    $txtDate = $_POST['txtDate'];
    $total = $_POST['total'];
          
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "$name Your Appointment is Confirmed!";
        $mail->Body    = "<h3>Your Appointment  is Confirmed With These Details:</h3><br>Name : $name <br><br> Email : $email <br><br> Child : $child <br><br> adult : $adult <br><br> senior : $senior <br><br>txtDate : $txtDate<br><br>total : $total";
        

        if($mail->send()){
            header("location:card.php");
        }
    } catch (Exception $e) {
        echo "<div class='alert alert-danger'>TRY AGAIN THERE IS SOME ERROR!</div>";
    }
}
}
?>

<!DOCTYPE html>