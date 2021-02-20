<?php

if  (isset($_POST['submit'])) {
//mail(to,subject,message,headers,parameters);
//variables to get from user
  //email to me
  $to = "kamil.peza16@my.stjohns.edu";
  //subject of email
  $subject = $_POST['subject'];
  //message to be sent
  $message = $_POST['message'];
  $message = wordwrap($message, 70);
  //headers & name and visitor email
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $headers = "From: $name" .  "\r\n";
  //$headers .= "Reply-To: $visitor_email \r\n";
  //$email_form = ''
  //$email_body = "User Name: $name. \n", "User Email: $visitor_email.\n", "User Message: $message.\n";
  //send message
  mail ($to, $subject, $message, $headers);
  header("Location: contact_me.html");
}
 ?>
