<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Email:$visitor_email.\n".
                "User Subject:$subject.\n".
                 "User Message:$message.\n";

$to = 'erprashant2021@gmail.com';

$header = "From: $email_form \r\n";
$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");


?>