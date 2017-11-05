			<?php
			require_once('config.php');
			require_once('Sendmail.php');
		
			
			
			//$title = $_POST['title'];
			$firstname = $_POST['firstname'];
			$surname = $_POST['surname'];
			$policy_number = $_POST['policy_number'];
			$resident_country = $_POST['resident_country'];
			$phone_number = $_POST['phone_number'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			
			
			
			//Insert inquiry into db.
			
			$qry = "INSERT INTO tbl_inquiries SET firstname = '$firstname', surname = '$surname', policy_number = '$policy_number',
								resident_country = '$resident_country', phone_number = '$phone_number', message = '$message', email = '$email'
								";
				//echo $qry;
			$resu = @mysqli_query($db,$qry);
			//if inquiry successfully saved in db, send email
			if($resu)
			{
				// redirect to a page informing user to validate email
					$send = new Sendmail;
					$subject1 = ucfirst($subject)." - Inquiry";
					$alt_subject = "Inquiry";
					
					//send to inquirer
					$message1 = "Hi ".ucfirst($firstname)." ".ucfirst($surname).",<br/><br/>Thank you for choosing Zimnat Insurance Solutions for Zimbabweans living in the Diaspora.
					Your request has been received and we will get back to you within 24-48 hours.<br/></br> Visit www.zimnat.co.zw today! <br/></br> Kind Regards, <br/></br> Zimnat Team.";
					$send->send_mail($email,$subject1,$message1,$alt_subject);
					
					
					$email1 = "nhiralee@gmail.com";
					//send to admin
					$send->send_mail($email1,$subject1,$message,$alt_subject);
					
				
					//redirect to inquiry success page
					header("location: successful-submit-page.php");
					exit;
			}
			
			
			
			
			?>