<?php
// the message
$msg = "First line of text\nSecond line of text";
$to = "rameshkashyap8801@gmail.com";
$subject="Hey";
ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "no-reply@optinexai.com";
    $to = $to;
    $subject = $subject;
    $message = $msg;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
      echo "success";
    } else {
      echo "failed";
    }
?>