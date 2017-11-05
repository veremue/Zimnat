<!DOCTYPE html>
<?php
   include("config.php");
   include("Sendmail.php");
   $error = "";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  //logger == login
	  if($_POST['logger'] == 'login'){
	  $myusername = mysqli_real_escape_string($db,$_POST['myusername']);
      $mypassword = mysqli_real_escape_string($db,$_POST['mypassword']); 
      
      $sql = "SELECT id,status FROM tbl_prospective_clients WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
	  //echo 'Active   '.$active;
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		 session_regenerate_id();
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
		 exit;
      }else {
         $error = "Your Login Name or Password is invalid";
		 header("location: test.php");
		 exit;
      } 
	  }
	  else{
		  //logger == register 
		$myemail = mysqli_real_escape_string($db,$_POST['myemail']);
		$myfirstname = mysqli_real_escape_string($db,$_POST['myfirstname']);
		$mylastname = mysqli_real_escape_string($db,$_POST['mylastname']);
		
		$sql = "INSERT INTO tbl_prospective_clients SET username = '$myemail',firstname='$myfirstname',surname='$mylastname' ";
		$result = mysqli_query($db,$sql);	
		
		echo $sql;
		if($result)
		{
			$subject = "Registration successful";
			$message = "Dear ".$myfirstname." ".$mylastname." your registration was successful";
			//call sendmail
			//Sendmail->send_mail($myemail,$subject,$message,$alt_subject);
			header("location: details.php");
			exit;
		}
		else {
         $error = "A problem happened. Contact YYY";
		}		
	  }
      
   }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zimnat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<!-- Bootstrap core CSS -->
    <link href="reGassets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="reGassets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom Fonts -->
    <link href="reGassets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
    <!-- Custom styles for this template -->
    <link href="reGassets/css/style.css" rel="stylesheet">
    <link href="reGassets/css/style-responsive.css" rel="stylesheet">
	

</head>

<body>
<div id="container bg-default">
  <br><br>
  <p align = "center"><a href="#">
    <img src="images/zimnat%20logo.png" alt="Zimnat" width="173" height="58" />
  </a></p>

<!--/div-->

<br><br>

<!--div class="container bg-default"-->
<div class = "row">
<div class = "col-lg-8">
  
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#signin">Log In</a></li>
    
    <li><a data-toggle="tab" href="#signup">Register</a></li>
  </ul>

  <div class="tab-content ">
    <div id="signin" class="tab-pane fade in active">
     
	  	 <div class="col-sm-8">
                        	
			
		<div id="login-page" >
	  	
	  	
		      <form class="form-login" align="center" method = "post" action="">
		        <h2 class="form-login-heading">
				<span class="fa-stack fa-1x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-key fa-stack-1x fa-inverse"></i>
                    </span>
					
					<hr>
					<label>LOG IN</label>
					
					
				</h2>
				<?php
				
				echo 'The error is:"'. $error; ?>
		        <div class="login-wrap" align="center">
		            <input type="text" name = "myusername" class="form-control" placeholder="Username" autofocus required />
		            <br>
		            <input type="password" name = "mypassword" class="form-control" placeholder="Password" required />
		            <label class="checkbox">
		               
		            </label>
		            <button class="btn btn-success btn-block" name= "logger" value="login" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            
		            <div class="registration">
		                Don't have an account yet? Please click the sign up tab to register.<br><br>
		                <!--a class="" href="mailto:it@leon.co.zw?Subject=Create%20account%20or%20Reset%20Password" target="_top">
		                    Contact IT & Innovation<br><br>
		                </a-->
		            </div>
		
		        </div>
		 </form>
		         
	  	
	 
	  </div>
			
		</div>
	  
      
    </div>
    <div id="signup" class="tab-pane fade">
	  <div class="col-sm-8">
                        	
			
		<div id="login-page" >
	  	
	  	
		      <form class="form-login" align="center" method = "post" action="register.php">
		        <h2 class="form-login-heading">
				<span class="fa-stack fa-1x">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
                    </span>
					<hr>
					<label>REGISTER</label>
				</h2>
		        <div class="login-wrap" align="center">
		            <input type="text" name = "myfirstname" class="form-control" placeholder="Firstname" autofocus required />
		            <br/>
		            <input type="text" name = "mylastname" class="form-control" placeholder="Last name" required />
					<br/>
		            <input type="email" name = "myemail" class="form-control" placeholder="Email" required />
		            <label class="checkbox">
		               
		            </label>
		            <button class="btn btn-success btn-block" name= "logger" value="register" type="submit"><i class="fa fa-lock"></i> Register</button>
		            <hr>
		            
		            
		            <div class="registration">
		                Already have an account ? Please click the log in tab to sign in.<br><br>
		                <!--a class="" href="mailto:it@leon.co.zw?Subject=Create%20account%20or%20Reset%20Password" target="_top">
		                    Contact IT & Innovation<br><br>
		                </a-->
		            </div>
		
		        </div>
		 </form>
		         
	  	
	 
	  </div>
			
		</div>
     
    </div>
    
  </div>
</div>
</div>

</div>
</body>
</html>


<!-- jQuery -->
    <script  type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!-- Core JavaScript -->
 
    

</body>
</html>