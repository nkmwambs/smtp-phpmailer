<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		require 'vendor/autoload.php';
       // require 'vendor/PHPMailer/src/Exception.php';
       //require 'vendor/PHPMailer/src/PHPMailer.php';
       // require 'vendor/PHPMailer/src/SMTP.php';

		$mail = new PHPMailer();

		try {
			//Server settings
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'gtsafrdevteam';                     //SMTP username
			$mail->Password   = '@Compassion123';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
			$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		
			//Recipients
			$mail->setFrom('gtsafrdevteam@gmail.com', 'Mailer');
			$mail->addAddress('livingstoneonduso@gmail.com', 'Onduso');     //Add a recipient
			$mail->addAddress('londuso@ke.ci.org');               //Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');
		
			//Attachments
			//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
		
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Testing PhpMailer';
			$mail->Body    = 'Recieve EMAIL From <b>Amazon Web Services</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

		$this->load->view('welcome_message');
	}
}
