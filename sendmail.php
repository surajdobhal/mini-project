<?php
$to_email = "surajdobhal96@gmail.com";
$subject = "VERIFICATION LINK";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: aapkepanditj@gmail.com";

if (mail($to_email, $subject, $body,$headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email sending failed...";
}
?>