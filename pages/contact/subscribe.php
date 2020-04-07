<?php

$email = $_POST['email'];

header('Content-Type: application/json');

if ($email === ''){
print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
exit();
}
}

$content="From: $email \nEmail: $email";
$recipient = "info@mypay.nu";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");


print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
?>
