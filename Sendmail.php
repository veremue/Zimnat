<?php
	class Sendmail
	{
		public function send_mail($email,$subject,$message,$alt_subject)
		{
			require_once 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'edy.devs@gmail.com';                 // SMTP username
			$mail->Password = 'taona123';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to
			$mail->setFrom('edy.devs@gmail.com');
			$mail->addAddress($email);     // Add a recipient
			
			$mail->isHTML(true);
			// Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = $alt_subject;
			if(!$mail->send())
			{
				//echo 'Message could not be sent.';
				//echo 'Mailer Error: ' . $mail->ErrorInfo;
				return False;
			}
			else
			{
				//echo 'Message has been sent';
				return TRUE;
			}
		}
	}

?>