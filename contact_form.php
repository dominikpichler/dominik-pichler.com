<?php

if(isset($_POST['submit'])){
    $to = "info@dominik-pichler.com"; // this is your Email address
    $from = $_POST['Dominik Pichler Web']; // this is the sender's Email address

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "Form submission";
    $message = "Name: " . $name . " <br>" ." E-Mail: " . $email . "<br> "."Message:" . "\n\n" . $message;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}


error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
?>