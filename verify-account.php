<?php

	//Include database connection details
	require_once('config.php');
	
	
	$email = $_GET['email'];

	
	//Create query
	$qry="update tbl_prospective_clients SET status='Active' where email='$email' ";
	$result = mysqli_query($db,$qry);
	
	echo $qry;

	//Check whether the query was successful or not
	if($result)
	{
			header("location: sign-in.php?email=$email");
			exit();		
   }


?>