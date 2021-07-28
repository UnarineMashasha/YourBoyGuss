<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$contact = $_POST['contact'];
$services = $_POST['services'];
$message = $_POST['message'];
$to = "unarinemashasha28@gmail.com";
$subject = "Mail From Gekostate";
$txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Company =" . $company . "\r\n Contact =" . $contact . "
    \r\n Services = " . $services . "\r\n Message =". $message; 

$headers = "From: noreply@gekkostate-services.web.app" . "\r\n" .
"CC: gibayatobele@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>