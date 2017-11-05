<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from tbl_prospective_clients where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $firstname = $row['firstname'];
   $surname = $row['surname'];
   $id = $row['id'];
   $email = $row['email'];
   $user_full_name = ucfirst($firstname)." ".ucfirst($surname);
   
   if(!isset($_SESSION['login_user'])){
      header("location:index_2.php");
	  exit;
   }
?>