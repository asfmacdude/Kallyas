<?php

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$email = $_POST['email'];

// $merge_vars = array( 'YNAME' => $_POST['yname'] );

$headers  = 'MIME-Version: 1.0' . PHP_EOL;
$headers .= 'Content-type: text/html; charset=iso-8859-1' . PHP_EOL;  
$headers .= "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;

$subject = 'Thank you!';

$msg     = 'Thank you!'; // include 'newsletter_template.php';

mail($email, $subject, $msg, $headers);

$staff_email = 'chris.wilkins@alagames.com,randyc@alagames.com,tommyk@alagames.com';
$subject     = 'Add email: '.$email. ' to the newsletter list';

mail($staff_email, $subject, $msg, $headers);

echo "Got it, you've been added to our email list.";

?>