<?php

include('../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(!isset($_ENV['SMTP_Username']) or !isset($_ENV['SMTP_Password'])) {
  http_response_code(500);
  die("SMTP Configuration missing.");
}

/* SETTINGS */
$recipient = "info@reddcoin.com";
$subject = "New Message from Redd.Love Contact Form";

if($_SERVER["REQUEST_URI"] !== "/api/contact/send/") {
  http_response_code(403);
  die("Forbidden.");
}

$originChecks = [
  'HTTP_ORIGIN' => false,
  'HTTP_REFERER' => false
];

$allowedHosts = [
  'https://redd.love',
  'https://staging.redd.love',
  'http://localhost'
];

if(isset($_SERVER["HTTP_ORIGIN"])) {
  if(in_array($_SERVER["HTTP_ORIGIN"], $allowedHosts)) {
    $originChecks['HTTP_ORIGIN'] = true;
  }
}

if(isset($_SERVER["HTTP_ORIGIN"])) {
  if(in_array($_SERVER["HTTP_REFERER"], $allowedHosts)) {
    $originChecks['HTTP_REFERER'] = true;
  }
}

if(!in_array(true, $originChecks)) {
  http_response_code(403);
  die("Forbidden.");
}

if(count($_POST) < 3) {
  http_response_code(400);
  die("Bad Request.");
}

if(!isset($_POST['name'])) {
  http_response_code(400);
  die("Name is missing.");
}

if(!isset($_POST['email'])) {
  http_response_code(400);
  die("E-Mail is missing.");
}

if(!isset($_POST['message'])) {
  http_response_code(400);
  die("Message is missing.");
}

/* DATA FROM HTML FORM */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  die("E-Mail is invalid.");
}

$mail = new PHPMailer();

try {

  /* SUBJECT */
  $emailSubject = $subject . " by " . $name;
  
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "ssl";
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465;
  
  $mail->Username = $_ENV['SMTP_Username'];
  $mail->Password = $_ENV['SMTP_Password'];
  
  $mail->CharSet = 'UTF-8';
  $mail->SetFrom ('social@reddcoin.solutions', 'ReddLove Website');
  $mail->addReplyTo($email, $name);
  $mail->Subject = $emailSubject;
  $mail->ContentType = 'text/plain';
  $mail->IsHTML(false);
  
  $mail->Body = $message;
  
  $mail->AddAddress($recipient, 'Redd Team');
  
  $mailSendStatus = $mail->Send();
  if($mailSendStatus === true) {
    http_response_code(200);
    die('Sent.');
  } else {
    http_response_code(500);
    die($mail->ErrorInfo);
  }

} catch (Exception $e) {
  http_response_code(500);
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
