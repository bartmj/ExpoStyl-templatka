
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    // Please replace your email address below in $recip_address field to start receiving form responses.

    $recip_address = "bartlomiej.janusz@expostyl.com";

    // If you want to add multiple recipient, then you should uncomment two lines that are line no. 14 and 39. Change your e-mail ID in line no. 14
    //$recip_address1 = "info1@yourdomain.com"; 
    $name    = addslashes(strip_tags($_POST['name'])); 
    $sub    = addslashes(strip_tags($_POST['subject']));
    $email   = addslashes(strip_tags($_POST['email'])); 
    $message  = addslashes(strip_tags($_POST['message']));     

    if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($message)) {
          http_response_code(400);
          $msg = 'Please complete the form and try again.';
          echo $msg;
          exit;
    }

    $mail = new PHPMailer();
    $mail->SMTPOptions = array(
       'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
       )
     );

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($recip_address);   // Add a recipient
    //$mail->addAddress($recip_address1);   // Add a recipient 

    //Content
    $mail->Subject = $sub;
    $mail->Body  = "You have been contacted by: ".$name. "
    <br>E-mail: ".$email. "
    <br>Message: ".$message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->isHTML(true);          // Set email format to HTML
     
    if (!$mail->send()) {
      echo "Oops! Something went wrong, we couldn't send your message.";
    } else {
      echo "Thank You! Your message has been sent. We will get back to you soon!";
    }




///////////////// dziala /////////


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

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'serwer2019274.home.pl';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'serwer2019274';                     //SMTP username
    $mail->Password   = 'Pcxhcd7rQeYMGgt';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    $mail = new PHPMailer();
    $mail->SMTPOptions = array(
       'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
       )
     );

    //Recipients
    $mail->setFrom('bmj@microwebsites.pl', $name);
    $mail->addAddress($recip_address);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $sub;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    echo 'Wiadomość została wysłana.';
} catch (Exception $e) {
    echo "Wiadomość nie została wysłana. Błąd: {$mail->ErrorInfo}";
}