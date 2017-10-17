<?php

$name = $_POST['name'];

$visitor_email = $_POST['email'];

if(isset($_POST['submit'])) {
    $varService =  $_POST['service'];
}

$message = $_POST['message'];

$email_from = 'email';

$email_subject = "New Form Submission";
 
$email_body = "You have received a new message from the user $name.\n".

                                    "Here is the message:\n $message".

$to = "info@mydocdesigns.com";
 
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>
