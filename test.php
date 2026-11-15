<?php
$name =$_post['Name'];
$visitor_email=$-post['Email'];
$subject=$_post['Subject'];
$message=$_post['message'];

$email_from='centraleduu.university@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
            "User Email:$visitor_email.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n";

$to='centraleduu.university@gmail.com';

$headers="From:$email_from \r\n";
$headers.="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>