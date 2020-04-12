<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "info@mypay.nu";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
//$body .= "Name: ".$_REQUEST['email']." \n";
$body .= "Email: ".$_REQUEST['email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header('Content-Type: application/json');

print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
?>
