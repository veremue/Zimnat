<?php
	require_once('config.php');
	require_once('Sendmail.php');
	include "user.php";
	
	$today = date('Y-m-d');

	$newpass = $_POST['newpassword'];
	$confirmpass = $_POST['confirmpass'];
	
	$password = $newpass;
	
	
	$sql = "UPDATE tbl_prospective_clients SET 	passcode = '$password' , pwdlastchanged = '$today' WHERE username = '$email'";
	echo $sql;
	$result = mysqli_query($db,$sql);

	if($result)
	{
		$send = new Sendmail;
		$subject1 = "Password Changed";
		$alt_subject = "Password Changed";
		
		//send to inquirer
		$message1 = "Dear ".ucfirst($fullname).",<br/><br/> Your password has been successfully changed.
		
		<br/></br> Visit www.zimnat.co.zw today! <br/></br> Regards, <br/></br> Zimnat Team.";
		$send->send_mail($email,$subject1,$message1,$alt_subject);
		header("Location: settings.php");
		exit;
	}
	else
	{
		echo 'Server processing error..........................';
	}

?>