<?php
// Make sure error messages are displayed
ini_set('display_errors', '1');

$to = 'you@example.com';  // Replace with your own email address
$subject = 'PHP email test';
$message = 'This is a test of the PHP mail() function.';
$headers = 'From: me@example.com';  // Replace with a valid address on your domain
$authorized = null;  // Check correct value with your hosting company

$mailSent = mail($to, $subject, $message, $headers, $authorized);

if ($mailSent) {
    echo 'Email has been sent';
} else {
    echo "Couldn't send email";
}