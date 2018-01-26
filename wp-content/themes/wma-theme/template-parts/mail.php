<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['amne'];
$formcontent="From: $name \n Message: $message";
$recipient = "wma@freakvent.com.com";
$subject = "Kontakt via hemsidan";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Tack för ditt meddelande!";
?>