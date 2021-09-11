<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Recipient address
$recip_address = "bartlomiej.janusz@expostyl.com";

// Variables 
$name    = addslashes(strip_tags($_POST['name'])); 
$sub    = addslashes(strip_tags($_POST['subject']));
$email   = addslashes(strip_tags($_POST['email'])); 
$message  = addslashes(strip_tags($_POST['message']));  

// Create an instance;
$mail = new PHPMailer();
 
// Recipients
$mail->setFrom('serwer2019274@home.pl', $name);
$mail->addAddress($recip_address);     //Add a recipient
$mail->CharSet = 'UTF-8';

// Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $sub;
$mail->Body    = $message;
$mail->AltBody = $message;

if (!$mail->send()) {
    echo "Wiadomość nie została wysłana. Błąd: {$mail->ErrorInfo}";
  } else {
    echo "Wiadomość została wysłana.";
  }




          
    


