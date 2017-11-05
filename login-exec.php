<?php
	//Include database connection details
	require_once('config.php');
	//include("Sendmail.php");
	session_start();
	
	  $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id,status FROM tbl_prospective_clients WHERE username = '$username' and passcode = '$password' and status = 'Active'";
      $result = mysqli_query($db,$sql);
	  //echo 'trying to test 123';
	  
	  //echo 'SQL: '.$sql;
	  
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      $count = mysqli_num_rows($result);
      
     //echo 'we are in';
	 //echo 'count :'+$count;
		
      if($count == 1) {
         
		 session_regenerate_id();
         $_SESSION['login_user'] = $username;
         
         header("location: index.php");
		 exit;
      }else {
         $error = "Your Login Name or Password is invalid";
      } 
?>