<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Zimnat | Quote</title>

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
label{color:black;}
h4{color:green;}
</style>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container" >
	  		<!-- /.signup form -->
				<div class = "row">
                <div class = "col-lg-2"></div>

                <div class = "col-lg-12">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Zimnat | Get Quote</h3>
						<form class="form-header" action="quote-exec.php" method="POST" id="#" autocomplete="off">
						
						<h4 class="form-title text-center">General Information</h4>
					
					<div class = "col-sm-4">
                    <label> Firstname</label>
					<div class = "form-group">
					<input type = "text" name = "firstname" value="" class = "form-control" required />
					</div>
					</div>
                    <div class = "col-sm-4">
                    <label>Middlename</label>
					<div class = "form-group">
					<input type = "text" name = "middlename" value="" class = "form-control"  />
					</div>
					</div>
                   <div class = "col-sm-4">
                    <label>Surname</label>
					<div class = "form-group">
					<input type="text" name="surname" value="" class = "form-control"  required/>
					</div>
					</div>
                    <div class = "col-sm-4">
                    <label>Date of Birth</label>
					<div class = "form-group">
					<input type="date" name="dob" value="" class = "form-control" required />
					</div>
					</div>
					<div class = "col-sm-4">
                    <label>Marital Status</label>
					<div class = "form-group">
					<select name="marital_status" class="form-control" id="source" required>
					<option value="No Marital Status Specified" selected >---- Choose Marital Status ----</option>
					<option value="Married">Married</option>
					<option value="Single">Single</option>
					<option value="Widowed">Widowed</option>
					<option value="Divorced">Divorced</option>
				
					</select>
					</div>
					</div>
					<div class = "col-sm-4">
                    <label>Number of Dependents</label>
					<div class = "form-group">
					<input type="number" name="dependents" max="9" min="0" id="dependents" onkeyup="addFields()"  placeholder="0"  value="" class = "form-control"  required/>
					</div>
					</div>
					
					
					<h4 class="form-title text-center">Contact Information</h4>
					<div class = "col-sm-6">
                    <label>Home Phone</label>
					<div class = "form-group">
					<input type="phone" name="homephone" value="" class = "form-control"  required/>
					</div>
					</div>
					<div class = "col-sm-6">
                    <label>Address</label>
					<div class = "form-group">
					<input type="text" name="address" value="" class = "form-control"  required/>
					</div>
					</div>
					<div class = "col-sm-6">
                    <label>Country</label>
					<div class = "form-group">
					<input type="text" name="country" value="" class = "form-control"  required/>
					</div>
					</div>
					<div class = "col-sm-6">
                    <label>Postal Code</label>
					<div class = "form-group">
					<input type="text" name="postal_code" value="" class = "form-control"  required/>
					</div>
					</div>
					<h4 class="form-title text-center">Cover Information</h4>
					<div class = "col-sm-6">
                    <label>Payment Frequency</label>
					<div class = "form-group">
					<select name="plan_type" class="form-control" id="source" required>
					<option value="No Plan Specified" selected >---- Choose Payment Frequency ----</option>
					<option value="Monthly">Monthly</option>
					<option value="Quarterly">Quarterly</option>
					<option value="Half_Yearly">Half Yearly</option>
					<option value="Annually">Annually</option>
				
					</select>
					</div>
					</div>
					<div class = "col-sm-6">
                    <label>Amount of Funeral Cash Cover</label>
					<div class = "form-group">
					
					<select name="amount_covered" class="form-control" id="source" required>
					<option value="Amount Covered Not Specified" selected >---- Choose Amount Covered ----</option>
					<option value="2500">$2,500</option>
					<option value="5000">$5,000</option>
					<option value="10000">$10,000</option>
					<option value="15000">$15,000</option>
					<option value="20000">$20,000</option>
				
					</select>
					</div>
					</div>

					<div class = "col-sm-3 col-sm-offset-9">
					<button name = "register" type = "submit" class = "btn btn-info btn-block"> Get Quote <i class = "fa fa-arrow-circle-right"></i></button>
					</div>
							<p class="privacy text-center"> <a href="#"></a>.</p>
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
    <!--script>
        $.backstretch("reGassets/assets/img/file.jpg", {speed: 500});
    </script-->
	
	<!-- generate more fields-->
	
	


  </body>
</html>
