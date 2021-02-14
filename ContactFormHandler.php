<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $message = $_POST['message'];

    //$email_form = ''
    $email_subject - "New Form Submission";
    $email_body = "User Name: $name. \n", "User Email: $visitor_email.\n", "User Message: $message.\n";

    $to = "peza361@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact_me.html"); 
 ?>
