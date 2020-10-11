<?php 

$address = "crisjon3d@yahoo.com";
//Call requires files
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$phone = $_POST["phone"];
$file = $_POST["file"];
$message = $_POST["message"];

// Email data
$headers = "From: " . $name . "\n";
$headers .= "Email: " . $email . "\n";
$headers .= "Subject: " . $subject . "\n";
$headers .= "Phone: " . $phone . "\n";
$headers .= "File: " . $file . "\n";
$headers .= "Message: " . $message . "\n";

//Sending Email
mail($address, "Contacto", $headers)
header("Location:email.html")

?>