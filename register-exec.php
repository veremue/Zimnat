<?php

	//Include database connection details
	require_once('config.php');
	require_once('Sendmail.php');

	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$surname = $_POST['surname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$homephone = $_POST['homephone'];
	$mobilenum = $_POST['mobilenum'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	//Create query
	$qry="INSERT INTO tbl_prospective_clients SET username='$email',passcode='$password',title='$title',firstname='$firstname',middlename='$middlename',surname='$surname',dob='$dob',email='$email',gender='$gender',homephone='$homephone',mobilenum='$mobilenum' ";
	$result = mysqli_query($db,$qry);

	//Check whether the query was successful or not
	if($result)
	{
		
		// redirect to a page informing user to validate email
			$send = new Sendmail;
			$subject = "Zimnat Email Verification To Activate Account";
			$alt_subject = "Activate Account";
			
			$message = "Hi"." ".$title." ".$firstname." ".$surname.",<br/><br/>Thank you for signing up for Zimnat Insurance Solutions for Zimbabweans living in the Diaspora.
			Your account has been created and your login details are as follows: <br/><br/> Username: ".$email.". Please click <a target='_blank' href='http://lbs.leon.co.zw:9000/Zimnat/verify-account.php?email=$email' > here</a> to activate! <br/></br> Kind Regards, <br/></br> Zimnat Team.";
			$send->send_mail($email,$subject,$message,$alt_subject);


			header("location: success.php?fname=$firstname&&sname=$surname");
			exit();		
   }


?>