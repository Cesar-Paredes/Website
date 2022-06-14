<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once dirname(dirname(__DIR__)).'/vendor/totp/rfc6238.php';

require dirname(dirname(__DIR__)).'/vendor/PHPMailer/PHPMailer/src/Exception.php';
require dirname(dirname(__DIR__)).'/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require dirname(dirname(__DIR__)).'/vendor/PHPMailer/PHPMailer/src/SMTP.php';

class MailProvider {
	

	public function sendEmail($data){

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ckhawand@gmail.com';                     //SMTP username
            $mail->Password   = EMAIL_PASSWORD;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@microsoft.com', 'Mailer');
            $mail->addAddress($data['to_email'], 'Web App User');     //Add a recipient
        /*    $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            //Attachments
         /*   $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            */
            //Content

            $totp = $data['totp'];

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Confirm your Email';
            $mail->Body    = 'Thank you for registering to our web app <b>Please click on the link to finish your sign-up:</b>
                                <a href="http://localhost/mvc/confirmation?code='.$totp.'">Confirm email!</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }		
		
	}// SendMail

}

?>