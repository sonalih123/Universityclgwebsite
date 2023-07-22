<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];
$email_from='sonali@gmail.com';
$email_subject="New Form Submission";
$email_body="User Name: $name.\n".
"User Email: $email.\n".
"Subject: $subject.\n".
"User Message: $msg.\n".\;

$to='sonaliharake8@gmail.com';
$headers="From: $email_from \r\n";
$headers .="Reply-to: $email \r\n";

mail($to,$email_subject, $email_body,$headers);
header("Location:contact.html")

?>