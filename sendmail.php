<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "teams@accelero-corp.com";

$subject = "Mail From Padhaakoo";

$header = "From: " .$name. "\r\n" . "CC: aniket@accelero-corp.com";
// . "CC: teams@accelero-corp.com";  

$txt = "You have recived an email from ".$name. "\r\n Email: " .$email. "\r\n Message: " .$message;

if($email != NULL){
    mail($to, $subject, $txt, $header);
}

header('Location: thankyou.html')

?>