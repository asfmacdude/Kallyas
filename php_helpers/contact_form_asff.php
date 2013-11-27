<?php

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name      = $_POST['name'];
$email     = $_POST['email'];
$subject   = $_POST['subject'];
$email_msg = $_POST['message'];

$headers  = 'MIME-Version: 1.0' . PHP_EOL;
$headers .= 'Content-type: text/html; charset=iso-8859-1' . PHP_EOL;  
$headers .= "From: $email" . PHP_EOL;
$headers .= "Reply-To: support@asffoundation.org" . PHP_EOL;

$return_subject = 'Thank You for contacting us!';

$msg     = include 'contact_template.php';

$search  = array('{{name}}','{{email}}','{{subject}}','{{message}}');
$replace = array($name,$email,$subject,$email_msg);
$msg     = str_replace($search, $replace, $msg);

mail($email, $return_subject, $msg, $headers);

$staff_email = 'chris.wilkins@alagames.com,randy.cherry@alagames.com,tommyk@alagames.com,pianopraise@icloud.com';
$subject     = $name.' has contacted us online';

mail($staff_email, $subject, $msg, $headers);

echo "sent";

?>