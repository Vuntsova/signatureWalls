<?php
$subject = $_REQUEST['subject'] . ' e-mail from your contact form'; // Subject of your email
$to = 'privacyprecast@gmail.com';  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= 'Message: ' . $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>