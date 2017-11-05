			<?php
			require_once('config.php');
			require_once('Sendmail.php');
			
			$policy_number = $_POST['policynum'];
			$fullname = $_POST['fullname'];
			$ref_fullname = $_POST['ref_fullname'];
			$email = $_POST['email'];
			$phonenum = $_POST['phonenum'];
			
			$refersql = "INSERT INTO tbl_referrals SET fullname_referee = '$fullname', policynumber_referee = '$policy_number', fullname_refered = '$ref_fullname',
								email = '$email', phone_number = '$phonenum'
								";
								
			$result = @mysqli_query($db,$refersql);
			if($result)
			{
				    $send = new Sendmail;
					$subject1 = "Zimnat Insurance ";
					$alt_subject = "Insurance Referral";
					
					echo "Muno tapinda ".$refersql;
					//send to inquirer
					$message1 = "Dear ".ucfirst($ref_fullname).",<br/><br/>".ucfirst($fullname)."  referred you to our ZIMNAT  insurance products. Please visit www.zimnat.co.zw for more information.
					
					<br/></br>  <br/></br> Regards, <br/></br> Zimnat Team.";
					$send->send_mail($email,$subject1,$message1,$alt_subject);
					
					
					
					
				
					//redirect to inquiry success page
					header("location: refer-success.php?fullname=$fullname");
					exit;
			}
			
			
			
			
			?>
			
			