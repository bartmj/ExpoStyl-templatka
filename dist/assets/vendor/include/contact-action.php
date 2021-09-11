<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

// Recipient address
$recip_address = "bartlomiej.janusz@expostyl.com";

//Variables 
$name    = addslashes(strip_tags($_POST['name'])); 
$sub    = addslashes(strip_tags($_POST['subject']));
$email   = addslashes(strip_tags($_POST['email'])); 
$message  = addslashes(strip_tags($_POST['message']));  

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//Set mailer t use SMTP
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();       
//Define SMTP host
$mail->Host       = 'serwer2019274.home.pl';
//Enable SMTP authentication
$mail->SMTPAuth   = true;                                   
//Enable implicit TLS encryption
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->Port       = 465;
//SMTP username
$mail->Username   = 'serwer2019274'; 
//SMTP password
$mail->Password   = 'Pcxhcd7rQeYMGgt'; 


//
$mail = new PHPMailer();
$mail->SMTPOptions = array(
   'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
   )
 );
 
//Recipients
$mail->setFrom('serwer2019274@home.pl', $name);
$mail->addAddress($recip_address);     //Add a recipient

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $sub;
$mail->Body    = $message;
$mail->AltBody = $message;

if (!$mail->send()) {
    echo "Wiadomość nie została wysłana. Błąd: {$mail->ErrorInfo}";
  } else {
    echo "Wiadomość została wysłana.";
  }




          
    


